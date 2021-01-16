@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">{{$title}}</h1> 
                </header><!-- .entry-header -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header-overlay -->
@endsection
@section('content')
    @foreach($motivations as $motivation)
    <center>
        <h4>{{$motivation->name}}</h4>
    </center>
<div class="icon-boxes">
    <div class="container-fluid">
        <br>
        <center>
            <a href="{{URL::to('/images/'.$motivation->file)}}">
                <h5>Download</h5>
            </a>
        </center>
    </div> 
</div>
<div class="container">
    <figure class="course-thumbnail">
        <video width="100%" height="auto" controls >
            <source src="{{URL::to('/images/'.$motivation->video)}}" type="video/mp4">
          Your browser does not support the video tag.
          </video>
    </figure>
</div><!-- .course-thumbnail -->
@endforeach
@endsection