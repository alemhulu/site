@extends('layouts.app3')
@section('content')
@section('singleStyle')
<link rel="stylesheet" type="text/css" href="/fonts/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/singleStyle.css"> 
@endsection
<div id="wrapper"  >
<div class="view" style="display:none;"><h2>Alemhulu Awekelgne Asfaw</h2></div>
        <nav class="navbar navbar-light align-items-start sidebar sidebar-dark shadow accordion p-0 sidenav" style="background-color: white;" id="sideMenu" >
            <div class="container-fluid d-flex flex-column p-0 ">
              <hr class="sidebar-divider my-0">
              <div class="text-center d-none d-md-inline "><button class="btn rounded-circle dblue border-0 " id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>

  <div id="filter"></div>
        <div class="container-fluid" id="singleMainContainer">
          <div class="row mt-3"> 
              <div class="col-lg-8 col-md-12 " id="singleDisplay">
                  <div class="row" id="description_like_dislike">              
                                    <input type="number" id="fileId" value="{{$resource->id}}" hidden>
                                    <input type="text" id="path" value="{{$resource->fileLocation}}" hidden>
                                    <input type="text" id="content" value="{{$resource->media->name}}" hidden>
                     <div class="col-lg-7 align-self-center py-1">
                        <p class="h5">{{$resource->description}} </p>
                     </div>
                      <div class="col-lg-5 text-right px-3 align-self-center h4 text-secondary">
                        <button class="btn btn-sm"><span class="icon icon-thumbs-up text-secondary h4"></span><span class="h5 text-secondary"> {{$resource->like}}</span></button>
                        <button class="btn btn-sm"><span class="icon icon-thumbs-down text-secondary h4"></span><span class="h5 text-secondary"> {{$resource->deslike}}</span></button>
                        <a href="{{$resource->fileLocation}}" download >
                        <button class="btn btn-sm download" id="download" onclick="download()">                          
                          <span class="icon icon-download text-secondary h4"></span><span class="h5 text-secondary" id="downloadCount"> {{$resource->download}}</span>                         
                        </button>
                        </a> 
                      </div>
                  </div> 
                  <div class=" p-0 shadow-sm" >
                   @if($resource->media->name == "Document" )
                          <div class="top-bar  d-flex justify-content-between" id="navPdf">
                              <div>
                                     <button class="btn1 zoom" id="prev-page">
                                     <img src="/buttons/previous.png" >
                                    <!--   <span class="icon-thumbs-up zoom"></span> -->
                                     </button>
                                    <input class="rounded" id="current_page" value="1" type="number"/>
                                     <button class="btn1 zoom" id="next-page">
                                     <img src="/buttons/next.png">
                                     </button>
                                      <span class="page-info" style="color:white;" id="page-info" >
                                    Page <span id="page-num" style="color:white;"></span> of <span id="page-count"style="color:white;"></span>
                                    </span>
                              </div>
                  
                              <div id="zoom_controls">  
                               <button class="btn1 border-right zoom" id="zoom_in">
                                   <img src="/buttons/zoomIn.png">
                                   </button>
                                   <button class="btn1 zoom" id="zoom_out">
                                   <img src="/buttons/zoomOut.png">
                                   </button>

                               </div>  
                                                       
                            <div> 
                                 <button class="btn1 float-right zoom">
                                      <a class="float-right " href="{{asset($resource->fileLocation)}}"><img  src="/buttons/download.png"></a>
                                 </button>
                                        <button class="btn1 float-right zoom">
                                 <a class="float-right " href="{{asset($resource->fileLocation)}}"><img  src="/buttons/full.png"></a>
                                </button>   
                            </div>
                        </div>

                           <div id="canvas_container">
                            <canvas id="pdf-render"></canvas>
                          </div>
                @elseif($resource->media->name == "Video"||$resource->media->name == "video")
                <div id="singleVideoContainer"> 
                    <video  class="card shadow-sm " id="singleVideo" src="{{asset($resource->fileLocation)}}" controls  autoplay ></video>
                </div>
                  
                @endif

                </div>
                <div class="row blackColor" id="views_uploadTime_1">
                    <div class="col-7 col-md-7"   >
                        <span class="date ml-3">{{$resource->view}} Views </span>
                    </div>
                    <div class="col-5 col-md-5">
                       <span class="date float-right mr-3">{{$resource->created_at->diffForHumans() }}</span>
                    </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-12 col-sm-12  " id="singleSideContainer"> 
                  <div class="row blackColor pt-2" id="views_uploadTime_2">
                    <div class="container-fluid"> 
                  <div class="row"> 
                     <div class="col-9 p-0">  
                      {{$resource->view}} Views
                     </div>
                     <div class="col-3 p-0">  
                      {{$resource->created_at->diffForHumans() }}
                     </div>
                  </div>
              </div>  
                </div>
                    @if(count($resources)>0)
                    <!-- <span class="icon-download text-info h1"></span> -->
                          <h4 class="mt-3 px-4"><strong>{{$type->name}}</strong></h4>
                            <div class="row px-4" > 
                                @foreach($resources as $resource1)
                                <div class="col-lg-12 col-md-6 col-sm-6 ">
                                  <a href="{{url('user',[$resource1->id, $type->id])}}">
                                  <div class="col-md   shadow-sm mb-3 ">
                                    <div class="row ">
                                       <div class="col-sm-12 col-md-12 p-0 text-truncate ">
                                           @if($resource1->media->name == "Document" )
                                            <img id="singlePdfScroll" src="{{asset($resource1->thumbnailLocation)}}" width="100% " height="150px" >
                                            @elseif($resource1->media->name == "Video"||$resource1->media->name == "video")
                                            <img id="singleVideoScroll" src="{{asset($resource1->thumbnailLocation)}}" width="100%" height="160px" >
                                            @endif
                                       </div> 
                         
                                       <div class="col-sm-12 col-md-12  blackColor flex-column p-2 bg-white"> 
                                       @if($resource1->unit_id=="" || $resource1->subunit_id=="" || $resource1->grade_id=="")
                                        <!-- <h5 class="card-title">{{$resource1->course->name}} </h5> -->
                                        <h6 class="card-text text-truncate">{{$resource1->description}} </h6>
                                        <span class="date ">{{$resource1->view}} Views </span><span class="date float-right">{{$resource->created_at->diffForHumans() }}</span>

                                       
                                        @else
                                        <!-- <h5 class="card-title">G-{{$resource1->grade->name}} {{$resource1->course->name}}</h5> -->
                                        <h6 class="card-text mt-auto">Unit {{$resource1->unit->name}}- {{$resource1->unit->title}}</h6> 
                                        <h6 class="card-text">Sub-Unit {{$resource1->unit->name}}- {{$resource1->subunit->title}}</h6>
                                        <span class="date mt-5">{{$resource1->view}} Views </span><span class="date float-right">{{$resource->created_at->diffForHumans() }}</span>

                                        @endif
                                      </div>
                                      </div>
                                  </div>  
                                </a>
                                </div>
                                
                                @endforeach
                         </div>    
                    @endif
              </div>
          </div>  
      </div>
    </div>
