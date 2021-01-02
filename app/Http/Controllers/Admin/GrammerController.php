<?php

namespace App\Http\Controllers\Admin;

use App\Models\CurrentAffair;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BengaliGrammer;

class GrammerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grammers=BengaliGrammer::all();
        return view('admin.bengali-grammer.index',compact('grammers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bengali-grammer.create');
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
        BengaliGrammer::create([
            "title"=>$request->title,
            "file"=>$fileName
        ]);
        return redirect()->route('bengali-grammer.index');
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
    public function destroy(BengaliGrammer $bengaliGrammer)
    {
        $bengaliGrammer->delete();
        return redirect()->route('bengali-grammer.index');
    }
}
