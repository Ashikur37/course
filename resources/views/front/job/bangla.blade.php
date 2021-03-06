@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">Bangla</h1>
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
            <h1>Bangla</h1>
        </center>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/bangla/grammer')}}">
                            <div class="team-member">
                                <img src="{{URL::to('/images/bn_grammer.jpg')}}" alt="">
                                <h3>ব্যাকরন</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job/bangla/literature')}}">
                            <div class="team-member">
                                <img src="{{URL::to('/images/lit.jpg')}}" alt="">
                                <h3>সাহিত্য</h3>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection