@extends('layouts.student')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
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
                        {{$course->name}} Exam
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        Total Question <b>{{$total_questions}}</b>
                        <br>
                        Total Answered <b>{{$exam->questions->count()}}</b>
                        <br>
                        Total Correct Answer <b>{{$correct_answers}}</b>
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