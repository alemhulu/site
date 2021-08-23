@extends('layouts.app3')  
@section('content')
@section('singleStyle')
<link rel="stylesheet" type="text/css" href="/fonts/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/singleStyle.css"> 
@endsection
@if($resource->media->name == "Document" )
  <div id="load">

  </div>
  <div id="contents">
    
  </div>
@endif
<div id="wrapper m-0 p-0" >
  <div class="view" style="display:none;"><h2>Alemhulu Awekelgne Asfaw</h2>
  </div>
  <nav class="navbar navbar-light align-items-start sidebar sidebar-dark shadow accordion p-0 sidenav" style="background-color: white;" id="sideMenu" >
    <div class="container-fluid d-flex flex-column p-0 ">
      <hr class="sidebar-divider my-0">
      <div class="text-center d-none d-md-inline "><button class="btn rounded-circle dblue border-0 " id="sidebarToggle" type="button"></button></div>
    </div>
  </nav>
  <div id="filter">

  </div>
        <div class="container-fluid" id="singleMainContainer">
          <div class="row m-0 p-0 mt-3"> 
          
              <div class="col-lg-8 col-md-12 " id="singleDisplay">
              <h2 id="test_status"></h2>
              <div  id="test" style="heght:150px;"></div>
                  <div class="row mx-5" id="description_like_dislike">              
                                    <input type="number" id="fileId" value="{{$resource->id}}" hidden>
                                    <input type="text" id="path" value="{{$resource->fileLocation}}" hidden>
                                    <input type="text" id="content" value="{{$resource->media->name}}" hidden>
                     <div class="col-7 align-self-center py-1">
                       @if($resource->grade_id=="")
                          <p class="h5"> {{$resource->description}} </p>
                       @else
                         <p class="h5">Gr-{{$resource->grade->name}} {{$resource->description}} </p>
                       @endif
                     </div>
                      <div class="col-5 text-right px-3 align-self-center h4 text-secondary">
                        <button class="btn btn-sm likeDislike"  id="likeButton" ><span class="icon icon-thumbs-up text-secondary h4 likeGroup "></span><span class="h5 text-secondary likeGroup" id="likeCount"> {{$resource->like}}</span></button>
                        <button class="btn btn-sm "id="dislikeButton"><span class="icon icon-thumbs-down text-secondary h4 dislikeGroup" ></span><span class="h5 text-secondary dislikeGroup" id="dislikeCount"> {{$resource->deslike}}</span></button>
                        <a href="{{$resource->fileLocation}}" download >
                        <button class="btn btn-sm download" id="download" onclick="download()">                          
                          <span class="icon icon-download text-secondary h4"></span><span class="h5 text-secondary" id="downloadCount"> {{$resource->download}}</span>                         
                        </button>
                        </a> 
                      </div>
                  </div> 
                  <div class=" p-0 shadow-sm " id="singleViewDiv">
                   @if($resource->media->name == "Document" )
                        <div id="single-main-pdf">
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
                                      <span class="page-info" style="color:white; font-size: 10px;" id="page-info" >
                                    Page <span id="page-num" style="color:white; font-size: 10px;"></span> of <span id="page-count"style="color:white; font-size: 10px;"></span>
                                    </span>
                              </div>
                  
                              <div id="zoom_controls">  
                               <button class="btn zoom" id="zoom_in">
                                   <img src="/buttons/zoomIn.png">
                                   </button>
                                   <button class="btn1 zoom" id="zoom_out">
                                   <img src="/buttons/zoomOut.png">
                                   </button>

                               </div>  
                                                       
                            <div> 
                                 <button class="btn1 float-right zoom">
                                      <a class="float-right " href="{{asset($resource->fileLocation)}}" id="downloadPdf" download><img  src="/buttons/download.png"></a>
                                 </button>
                                        <button class="btn1 float-right zoom" id="fullPdfDesktop">
                                 <a class="float-right " href="{{asset($resource->fileLocation)}}" ><img  src="/buttons/full.png"></a>
                                </button> 
                                <button class="btn1 float-right zoom" id="fullPdfMobile">
                                <img  src="/buttons/full.png">
                                </button> 
                            </div>
                          </div>

                           <div id="canvas_container">
                            <!-- <canvas id="pdf-render"></canvas> -->
                          </div>
                    </div>
                @elseif($resource->media->name == "Video"||$resource->media->name == "video")
                
                <div id="single-main-video " class=""  style="heght:50px;"> 
                    @if($resource->fileName!="")
                    {!!$resource->fileName!!}                   
                    @else
                    <video  class="card shadow-sm " id="singleVideo" src="{{asset($resource->fileLocation)}}" controls  autoplay ></video>

                    @endif
                </div>
                                             <!-- <span>
                  <a class="nav-link"
                    href="https://www.facebook.com/sharer/sharer.php?u=http://elearn.moe.gov.et/user/115/9">
                    <i class="fab fa-facebook-f"></i> share
                  </a>
                </span> -->
                @endif

                </div>
                <div class="row mx-5" id="views_uploadTime_1">
                    <div class="col-4 col-md-5"   >
                        <span class="date ">{{$resource->view}} Views </span>
                    </div>
                    <div class="col-6 col-md-5">
                          @if($resource->media->name !== "Document" )
                             <button class="btn btn-small btn-primary" id="quiz">quiz</button>
                          @endif
                    </div>
                    
                    <div class="col-2 col-md-2">
                       <span class="date float-right ">{{$resource->created_at->diffForHumans() }}</span>
                    </div>
                </div>
              </div>
            
              <div class="col-lg-4 col-md-12 col-sm-12" id="sidebar_div"> 
              
              @if($resource->media->name == "Document" || $resource->media->name == "document")
                <div id="single-side-pdf">
                @elseif($resource->media->name == "Video"||$resource->media->name == "video")
                <div id="single-side-video">
                <div class="d-flex justify-content-between views_uploadTime_2" >
                   
                        <div >{{$resource->view}} Views </div>
                        <div> 
                            @if($resource->media->name !== "Document" )
                                  <button class="btn btn-small btn-primary py-0 m-0" id="quiz2">quiz</button>
                             @endif
                        </div>
                       <div>{{$resource->created_at->diffForHumans() }}</div>
                    
                </div>
                @endif
                  @if(count($paginatedResources)>0)
                    <!-- <span class="icon-download text-info h1"></span> -->
                          <h4 class="mt-3 px-4"><strong>{{$type->name}}</strong></h4>
                            <div class="row px-4" > 
                                @foreach($paginatedResources as $resource1)
                                <div class="col-lg-12 col-md-6 col-sm-6 ">
                                  <a href="{{url('user',[$resource1->id, $type->id])}}">
                                  <div class="col-md   shadow-lg mb-3  zoom">
                                    <div class="row ">
                                       <div class="col-sm-12 col-md-12 col-lg-7 p-0  ">
                                           @if($resource1->media->name == "Document" )
                                            <img id="singlePdfScroll" src="{{asset($resource1->thumbnailLocation)}}"  >
                                            @elseif($resource1->media->name == "Video"||$resource1->media->name == "video")
                                            <img id="singleVideoScroll" src="{{asset($resource1->thumbnailLocation)}}"  >
                                            @endif
                                       </div> 
                                        
                                       <div class="col-sm-12 col-md-12 col-lg-5  blackColor flex-column p-2 " id="sidebarText"> 
                              
                                        <h6 class="card-text " style="font-size:12px; font-weight:bold;">{{$resource1->description}} </h6>
                                      
                                         <!-- <button class="btn btn-sm download zoom border shadow" style="position:relative; top:20%; left:40%;" value="{{$resource->id}}" style="font-size:13px;"  >                          
                                            <span class="icon icon-download "></span><span class=" id="downloadCount"> {{$resource->download}}</span>                         
                                          </button> -->                               
                                        <div id="sidebarViewAndTime" style="font-size:12px; font-weight:bold;"><span class="date" >{{$resource1->view}} Views </span><span class="date float-right">{{$resource->created_at->diffForHumans() }}</span></div>

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
      <div class="mt-5">{{$paginatedResources->links('user.singlePaginate')}}</div>
      <!-- <a class="border rounded d-inline scroll-to-top" href="#page-top" id="page-top-button"><i class="fas fa-angle-down"></i></a> -->
    <footer class=" sticky-footer">
    <div class="container my-auto">
    <div class="text-center my-auto copyright fixed-bottom"><span>Copyright © MoE 2020</span></div>
    </div>
    </footer>
    </div>
  
