@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Department List</h1>
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
            <table class="table table-bordered table-hover" id="example1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{$department->name}}</td>
                                <td>
                                  <img style="max-width:100px" src="{{URL::to('images/'.$department->image)}}">
                                </td>
                                <td>
                                    <a href="{{route('department.edit',$department->id)}}" class="btn btn-sm btn-info" href="">Edit</a>
                                    <a   href="{{URL::to('/admin/department/delete/')}}/{{$department->id}}" class="btn btn-sm btn-danger delete-button" href="">Delete</a>
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