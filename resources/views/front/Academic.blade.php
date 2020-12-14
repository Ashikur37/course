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
            <h1>{{$department->name}}</h1>
        </center>
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/academic?department=CSE')}}">
                        <div class="team-member">
                            <img src="{{URL::to('images/'.$course->logo)}}" alt="">
                            <h3>{{$course->name}}</h3>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection