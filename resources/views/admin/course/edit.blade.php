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
                <form role="form" method="post" action="{{route('course.update',$course->id)}}">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input value="{{$course->name}}" required name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Department</label>
                            <select required name="department" class="form-control" >
                                <option {{$course->department=="CSE"?"selected":""}}>CSE</option>
                                <option {{$course->department=="EEE"?"selected":""}}>EEE</option>
                                <option {{$course->department=="BBA"?"selected":""}}>BBA</option>
                                <option {{$course->department=="English"?"selected":""}}>English</option>
                                <option {{$course->department=="Unani"?"selected":""}}>Unani</option>

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

