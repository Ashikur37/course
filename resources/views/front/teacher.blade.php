@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">Teacher info</h1>
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
        <h1>Teacher Info</h1>
        <center>
        <div class="container">
            <div class="row">
                @foreach($departments as $department)
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{URL::to('/teacher-info?department='.$department->id)}}">
                        <div class="team-member">
                            <img src="{{URL::to('/images/'.$department->image)}}" alt="">
                            <h3>{{$department->name}}</h3>
                            <h4>{{$department->teachers->count()}} Teacher</h4>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        
       
         
            <br>
    </div>
</div>
@endsection