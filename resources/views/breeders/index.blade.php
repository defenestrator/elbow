@extends('layouts.master')
@section('content')
<div class="text-center content-center">
    
    <div class="inline-flex text-xs">
        {{ $breeders->onEachSide(1)->links('pagination.tailwind-default') }}
    </div>

    <div class="flex flex-wrap content-start w-100">
    @foreach($breeders as $breeder)    
        <div class="m-2 flex-1 text-gray-700 border border-double p-2 rounded-md" style="min-width:200px;">
            <h1 class="text-xl my-2 capitalize" style="text-decoration: capitalize;">{{ $breeder->name }}</h1>
            <div class="content-center w-100 m-2">
                <a href="{!! '/breeders/' . $breeder->uuid !!}">      
                    <img src="{!! $breeder->image !!}" alt="{!! $breeder->name !!}" class="mx-auto w-100 m-0 mr-4 rounded-md">
                </a>
            </div>
        </div>
    @endforeach
    </div>    
    <div class="inline-flex">
        {{ $breeders->links() }}
    </div>
</div>
@endsection