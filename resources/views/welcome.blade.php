@extends('layouts.master')
    @section('content')
        <div class="container-fluid" style="padding-left:0;padding-right:0;">
            <div class="center">
                <div class="title m-b-md">
                    <h1>Elbow</h1>
                    <h2>For those who grow </h2>
                </div>
                <div class="title m-b-md">
                    <img src="img/new-hero.png" style="width:360px;" alt="Hello, from elbow farm!" title="Hello, from elbow farm!" />
                </div>
                <div class="welcome-links m-b-md">
                <a href="giveaways" style="font-size:32px;">Click Here to Win Free Seeds!</a>
                </div>
            </div>

            <div class="m-b-md dark" style="padding:2em 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Get your <a href="/register">free account</a> today<sup><a href="#no-cc">*</a></sup></h3>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <h5>Optimize your garden</h5>
                            <h4 style="color:#2d94fa;">from seed to harvest</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container m-b-md">
                <p class="small" id="no-cc"><a href="#no-cc">*</a>no credit card required</p>
            </div>
            <div class="container">
                <div class="center">
                    <!-- Contact form Section Start -->
                    <div class="col-sm-6 offset-sm-3">
                        <h2>Holler at us!</h2>
                        <!-- Notifications -->
                        <div id="errors">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <form class="contact" id="contact" style="margin-bottom:2em; " action="{{route('contact')}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <input type="text" name="contact-name"
                                       class="form-control input-lg" placeholder="name"
                                       value="{{ old('contact-name') }}" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="contact-email" class="form-control input-lg"
                                       placeholder="email" value="{{ old('contact-email') }}"required>
                            </div>
                            <div class="form-group">
                        <textarea name="contact-msg"
                                  class="form-control input-lg"
                                  rows="6"
                                  placeholder="message" required>{{ old('contact-msg') }}</textarea>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-primary input-lg" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                    {{--<div class="welcome-links m-b-md">--}}
                        {{--<a href="https://github.com/defenestrator/elbow" target="_blank">Github</a>--}}
                        {{--<a href="https://docs.elbow.farm" target="_blank">Developer Documentation</a>--}}
                    {{--</div>--}}
                </div>

            </div>
        </div>
    @endsection
