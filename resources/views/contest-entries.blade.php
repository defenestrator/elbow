@extends('layouts.master')

@section('title')
    Thanks for taking entering the contest, we will notify the winner immediately, via email.
    @parent
@stop

@section('page_styles')
@stop

@section('top')
@stop

@section('content')
    <div class="row">

        <div class="text-center container">
            <h2>
                <a href="/">Thanks for taking entering the contest</a>
            </h2>
            <h3>We will notify the winner after the timer expires, via email</h3>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <img src="https://hobo-assets.s3-us-west-2.amazonaws.com/images/the-dude-1.jpg" style="max-width:800px; width:80%;border-radius:1em;"
                 alt="Yeah, well, that's just, like, your opinion, man."
                 title="Yeah, well, that's just, like, your opinion, man."
            >
        </div>
        <hr>
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
