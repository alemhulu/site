@extends('admin.layouts.dashboard')

@section('content')
    
<!-- <div class="row align-items-center justify-content-center text-center ">
          <div class="col-md-12 "> 
            <div class="row justify-content-center m-4">
              <div class="col-md-8 text-center shado-sm">
                <h1 class="animated bounce "  data-aos="fade-up">Welcome {{ Auth::user()->name }}</h1>
                <p data-aos="fade-up" data-aos-delay="100">You can Add Delete Edit News and other staffs </p>

                <div class=" btn btn-info btn-block">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

              </div>
            </div>
          </div>
        </div> -->

          
<div class="container-fluid py-2" > 
        <form id="addResourceForm" action="resources" method="POST" enctype="multipart/form-data">
            @csrf

        

            <div class="row bg-light">
                <div class="col-md-12 mx-auto  shadow-sm">
                    <div class="text-center" id="upload_space" ><h3 class=" m-3 underline ">Upload Page</h3> </div>
                    <div class="row pt-3" >
                        <div class="col-md align-self-center">
<!-- grade select dropdown -->
                            <div class="form-group row mb-2">
                                    <div class="col-2">
                                          <strong><label class="float-left" for="name">Grade</label></strong>
                                    </div>
                                     <div class="col-8">
                                          <select class="form-control" id="gradeChange"  name="grade_id" >
                                              @if(count($grades)>0)
                                               <option value="0" disabled selected>--Choose--</option>
                                             @foreach($grades as $grade)
                                              <option value="{{$grade->id}}"> <h1>{{$grade->name}}</h1> </option>
                                              @endforeach   
                                              @else
                                                  <option value="0">Add Grade</option>
                                              @endif 
                                        </select> 
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary btn-small px-1 py-0"data-toggle="modal" data-target="#addGradeModal"><i class="fas fa-plus p-2"></i></button>
                                    </div>
                                    
                             </div>
<!-- subject select dropdown -->
                             <div class="form-group row mb-2">
                                   <div class="col-2">
                                          <strong><label class="float-left" for="name">Subject</label></strong>
                                    </div>
                                     <div class="col-8">
                                        <select class="form-control formselect required"  name="course_id"   >
                                             @if(count($courses)>0)
                                            <option value="0" disabled selected>--Choose--</option>
                                             @foreach($courses as $course)
                                             <option value="{{$course->name}}"> {{$course->name}} </option>
                                              @endforeach     
                                             @else
                                            <option value="0"> Add Subject </option>
                                          @endif   
                                       </select>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary btn-small px-1 py-0" id="courseButton" data-toggle="modal" data-target="#addCourseModal"><i class="fas fa-plus p-2"></i></button>
                                    </div>
                            </div>
<!-- unit select dropdown -->
                             <div class="form-group row mb-2">
                                  <div class="col-2">
                                           <strong><label class="float-left">Unit</label></strong>
                                    </div>
                                     <div class="col-8">
                                         <select class="form-control formselect required" id="unitChange" name="unit_id"  >
                            
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary btn-small px-1 py-0  "data-toggle="modal" data-target="#addUnitModal"><i class="fas fa-plus p-2"></i></button>
                                    </div>
                            </div>
<!-- sub unit select dropdown -->
                             <div class="form-group row mb-2">
                                  <div class="col-2">
                                           <strong><label >Sub Unit</label></strong>
                                    </div>
                                     <div class="col-8">
                                          <select class="form-control formselect required" id="subunitChange" name="subunit_id" >
                                          </select> 
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary btn-small px-1 py-0"data-toggle="modal" data-target="#addSubUnitModal"><i class="fas fa-plus p-2"></i></button>
                                    </div>
                            </div>
<!-- language dropdown -->
                              <div class="form-group row mb-2">
                                  <div class="col-2">
                                           <strong><label >Language</label></strong>
                                    </div>
                                     <div class="col-8">
                                          <select class="form-control formselect required" id="languageChange" name="language_id" >
                                          @if (count($languages) > 0)
                                              <option value="" disabled selected>--Choose--</option>
                                              @foreach($languages as $language)
                                              <option value="{{$language->id}}">{{$language->name}}</option>
                                              @endforeach
                                          @else
                                             <option value="0"> Add Subject </option>
                                          @endif  
                                          </select> 
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary btn-small px-1 py-0"data-toggle="modal" data-target="#addlanguageModal"><i class="fas fa-plus p-2"></i></button>
                                    </div>
                            </div>
                            <!-- <div class="form-group row mb-2">
                                     <div class="col-2">
                                          <strong><label class="float-left">Content Type</label></strong>
                                    </div>
                                     <div class="col-8">
                                         <select class="form-control" for="type_id" name="type_id" id="typeChange">
                               
                                               @if(count($types)>0){
                                                 <option value="0"disabled selected>--Choose--</option>
                                                @foreach($types as $type)
                                                <option value="{{$type->id}}"> {{$type->name}} </option>
                                                @endforeach     
                                                   } 
                                              @else
                                               <option value="0"> Add Content Type </option>
                                               @endif   
                                        </select> 
                                    </div>
                                    <div class="col-2">
                                       <button type="button" class="btn btn-primary btn-small px-1 py-0"data-toggle="modal" data-target="#addTypeModal"><i class="fas fa-plus p-2"></i></button>
                                    </div>
                            </div> -->


                        </div>
                        <div class="col-md">

                            <div class="form-group row mb-2">
                                     <div class="col-3">
                                          <strong><label class="float-left">Content Type</label></strong>
                                    </div>
                                     <div class="col-7">
                                         <select class="form-control" for="type_id" name="type_id" id="typeChange">
                               
                                               @if(count($types)>0){
                                                 <option value="0"disabled selected>--Choose--</option>
                                                @foreach($types as $type)
                                                <option value="{{$type->id}}"> {{$type->name}} </option>
                                                @endforeach     
                                                   } 
                                              @else
                                               <option value="0"> Add Content Type </option>
                                               @endif   
                                        </select> 
                                    </div>
                                    <div class="col-2">
                                       <button type="button" class="btn btn-primary btn-small px-1 py-0"data-toggle="modal" data-target="#addTypeModal"><i class="fas fa-plus p-2"></i></button>
                                    </div>
                            </div>
                             <div class="form-group row mb-2">
                                  <div class="col-3">
                                           <strong><label class="float-left">Media Type</label></strong>
                                    </div>
                                     <div class="col-7">
                                         <select class="form-control" id="mediaChange"  name="media_id">
                                                 @if(count($medias)>0){
                                                 <option value="0" disabled selected>--Choose--</option>
                                                     @foreach($medias as $media)
                                                  <option value="{{$media->id}}"> {{$media->name}} </option>
                                                 @endforeach     
                                                   } 
                                                  @else
                                                   <option value="0">Add Media Type</option>
                                                  @endif   
                                      </select>   
                                    </div>
                                    <div class="col-2">
                                       <button type="button" class="btn btn-primary btn-small px-1 py-0"data-toggle="modal" data-target="#addMediaModal"><i class="fas fa-plus p-2"></i></button>
                                    </div>
                             </div>

                             <div class="form-group row mb-2">
                                  <div class="col-3">
                                            <strong><label class="float-left">Tag</label></strong>
                                    </div> 
                                    <div class="col-7">
                                            <input type="text" name="tag" class="form-control bg-white @error ('tag') alert alert-warning @enderror"  >
                                    </div>  
                              </div>
                            <div class="form-group row mb-2">
                                    
                                    <div class="col-3">
                                           <strong><label >Content Description</label></strong>
                                    </div> 
                                    <div class="col-7">
                                            <textarea class="form-control @error ('description') alert alert-warning @enderror" id="description" name="description"></textarea> 
                                    </div>
                            </div>
                            <!-- Link Idetification View -->
                            <div class="form-group row mb-2">
                                    
                                    <div class="col-3">
                                           <strong><label >Source</label></strong>
                                    </div> 
                                    <div class="col-7">
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="link1" name="link" class="custom-control-input" checked value="0">
                                          <label class="custom-control-label font-weight-bold" for="link1">Enternal</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="link2" name="link" class="custom-control-input" value="1">
                                          <label class="custom-control-label text-warning font-weight-bold" for="link2">External</label>
                                        </div>
                                    </div>
                            </div>                            

                        </div>

                  </div>
                  <ul class="nav mb-1">
                    <li ><button data-toggle="tab" href="#uploadFile" id="upload_file" class="mx-2 active btn btn-outline-primary">File Upload</button></li>
                    <li><button data-toggle="tab" href="#uploadFolder" id="upload_folder" class="mx-2  btn btn-outline-primary">Folder Upload</button></li>
                  </ul>

                  <div class="tab-content">
                    <div id="uploadFile" class="tab-pane active">
                    <h4 >  <strong ><label>Upload File</label></strong></h4>
                        <div class="input-group">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button" id="button-file">Upload File</button>
                            </div>
                            <input type="text" id="fileLocation" class="form-control" name="fileLocation" placeholder="File Location">
                        </div>
                  </div>
                  <div id="uploadFolder" class="tab-pane fade">
                  <h4 >  <strong ><label>Upload Folder</label></strong></h4>
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="button-folder">Upload Folder</button>
                            </div>
                            <input type="text" id="folderLocation" class="form-control" name="folderLocation" placeholder="Folder Location">
                    </div>
              </div>
  
</div>
                             

                             
                               <h4 class="mt-4">  <strong ><label>Select Thumbnail</label></strong></h4>
                            <div class="input-group">
                                    <button class="btn btn-primary" type="button" id="button-thumbnail">Select</button>
                                    <input type="text" id="thumbnailLocation" class="form-control" name="thumbnailLocation" placeholder="Thumbnail Location">
                            </div>
                           
                            
                             
                             <div class="flex items-center justify-end ">
                                 

                                     <input type="Submit" class="btn float-right mt-2 text-white" value="Create" style="background-color:rgb(31,72,162);">
                            </div>
                    </div>
             </div>
        
    </form>  
    </div>
 
                    
<!-- Content type ------------------------------------------------------->



 <!-- AddGrade Modal -->

<div class="modal fade" id="addGradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Register new Grade</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
          <form id="addGradeForm">
              @csrf 
              <div class="form-group">
                 <div class="row">
                      <div class="col-4 mt-5 "><strong><label for="name">Grade</label></strong></div>
                      <div class="col-8 mt-5"><input type="number" class="form-control"  name="name" placeholder="Name" step="1" min="1" max="12" required></div> 
                </div>
             </div> 
             <div class="modal-footer">
                <button type="button" class="btn lblue" data-dismiss="modal">Close</button>
                <button type="button" id="grade" class="btn btn-primary">Create</button>
            </div>
        </form>
      </div>
  </div>
</div>
</div>
 
 <!-- End--------------------------------------------------------------------------------------------------------- -->

<!-- AddCourse Modal ------------------------------------------------------------------------------>

<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register new Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form id="addCourseForm">
              @csrf 
              <div class="form-group">
              <div class="row">
                    <div class="col-4"><div><strong><label>Grade</label></strong></div>
                        <input value="" type="number" id="gradeValue"  class="form-control" disabled ><input value="" type="number" id="grade_id" name="grade_id" hidden></div>
                        <div class="col-8 "><div><strong><label>Name</label></strong></div>
                        <input class="form-control" type="text" name="name" required></div> 
                        </div>
              </div> 
              <div class="modal-footer">
                    <button type="button" class="btn lblue" data-dismiss="modal">Close</button>
                    <button type="button" id="course" class="btn btn-primary">Create</button>
             </div>
           </form>
      </div>
</div>
</div>
</div>

<!-- End ------------------------------------------------------------------------------------------------------------------->



  <!-- AddUnitModal--------->

<div class="modal fade" id="addUnitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register new Unit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form id="addUnitForm" >
              @csrf 
              <div class="form-group">
              <div class="row">
                    <div class="col"><div><strong><label>Subject</label></strong></div>
                        <input value="" type="text" id="courseValue"  class="form-control" disabled ><input value="" type="number" id="course_id" name="course_id" hidden >
                    </div>
                    <div class="col "><div><strong><label>Unit</label></strong></div>
                        <input type="number" class="form-control" name="name" placeholder="Name" step="1" min="1" max="20" required>
                    </div>
                    <div class="col"><div><strong><label>Title</label></strong></div>
                        <input type="text" class="form-control"  name="title" placeholder="Name"  required>
                  </div>
              </div> 
              <div class="modal-footer">
                    <button type="button" class="btn lblue" data-dismiss="modal">Close</button>
                    <button type="button" id="unit" class="btn btn-primary ">Create</button>
             </div>
           </div>
        </form>
      </div>
</div>
</div>
</div>  

<!-- End ------------------------------------------------------------------------------------------------------------------>

        

<!-- AddLanguageModal -->

<div class="modal fade" id="addlanguageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Language</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form id="addLanguageForm" >
              @csrf 
              <div class="form-group">
              <div class="row">
                    <div class="col">
                        <strong><label>Language</label></strong>                           
                    </div>
                   
                    <div class="col">
                        <input type="text" class="form-control"  name="language" placeholder="Name"  required>
                  </div>
              </div> 
              <div class="modal-footer">
                    <button type="button" class="btn lblue" data-dismiss="modal">Close</button>
                    <button type="button" id="language" class="btn btn-primary">Create</button>
             </div>
           </div>
        </form>
      </div>
</div>
</div>
</div>  


<!-- AddSubunitModal -->

<div class="modal fade" id="addSubUnitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register new Sub-Unit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form id="addSubUnitForm" >
              @csrf 
              <div class="form-group">
              <div class="row">
                    <div class="col"><div><strong><label>Unit</label></strong></div>
                        <input value="" type="text" id="unitValue"  class="form-control" disabled ><input value="" type="number" id="unit_id" name="unit_id" hidden>
                    </div>
                    <div class="col "><div><strong><label>Sub-Unit</label></strong></div>
                        <input type="number" class="form-control" name="name" placeholder="Name" step="0.1" min="1" max="12" required>
                    </div>
                    <div class="col"><div><strong><label>Title</label></strong></div>
                        <input type="text" class="form-control"  name="title" placeholder="Name"  required>
                  </div>
              </div> 
              <div class="modal-footer">
                    <button type="button" class="btn lblue" data-dismiss="modal">Close</button>
                    <button type="button" id="subunit" class="btn btn-primary">Create</button>
             </div>
           </div>
        </form>
      </div>
</div>
</div>
</div>  



<!-- Content type Modal -->

<div class="modal fade" id="addTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Content type </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form id="addTypeForm" >
              @csrf 
              <div class="form-group">
              <div class="row">
                    <div class="col-3"><strong><label>Content Type</label></strong></div>
                    <div class="col-9 mb-0 ">
                        <input type="text" class="form-control"  name="name" placeholder="Content type"  required>
                    </div>
            
                       
              </div> 
              </div> 

              <div class="modal-footer mt-0">
                    <button type="button" class="btn lblue" data-dismiss="modal">Close</button>
                    <button type="button" id="type" class="btn btn-primary">Create</button>
                  </div>
             </div>
           </form> 
         </div>
      
      
</div>
</div>
</div>  

<!-- Media type Modal -->

<div class="modal fade" id="addMediaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Media type </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form id="addMediaForm" >
              @csrf 
              <div class="form-group">
              <div class="row">
                    <div class="col-3"><strong><label>Media Type</label></strong></div>
                    <div class="col-9 mb-0 ">
                        <input type="text" class="form-control"  name="name" placeholder="Media type"  required>
                    </div>
            
                       
              </div> 
              </div> 

              
              <div class="modal-footer mt-0 sticky-footer">
                    <button type="button" class="btn lblue" data-dismiss="modal">Close</button>
                    <button type="button" id="media" class="btn btn-primary">Create</button>
                  </div>

           </form> 
         </div>
</div>
</div>
</div>

@include('admin.dashboardJs')
  <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jQuery3.5.1.js"></script>
          <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
        <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
        <script src="/assets/js/uploadJs.js"></script>

@endsection
   

