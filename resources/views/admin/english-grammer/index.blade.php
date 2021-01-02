@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Current Affairs List</h1>
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
                    <a class="btn btn-info " href="{{route('english-grammer.create')}}">Add New</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
            <table class="table table-bordered table-hover" id="example1">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($grammers as $grammer)
                            <tr>
                                <td>{{$grammer->title}}</td>
                                <td>
                                  <a href="{{URL::to('/images/'.$grammer->file)}}">File</a>
                                </td>
                                <td>
                                   
                                    <a   href="{{URL::to('/admin/bengali-grammer/delete/')}}/{{$grammer->id}}" class="btn btn-sm btn-danger delete-button" href="">Delete</a>
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