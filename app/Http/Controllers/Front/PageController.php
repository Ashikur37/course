<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Department;

class PageController extends Controller
{
    public function contact(){
        return view('front.contact');
    }
    public function service(){
        $departments=Department::all();
        return view('front.service',compact('departments'));
    }
    public function teacher(){
        return view('front.teacher');
    }
    public function academic(){
        $department=Department::find(request()->department);
        $courses=Course::where('department_id',request()->department)->get();
        return view('front.academic',compact('courses','department'));
    }
    public function course($name){
        $course=Course::where('name',$name)->first();
        return view('front.course',compact('course'));
    }
    public function chapter($course,$chapter){
       $chapter=Chapter::where('title',$chapter)->first();
       return view('front.chapter',compact('chapter'));
    }
}