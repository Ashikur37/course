@extends('layouts.student')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0 text-dark">Result</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
         
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                        <center>
                            <h4>Certification of {{$course->name}}</h4>
                        </center>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <center>
                            <b>This is certify that</b>
                        <h4>{{auth()->user()->name}} ({{auth()->user()->roll}})</h4>
                        <hr>
                        <h4>Successfully completed the course <u>{{$course->name}}</u></h4>
                        <hr>
                            <h4>Issue Date: {{$exam->created_at->format('d M y')}}</h4>
                        </center>
                  </div>
                </div>
              </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection