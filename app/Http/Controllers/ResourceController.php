<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
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

    public function great(Request $request){

         //real path accessing the destination folder
                        $path = storage_path().'/app/public/biology/video/plasma';
                        //static value for storage in database;
                        $pathname = '/storage/biology/video/plasma';

                        $tree = $this->getTree($path);
                        
                        $x=0;

                        foreach ($tree['children'] as $alex){
                            $x++;
                        }
                        return $x;
                        $list_of_files = [];
                      
                        foreach($tree["children"] as $child)
                        {
                                $child_path = $pathname.$child;
                                
                                $name = substr($child,0, -4);
                                // return public_path();
                                // return $child_path.'      -----  '.$name ;

                                //storing
                             $course_id= ' ';
                             $grade_id= ' ';
                             $link= ' ';
                             $media_id= ' ';
                             $tag= ' ';
                             $thumbnailLocation= ' ';
                             $type_id = ' ';
                             $unit_id = ' ';

                             $description= $name;
                             $fileLocation= $child_path;
                             
                             
                             $resource = new Resource;
                             $user_id= Auth::user()->id;
                             $resource->fileLocation  = $fileLocation;
                             $resource->thumbnailLocation = $thumbnailLocation;
                             $resource->link = $link;
                            //  if(request('grade_id')!=0)
                             $resource ->grade_id = $grade_id;
                            //  if(request('course_id')!=0)
                             $resource ->course_id = $course_id;
                            //  if(request('unit_id')!=0)
                             $resource ->unit_id = $unit_id;
                            //  if(request('subunit_id')!=0)
                            //  $resource ->subunit_id = request('subunit_id');
                            //  if(request('type_id')!=0)
                             $resource ->type_id = $type_id;
                            //  if(request('media_id')!=0)
                             $resource ->media_id = $media_id;
                     
                             $resource->user_id= $user_id;
                             $resource ->description = $description;
                             $resource ->tag = $tag;
                             return $resource;
                             $resource -> save();  
                 


                                // $this->validate($request,[
                                //     'course_id'=> 'required',
                                //         'fileLocation'=> 'required',
                                //         'thumbnailLocation'=> 'required',
                                //         'link'=> 'required',
                                //         'media_id'=> 'required',
                                //         'type_id'=> 'required',
                                //         'tag'=> 'required',
                                //         'description'=> 'required',
                                //     ]);
                            
                             
                        }
                }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

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

        $resource = new Resource;
        //if(request('unit_id')==0&&request('description')=='')
        //{
        //return ('Error!!');
        //}
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
