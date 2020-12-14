<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use App\Models\Teacher;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        
        
        return view('teacher.exam.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        $teachers=Teacher::all();
        return view('admin.course.create',compact('departments','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName ="";
        if($request->image){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
        }
        Course::create([
            "name"=>$request->name,
            "department_id"=>$request->department_id,
            "teacher_id"=>$request->teacher_id,
            "logo"=>$imageName
        ]);
        return redirect()->route('course.index'); 
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
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}
