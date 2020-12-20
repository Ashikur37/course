@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">Literature</h1>
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
            <h1>Literature</h1>
        </center>
        
    </div>
</div>
<div class="container">
<div class="row">
    @foreach($poets as $poet)
        <div class="col-12 col-md-6 col-lg-3">
            <div class="team-member">
                <img src="{{URL::to('images/'.$poet->image)}}" alt="">

                <h3><a href="{{URL::to('/poet/en/'.$poet->id)}}">{{$poet->en_name}}</a></h3>
                <h3><a href="{{URL::to('/poet/bn/'.$poet->id)}}">{{$poet->bn_name}}</a></h3>
               

            
            </div><!-- .team-member -->
        </div>
        @endforeach
       
   

    <!-- .col -->
</div>
</div>
@endsection