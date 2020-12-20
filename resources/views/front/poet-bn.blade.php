@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">{{$poet->bn_name}}</h1>
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
            <h1>{{$poet->bn_name}}</h1>
            <img src="{{URL::to('images/'.$poet->image)}}" alt="">
        </center>
    </div>
</div>
<div class="container">
<div class="row">
    
        {!!$poet->bn_details!!}
   

    <!-- .col -->
</div>
</div>
@endsection