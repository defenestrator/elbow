@extends('layouts.master')
@section('content')
<div class="text-center content-center">
    
    <div class="inline-flex w-100 text-xs">
        {{ $strains->onEachSide(1)->links() }}
    </div>

    <div class="flex flex-wrap content-start w-100">
    @foreach($strains as $strain)    
        <div class="m-2 flex-1 text-gray-700 border border-double p-2 rounded-md overflow-hidden" style="min-width:200px;">
            <a href="{!! route('strains.show', $strain->uuid) !!}">  
                <h1 class="text-blue-700 text-xl my-2">{{ $strain->name }}</h1>
            <div class="content-center w-100 m-2">
                <a href="{!! route('strains.show', $strain->uuid) !!}">      
                    <img src="{!! $strain->image !!}" alt="{!! $strain->name !!}" class="w-100 m-0 mr-4 rounded-md">
                </a>
            </div>
            <div class="text-left pt-4">                
                <p><strong>Breeder:</strong>
                    <a href="{!! route('breeders.show', $strain->breeder->uuid) !!}">  
                        @if($strain->breeder->image === "/img/coming-soon.png" )
                        {{$strain->breeder_name}}
                        @else
                        <img src="{!! $strain->breeder->image !!}" alt="{!! $strain->name !!} was produced by {!! $strain->breeder_name !!}" class="w-100 m-0 rounded-md">
                        @endif
                    </a>
                </p>
                <p> <strong>Lineage:</strong> {{ $strain->genetics }}</p>  
                <p> <strong>Description:</strong> 
                    @if($strain->description === null)
                    Sorry, no description of this strain has been entered yet.
                    @else
                    {{$strain->description}}
                    @endif
                </p>
            </div>
        </div>
    @endforeach
    </div>    
    <div class="inline-flex">
        {{ $strains->links() }}
    </div>
</div>
@endsection