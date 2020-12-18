<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Topic;
use App\Models\Exercise;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chapter;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Topic $topic)
    {
        
        
        return view('teacher.exercise.index',compact('topic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Topic $topic)
    {
        
        return view('teacher.exercise.create',compact('topic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Topic $topic,Request $request)
    {
        Exercise::create([
            "question"=>$request->question,
            "option1"=>$request->option1,
            "option2"=>$request->option2,
            "option3"=>$request->option3,
            "option4"=>$request->option4,
            "correct_answer"=>$request->correct_answer,
            "topic_id"=>$topic->id
        ]);
        return redirect('teacher/'.$topic->id.'/exercise'); 
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $departments=Department::all();
        $teachers=Teacher::all();
        return view('admin.course.edit',compact('course','departments','teachers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $imageName ="";
        if($request->image){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $course->logo=$imageName;
        }
        $course->name=$request->name;
        $course->department_id=$request->department_id;
        $course->teacher_id=$request->teacher_id;

        $course->save();
        return redirect()->route('course.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercise $exercise)
    {
        $topic=$exercise->topic_id;
        $exercise->delete();
        return redirect('teacher/'.$topic.'/exercise');
    }
}
