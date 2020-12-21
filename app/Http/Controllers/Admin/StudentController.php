<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=User::whereType(1)->get();
        return view('admin.student.index',compact('students'));
    }
    public function pending()
    {
        $students=User::whereType(0)->get();
        return view('admin.student.pending',compact('students'));
    }
    public function approve(User $user){
        $user->update([
            'type'=>1
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('admin.teacher.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $user=User::create([
        "name" => $request->name,
        "email" => $request->email,
        "type" => 2,
        "password" => Hash::make($request->password),
       ]);
       Teacher::create([
        "user_id"=>$user->id,
        "department_id"=>$request->department_id
       ]);
        return redirect()->route('teacher.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students=User::whereType(0)->get();
        return view('admin.student.pending',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $user=User::find($id);
        $user->update([
            'type'=>1
            ]);
            return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher){

        $user=User::find($teacher->user_id);
        $user->update($request->all());
        $teacher->update([
            "department_id"=>$request->department_id
        ]);
           
        return redirect()->route('teacher.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
