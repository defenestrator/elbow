@extends('layouts.master')
@section('content')
<div class="text-left content-center">
    <div class="w-100">
        <div class="m-2 text-gray-700 border-2 border-double p-2 rounded-md" style="min-width:200px;">
            <h1 class="m-4 text-3xl capitalize" style="text-decoration: capitalize;">{{ $breeder->name }}</h1>
            <div class="w-100 mx-auto my-4 p-2">
                    <img src="{!! $breeder->image !!}" alt="{!! $breeder->name !!}" class="mx-auto" style="width:100%; max-width:320px;">
            </div>
            <div class="text-left pt-4">   
                <h2 class="m-4 text-xl">Strains List:</h2>       
                @foreach($breeder->strains as $strain)
                
                    <div class="mx-4 my-4 border rounded p-2 flex flex-no-wrap">
                        <a href="{!! route('strains.show', $strain->uuid) !!}">
                            <div class="w-40 flex-1 align-center mr-2"> 
                                <img src="{!! $strain->image !!}" alt="Image of {!! $strain->name !!}">
                            </div>
                        </a>
                            <div class="flex-1 mx-2"> 
                                <a href="{!! route('strains.show', $strain->uuid) !!}">
                                <h2 class="px-2">
                                    {{$strain->name}}
                                </h2>
                                </a>
                                <p class="px-2">
                                    {{$strain->description}}
                                </p>
                                <p class="px-2">
                                    {{$strain->genetics}}
                                </p>
                            </div>
                        </a>
                    </div>
                                  
                @endforeach
            </div>
        </div>
    </div>    
</div>
@endsection