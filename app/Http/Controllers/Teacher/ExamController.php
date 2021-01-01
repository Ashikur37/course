<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use App\Models\Teacher;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamQuestion;

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
    public function create(Course $course)
    {
        
        return view('teacher.exam.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Course $course,Request $request)
    {
        for($i=0;$i<count($request->question);$i++){
            if($request->question[$i]){
                ExamQuestion::create([
                    'course_id'=>$course->id,
                    "question"=>$request->question[$i],
                    "option1"=>$request->option1[$i],
                    "option2"=>$request->option2[$i],
                    "option3"=>$request->option3[$i],
                    "option4"=>$request->option4[$i],
                    "correct_answer"=>$request->correct_answer[$i],
                ]);
            }
        }
        return redirect('teacher/'.$course->id.'/exam'); 
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
