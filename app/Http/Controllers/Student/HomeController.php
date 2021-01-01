<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\ExamQuestion;
use App\Models\StudentExam;
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

    }
    public function courseExam(Course $course){
        // StudentExam::create([
        //     "user_id"=>auth()->user()->id,
        //     "course_id"=>$course->id,
        //     "total_question"=>$course->examQuestions->count(), 
        //     "correct_answer"=>0,
        //     "is_passed"=>0
        // ]);
        return view("student.home.examQuestion",compact('course'));
    }
    //courseQuestion
    public function courseQuestion(Course $course,$n,$ans){
        $question =ExamQuestion::where('course_id',$course->id)->skip($n)->first();
        return view("student.home.question",compact('question'));
    }
    public function nextQuestion(Request $request){

    }
}