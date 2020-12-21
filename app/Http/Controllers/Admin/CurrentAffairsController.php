<?php

namespace App\Http\Controllers\Admin;

use App\Models\CurrentAffair;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrentAffairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affairs=CurrentAffair::all();
        return view('admin.current-affair.index',compact('affairs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.current-affair.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName="";
        if($request->file){
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('images'), $fileName);
        }
        CurrentAffair::create([
            "month"=>$request->month,
            "year"=>$request->year,
            "file"=>$fileName
        ]);
        return redirect()->route('current-affairs.index');
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
    public function destroy(CurrentAffair $currentAffair)
    {
        $currentAffair->delete();
        return redirect()->route('current-affairs.index');
    }
}
