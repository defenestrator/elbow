<?php
namespace Elbow\Ingestors;

use Elbow\Crop;
use GuzzleHttp\Client;

class GrowStuff
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
        $request = $this->client()->get('http://www.growstuff.org/crops.json?page='.$i);
        $response = $request->getBody();
        $data = $this->parseCropsPage(json_decode($response, true));

        return $data;
    }

    public function iterateOverPages()
    {
        for ($i = 1; $i < 24; ++$i) {
            $this->makeRequest($i);
            sleep(7);
        }

        return;
    }


    public function parseCropsPage($data)
    {
        for ($i = 0; $i < 30; $i++) {
            try {
                Crop::where('grow_stuff_id', '=', $data['data'][$i]['id'])->firstOrFail();
            } catch (\Exception $e) {

                $crop = new Crop([
                    'growstuff_id' => $data[$i]['id'],
                    'name' =>       $data[$i]['name'],
                    'wiki_url' =>   $data[$i]['en_wikipedia_url']
                ]);
                $crop->save();
            }


        }

        return;
    }
}