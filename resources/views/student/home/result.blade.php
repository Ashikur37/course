@extends('layouts.student')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Result</h1>
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
                          <th>Course</th>
                          <th>Number Of Question</th>
                          <th>Correct Answer</th>
                          <th>Grade</th>
                          <th>Certificate</th>
                      </tr>
                  </thead>
                  <tbody>
                          @foreach($exams as $exam)
                              <tr>
                                  <td>{{$exam->course->name}}</td>
                                  <td>{{$exam->course->examQuestions->count()}}</td>
                                  <td>{{$exam->correctAnswer->count()}}</td>
                                  <td>
                                      @if((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=80)
                                        <b>4.00(A+)</b>
                                      @elseif((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=75)
                                      <b>3.75(A)</b>
                                      @elseif((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=70)
                                      <b>3.5(A-)</b>
                                      @elseif((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=65)
                                      <b>3.25(B+)</b>
                                      @elseif((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=60)
                                      <b>3.00(B)</b>
                                      @elseif((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=55)
                                      <b>2.75.00(B-)</b>
                                      @elseif((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=50)
                                      <b>2.5(c+)</b>
                                      @elseif((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=45)
                                      <b>2.25(C)</b>
                                      @elseif((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=40)
                                      <b>2.00(D)</b>
                                      @else
                                      <b>0.00(F)</b>
                                      @endif
                                  </td>
                                  <td>
                                      @if((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=50)
                                        <a href="{{URL::to('/student/course/certificate/'.$exam->course->id)}}">View</a>
                                      @else 
                                      <h4>Not Available</h4>
                                      @endif
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

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection