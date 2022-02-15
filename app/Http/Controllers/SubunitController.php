<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subunit;
use App\Models\Unit;

class SubunitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $unit=Unit::find(request('id'));
       $subunits=$unit->subunits;
       return $subunits;
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
            'name' => 'required',
            'title'=> 'required',
            'unit_id'=>'required'
        ]);

        $subunit = new Subunit;

        $subunit -> name = request('name');
        $subunit -> title = request('title');
        $subunit -> unit_id = request('unit_id');
       
        $subunit -> save();
        $subunits= Subunit::where('unit_id','=',request('unit_id'))->get();

        return $subunits;
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
