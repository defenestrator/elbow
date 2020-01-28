@extends('layouts.master')
    @section('content')
        <div class="container-fluid p-6">
            <div class="center">
                <div class="font-serif">
                    <h1 class="header">Elbow</h1>
                    <h2>For those who grow </h2>                     
                </div>
            </div>
            <div style="padding:2em 0;">
                <div class="container">
                    <div>
                        <div>
                            <h3>Get your <a href="/register">free account</a> today<sup><a href="#no-cc">*</a></sup></h3>
                            <hr>
                        </div>
                        <div>
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
                </div>
            </div>
        </div>
    @endsection
