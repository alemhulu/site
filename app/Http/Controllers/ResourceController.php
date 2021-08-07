<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\Grade;
use App\Models\Course;
use App\Models\Unit;
use App\Models\Type;
use Auth;
use File;


class ResourceController extends Controller
{
    
    function getTree($path)
    {
        $tree = [];
    
        $branch = [
        'label' => basename($path)
        ];
        
        foreach (File::files($path) as $file) {
             $branch['children'][] = basename($file);
        }
        
        foreach (File::directories($path) as $directory) {
            $branch['children'][] = $this->getTree($directory);
    }
    
    return array_merge($tree, $branch);
    }

    //upload function for from file and folder order
    public function upload($request){
        $resource = new Resource;
        $user_id            = Auth::user()->id;
        $resource->fileLocation  = request('fileLocation');
        $resource->thumbnailLocation = request('thumbnailLocation');
        $resource->link = request('link');
        if(request('grade_id')!=0)
        $resource ->grade_id = request('grade_id');
        if(request('course_id')!=0)
        $resource ->course_id = request('course_id');
        if(request('unit_id')!=0)
        $resource ->unit_id = request('unit_id');
        if(request('subunit_id')!=0)
        $resource ->subunit_id = request('subunit_id');
        if(request('type_id')!=0)
        $resource ->type_id = request('type_id');
        if(request('media_id')!=0)
        $resource ->media_id = request('media_id');

        $resource->user_id      = $user_id;
        $resource ->description = request('description');
        $resource ->tag = request('tag');
        $resource -> save();
    }

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $resources= Resource::where('media_id',2)->get();
        foreach ($resources as $key => $resource) {
            $type=$resource->type->name;
            if($type == "Text Books"){
                    if($resource->grade->name=="9"){
                        if($resource->course_id=="108"){
                            // return $resource;
                            // $desc=substr($resource->description,5);
                         
                            $desc=str_replace('9ኛ ክፍል ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                        else if($resource->course_id=="33"){
                            // return $resource;
                            // $desc=substr($resource->description,5);
                         
                            $desc=str_replace('Gr-11 ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                        else{
                            $desc=str_replace('Gr-9 ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                        // $desc=substr($resource->description,5);
                        // $desc = explode (" ", $resource->description); 
                        // return $desc;
                        // $resource->description=$desc;
                        // $resource->save();
                    }
                    else if($resource->grade->name=="10"){
                        if($resource->course_id=="109"){
                            $desc=str_replace('10ኛ ክፍል ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                        else if($resource->course_id=="39"){
                            $desc=str_replace('10ኛ ክፍል ', '', $resource->description);
                            $resource->description=$desc;
                            $desc=str_replace('Gr-10 ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                        else{
                            $desc=str_replace('Gr-10 ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                            $desc=str_replace('Gr-11 ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                            $desc=str_replace('English ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                    }
                    // for grade 11
                    else if($resource->grade->name=="11"){
                        if($resource->course_id=="110"||$resource->course_id=="46"){
                            $desc=str_replace('11ኛ ክፍል ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                        
                        else{
                            $desc=str_replace('Gr-11 ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                    }
                    //for grade 12
                     else if($resource->grade->name=="12"){
                        if($resource->course_id=="111"){
                            $desc=str_replace('12ኛ ክፍል ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                        else if($resource->course_id=="47"){
                            $desc=str_replace('12 ክፍል ', '', $resource->description);
                            $resource->description=$desc;
                 
                            $desc=str_replace('Gr-12', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                        else{
                            $desc=str_replace('Gr-12 ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        }
                    }
                     //for grade 1-4
                     else if($resource->grade->name=="1"||$resource->grade->name=="2"||$resource->grade->name=="3"||$resource->grade->name=="4"){
                  
                            $desc=str_replace('Gr-1 ', '', $resource->description);
                            $resource->description=$desc;
                            $desc=str_replace('Gr-2 ', '', $resource->description);
                            $resource->description=$desc;
                            $desc=str_replace('Gr-3 ', '', $resource->description);
                            $resource->description=$desc;
                            $desc=str_replace('Gr-4 ', '', $resource->description);
                            $resource->description=$desc;
                            $resource->save();
                        
                    }
                    else if($resource->grade->name=="5"||$resource->grade->name=="6"||$resource->grade->name=="7"||$resource->grade->name=="8"){
                  
                        $desc=str_replace('Gr-5 ', '', $resource->description);
                        $resource->description=$desc;
                        $desc=str_replace('Gr-6 ', '', $resource->description);
                        $resource->description=$desc;
                        $desc=str_replace('Gr-7 ', '', $resource->description);
                        $resource->description=$desc;
                        $desc=str_replace('Gr-8 ', '', $resource->description);
                        $resource->description=$desc;
                        $resource->save();
                    
                }
            
             }         
        }
        return  redirect('/');
        $course_id=[];
    
        
        $courses=Course::where('name','General Business')->get();
        foreach ($courses as $key => $course) {
            array_push($course_id,$course->id);
        }
      
        $resources=Resource::where('type_id','4')->whereIn('course_id',$course_id)->get();
         $count=count($resources);
         
        foreach($resources as $resource){
            $resource->delete();
        }
        return $count.'--'.$resources;
        $resources=Resource::orderBy('created_at','desc')->get();
        return view('admin.index',compact('resources'));
    }

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
        

        if($request->fileLocation!="" & $request->folderLocation==""){
            $this->validate($request,[
                'course_id'=> 'required',
                    'fileLocation'=> 'required',
                    'thumbnailLocation'=> 'required',
                    'link'=> 'required',
                     'media_id'=> 'required',
                    'type_id'=> 'required',
                    'tag'=> 'required',
                    'description'=> 'required',
                ]);
                $this->upload($request);
        }
        else if($request->fileLocation=="" & $request->folderLocation!=""){
            $this->validate($request,[
                'course_id'=> 'required',
                    'link'=> 'required',
                     'media_id'=> 'required',
                    'type_id'=> 'required',
                ]);
                //real path accessing the destination folder
                $path = storage_path().'/app/public/'.$request->folderLocation;
                $course_name=$request->course_id;
                $tree = $this->getTree($path);
                foreach($tree["children"] as $grade_label)
                {
                        if(isset($grade_label['label'])){
                        $grade_level = substr($grade_label['label'],5);
                        $type_name = Type::findorfail($request->type_id)->name;
                        $grade=Grade::where('name',$grade_level)->first();
                        $grade_id=(string)$grade->id;
                        $course=$grade->courses->where('name',$course_name)->first();
                        $course_id=(string)$course->id;
                        foreach($grade_label['children'] as $unit_label){
                            
                            if(empty($unit_label['label'])){
                                $thumbnail_name= $unit_label;
                            }
                            if(isset($unit_label['label'])){
                                $unit_level = substr($unit_label['label'],5);
                                $unit=$course->units->where('name',$unit_level)->first();
                                $unit_id=(string)$unit->id;
                                foreach($unit_label['children'] as $upload_files){
                                    if (isset($upload_files)){
                                        $description = substr($upload_files,0,-4);
                                        $fileLocation = '/storage/'.$request->folderLocation.'/'.$grade_label['label'].'/'.$unit_label['label'].'/'.$upload_files;
                                        $tag = $grade_label['label'].' '.$course_name.' '.$type_name;
                                        $thumbnailLocation='/storage/'.$request->folderLocation.'/'.$grade_label['label'].'/'.$thumbnail_name;
                                        $request->merge([
                                            'grade_id' => $grade_id,
                                            'course_id' => $course_id,
                                            'unit_id' => $unit_id,
                                            'description' => $description,
                                            'fileLocation' => $fileLocation,
                                            'tag' => $tag,
                                            'thumbnailLocation' => $thumbnailLocation,
                                        ]);
                                        $this->upload($request);
                                    }

                                }
                        }
                    }
                    }
                        
                }
        }
        else{
            abort(403, 'Please choose file or folder upload!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Post $post)
    {
        if (\Request::ajax()){

            $post = Resource::find($request['task']['id']);
            $post->published = $request['task']['checked'];
            $post->save();

            return $request;
        }

        return view('admin.posts.show', ['post'=>$post]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('edit', $post);

        //get the post with the id $post->idate
        $post = Resource::find($post->id);

        // return view
        return view('admin/posts/edit', ['post' => $post]);
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
}
