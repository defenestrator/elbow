<?php
namespace Elbow\Ingestors;

use GuzzleHttp\Client;
use Elbow\Strain;
use Elbow\Breeder;
// WIP obviously, trying to get access to their API, it worked without auth for a day...
class SeedFinder
{
    public function client()
    {
        return new Client(['headers' => []]);
    }

    public function updateStrain(Strain $strain, $id)
    {
        
        $uri = 'https://en.seedfinder.eu/api/json/strain.json?';
        
        $name = 'str=' . rtrim(preg_replace('~\([^()]*\)~', '', $item->name));            
        $breeder = 'br=' . rtrim(preg_replace('~\([^()]*\)~', '', $item->breeder_name));
        
        $response = $this->client->request('GET', $uri . $breeder . $name);
        
        $sf = json_decode($response->getBody());
        
        $item = $strain->find($id);

        if ($item->image == '/img/coming-soon.png') {
            $item->update(['image' => preg_replace('_thumb', '', $sf->brinfo->pic)]);
        }
        
        if ($item->description == null) {
            $item->update(['description' =>  $sf->brinfo->description]);
        }

        return $item;
    }

}