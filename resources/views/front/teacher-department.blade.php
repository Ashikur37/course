@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">{{$department->name}}</h1>
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
        <h1>Teacher List</h1>
        <center>
        <div class="container">
            <div class="row">
                @foreach($department->teachers as $teacher)
                <div class="col-12 col-md-6 col-lg-3">
                    
                        <div class="team-member">
                            <h3>{{$teacher->user->name}}</h3>
                            <h4>{{$teacher->user->email}}</h4>
                                <h3>Courses</h3>
                                @foreach($teacher->courses as $course)
                                <a href="{{URL::to('/course/'.$course->name)}}">
                                    <h4>{{$course->name}}</h4>
                                </a>
                                @endforeach
                        </div>
                    
                </div>
                @endforeach
            </div>
        </div>
        
       
         
            <br>
    </div>
</div>
@endsection