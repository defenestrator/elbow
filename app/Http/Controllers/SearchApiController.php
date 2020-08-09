<?php

namespace Elbow\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Elbow\Strain;
use Elbow\Breeder;

class SearchApiController extends Controller
{
    public function filter(Strain $strain, Breeder $breeder, Request $request) 
    {
        $query = $request->input('query');

        $returnedStrains = $strain->search($query)->orderBy('updated_at', 'desc')->take(25)->get()->map(function($strain) {
            $strain['type'] = 'Strain';
            $strain['link'] = route('strains.show',  $strain['uuid']);
            return $strain;
        });

        $returnedBreeders = $breeder->search($query)->orderBy('updated_at', 'desc')->take(25)->get()->map(function($breeder) {
            $breeder['type'] = 'Breeder';
            $breeder['link'] = route('breeders.show',$breeder['uuid']);
            return $breeder;
        });

        // to keep from overwriting ids
        $results = collect();
        
        foreach( $returnedBreeders as $breeder) {
            $results->push($breeder);
        }
        foreach( $returnedStrains as $strain){
            $results->push($strain);
        };

        return $results->sortBy('type')->flatten();
    }
}
