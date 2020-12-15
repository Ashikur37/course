<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use App\Models\Teacher;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chapter;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        
        
        return view('teacher.chapter.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        
        return view('teacher.chapter.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Course $course,Request $request)
    {
        Chapter::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "course_id"=>$course->id
        ]);
        return redirect('teacher/'.$course->id.'/chapter'); 
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
    public function destroy(Chapter $chapter)
    {
        $course=$chapter->course_id;
        $chapter->delete();
        return redirect('teacher/'.$course.'/chapter');
    }
}
