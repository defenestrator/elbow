@extends('layouts.master')
@section('content')
<div class="text-left content-center">
    <div class="w-100">
        <div class="m-2 text-gray-700 border-2 border-double p-2 rounded-md" style="min-width:200px;">
            <h1 class="m-4 text-3xl capitalize" style="text-decoration: capitalize;">{{ $breeder->name }}</h1>
            <div class="w-100 mx-auto my-4">
                    <img src="{!! $breeder->image !!}" alt="{!! $breeder->name !!}" class="mx-auto">
            </div>
            <div class="text-left pt-4">          
                @foreach($breeder->strains as $strain)
                    <div class="m-4 flex flex-no-wrap">
                        <div class="mx-4 w-20 flex align-center"> 
                            <img src="{!! $strain->image !!}" alt="Image of {!! $strain->name !!}">
                        </div>
                        <div class="w-80 flex  pt-6 mx-4"> 
                            <h2>
                                <a href="{!! route('strains.show', $strain->uuid) !!}">{{$strain->name}}</a>
                            </h2>
                        </div>
                    </div>                    
                @endforeach
            </div>
        </div>
    </div>    
</div>
@endsection