<script src="/assets/js/jQuery3.5.1.js"> </script>
@include('user.welcomeJs')
@if($resource->media->name=="Document")
 <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
 <script src="/assets/js/pdfView.js"></script>
@endif
<script>
function likeJs() {
  alert('like');
}

function dislikeJs() {
  alert('dilike');
}
</script>


<script>
function download()
{

      var file_id = $('#fileId').val();
      console.log(file_id);
          $.ajax
          ({
                url:'/file/download',
                method:'POST',
                data:{ "_token": "{{ csrf_token() }}" , file_id:file_id },

                success:function(response)
                  {
                    document.querySelector('#downloadCount').textContent =" "+ response;
      },
      error: function(error)
      {
                  alert("Error!  ");
      }
    });
  }
</script>
<script type='text/javascript'>
  var media=$('#content').val();
   if(media=="video" || media=="Video")
   {
    var type=$('#fileType').val();
    document.getElementById('view').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        var file_id=document.getElementById("fileId").value;
               $.ajax
                ({
                        url:'/view',
                        method:'Get',
                        data:{file_id:file_id},
                        success:function(response)
                        {
                        },
                        error: function(error)
                        {
                              alert("Error!  ");
                        }
                });

    }
   }

</script>

  <script>
   
    </script>
@endsection
