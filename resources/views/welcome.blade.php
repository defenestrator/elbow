@extends('layouts.master')
    @section('content')
        <div class="container-fluid" style="padding-left:0;padding-right:0;">
            <div class="center">
                <div class="title m-b-md">
                    <h1>Elbow Farm</h1>
                    <h2>For those who grow </h2>
                </div>
                <div class="title m-b-md">
                    <img src="img/new-hero.png" style="width:360px;" alt="Hello, from elbow farm!" title="Hello, from elbow farm!" />
                </div>

                <div class="welcome-links m-b-md">
                    <a href="/hobbyist">Hobbyist</a>
                    <a href="/commercial">Commercial</a>
                    <a href="https://docs.elbow.farm">Developer</a>
                </div>

            </div>
            <div class="m-b-md dark" style="padding:2em 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Get your <a href="/register">free account</a> today<sup><a href="#no-cc">*</a></sup></h3>
                            Faggot bitches.
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
                <p class="serif">This service is an
                    <a href="https://github.com/defenestrator/elbow.farm">
                        open source software
                    </a>
                    project, for great good
                </p>
                <p class="small" id="no-cc"><a href="#no-cc">*</a>no credit card required</p>
            </div>
        </div>
    @endsection
