@extends('layouts.master')

@section('title')

    @parent
@stop

@section('page_styles')
    <style>
    </style>
@stop

@section('top')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-sm-6">
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
    </div>



</div>
@stop

@section('bottom')
@stop

@section('page_scripts')

@stop



