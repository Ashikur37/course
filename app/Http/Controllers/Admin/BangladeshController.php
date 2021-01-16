<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\MathTopic;
use App\Models\Motivation;

class BangladeshController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivations=Content::whereType('bangladesh')->get();
        return view('admin.bangladesh.index',compact('motivations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bangladesh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName="";
            if($request->file){
            $imageName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('images'), $imageName);
            }
            $videoName ="";
            if($request->video){
                $videoName = time().'.'.$request->video->extension();  
                $request->video->move(public_path('images'), $videoName);
                }
                Content::create([
                    "type"=>"bangladesh",
                    "name"=>$request->name,
                    "details"=>"",
                    "file"=>$imageName,
                    "video"=>$videoName
                ]);
        return redirect()->route('bangladesh.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Motivation::find(1)){
            $motivation=Motivation::create([
                "details"=>"",
                "file"=>"",
                "video"=>""
            ]);
        }
        else{
            $motivation=Motivation::find(1);

        }
        return view('admin.motivation.index',compact('motivation'));
    }
    public function bangladesh(){
        if(!Motivation::find(2)){
            $motivation=Motivation::create([
                "id"=>2,
                "details"=>"",
                "file"=>"",
                "video"=>""
            ]);
        }
        else{
            $motivation=Motivation::find(2);

        }
        return view('admin.motivation.index',compact('motivation')); 
    }
    public function world(){
        if(!Motivation::find(3)){
            $motivation=Motivation::create([
                "id"=>3,
                "details"=>"",
                "file"=>"",
                "video"=>""
            ]);
        }
        else{
            $motivation=Motivation::find(3);

        }
        return view('admin.motivation.index',compact('motivation')); 
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
    public function update(Request $request, Motivation $motivation)
    {   if($request->file){
        $imageName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('images'), $imageName);
        $motivation->file=$imageName;
        }
        if($request->video){
            $imageName = time().'.'.$request->video->extension();  
            $request->video->move(public_path('images'), $imageName);
            $motivation->video=$imageName;
            }
        $motivation->details=$request->body;
        $motivation->save();
        return back();

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
