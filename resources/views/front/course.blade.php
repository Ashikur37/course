@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">{{$course->name}}</h1>
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
            <h1>{{$course->name}}</h1>
        </center>
        <div class="container">
            <div class="row">
                @foreach($course->chapters as $chapter)
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/chapter/'.$course->name.'/'.$chapter->title)}}">
                        <div class="team-member">
                            <h3>{{$chapter->title}}</h3>
                        </div>
                    </a>
                </div><br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection