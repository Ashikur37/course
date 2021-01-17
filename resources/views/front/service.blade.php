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
                @foreach($departments as $department)
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department='.$department->id)}}">
                        <div class="team-member">
                            <img src="{{URL::to('/images/'.$department->image)}}" alt="">
                            <h3>{{$department->name}}</h3>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <br>
        <center>
            <h1>Non Academic</h1>
            <center>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/literature')}}">
                            <div class="team-member">
                                <img src="public/images/b.jpg/" alt="">
                                <h3>Literature</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/job')}}">
                            <div class="team-member">
                                <img src="public/images/b.jpg" alt="" />
                                <h3>Job Preparation</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{URL::to('/motivation')}}">
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