@extends('layouts.master')

@section('title')
    Thanks for entering the contest!
    @parent
@stop

@section('page_styles')
@stop

@section('top')

    <div class="text-center container">
        <div class="tagline text-center" style="background-image: none;">
            <h1 style="margin-top:1em;">
                {{$message}}
            </h1>
        </div>

        <hr>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="text-center container">
            <h2>
                <a href="/">Thanks!</a>
            </h2>
            <img src="https://hobo-assets.s3-us-west-2.amazonaws.com/images/the-dude-1.jpg" style="max-width:800px; width:80%;border-radius:1em;"
                 alt="Yeah, well, that's just, like, your opinion, man."
                 title="Yeah, well, that's just, like, your opinion, man."
            >
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            &nbsp;
        </div>
    </div>
@stop
@section('bottom')
    <div class="col-md-12 col-md-offset-0">
        &nbsp;
    </div>
    <br>
@stop
{{-- footer scripts --}}
@section('page_scripts')

@stop
