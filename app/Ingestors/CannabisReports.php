<?php
namespace Elbow\Ingestors;

use Elbow\Strain;
use Elbow\Breeder;
use GuzzleHttp\Client;

class CannabisReports
{

    // Warning, this ain't pretty, and is not meant to be. This is a blunt force tool, use with caution.
    
    public function client()
    {
        return new Client(['headers' => ['X-API-Key' => 'd4e47a6b49cdacb0524c12cfd5a3cadb9c102522', ]]);
    }

    /**
     * @param integer $i
     */
    public function makeRequest($i)
    {
        $request = $this->client()->get('https://www.cannabisreports.com/api/v1.0/strains?sort=name&page='.$i);
        $response = $request->getBody();
        $data = $this->parseStrainsPage(json_decode($response, true));

        return $data;
    }

    public function iterateOverPages()
    {
        for ($i = 900; $i < 1400; ++$i) {
            $this->makeRequest($i);
            sleep(7);
        }

        return;
    }


    public function parseStrainsPage($data)
    {
        for ($i = 0; $i < 10; $i++) {
            try {
                Breeder::where('ucpc', '=', $data['data'][$i]['breeder']['ucpc'])->firstOrFail();
            } catch (\Exception $e) {
                $breeder = new Breeder([
                    'name' => $data['data'][$i]['breeder']['name'],
                    'ucpc' => $data['data'][$i]['breeder']['ucpc'],
                    'cannabis_reports_link' => $data['data'][$i]['breeder']['link'],
                ]);
                $breeder->save();
            }

            try {
                Strain::where('ucpc', '=', $data['data'][$i]['ucpc'])->firstOrFail();
            } catch (\Exception $e) {
                $strain = new Strain([
                    'name'                  => $data['data'][$i]['name'],
                    'ucpc'                  => $data['data'][$i]['ucpc'],
                    'breeder'          => $data['data'][$i]['breeder']['name'],
                    'genetics'              => $data['data'][$i]['genetics']['names'],
                    'cannabis_reports_link' => $data['data'][$i]['url'],
                    'ucpc'                  => $data['data'][$i]['ucpc'],
                    'image'                 => $data['data'][$i]['image'],
                    'url'                   => $data['data'][$i]['url'],
                    'qr'                    => $data['data'][$i]['qr'],
                ]);
                $strain->save();
            }


        }

        return;
    }

    public function getBreederDetails()
    {
        for ($i = 0; $i <= 570; ++$i) {
            try {
                sleep(7);
                $seedco = Breeder::where('id', '=', $i)->firstOrFail();
                $request = $this->client()->get('https://www.cannabisreports.com/api/v1.0/seed-companies/'.$seedco->ucpc);
                $response = $request->getBody();
                $data = json_decode($response, true);
                $seedco->image = $data['data']['image'];
                $seedco->description = $data['data']['description'];
                $seedco->url = $data['data']['url'];
                $seedco->save();
            } catch (\Exception $e) {
                continue;
            }
        }
        return;
    }

    public function getStrainDetails()
    {
        for ($i = 0; $i <= 9008; ++$i) {
            try {
                sleep(7);
                $strain = Strain::where('id', '=', $i)->firstOrFail();
                $request = $this->client()->get('https://www.cannabisreports.com/api/v1.0/strains/'.$strain->ucpc);
                $response = $request->getBody();
                $data = json_decode($response, true);
                $strain->url = $data['data']['url'];
                $strain->lineage = $data['data']['lineage'];
                $strain->description = $data['data']['description'];
                $strain->url = $data['data']['url'];
                $strain->qr = $data['data']['qr'];
                $strain->save();
            } catch (\Exception $e) {
                continue;
            }
        }
        return;
    }

    public function downloadStrainImages()
    {
        $items = Strain::where('image', '!=', '/img/coming-soon.png'); 
        
        $items->each(function($item){
            $path = '/img/strains/' . basename($item->image);
            if (parse_url($item->image, PHP_URL_SCHEME) === 'https' && $item->image != 'https://www.cannabisreports.com/images/strains/landraces/full-landraces.png'){
                $response = $this->client()->request('GET', $item->image, ['sink' => public_path($path)]);
                if( $response->getStatusCode() == 200){
                    $item->update(['image' => $path]);
                } else {
                    return 'Please try again';
                }
            }
            
            return print_f('All done!');     
        });
        
    }
    public function downloadBreederImages()
    {
        $items = Breeder::where('image', '!=', '/img/coming-soon.png'); 

        $items->each(function($item){
            $path = '/img/breeders/' . basename($item->image);
            $response = $this->client()->request('GET', $item->image, ['sink' => public_path($path)]);
            if( $response->getStatusCode() == 200){
                $item->update(['image' => $path]);
            }            
        });
        
    }

    public function updateBreederTable()
    {
        $items = Breeder::where('image', '!=', '/img/coming-soon.png'); 
        $path = '/img/breeders/' . basename($item->image);
        foreach($items as $item) {
            $item->update(['image' => $path]);
        }
    }
    
    public function updateStrainTable()
    {
        $items = Strain::where('image', '!=', '/img/coming-soon.png'); 

        $path = '/img/strains/' . basename($item->image);
        foreach($items as $item) {
            $item->update(['image' => $path]);
        }
        
    }
}