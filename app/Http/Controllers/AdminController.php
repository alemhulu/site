<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $resources = Resource::orderBy('created_at','asc')->get();
   
        return view('admin.index',compact('resources'));
    }
}
