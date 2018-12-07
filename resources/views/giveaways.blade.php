@extends('layouts.master')

@section('title')
Elbow Farm Giveaway!
@parent
@stop

@section('page_styles')
    <style>

        .tagline {
            background: #19526b;
            background-size:cover;
            padding:1em 0;
            margin-bottom  : 20px;
            color:white;
            text-transform : uppercase;
            font-weight    : 300;
            overflow-x:hidden;
        }
        .feature-tagline {
            text-shadow: 1px 2px 4px #bf542a, 0px 0px 3px #bf542a;
            padding:1em 0;
            color:#ffffff;
            text-transform : uppercase;
            font-weight: 600;
            margin:0 1em;
        }

        .showcase-header{
            text-transform : uppercase;
            text-shadow: 1px 2px 4px #031020;
        }
    </style>
@stop

@section('top')
    <div style="background: linear-gradient(rgba(0,0,0, 0.25),rgba(0,0,0, 0.25)), url('{!! $giveaway[0]['image'] !!}') center center no-repeat; background-size:cover; height:50vh;" class="text-center tagline">
        <h1 style="padding:1em;" class="feature-tagline showcase-header">Elbow Farm Seed Giveaway</h1>
        <h2 class="feature-tagline showcase-header">{!! $giveaway[0]['title'] !!}</h2>
    </div>
@stop

@section('content')
    <div class="container col-md-8 offset-md-2">
        <h2 class="text-center"></h2>
        <div class="text-center"><countdown :initial_expiration="parseInt({!! $giveaway[0]['expires'] !!})"></countdown></div>
        <hr>
        <contest-entry g_id="{!! $giveaway[0]['id'] !!}"></contest-entry>
        <hr>
        <h3>{!! $giveaway[0]['description'] !!}</h3>
    </div>
@stop

@section('bottom')
@stop

@section('page_scripts')

@stop

