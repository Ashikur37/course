@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">Job Preparation</h1>
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
            <h1>Job Preparation</h1>
        </center>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/bangla')}}">
                            <div class="team-member">
                                <img src="" alt="">
                                <h3>Bangla</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/english')}}">
                            <div class="team-member">
                                <img src="" alt="">
                                <h3>English</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/math')}}">
                            <div class="team-member">
                                <img src="" alt="">
                                <h3>Math</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/gk')}}">
                            <div class="team-member">
                                <img src="" alt="">
                                <h3>General Knowledge</h3>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection