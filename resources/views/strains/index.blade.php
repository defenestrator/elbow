@extends('layouts.master')
@section('content')
<div class="text-center">
    <div class="">{{ $strains->links() }}</div>
    @foreach($strains as $strain)
    <a href="{!! '/strains/' . $strain->uuid !!}">
        <div class="flex text-left content-center flex-grow-0 text-gray-700 bg-gray-200 p-2 my-1 rounded-md">
            <div class="flex-row content-center ">      
                <img src="{!! $strain->image !!}" alt="{!! $strain->name !!}" class="w-20 m-0 mr-4 rounded-md">
            </div>
            <div class="flex-row-reverse width-60 ml-2">
                <h1 class="text-lg">{{ $strain->name }}</h1>
                <p><strong>Breeder:</strong> {{ $strain->breeder }}</p>
                <p><strong>Lineage:</strong> {{ $strain->genetics }}</p>  
            <p>Details: {{$strain}}</p>
            </div>
        </div>    
    </a>

       
    
    @endforeach
</div>   
        
<div class="container inline-block page-links">{{ $strains->links() }}</div>
@endsection