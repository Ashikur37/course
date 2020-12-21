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
            <h1>Current Affairs</h1>
        </center>
        <div class="container">
            <div class="container">
                <div class="row">
                    <ul class="list-group" style="width:100%">
                        @foreach($affairs as $affair)
                            <li class="list-group-item">
                                <a href="{{URL::to('/images/'.$affair->file)}}">
                                    {{$affair->month}} {{$affair->year}}
                                </a>
                            </li>
                        @endforeach
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection