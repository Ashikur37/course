<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\ExamQuestion;
use App\Models\StudentExam;
use App\Models\StudentExamQuestion;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(){
        return view('student.home.index');
    }
    public function exam(){
        $department =Department::find(auth()->user()->department_id);
        return view('student.home.exam',compact('department'));
    }
    public function result(){
        $exams=StudentExam::where('user_id',auth()->user()->id)->get();
        return view('student.home.result',compact('exams'));
    }
    public function courseExam(Course $course){
        StudentExam::create([
            "user_id"=>auth()->user()->id,
            "course_id"=>$course->id,
            "total_question"=>$course->examQuestions->count(), 
            "correct_answer"=>0,
            "is_passed"=>0
        ]); 
        return view("student.home.examQuestion",compact('course'));
    }
    public function courseExamFinish(Course $course){
        $exam=StudentExam::where('user_id','=',auth()->user()->id)->where('course_id','=',$course->id)->first();
        $correct_answers=StudentExamQuestion::where('student_exam_id',$exam->id)->whereColumn('answer','correct_answer')->count();
        $total_questions=$course->examQuestions->count();
        return view("student.home.examFinish",compact('course','correct_answers','exam','total_questions'));
    }
    //courseQuestion
    public function courseQuestion(Course $course,$n,$ans){
        $exam=StudentExam::where('user_id','=',auth()->user()->id)->where('course_id','=',$course->id)->first();
        $currentQuestion =ExamQuestion::where('course_id',$course->id)->skip($n-1)->first();
        StudentExamQuestion::create([
            "student_exam_id"=>$exam->id,
            "question"=>$currentQuestion->question,
            "answer"=>$currentQuestion[$ans],
            "correct_answer"=>$currentQuestion[$currentQuestion->correct_answer]
        ]);
        $question =ExamQuestion::where('course_id',$course->id)->skip($n)->first();
        if(!$question){
            return "done";
        }
        return view("student.home.question",compact('question'));
    }
    public function nextQuestion(Request $request){

    }
    public function courseCertificate(Course $course){
        $exam=StudentExam::where('user_id',auth()->user()->id)->where('course_id',$course->id)->first();
        if((($exam->correctAnswer->count()/$exam->course->examQuestions->count())*100)>=50){
            return view('student.home.certificate',compact('course','exam'));
        }
    }
}