@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">Academic</h1>
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
            <h1>{{request()->department}}</h1>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=CSE')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Computer Fundamental</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=EEE')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>SPL</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=Math')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Data Structure</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=Economics')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Algorithm</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=CSE')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Operating System</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=BBA')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Database Management</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=EEE')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Java</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=Unani')}}">
                        <div class="team-member">
                            <img src="" alt="">
                            <h3>Computer Networks</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection