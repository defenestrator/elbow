@extends('layouts.master')
@section('content')
<div class="text-left content-center">
    <div class="flex flex-wrap content-start w-100">
        <div class="m-2 flex-1 text-gray-700 border border-double p-2 rounded-md" style="min-width:200px;">
            <h1 class="text-xl my-2 capitalize" style="text-decoration: capitalize;">{{ $strain->name }}</h1>
            <div class="content-center w-100 m-2">
                <a href="{!! '/strains/' . $strain->uuid !!}">      
                    <img src="{!! $strain->image !!}" alt="{!! $strain->name !!}" class="w-100 m-0 mr-4 rounded-md">
                </a>
            </div>
            <div class="text-left pt-4">                
                <p><strong>Breeder:</strong> {{ $strain->breeder }}</p>
                <p><strong>Lineage:</strong> {{ $strain->genetics }}</p>  
                <p><strong>Description:</strong> {{$strain->description}}</p>
            </div>
        </div>
    </div>    
</div>
@endsection