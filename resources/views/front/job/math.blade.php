@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">Current Affairs</h1>
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
            <h1>Math Topics</h1>
        </center>
        <div class="container">
            <div class="container">
                <div class="row">
                    <ul class="list-group" style="width:100%;padding:20px">
                        @foreach($topics as $topic)
                            <li class="list-group-item">
                                {{$topic->title}}
                            </li>
                            <li class="list-group-item">
                                {!!$topic->body!!}
                            </li>
                        @endforeach
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection