@extends('layouts.app2')
@section('content')
@section('homeStyle')
<link rel="stylesheet" href="/assets/css/homeStyle.css">
@endsection
<section>
<div class=" container-fluid">

 <form class="form  justify-content-start my-1 " id="searchForm" >
                            <div class="input-group col" ><input class="bg-light form-control border-0 small shadow-sm px-2"  type="text" placeholder="Search for ..." id="myInput" autocomplete="off" type="text" >
                            <div class="input-group-append"><button class="btn btn-outline py-0 shadow-sm zoom" type="submit" ><i class="fas fa-search"></i></button></div>
                            </div>
  </form>
  
  <div class="row">
    <div class=" collapse "  id="navbarSupportedContent">
      
        
        <div class=" mt-3" >
               <ul class="navbar-nav mr-auto ">
      <button class="btn btn-block text-left p-2 buttonMenu border mb-1 zoom ga bold " id="headingOne" data-toggle="collapse" data-target="#gradeCollaps" 
                    aria-expanded="true" aria-controls="gradeCollaps"
                    style="font-size: 16px;font-family: sans-serif Gotham ;"  >
                Grades 
            </button>
             <div id="gradeCollaps" class="collapse hide shadow-sm" aria-labelledby="headingOne" >
              <div id="gradeFilter">
                @if(count($grades)>0) 
                <ul style="color:black;">
                @foreach($grades as $grade)
                <li><input type="radio"class="form-check-input " name="grade" value="{{$grade->id}}" id="gradeId" onchange="filter()" ><h6>Grade - {{$grade->name}}</h6></li>
                @endforeach
                </ul>
                @endif
              </div>
            </div>
               
              
           
        
        <!-- Course Menu -->
       
            
            
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-1 zoom CB bold" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
            Course
            </button>
            
          
          <div id="collapseTwo" class="collapse hide  shadow" aria-labelledby="headingTwo" >
              <div id="courseFilter">
              @if(count($courses)>0) 
              <ul  style="color:black;">
              @foreach($courses as $course)
              <li><input type="checkbox"class="form-check-input resource_check" value="{{$course->id}}"  id="courseId" onchange="filter()" ><h6>{{$course->name}}</h6></li>
              @endforeach
              </ul>
              @endif
              </div>
          </div>
        
        <!-- Unit Menu -->
        
          
            
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-1 zoom UB bold" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  >
            Unit
            </button>
            
         
          <div id="collapseThree" class="collapse  shadow" aria-labelledby="headingThree" >
            <div id="unitFilter">
              @if(count($units)>0) 
              <ul style="color:black;" >
              <!-- @foreach($units as $unit)
              <li><input type="checkbox"class="form-check-input resource_check" value="{{$unit->id}}" id="unitId" onchange="filter()"><h6> {{$unit->title}}</h6></li>
              @endforeach -->
              </ul>
              @endif
            </div>
          </div>
        
        <!-- Subunit Menu -->
        
          
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-1 zoom SUB bold" id="headingfour" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
            Sub-Unit
            </button>
            
          <div id="collapsefour" class="collapse shadow" aria-labelledby="headingfour" >
            <div id="subunitFilter">
              @if(count($subunits)>0) 
              <ul id="" style="color:black;">
              <!-- @foreach($subunits as $subunit)
              <li><input type="checkbox"class="form-check-input resource_check" onchange="filter()"  value="{{$subunit->id}}" id="subunitId"><h6> {{$subunit->title}}</h6></li>
              @endforeach -->
              </ul>
              @endif
           </div>
          </div>
       
        <!-- Content Type Menu -->
        
            
            
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-1 zoom CTB bold" id="headingfive" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
            Content Type
            </button>
            
          
          <div id="collapsefive" class="collapse shadow" aria-labelledby="headingfive" >
            <div >
              @if(count($types2)>0) 
              <ul id="" style="color:black;">
              @foreach($types2 as $type)
              <li><input type="checkbox"class="form-check-input resource_check" onchange="filter()"  value="{{$type->id}}" id="typeId"><h6> {{$type->name}}</h6></li>
              @endforeach
              </ul>
              @endif
            </div>
          </div>
      
        <!-- Media Type Menu -->
        
          
            
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-1 zoom MTB bold" id="headingsix" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
            Media Type
            </button>
           
          
          <div id="collapsesix" class="collapse shadow" aria-labelledby="headingsix" >
           <div>
              @if(count($medias)>0) 
              <ul id="" style="color:black;">
              @foreach($medias as $media)
              <li><input type="checkbox"class="form-check-input resource_check" onchange="filter()"  value="{{$media->id}}" id="mediaId"><h6> {{$media->name}}</h6></li>
              @endforeach
              </ul>
              @endif
           </div>
          </div>
    </ul>
        </div> 
    </div>

  <div class="col-md">

      <div id="content" >
        <div id="result">
         <div id="result">

          @foreach($types as $type)
          @if(count($paginatedResources[$type->id])>0)
              <h4 class="m-0 mt-2  bg-white mb-2"><strong class="blackColor">{{$type->name}}</strong></h4>
                <div class="container-fluid ">
                <div class="row md">
           
                <?php
                    $resources=$paginatedResources[$type->id];
                 ?>
                  @foreach($resources as $resource)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4" id="linkColor">
                      <div class="zoom" data-toggle="tooltip" data-placement="top" title="{{$resource->description}}"
                            style=" position: relative;">
                        <a href="{{url('user',[$resource->id, $type->id])}}">                      
                        @if($resource->media->name == "Document"||$resource->media->name == "document" )
                        <img id="pdfView" value="{{$resource->id}}" src="{{$resource->thumbnailLocation}}" 
                        class="rounded-top shadow " alt="{{$resource->description}}">

                        @if($resource->link == 1)
                        <div class="text-warning py-1 px-2 font-weight-bold" 
                              style="background: rgb(0, 0, 0);background: rgba(0, 0, 0, 0.7); ">
                              External Resource  ( Non-MoE ) <span class="icon icon-download"></span>
                        </div>
                        @endif

                        @elseif($resource->media->name == "Video"||$resource->media->name == "video")
                        <img id="videoView" src="{{$resource->thumbnailLocation}}"class="rounded-top shadow "  alt="{{$resource->description}}">
                          
                       @if($resource->link == 1)
                        <div class="text-warning py-1 px-2 font-weight-bold" 
                              style="background: rgb(0, 0, 0);background: rgba(0, 0, 0, 0.7); ">
                              External Resource  ( Non-MoE ) <span class="icon icon-download"></span>
                        </div>
                        @endif

                        @endif
                        
                        <div class="p-1 shadow rounded text-black">
                          @if($resource->unit_id=="" || $resource->subunit_id=="" || $resource->grade_id=="")
                          <h6 class="mb-0">{{$resource->course->name}} </h6>
                          <h6 class=" mb-2 text-truncate">{{$resource->description}} </h6>
                          <span class="date ">{{$resource->view}} Views  </span>
                          <span class="date float-right">{{$resource->created_at->diffForHumans() }}</span>
                          @else
                          <h6 class="mb-0">G-{{$resource->grade->name}} {{$resource->course->name}}</h6>
                          <h6 class="mb-0">Unit {{$resource->unit->name}} - {{$resource->unit->title}}</h6> 
                          <h6 class=" mb-2">Subunit {{$resource->subunit->name}} - {{$resource->subunit->title}}</h6>
                          <span class="date ">{{$resource->view}} Views </span>
                          <span class="date float-right">{{$resource->created_at->diffForHumans() }}</span>
                          @endif
                        </div>
                        </a>
                      </div>
                    
                    </div> 
                  @endforeach
        
                </div> 
               
              </div>    
               {!!$paginatedResources[$type->id]->appends(['types'=>$types->currentPage()])->links()!!}     
          @endif  
          
          @endforeach
        </div>
        <div class="mt-5" id="paginateType">{!!$types->appends(['resources'=>$resources->currentPage()])->links('user.paginateResource')!!}</div>
        </div>
     
      </div>
      <div id="filter"></div>
  

    <!-- <a class="border rounded d-inline scroll-to-top" href="#page-top"><div id="page-top-botton"><i class="fas fa-angle-up"></i></div></a> -->
    <footer class="bg-white sticky-footer">
    <div class="container my-auto">
    <div class="text-center my-auto copyright fixed-bottom"><span>Copyright © MoE 2020</span></div>
    </div>
    </footer>  
  </div> <!-- col 10 end-->


  </div>   
</div>
</section>
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script>var countries = <?php echo json_encode($tag); ?>;</script>
<script src="/assets/js/home.js"></script>
@endsection



