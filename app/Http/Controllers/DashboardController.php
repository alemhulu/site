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
use App\Models\Language;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::orderBy('name','desc')->get();
        $courses= Course::where('grade_id','=',null)->orderBy('name', 'asc')->get();
        // $courses= Course::select('name')->distinct()->orderBy('name','asc')->get();
        $units= Unit::orderBy('name','asc')->get();
        $subunits= Subunit::orderBy('name','asc')->get();
        $types=Type::orderBy('name','asc')->get();
        $medias=Media::orderBy('name','asc')->get();
        $languages = Language::orderBy('name','asc')->get();
       $commonCourses=Course::whereNull('grade_id')->get();
        
        return view('admin.dashboard',compact('grades','courses','units','subunits','types','medias','commonCourses','languages'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 123;
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
