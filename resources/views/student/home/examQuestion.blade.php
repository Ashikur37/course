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
                        <h4>
                            {{$course->name}} Exam
                        </h4>
                        <h5>
                            Total Question {{$course->examQuestions->count()}}
                        </h5>
                        Time Remaining <span id="time">{{$course->examQuestions->count()}}:00</span> minutes!
                        <h5>Question <span id="question_no">1</span></h5>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group" id="question-box">
                        <label>
                            {{$course->examQuestions->first()->question}} 
                        </label>
                        <br>
                        <p>
                            <input required style="margin-right:10px;margin-left:10px;" value="option1" type="radio" name="question" id="">{{$course->examQuestions->first()->option1}}
                        </p>   
                        <p>
                            <input required style="margin-right:10px;margin-left:10px;" value="option2" type="radio" name="question" id="">{{$course->examQuestions->first()->option2}}
                        </p>
                        <p>
                            <input required style="margin-right:10px;margin-left:10px;" value="option3" type="radio" name="question" id="">{{$course->examQuestions->first()->option3}}
                        </p>
                        <p>
                            <input required style="margin-right:10px;margin-left:10px;" value="option4" type="radio" name="question" id="">{{$course->examQuestions->first()->option4}}
                        </p>
                    </div>
                    <button onclick="next()" class="btn btn-info">Next</button>
                  </div>
                </div>
              </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            
        }
    }, 1000);
}
window.current=1;
function next(){
    if(!$('input[name=question]:checked').val()){
       alert("Choose an answer")
       return;
    }
    
        if(current=={{$course->examQuestions->count()}}){
            alert("Submitted");
            return;
        }
        else{
            $("#question-box").load("{{URL::to('/student/'.$course->id)}}/exam/"+current+"/"+$('input[name=question]:checked').val());
            current++;
            $("#question_no").html(current)
        }
    
}
window.onload = function () {
    var fiveMinutes = 60 * {{$course->examQuestions->count()}},
    display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>
@endsection