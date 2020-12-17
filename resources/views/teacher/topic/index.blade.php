@extends('layouts.teacher')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">{{$chapter->title}}</h1>
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
                    <a class="btn btn-primary" href="{{URL::to('/teacher/'.$chapter->id.'/topic/create')}}">
                        Add Topic
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
            <table class="table table-bordered table-hover" id="example1">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Video</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($chapter->topics as $topic)
                            <tr>
                                <td>{{$topic->title}}</td>
                                <td><video width="320" height="140" controls>
                                    <source src="{{URL::to('/videos/'.$topic->video)}}" type="video/mp4">
                                  Your browser does not support the video tag.
                                  </video>
                                </td>
                                <td>
                                    
                                    <a   href="{{URL::to('/teacher/topic/delete/')}}/{{$topic->id}}" class="btn btn-sm btn-danger delete-button" href="">Delete</a>
                                    
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