@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">{{$topic->chapter->course->name}}</h1>
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
            <h2>{{$topic->title}}</h2>
        </center>
        
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="featured-courses courses-wrap">
            <div class="row mx-m-25">
                <h5>Total Question {{$topic->exercises->count()}}</h5>
            </div><!-- .row -->
            <div class="row mx-m-25">
                <h5>Correctly Answered {{count($corrects)}}</h5>
                
            </div><!-- .row -->
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" style="background:green;width:{{(count($corrects)/$topic->exercises->count())*100}}%">
                  Correct({{(count($corrects)/$topic->exercises->count())*100}}%)
                </div>
                <div class="progress-bar progress-bar-warning" role="progressbar" style="background:#d9534f;width:{{(($topic->exercises->count()-count($corrects))/$topic->exercises->count())*100}}%">
                  Incorrect({{(($topic->exercises->count()-count($corrects))/$topic->exercises->count())*100}})%
                </div>
                
              </div>
            
        </div><!-- .featured-courses -->

      
    </div><!-- .col -->

    <!-- .col -->
</div>
</div>
@endsection