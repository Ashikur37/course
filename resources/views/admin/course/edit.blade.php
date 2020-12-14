@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Course</h1>
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
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="post" action="{{route('course.update',$course->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input value="{{$course->name}}" required name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Department</label>
                            <select required name="department_id" class="form-control" >
                              @foreach($departments as $department)
                              <option {{$course->department_id==$department->id?"selected":""}} value="{{$department->id}}">{{ $department->name}}</option>
                            @endforeach

                            </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Teacher</label>
                            <select required name="teacher_id" class="form-control" >
                              @foreach($teachers as $teacher)
                              <option {{$course->teacher_id==$teacher->id?"selected":""}} value="{{$teacher->id}}">{{ $teacher->user->name}}</option>
                            @endforeach

                            </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Logo</label>
                          <input type="file" name="image"  class="form-control-file"/>
                      </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

