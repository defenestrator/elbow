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
                <div class="container" id="banana">
                    <div id="potluck" class="container block"></div>
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
                            <div class="block">
                                <input type="text" name="contact-name"
                                       class="form-input mt-1 block w-full" placeholder="name"
                                       value="{{ old('contact-name') }}" required>
                            </div>
                            <div class="block">
                                <input type="email" name="contact-email" class="text-gray-700"
                                       placeholder="email" value="{{ old('contact-email') }}" required>
                            </div>
                            <div class="block">
                                <label class="block">
                                    <span class="text-gray-700">Textarea</span>
                                    <textarea class="form-textarea mt-1 block w-full" placeholder="Message.">
                                        {{ old('contact-msg') }}
                                    </textarea>
                            </div>
                            <div class="block mt-2">
                                <button class="btn-blue" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                    
                </div>
            </div>
        </div>
    @endsection
