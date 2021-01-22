<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BengaliGrammer;
use App\Models\Chapter;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Course;
use App\Models\CurrentAffair;
use App\Models\Department;
use App\Models\EnglishGrammer;
use App\Models\Exercise;
use App\Models\MathTopic;
use App\Models\Motivation;
use App\Models\Poet;
use App\Models\Topic;
use Illuminate\Http\Request;

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
        if(request()->department){
            $department=Department::find(request()->department);
            return view('front.teacher-department',compact('department'));
        }
        $departments=Department::all();
        return view('front.teacher',compact('departments'));
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
    public function topicComment(Topic $topic){
        Comment::create([
            "topic_id"=>$topic->id,
            "user_id"=>auth()->user()->id,
            "text"=>request()->text
        ]);
        return back();
    }
    public function topicView(Topic $topic){
        $topic->update([
            "view"=>$topic->view+1
        ]);
        return "ok";
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
        $topics=MathTopic::all();
        return view('front.job.math',compact('topics')); 
    }
    public function jobGk(){
        return view('front.job.gk'); 
    }
    public function currentAffairs(){
        $affairs =CurrentAffair::all();
        return view('front.job.current',compact('affairs'));

    }
    public function jobBanglaGrammer(){
        $grammers =BengaliGrammer::all();
        return view('front.job.bengali-grammer',compact('grammers')); 
    }
    public function jobEnglishGrammer(){
        $grammers =EnglishGrammer::all();
        return view('front.job.english-grammer',compact('grammers')); 
    }
    public function exercise(Topic $topic){
        
        return view('front.exercise',compact('topic'));
    }
    public function exerciseSubmit(Topic $topic,Request $request){
        $corrects=[];
        foreach($request->question as $ex =>$ans ){
            $exercise=Exercise::find($ex);
            if($exercise->correct_answer==$ans){
                array_push($corrects,$ex);
            }
        }
        return view('front.exercise-submit',compact('topic','corrects'));
    }
    public function motivation(){
        $motivations=Content::whereType('motivation')->get();
        $title="Motivation";
        return view('front.motivation',compact('motivations','title')); 
    }
    public function jobBangladesh(){
        $motivations=Content::whereType('bangladesh')->get();
        $title="Bangladesh";
        return view('front.motivation',compact('motivations','title'));
    }
    public function jobWorld(){
        $motivations=Content::whereType('world')->get();
        $title="World";
        return view('front.motivation',compact('motivations','title'));
    }
    
    
}