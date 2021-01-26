<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Teacher;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        return view('admin.course.index',compact('courses'));
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
            "logo"=>$imageName,
            "duration"=>$request->duration,
            "time_commitment"=>$request->time_commitment,
            "price"=>$request->price,
            "language"=>$request->language,

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
        $course->update([
        "duration"=>$request->duration,
        "time_commitment"=>$request->time_commitment,
        "price"=>$request->price,
        "language"=>$request->language 
        ]);
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