<script src="/assets/js/jQuery3.5.1.js"> </script>

@if($resource->media->name=="Document")
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
    <!-- <script src="/assets/js/pdfView.js"></script> -->
    <script src="/assets/js/pdfScroll.js"></script>

@else
    <script src="/assets/js/singleVideo.js"></script>

@endif
<script>
var media=$('#content').val();
let countries = <?php echo json_encode($tag); ?>;
 like=<?php echo json_encode($like); ?>;
 dislike=<?php echo json_encode($dislike);?>;
</script>

<script>
 if (media=='document'|| media=='Document'){
  var downloadPdf=document.getElementById('downloadPdf');
  downloadPdf.addEventListener('click', function(){
    download();
  });
}
</script>

<script>
function download()
{

      file_id = $('#fileId').val();
     $.ajax ({
                url:'/file/download',
                method:'POST',
                data:{ "_token": "{{ csrf_token() }}" , file_id:file_id },
                success:function(response){
                    document.querySelector('#downloadCount').textContent =" "+ response;
                 },
                error: function(error){
                    alert("Error!  ");
                }
      });   
  }

</script>


<script>
if(media=='video'||media=='Video'){
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC,chD, correct = 0;
var questions = [];
test = _("test");
result_global = [];
pos = 0;
correct = 0; 

function renderQuestion(result){
  // selectId('page-top-button').click();
  result_global = result;
  questions=result;
  console.log(result_global);
	if(pos >= questions.length){
		test.innerHTML = "<h2 id='question'>You got "+correct+" of "+questions.length+" questions correct</h2>";
		_("test_status").innerHTML = "Test Completed";
	
		return false;
	}
	_("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;

	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
  chD = questions[pos][4];
  
	test.innerHTML = "<h3>"+question+"</h3>";
	test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
  if(chC && chD !== 'null'){
	test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br>";
  test.innerHTML += "<input type='radio' name='choices' value='D'> "+chD+"<br><br>";
  }
 
	test.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";
}
function checkAnswer(){
	choices = document.getElementsByName("choices");
  
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
      
		}
	}
  console.log(choice+""+questions[pos][4]);
	if(choice == questions[pos][5]){
		correct++;
	}
 
	pos += 1;
  
	renderQuestion(result_global);
}
   function _(x){
     return document.getElementById(x);
   }
   const quiz=_('quiz');
   const quiz2=_('quiz2');
   const singleDiv=_('singleDisplay');

  quiz.addEventListener('click', function(){
      quizRender();
    });
  quiz2.addEventListener('click', function(){
     $('#singleDisplay').css('position','static');
    quizRender();
      
      
      $('.views_uploadTime_2').empty()
      $('#sidebar_div').empty();
      
    });
  function quizRender(){
    
                $.ajax
                ({
                        url:'/quiz',
                        method:'Get',
                        data:{file_id:file_id},
                        success:function(response)
                        {
                          var items = [{"fields": {"diameter": 23.0, "neighbourhood": "WEST END"}, "model": "hug.tree", "pk": 345}, {"fields": {"diameter": 14.0, "neighbourhood": "MOUNT PLEASANT"}, "model": "hug.tree", "pk": 484}];
                         
var i = 0, result = [];

while(i < response.length){
    result.push([])
    for(var key in response[i]){
        result[result.length-1].push(response[i][key])	;
    }
    i++
}

// console.log(result);
// document.write(JSON.stringify(result, null, 4));
if(result.length==0){
  
  
}
else{
  $('#description_like_dislike').empty();
    $('#singleViewDiv').empty();
    $('#views_uploadTime_1').empty();
    $('#views_uploadTime_2').empty();
    test.style = "border:#000 2px solid; padding:10px 40px 40px 40px;";
  renderQuestion(result);
}

                        },
                        error: function(error)
                        {
                              alert("Error!  ");
                        }
                });
   
  
}
  }
    </script>
<!-- <script>
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";
      },1000);
  }
}
</script> -->
@endsection
