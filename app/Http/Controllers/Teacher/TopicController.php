<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Chapter;
use App\Models\Topic;

use App\Models\Teacher;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Chapter $chapter)
    {
        
        return view('teacher.topic.index',compact('chapter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Chapter $chapter)
    {
        
        return view('teacher.topic.create',compact('chapter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Chapter $chapter)
    {
        $videoName ="";
        if($request->video){
            $videoName = time().'.'.$request->video->extension();  
            $request->video->move(public_path('videos'), $videoName);
        }
        Topic::create([
            "title"=>$request->title,
            "chapter_id"=>$chapter->id,
            "video"=>$videoName,
        ]);
        return redirect('teacher/'.$chapter->id.'/topic'); 
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
    public function edit(Topic $topic)
    {
        $chapter=$topic->chapter_id;
        unlink(URL::to('videos/'. $topic->video) );
        $topic->delete();
        return redirect('teacher/'.$chapter.'/topic');

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
    public function destroy(Topic $topic)
    {
        $chapter=$topic->chapter_id;
        $topic->delete();
        return redirect('teacher/'.$chapter.'/topic');
    }
}
