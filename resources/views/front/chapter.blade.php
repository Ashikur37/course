@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">{{$chapter->course->name}}</h1>
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
            <h1>{{$chapter->title}}</h1>
        </center>
        <div class="container">
            {!!$chapter->description!!}
        </div>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="featured-courses courses-wrap">
            <div class="row mx-m-25">
                @foreach($chapter->topics as $topic)
                <div class="col-12 col-md-6 px-25">
                    <div class="course-content">
                        <figure class="course-thumbnail">
                            <video width="100%" height="auto" controls>
                                <source src="{{URL::to('/videos/'.$topic->video)}}" type="video/mp4">
                              Your browser does not support the video tag.
                              </video>
                        </figure><!-- .course-thumbnail -->

                        <div class="course-content-wrap">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="#">{{$topic->title}}</a></h2>

                                <div class="entry-meta flex flex-wrap align-items-center">
                                    
                                    <div class="course-author"><a href="javascript::void(0)">{{$topic->chapter->course->teacher->user->name}} </a></div>
                                    <div class="course-date">{{$topic->created_at->diffForHumans()}}</div>
                                    <div style="float:right;margin-left:auto">
                                        <a href="{{URL::to('/exercise/'.$topic->id)}}">Exercise: {{$topic->exercises->count()}} question</a> 
                                    </div>
                                </div><!-- .course-date -->
                            </header><!-- .entry-header -->
                        </div><!-- .course-content-wrap -->
                    </div><!-- .course-content -->
                </div><!-- .col -->
                @endforeach
            </div><!-- .row -->
        </div><!-- .featured-courses -->

       
    </div><!-- .col -->

    <!-- .col -->
</div>
</div>
@endsection