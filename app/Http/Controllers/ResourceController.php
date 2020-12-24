<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use Auth;


class ResourceController extends Controller
{
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
        //return $request->all();

        $this->validate($request,[
	    'course_id'=> 'required',
            'fileLocation'=> 'required',
            'thumbnailLocation'=> 'required',
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
        $resource -> save();
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
}
