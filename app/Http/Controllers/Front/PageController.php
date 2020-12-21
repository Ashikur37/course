<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\CurrentAffair;
use App\Models\Department;
use App\Models\Poet;

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
    public function literature(){
        $poets=Poet::orderBy('en_name')->get();
        return view('front.literature',compact('poets'));
    }
    public function poetEn(Poet $poet){
        
        return view('front.poet-en',compact('poet'));
    }
    public function poetBn(Poet $poet){
        
        return view('front.poet-bn',compact('poet'));
    }
    public function job(){
        return view('front.job');
    }
    public function jobBangla(){
        return view('front.job.bangla');
    }
    public function jobEnglish(){
        return view('front.job.english');
    }
    public function jobMath(){
        return view('front.job.math');
    }
    public function jobGk(){
        return view('front.job.gk');
    }
    public function currentAffairs(){
        $affairs =CurrentAffair::all();
        return view('front.job.current',compact('affairs'));

    }
    
}