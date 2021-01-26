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
            <div class="team-member">
                <img src="{{URL::to('images/'.$course->logo)}}" alt="">
                <h5>Duration : {{$course->duration}}</h5>
                <h5>Time Commitment : {{$course->time_commitment}}</h5>
                <h5>Language : {{$course->language}}</h5>
                <h4>Price : {{$course->price}}TK</h4>
                @guest
                    <h5>Please Login To continue</h5>
                @else
                <form action="{{URL::to('/pay/'.$course->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Pay With</label>
                        <select name="method" id="" class="form-control">
                            <option >Bkash</option>
                            <option >Nagad</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Send From</label>
                        <input name="details" type="text" class="form-control" required>
                    </div>
                    <button class="btn btn-success" style="color: #fff">Pay Now</button>
                </form>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection