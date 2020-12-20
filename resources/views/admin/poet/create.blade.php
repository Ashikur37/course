@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add Poet</h1>
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
                <form role="form" method="post" action="{{route('poet.store')}}" enctype="multipart/form-data">
                    @csrf
                   

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                              <input type="file" name="image"  class="form-control-file"/>
                          </div>
                      <div class="form-group"> 
                        <label for="exampleInputEmail1">Name in Bengali</label>
                        <input required name="bn_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name in English</label>
                        <input required name="en_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description in Bengali</label>
                        <textarea name="bn_details" class="textarea" placeholder="Enter Description"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description in English</label>
                        <textarea name="en_details" class="textarea" placeholder="Enter Description"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
@section('script')
<script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endsection
