@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">Services</h1>
                </header><!-- .entry-header -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header-overlay -->
@endsection
@section('content')
    
<div class="icon-boxes">
    <div class="container-fluid">
        <br>
        <center>
        <h1>Academic</h1>
        <center>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=CSE')}}">
                        <div class="team-member">
                            <img src="{{URL::to('/images/logo-3.png')}}" alt="">
                            <h3>CSE</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=EEE')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>EEE</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=Math')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Math</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=Economics')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Economics</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=CSE')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>English</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=BBA')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>BBA</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=EEE')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>EEE</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=Unani')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Unani</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <center>
            <h1>Non Academic</h1>
            <center>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/academic?department=CSE')}}">
                            <div class="team-member">
                                <img src="" alt="">
                                <h3>Current Affairs</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/academic?department=EEE')}}">
                            <div class="team-member">
                                <img src="" alt="">
                                <h3>Literature</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/academic?department=Math')}}">
                            <div class="team-member">
                                <img src="" alt="">
                                <h3>Job Preparation</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/academic?department=Economics')}}">
                            <div class="team-member">
                                <img src="" alt="">
                                <h3>Motivation</h3>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <br>
    </div>
</div>
@endsection