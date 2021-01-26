@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create Course</h1>
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
                <form role="form" method="post" action="{{route('course.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input required name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Department</label>
                            <select required name="department_id" class="form-control" >
                                @foreach($departments as $department)
                                  <option value="{{$department->id}}">{{ $department->name}}</option>
                                @endforeach
                            </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Teacher</label>
                            <select required name="teacher_id" class="form-control" >
                                @foreach($teachers as $teacher)
                                  <option value="{{$teacher->id}}">{{ $teacher->user->name}}</option>
                                @endforeach
                            </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Logo</label>
                          <input type="file" name="image"  class="form-control-file"/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Duration</label>
                        <input required name="duration" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter duration">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Time Commitment</label>
                        <input required name="time_commitment" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Time Commitment">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input required name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Language</label>
                        <select name="language" class="form-control">
                          <option value="Bengali">Bengali</option>
                          <option value="English">English</option>
                        </select>
                        
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

