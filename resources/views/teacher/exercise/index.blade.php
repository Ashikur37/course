@extends('layouts.teacher')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">{{$topic->title}}</h1>
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
                    <a class="btn btn-primary" href="{{URL::to('/teacher/'.$topic->id.'/exercise/create')}}">
                        Add Exercise
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
            <table class="table table-bordered table-hover" id="example1">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Options</th>
                        <th>Correct Answer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($topic->exercises as $exercise)
                            <tr>
                                <td>{{$exercise->question}}</td>
                                <td>
                                  <ul class="list-group">
                                    <li class="list-group-item">{{$exercise->option1}}</li>
                                    <li class="list-group-item">{{$exercise->option2}}</li>
                                    <li class="list-group-item">{{$exercise->option3}}</li>
                                    <li class="list-group-item">{{$exercise->option4}}</li>

                                  </ul>
                                </td>
                                <td>
                                  {{$exercise[$exercise->correct_answer]}}
                                </td>
                                <td>
                                  
                                    <a   href="{{URL::to('/teacher/exercise/delete/')}}/{{$topic->id}}" class="btn btn-sm btn-danger delete-button" href="">Delete</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
                </div>
              </div>
            </div>
      </div>
    </div>
  </section>
</div>
@endsection