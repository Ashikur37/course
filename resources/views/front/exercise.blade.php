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
        </div><!-- .featured-courses -->

       <form method="post" action="{{URL::to('exercise/'.$topic->id)}}">
        @csrf
            @foreach($topic->exercises as $exercise)
                <div class="form-group">
                    <label>
                       <b>{{$loop->iteration}}.</b> {{$exercise->question}}
                    </label>
                    <br>
                    <p>
                        <input required style="margin-right:10px;margin-left:10px;" value="option1" type="radio" name="question[{{$exercise->id}}]" id="">{{$exercise->option1}}
                    </p>   
                    <p>
                        <input required style="margin-right:10px;margin-left:10px;" value="option2" type="radio" name="question[{{$exercise->id}}]" id="">{{$exercise->option2}}
                    </p>
                    <p>
                        <input required style="margin-right:10px;margin-left:10px;" value="option3" type="radio" name="question[{{$exercise->id}}]" id="">{{$exercise->option3}}
                    </p>
                    <p>
                        <input required style="margin-right:10px;margin-left:10px;" value="option4" type="radio" name="question[{{$exercise->id}}]" id="">{{$exercise->option4}}
                    </p>
                </div>
            @endforeach
            <button class="btn btn-success">Submit</button>
       </form>
    </div><!-- .col -->

    <!-- .col -->
</div>
</div>
@endsection