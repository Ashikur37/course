<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MathTopic;

class MathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maths=MathTopic::all();
        return view('admin.math.index',compact('maths'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.math.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        MathTopic::create([
            "title"=>$request->title,
            "body"=>$request->body,


        ]);
        return redirect()->route('math.index');
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
    public function edit(Department $department)
    {
        return view('admin.department.edit',compact('department'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {   if($request->image){
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $department->image=$imageName;
        }
        $department->name=$request->name;
        $department->save();
        return redirect()->route('department.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MathTopic $mathTopic)
    {
        $mathTopic->delete();
        return redirect()->route('math.index');
    }
}
