@extends('layouts.teacher')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create Exam</h1>
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
                <form role="form" method="post" action="{{URL::to('/teacher/'.$course->id.'/exam/create')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Add No Question</label>
                        <input required name="set" type="number" class="form-control" id="exampleInputEmail1" placeholder="Add No Question" onblur="setQuestion(this.value)">
                      </div>
                      <div id='question' class="d-none">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question</label>
                            <input require name="question[]" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Question">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Option A</label>
                            <input require name="option1[]" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Option A">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Option B</label>
                            <input require name="option2[]" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Option B">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Option C</label>
                            <input require name="option3[]" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Option C">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Option D</label>
                            <input require name="option4[]" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Option D">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Answer</label>
                                <select class="form-control" require id="exampleInputEmail" name="correct_answer[]">
                                    <option value="option1">A</option>
                                    <option value="option2">B</option>
                                    <option value="option3">C</option>
                                    <option value="option4">D</option>
                                </select>
                           
                          </div>
                      </div>
                      <div id="all">

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
    current=0;
    function setQuestion(n){
        for(i=1;i<=n;i++){
            div=document.createElement('div');
            div.innerHTML=document.getElementById("question").innerHTML.split('require').join('required');
            document.getElementById("all").appendChild(div);
        }
    }
</script>
@endsection
