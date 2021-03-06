@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">General Knowledge</h1>
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
            <h1>General Knowledge</h1>
        </center>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/current-affairs')}}">
                            <div class="team-member">
                                <img src="{{URL::to('/images/ca.jpg')}}" alt="">
                                <h3>Current Affairs</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/bangladesh')}}">
                            <div class="team-member">
                                <img src="{{URL::to('/images/bangladesh.jpg')}}" alt="">
                                <h3>Bangladesh</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/world')}}">
                            <div class="team-member">
                                <img src="{{URL::to('/images/world.jpg')}}" alt="">
                                <h3>World</h3>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection