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
                    @if(auth()->check()&&App\Models\CoursePayment::where('user_id',auth()->user()->id)->where('course_id',$course->id)->first())
                    <a href="{{URL::to('/course/'.$course->name)}}">
                        <div class="team-member">
                            <img src="{{URL::to('images/'.$course->logo)}}" alt="">
                            <h3>{{$course->name}}</h3>
                            <h3>Duration : {{$course->duration}}</h3>
                            <h3>Time Commitment : {{$course->time_commitment}}</h3>
                            <h3>Language : {{$course->language}}</h3>
                        </div>
                    </a>
                    @else
                    <div class="team-member">
                        <img src="{{URL::to('images/'.$course->logo)}}" alt="">
                        <h3>{{$course->name}}</h3>
                        <h5>Duration : {{$course->duration}}</h5>
                        <h5>Time Commitment : {{$course->time_commitment}}</h5>
                        <h5>Language : {{$course->language}}</h5>
                        <h5>Price : {{$course->price}}TK</h5>
                        <a style="color: #fff" class="btn btn-success" href="{{URL::to('/course/apply/'.$course->id)}}">Apply Now</a>
                    </div>
                    @endif
                </div><br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection