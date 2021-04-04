<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Grade;
use App\Models\Unit;
use App\Models\Subunit;
use App\Models\Type;
use App\Models\Resource;
use App\Models\Media;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use DB;
//use storage;

class WelcomeController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
                public function index()
                { 
                        $tag = [];
                                $grades=Grade::orderBy('name','asc')->get();
                        $courses = Course::select('name')->distinct()->orderBy('name','asc')->get();
                        // $courses = Course::where('grade_id',null)->orderBy('name','asc')->get();
                        //$courses=Course::all();
                        $resources=Resource::orderBy('created_at','asc')->where('published',1)->get();
                        $resources0=Resource::where('published',1)->groupBy('tag')->pluck('tag');
                        $resources1=Grade::pluck('name');
                        $resources2=Course::groupBy('name')->pluck('name');
                        $resources3=Unit::groupBy('title')->pluck('title');
                        $resources4=Subunit::groupBy('title')->pluck('title');
                        $resources5=Media::groupBy('name')->pluck('name');
                        $resources6=Type::groupBy('name')->pluck('name');
                        $resources7=Resource::where('published',1)->groupBy('description')->pluck('description');
                        foreach($resources0 as $tags)
                        {
                        if($tags!=null)
                                array_push($tag, $tags);
                        }
                        foreach($resources1 as $tags)
                                {
                                $tags=(string)$tags;
                                        array_push($tag, $tags);
                                }
                        foreach($resources2 as $tags)
                                {
                                if($tags!=null)
                                        array_push($tag, $tags);
                                }
                        foreach($resources3 as $tags)
                                {
                                if($tags!=null)
                                        array_push($tag, $tags);
                                }
                        foreach($resources4 as $tags)
                                {
                                if($tags!=null)
                                        array_push($tag, $tags);
                                }
                        foreach($resources4 as $tags)
                                {
                                if($tags!=null)
                                        array_push($tag, $tags);
                                }
                        foreach($resources5 as $tags)
                                {
                                if($tags!=null)
                                        array_push($tag, $tags);
                                }
                        foreach($resources6 as $tags)
                                {
                                if($tags!=null)
                                        array_push($tag, $tags);
                                }
                        foreach($resources7 as $tags)
                                {
                                if($tags!=null)
                                        array_push($tag, $tags);
                                }
                        $tag = array_values(array_unique($tag));
                        //  $tag = [];

                                $types=Type::orderBy('name','desc')->get();
                                
                                $paginatedResources = [];
                                foreach($types as $type){
                                        $paginatedResources[$type->id] = ($type->allresources($type->id));
                                }
                                
                                // return $paginatedResources;

                                $types = Type::inRandomOrder()->paginate(3,['*'],'types');
                                $types2 = Type::orderBy('name','asc')->get();
                                $units=Unit::orderBy('title','asc')->get();
                                $subunits=Subunit::orderBy('title','asc')->get();
                                $medias=Media::orderBy('name','asc')->get();
                                return view('user.welcome2',compact('grades','courses','types', 'resources','medias','units','subunits','tag','paginatedResources','types2'));
                }

                // // pagination function
                // function fetch_data(Request $request){
                
                //          $types=Type::orderBy('name','desc')->get();
                        
                //         $paginatedResources = [];
                //         foreach($types as $type){
                //             $paginatedResources[$type->id] = ($type->allresources($type->id));
                //         }
                //         return view ('user.paginateResource',compact('types','paginatedResources'));

                        
                // }

                /**
         * Show the form for creating a new resource.
                *
                * @return \Illuminate\Http\Response
                */
        public function create()
                {
                
                }

                /**
                * Store a newly created resource in storage.
                *
                * @param  \Illuminate\Http\Request  $request
                * @return \Illuminate\Http\Response
                */
        public function store(Request $request)
        {
                //
        }
 
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function view(Request $request)
        {
                $resource=Resource::find($request->file_id);
        $resource->increment('view', 1); 
        }
        
        /**
                * show from the database.
                *
                * @param  \Illuminate\Http\Request  $request
                * @return \Illuminate\Http\Response
                */
        public function show( $id,$type)
        {   
                $tag = [];
                        $grades=Grade::orderBy('name','asc')->get();
                // $courses = Course::select('name')->distinct()->get();
                $courses = Course::where('grade_id',null)->orderBy('name','asc')->get();
                //$courses=Course::all();
                $resources=Resource::orderBy('created_at','asc')->where('published',1)->get();
                $resources0=Resource::where('published',1)->groupBy('tag')->pluck('tag');
                $resources1=Grade::pluck('name');
                $resources2=Course::groupBy('name')->pluck('name');
                $resources3=Unit::groupBy('title')->pluck('title');
                $resources4=Subunit::groupBy('title')->pluck('title');
                $resources5=Media::groupBy('name')->pluck('name');
                $resources6=Type::groupBy('name')->pluck('name');
                $resources7=Resource::where('published',1)->groupBy('description')->pluck('description');
                foreach($resources0 as $tags)
                {
                if($tags!=null)
                        array_push($tag, $tags);
                }
        foreach($resources1 as $tags)
                {
                $tags=(string)$tags;
                        array_push($tag, $tags);
                }
        foreach($resources2 as $tags)
                {
                if($tags!=null)
                        array_push($tag, $tags);
                }
        foreach($resources3 as $tags)
                {
                if($tags!=null)
                        array_push($tag, $tags);
                }
        foreach($resources4 as $tags)
                {
                if($tags!=null)
                        array_push($tag, $tags);
                }
        foreach($resources4 as $tags)
                {
                if($tags!=null)
                        array_push($tag, $tags);
                }
        foreach($resources5 as $tags)
                {
                if($tags!=null)
                        array_push($tag, $tags);
                }
        foreach($resources6 as $tags)
                {
                if($tags!=null)
                        array_push($tag, $tags);
                }
        foreach($resources7 as $tags)
                {
                if($tags!=null)
                        array_push($tag, $tags);
                }
        $tag = array_values(array_unique($tag));
                $resource=Resource::find($id);
                $like=$resource->like;
                $dislike=$resource->deslike;
                if($resource->media->name=="Document" || $resource->media->name=="document"){
                $resource->increment('view', 1);
                }

                $type = Type::find($type);
        
                $paginatedResources = $type->resourcesPaginated($id);
                
                $tag=Resource::groupBy('tag')->pluck('tag');

                return view('user.single',compact('paginatedResources','type','resource','tag','like','dislike'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
                //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
                //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
                //
        }

        private $x=0;

        public function moeuser(Request $request)
        {
                $this->x=0;
                $output='';
                $courses='';
                $units='';
                $subunits='';
                $g=0;
                $c=0;
                $u=0;
                $su=0;
                $co=0;
                $m=0;
         
                // $commonCourses = Course::where('grade_id',null)->orderBy('name','asc')->get();
                 $commonCourses = Course::select('name')->distinct()->orderBy('name','asc')->get();
                $allUnits=Unit::orderBy('name','asc')->get();
                $allSubunits=Subunit::orderBy('name','asc')->get();
                if(isset($_POST['action']))
                {
                        $sql ='';
                if(isset($_POST['grade_id']))
                {
                        $g=1;
                                $grade_id = implode("','",$_POST['grade_id']);
                                $sql .=" where grade_id In ('$grade_id') ";
                                        //$sql = Resource::whereIn('grade_id',$_POST['grade_id']);
                        $this->x=1;
                        $courses=Course::whereIn('grade_id',$_POST['grade_id'])->orderBy('name','asc')->get();
                }
                if(isset($_POST['course_id']))
                                {
                        $c=1;
                                        $course_id = implode("','",$_POST['course_id']);
                        $units=Unit::whereIn('course_id',$_POST['course_id'])->orderBy('name','asc')->get();
                        if($this->x==0)
                                        {
                                                $sql .=" where course_id In ('$course_id') ";
                                                $this->x=1;
                                        }
                                        else
                                        {
                                                $sql .=" AND course_id In('$course_id')";
                                }
                                }

                        if(isset($_POST['unit_id']))
                {
                        $u=1;
                                $unit_id = implode("','",$_POST['unit_id']);
                        $subunits=Subunit::whereIn('unit_id',$_POST['unit_id'])->orderBy('title','asc')->get();
                                if($this->x==0)
                        {
                                        $sql .=" where unit_id In ('$unit_id') ";
                                        $this->x=1;
                                }
                                else
                        {
                                        $sql .=" AND unit_id In ('$unit_id')";
                        }

                        }
                if(isset($_POST['subunit_id']))
                {
                        $su=1;
                                $subunit_id = implode("','",$_POST['subunit_id']);
                                if($this->x==0)
                        {
                                        $sql .=" where subunit_id In ('$subunit_id') ";
                                        $this->x=1;
                                }
                                else
                                $sql .=" AND subunit_id In ('$subunit_id')";
                        }
                if(isset($_POST['type_id']))
                {
                        $co=1;
                                $type_id = implode("','",$_POST['type_id']);
                                if($this->x==0)
                        {
                                        $sql .=" where type_id In ('$type_id') ";
                        $this->x=1;
                                }
                                else
                                $sql .=" AND type_id In ('$type_id')";
                        }
                if(isset($_POST['media_id']))
                {
                        $m=1;
                                $media_id = implode("','",$_POST['media_id']);
                                if($this->x==0)
                        {
                                        $sql .=" where media_id In ('$media_id') ";
                                        $this->x=1;
                                }
                        else
                                $sql .=" AND media_id In ('$media_id')";
                        }
                }
                $prefix = "SELECT * from resources";
                $new_sql = $prefix.$sql;
        $types = Type::orderBy('created_at','asc')->get();
                $type_check = [];

        //return $new_sql;
                $resources = DB::select($new_sql);
        foreach($types as $type)
        {
                $type_check[$type->id] = 0;

                foreach($resources as $resource)
                {
                if($resource->type_id == $type->id)
                {
                $type_check[$type->id] += 1;
                }
                }
        }
        //  $resources2 = array_map(function ($value) {
        //  return (array)$value;
        //}, $resources2);
        //return $resources[0]->type;

        if(count($resources)==0)
                $output.="<h4 class='text-center bg-light'> No Resource is available for this selection! </h4>";

        else{
                $output.='<h4 class="mt-3 ml-2 bg-light text-center">Filtered Result</h4>';
                        $output.='<div class="container-fluid"><div class="row">';
                foreach($types as $type)
                {
                   if($type_check[$type->id] > 0){
                                $i = 0;
                //$output.='<p>'.$type->name.'</p>';
                $output.='<h4><strong class="mt-3 ml-2 Button Button-outline zoom gradeType" onclick="gradeTypeController()" value="'.$type->id.'" >'.$type->name.'</strong></h4>';
                $output.='<div class="container-fluid">';
                $output.='<div class="row">';
                foreach($resources as $resourceFiltered)
                {

                        //return $resourceFiltered;
                        $type2 = Type::findorfail($resourceFiltered->type_id);
                        
               if($type2->id==$type->id && $i<4 ){
                        //return $type;
                        $i++;
                        $output.='<div class="col-md-3 mb-3 blackColor " id="linkColor">';
                                $output.='<div class="card ">';
                                $resource=Resource::find($resourceFiltered->id);
                                if($resource->media->name == "Document"||$resource->media->name == "document" ){
                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.'"  >
                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                }
                                else{
                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.'"  >
                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                }
                                $output.= '<div class="card-body p-1">';
                               
                                        $output.= '<h6 class="mb-0">'.$resource->course->name.'</h6>
                                                  <h6 class=" mb-2 text-truncate">'.$resource->description.'</h6>
                                                  <div class="d-flex justify-content-between">
                                                        <span class="date">'.  $resource->view  .'  Views </span>
                                                        <a href="'.$resource->fileLocation.'" download>
                                                                 <button class="btn btn-sm download zoom" value="'.$resource->id.'" style="font-size:13px;"  >
                                                                        <span class="icon icon-download "></span><span id="downloadCount">'. $resource->download.'</span>
                                                                </button>
                                                        </a>
                                                        <span class="date float-right">'.$resource->created_at->diffForHumans() .'</span>
                                                </div>';
                                        $output.='</div></div></div>';
                                         
                }
        }
        $output.='</div></div>';
        }
        }
        $output.='</div></div>';
        }
        //End of fileter output
        //course filter
        return response()->json(['x'=>$this->x, 'g' => $g, 'c' => $c, 'u' => $u, 'su' => $su, 'co' => $co, 'm' => $m, 'commonCourses'=> $commonCourses, 'allUnits' => $allUnits, 'allSubunits'=> $allSubunits, 'output' => $output, 'courses' => $courses,  'units' => $units, 'subunits' => $subunits,]);
        }


        public function download(Request $request)
        {
                $resource=Resource::find($request->file_id);
                $resource->increment('download',1);
                return $resource->download;

        }

        public function fileDownload(Request $request)
        {       
                
                $resource=Resource::find($request->file_id);
                $resource->increment('download',1);
                return $resource->download;

        }
        // like function
        public function likeDislike(Request $request)
        {
        $like=$request->like;
        $dislike=$request->dislike;
        $resource=Resource::find($request->file_id);

        // if($like!=0)
        // {
        //     if($like==-1)
        //     {
        //         $resource->decrement('like',1);
        //     }
        //     elseif ($like==1)
        //      {
        //         $resource->increment('like',1);
        //     }
        // }
        
        // if($dislike!=0)
        // {
        //     if($dislike==-1)
        //     {
        //         $resource->decrement('deslike',1);
        //     }
        //      elseif ($dislike==1)
        //      {
                
        //        $resource->increment('deslike',1);
        //     }
        // }
        $resource->like=$like;
        $resource->deslike=$dislike;
        $resource->save();
        $like=$resource->like;
        $dislike=$resource->deslike;

        return response()->json([  'like' => $like, 'dislike' => $dislike]);
        


        }


        // tag
        public function tag(Request $request)
        {
        $tag=Resource::where("tag","LIKE","%{$request->input('query')}%")
                        ->orwhere("description","LIKE","%{$request->input('query')}%")
                        ->get();

        }
        public function search(Request $request){
                $output='';
                //$data=$request->query;
                //return response()->json($data);
                //  $search=Resource::where('tag',$query)->orderBy('created_at','desc')->get();

                $types = Type::orderBy('created_at','asc')->get();
                $resources = [];
        
                $resources1 = Resource::where("tag","LIKE","%{$request->input('query')}%")
                        ->orwhere("description","LIKE","%{$request->input('query')}%")
                                ->get();
                $resources2 = Subunit::where("title","LIKE","%{$request->input('query')}%")->get();
                $resources3 = Grade::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources4 = Course::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources5 = Unit::where("title","LIKE","%{$request->input('query')}%")->get();
                $resources6 = Media::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources7 = Type::where("name","LIKE","%{$request->input('query')}%")->get();
                foreach($resources1 as $resource){
                        array_push($resources, $resource);
                }
                foreach($resources2 as $subunit){
                        foreach($subunit->resources as $subresource){
                                array_push($resources, $subresource);
                        }
                }
                foreach($resources3 as $grade)
                {
                        foreach($grade->resources as $graderesource){
                                array_push($resources,$graderesource);
                        }
                }
                foreach($resources4 as $course){
                        foreach($course->resources as $courseresource){
                                array_push($resources,$courseresource);
                        }
                }
                foreach($resources5 as $unit){
                        foreach($unit->resources as $unitresource){
                                array_push($resources,$unitresource);
                        }
                }
                foreach($resources6 as $media){
                        foreach($media->resources as $mediaresource){
                                array_push($resources,$mediaresource);
                        }
                }
                foreach($resources7 as $type){
                        foreach($type->resources as $typeresource){
                                array_push($resources,$typeresource);
                        }
                }
                $resources = array_unique($resources);



                
                //$resources = collect($resources);

                //return $resources;
                
                $type_check = [];
                foreach($types as $type){
                        $type_check[$type->id] = 0;
                        foreach($resources as $resource){
                                if($resource->type_id == $type->id){
                                        $type_check[$type->id] += 1;
                                }
                        }
                }
                if(count($resources)==0)
                        $output.="<h4 class='text-center bg-light'> No Resource is available for this search! </h4>";
                else{
                        $output.='<h4 class="mt-3 ml-2 bg-light text-center">Search Result</h4>';
                        $output.='<div class="container-fluid"><div class="row">';
                        foreach($types as $type){
                        if($type_check[$type->id] > 0){
                                //$output.='<p>'.$type->name.'</p>';
                                $output.='<h4><strong class="mt-3 ml-2 Button Button-outline zoom" id=ResutlTittle>'.$type->name.'</strong></h4>';
                                $output.='<div class="container-fluid">';
                                $output.='<div class="row">';
                                foreach($resources as $resourceFiltered){
                                        //return $resourceFiltered;
                                        $type2 = Type::findorfail($resourceFiltered->type_id);
                                        if($type2->id==$type->id){
                                                //return $type;
                                                $output.='<div class="col-md-3 mb-3 blackColor " id="linkColor">';
                                                $output.='<div class="card ">';
                                                $resource=Resource::find($resourceFiltered->id);
                                                if($resource->media->name == "Document"||$resource->media->name == "document" ){
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                else{
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' "  >                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                $output.= '<div class="card-body p-1">';
                                               
                                                $output.= '<h6 class="mb-0">'.$resource->course->name.'</h6>
                                                <h6 class=" mb-2 text-truncate">'.$resource->description.'</h6>
                                                <div class="d-flex justify-content-between">
                                                        <span class="date">'.  $resource->view  .'  Views </span>
                                                        <a href="'.$resource->fileLocation.'" download>
                                                                 <button class="btn btn-sm download zoom" value="'.$resource->id.'" style="font-size:13px;"  >
                                                                        <span class="icon icon-download "></span><span id="downloadCount">'. $resource->download.'</span>
                                                                </button>
                                                        </a>
                                                        <span class="date float-right">'.$resource->created_at->diffForHumans() .'</span>
                                                </div>';
                                        $output.='</div></div></div>';
                                        }
                                }
                                $output.='</div></div>';
                        }       
                }
                $output.='</div></div>';
                }
                

                return $output;
                        //return response()->json($data);
        }
        //  Return More of Content Type
        public function typeMore(Request $request){
                $output='';
                //$data=$request->query;
                //return response()->json($data);
                //  $search=Resource::where('tag',$query)->orderBy('created_at','desc')->get();

                $types = Type::orderBy('created_at','asc')->get();
                $resources = [];
        
                $resources1 = Resource::where("tag","LIKE","%{$request->input('query')}%")
                        ->orwhere("description","LIKE","%{$request->input('query')}%")
                                ->get();
                $resources2 = Subunit::where("title","LIKE","%{$request->input('query')}%")->get();
                $resources3 = Grade::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources4 = Course::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources5 = Unit::where("title","LIKE","%{$request->input('query')}%")->get();
                $resources6 = Media::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources7 = Type::where("name","LIKE","%{$request->input('query')}%")->get();
                foreach($resources1 as $resource){
                        array_push($resources, $resource);
                }
                foreach($resources2 as $subunit){
                        foreach($subunit->resources as $subresource){
                                array_push($resources, $subresource);
                        }
                }
                foreach($resources3 as $grade)
                {
                        foreach($grade->resources as $graderesource){
                                array_push($resources,$graderesource);
                        }
                }
                foreach($resources4 as $course){
                        foreach($course->resources as $courseresource){
                                array_push($resources,$courseresource);
                        }
                }
                foreach($resources5 as $unit){
                        foreach($unit->resources as $unitresource){
                                array_push($resources,$unitresource);
                        }
                }
                foreach($resources6 as $media){
                        foreach($media->resources as $mediaresource){
                                array_push($resources,$mediaresource);
                        }
                }
                foreach($resources7 as $type){
                        foreach($type->resources as $typeresource){
                                array_push($resources,$typeresource);
                        }
                }
                $resources = array_unique($resources);



                
                //$resources = collect($resources);

                //return $resources;
                
                $type_check = [];
                foreach($types as $type){
                        $type_check[$type->id] = 0;
                        foreach($resources as $resource){
                                if($resource->type_id == $type->id){
                                        $type_check[$type->id] += 1;
                                }
                        }
                }
                if(count($resources)==0)
                        $output.="<h4 class='text-center bg-light text-black'> No Resource is available for this Type! </h4>";
                else{
                        $output.='<h4 class="mt-3 ml-2 bg-light text-center">'.$resource->type->name.'</h4>';
                        $output.='<div class="container-fluid"><div class="row">';
                        foreach($types as $type){
                        if($type_check[$type->id] > 0){
                                //$output.='<p>'.$type->name.'</p>';
                                $output.='<h4><strong class="mt-3 ml-2 blackColor" id=ResutlTittle>'.$type->name.'</strong></h4>';
                                $output.='<div class="container-fluid">';
                                $output.='<div class="row">';
                                foreach($resources as $resourceFiltered){
                                        //return $resourceFiltered;
                                        $type2 = Type::findorfail($resourceFiltered->type_id);
                                        if($type2->id==$type->id){
                                                //return $type;
                                                $output.='<div class="col-md-3 mb-3 blackColor " id="linkColor">';
                                                $output.='<div class="card ">';
                                                $resource=Resource::find($resourceFiltered->id);
                                                if($resource->media->name == "Document"||$resource->media->name == "document" ){
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                else{
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                $output.= '<div class="card-body p-1">';
                                                
                                          $output.= '<h6 class="mb-0">'.$resource->course->name.'</h6>
                                                  <h6 class=" mb-2 text-truncate">'.$resource->description.'</h6>
                                                  <div class="d-flex justify-content-between">
                                                        <span class="date">'.  $resource->view  .'  Views </span>
                                                        <a href="'.$resource->fileLocation.'" download>
                                                                 <button class="btn btn-sm download zoom" value="'.$resource->id.'" style="font-size:13px;" onclick="fileDownloadId()" >
                                                                        <span class="icon icon-download "></span><span id="downloadCount">'. $resource->download.'</span>
                                                                </button>
                                                        </a>
                                                        <span class="date float-right">'.$resource->created_at->diffForHumans() .'</span>
                                                </div>';
                                        $output.='</div></div></div>';
                                        }
                                }
                                $output.='</div></div>';
                        }       
                }
                $output.='</div></div>';
                }
                

                return $output;
                        //return response()->json($data);
        }
        
        
        //   //  Return More of Content Type
        public function searchCourse(Request $request){
                $output='';
                //$data=$request->query;
                //return response()->json($data);
                //  $search=Resource::where('tag',$query)->orderBy('created_at','desc')->get();

                $types = Type::orderBy('created_at','asc')->get();
                $resources = [];
        
                $resources1 = Resource::where("tag","LIKE","%{$request->input('query')}%")
                        ->orwhere("description","LIKE","%{$request->input('query')}%")
                                ->get();
                $resources2 = Subunit::where("title","LIKE","%{$request->input('query')}%")->get();
                $resources3 = Grade::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources4 = Course::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources5 = Unit::where("title","LIKE","%{$request->input('query')}%")->get();
                $resources6 = Media::where("name","LIKE","%{$request->input('query')}%")->get();
                $resources7 = Type::where("name","LIKE","%{$request->input('query')}%")->get();
                foreach($resources1 as $resource){
                        array_push($resources, $resource);
                }
                foreach($resources2 as $subunit){
                        foreach($subunit->resources as $subresource){
                                array_push($resources, $subresource);
                        }
                }
                foreach($resources3 as $grade)
                {
                        foreach($grade->resources as $graderesource){
                                array_push($resources,$graderesource);
                        }
                }
                foreach($resources4 as $course){
                        foreach($course->resources as $courseresource){
                                array_push($resources,$courseresource);
                        }
                }
                foreach($resources5 as $unit){
                        foreach($unit->resources as $unitresource){
                                array_push($resources,$unitresource);
                        }
                }
                foreach($resources6 as $media){
                        foreach($media->resources as $mediaresource){
                                array_push($resources,$mediaresource);
                        }
                }
                foreach($resources7 as $type){
                        foreach($type->resources as $typeresource){
                                array_push($resources,$typeresource);
                        }
                }
                $resources = array_unique($resources);

                // ramdomize the course filter
                shuffle($resources);


                
                //$resources = collect($resources);

                //return $resources;
                
                $type_check = [];
                foreach($types as $type){
                        $type_check[$type->id] = 0;
                        foreach($resources as $resource){
                                if($resource->type_id == $type->id ){
                                        $type_check[$type->id] += 1;
                                }
                        }
                }
                if(count($resources)==0)
                        $output.="<h4 class='text-center bg-light text-black'> No Resource is available for this Course! </h4>";
                else{
                        $output.='<h4 class="mt-3 ml-2 bg-light text-center ">'.$resource->course->name.'</h4>';
                        $output.='<div class="container-fluid"><div class="row">';
                       
                        foreach($types as $type){
                         
                        if($type_check[$type->id] > 0){
                                $i = 0;
                                //$output.='<p>'.$type->name.'</p>';
                                $output.='<h4><strong class="mt-3 ml-2 Button Button-outline zoom courseType"  id="'.$type->name.'" onclick="courseTypeFromController()">'.$type->name.'</strong></h4>';
                                $output.='<div class="container-fluid">';
                                $output.='<div class="row">';
                                foreach($resources as $resourceFiltered){
                                       
                                        //return $resourceFiltered;
                                        $type2 = Type::findorfail($resourceFiltered->type_id);
                                        if($type2->id==$type->id && $i<4){
                                                //return $type;
                                                 $i++;
                                                $output.='<div class="col-md-3 mb-3 blackColor " id="linkColor">';
                                                $output.='<div class="card ">';
                                                $resource=Resource::find($resourceFiltered->id);
                                                if($resource->media->name == "Document"||$resource->media->name == "document" ){
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.'  " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                else{
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                $output.= '<div class="card-body p-1">';
                                               
                                                  $output.= '<h6 class="mb-0">'.$resource->course->name.'</h6>
                                                  <h6 class=" mb-2 text-truncate">'.$resource->description.'</h6>
                                                  <div class="d-flex justify-content-between">
                                                        <span class="date">'.  $resource->view  .'  Views </span>
                                                        <a href="'.$resource->fileLocation.'" download>
                                                                 <button class="btn btn-sm download zoom" value="'.$resource->id.'" style="font-size:13px;" onclick="fileDownloadId()" >
                                                                        <span class="icon icon-download "></span><span id="downloadCount">'. $resource->download.'</span>
                                                                </button>
                                                        </a>
                                                        <span class="date float-right">'.$resource->created_at->diffForHumans() .'</span>
                                                </div>';
                                                $output.='</div></div></div>';
                                        }
                                }
                                $output.='</div></div>';
                        }       
                }
                $output.='</div></div>';
                }
                

                return $output;
                        //return response()->json($data);
        }

           //  Return All resources for a choosen content type
        public function courseType(Request $request){
               $type=Type::where('name', $request->type)->first();
               $course=Course::select('id')->where('name',$request->course)->get();
               $resources=Resource::where('type_id',$type->id)
               ->whereIn('course_id', $course)
               ->get();
               $output='';
              
                $output.='<h4 class="mt-3 ml-2 bg-light text-center ">'.$request->name.'</h4>';
                        $output.='<div class="container-fluid"><div class="row">';
                       
                        
                                //$output.='<p>'.$type->name.'</p>';
                                $output.='<h4><strong class="mt-3 ml-2 blackColor courseType" id="'.$type->name.'">'.$request->course.' '.$type->name.'</strong></h4>';
                                $output.='<div class="container-fluid">';
                                $output.='<div class="row">';
                                foreach($resources as $resourceFiltered){
                                       
                                        //return $resourceFiltered;
                                        $type2 = Type::findorfail($resourceFiltered->type_id);
                                        if($type2->id==$type->id){
                                                //return $type;
                                       
                                                $output.='<div class="col-md-3 mb-3 blackColor " id="linkColor">';
                                                $output.='<div class="card ">';
                                                $resource=Resource::find($resourceFiltered->id);
                                                if($resource->media->name == "Document"||$resource->media->name == "document" ){
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                else{
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                $output.= '<div class="card-body p-1">';
                                               
                                                  $output.= '<h6 class="mb-0">'.$resource->course->name.'</h6>
                                                  <h6 class=" mb-2 text-truncate">'.$resource->description.'</h6>
                                                  <div class="d-flex justify-content-between">
                                                        <span class="date">'.  $resource->view  .'  Views </span>
                                                        <a href="'.$resource->fileLocation.'" download>
                                                                 <button class="btn btn-sm download zoom" value="'.$resource->id.'" style="font-size:13px;" onclick="fileDownloadId()" >
                                                                        <span class="icon icon-download "></span><span id="downloadCount">'. $resource->download.'</span>
                                                                </button>
                                                        </a>
                                                        <span class="date float-right">'.$resource->created_at->diffForHumans() .'</span>
                                                </div>';
                                                $output.='</div></div></div>';
                                        }
                                }
                                $output.='</div></div>';
                   
                $output.='</div></div>';
                return $output;
        }

        // For choosed Grade return all resources by selected content type
        public function gradeType(Request $request){
                $type=Type::where('name', $request->type)->first();
                $grade=Grade::findorfail($request->grade);
               $resources=Resource::where('type_id',$type->id)
               ->where('grade_id', $request->grade)
               ->get();
                $output='';
              
                $output.='<h4 class="mt-3 ml-2 bg-light text-center "> Grade - '.$grade->name.' '.$type->name.'</h4>';
                        $output.='<div class="container-fluid"><div class="row">';
                       
                        
                                //$output.='<p>'.$type->name.'</p>';
                                $output.='<h4><strong class="mt-3 ml-2 blackColor courseType" id="'.$type->name.'">'.$request->course.' '.$type->name.'</strong></h4>';
                                $output.='<div class="container-fluid">';
                                $output.='<div class="row">';
                                foreach($resources as $resourceFiltered){
                                       
                                        //return $resourceFiltered;
                                        $type2 = Type::findorfail($resourceFiltered->type_id);
                                        if($type2->id==$type->id){
                                                //return $type;
                                       
                                                $output.='<div class="col-md-3 mb-3 blackColor " id="linkColor">';
                                                $output.='<div class="card ">';
                                                $resource=Resource::find($resourceFiltered->id);
                                                if($resource->media->name == "Document"||$resource->media->name == "document" ){
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                else{
                                                        $output.= '<a href="/user/'.$resource->id.'/'.$resource->type_id.' " >
                                                        <img src="'.$resource->thumbnailLocation.'" width="100%" height="150px"></a>';
                                                }
                                                $output.= '<div class="card-body p-1">';
                                               
                                                  $output.= '<h6 class="mb-0">'.$resource->course->name.'</h6>
                                                  <h6 class=" mb-2 text-truncate">'.$resource->description.'</h6>
                                                  <div class="d-flex justify-content-between">
                                                        <span class="date">'.  $resource->view  .'  Views </span>
                                                        <a href="'.$resource->fileLocation.'" download>
                                                                 <button class="btn btn-sm download zoom" value="'.$resource->id.'" style="font-size:13px;" onclick="fileDownloadId()" >
                                                                        <span class="icon icon-download "></span><span id="downloadCount">'. $resource->download.'</span>
                                                                </button>
                                                        </a>
                                                        <span class="date float-right">'.$resource->created_at->diffForHumans() .'</span>
                                                </div>';
                                                $output.='</div></div></div>';
                                        }
                                }
                                $output.='</div></div>';
                   
                $output.='</div></div>';
                return $output;
        }
}
