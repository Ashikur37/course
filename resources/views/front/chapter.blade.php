@extends('layouts.front')
@section('slider')
<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h1 style="color:#fff">{{$chapter->course->name}}</h1>
                </header><!-- .entry-header -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header-overlay -->
@endsection
@section('content')
    
<div class="icon-boxes">
    <div class="container-fluid">
        <br>
        <center>
            <h1>{{$chapter->title}}</h1>
        </center>
        <div class="container">
            {!!$chapter->description!!}
        </div>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="featured-courses courses-wrap">
            <div class="row mx-m-25">
                @foreach($chapter->topics as $topic)
                <div class="col-12 col-md-6 px-25">
                    <div class="course-content">
                        <figure class="course-thumbnail">
                            <video width="100%" height="auto" controls onended="endVideo('{{URL::to('/exercise/'.$topic->id)}}',{{$topic->exercises->count()}},{{$topic->id}})">
                                <source src="{{URL::to('/videos/'.$topic->video)}}" type="video/mp4">
                              Your browser does not support the video tag.
                              </video>
                        </figure><!-- .course-thumbnail -->

                        <div class="course-content-wrap">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="#">{{$topic->title}}</a></h2>

                                <div class="entry-meta flex flex-wrap align-items-center">
                                    
                                    <div class="course-author"><a href="javascript::void(0)">{{$topic->chapter->course->teacher->user->name}} </a></div>
                                    <div class="course-date">{{$topic->created_at->diffForHumans()}}</div>
                                    
                                    
                                    
                                </div><!-- .course-date -->
                                Total view {{$topic->view}}
                            </header><!-- .entry-header -->
                            <div>
                                <br>
                                <h4>Comments</h4> 
                                <header class="entry-header">
                                    @foreach($topic->comments as $comment)
                                    <h2 class="entry-title">
                                        {{$comment->user->name}}
                                    </h2>
                                    <div class="entry-meta flex flex-wrap align-items-center">
                                    <div class="course-author">
                                        {{$comment->text}}
                                    </div>
                                    <div class="course-date">
                                        {{$comment->created_at->diffForHumans()}}
                                    </div>
                                    </div>
                                    <hr>
                                    @endforeach
                                </header>
                                <form action="{{URL::to('/topic/comment/'.$topic->id)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea required name="text" id="" cols="30" rows="4" class="form-control"></textarea>
                                    <button class="btn btn-success">
                                        Submit
                                    </button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- .course-content-wrap -->
                    </div><!-- .course-content -->
                </div><!-- .col -->
                @endforeach
            </div><!-- .row -->
        </div><!-- .featured-courses -->

       
    </div><!-- .col -->

    <!-- .col -->
</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div >
            
            <a id="link">
                <h4>
                    Exercise
                </h4> 
                <span id="count"></span>
                question
            </a> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
function endVideo(url,count,id){
    document.getElementById("link").setAttribute("href",url);
    document.getElementById("count").innerHTML=count;
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        $("#myModal").modal("show");
    }
  };
  xhttp.open("GET", "{{URL::to('/topic/view')}}/"+id, true);
  xhttp.send();
    
}
</script>
@endsection
