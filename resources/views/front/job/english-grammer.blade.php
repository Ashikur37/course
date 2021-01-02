@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">English Grammer</h1>
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
            <h1>English Grammer</h1>
        </center>
        <div class="container">
            <div class="container">
                <div class="row">
                    <ul class="list-group" style="width:100%;padding:20px">
                        @foreach($grammers as $grammer)
                            <li class="list-group-item">
                                <h4>
                                    <a href="{{URL::to('/images/'.$grammer->file)}}">
                                        {{$grammer->title}}
                                    </a>
                                </h4>
                            </li>
                        @endforeach
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection