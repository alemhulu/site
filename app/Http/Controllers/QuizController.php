<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Resource;

class QuizController extends Controller
{
    //

    public function store(Request $request)
    {
          //validate the field
          $data = request()->validate([
            'question' => 'required|max:255',
            'chA' => 'required',
            'chB' => 'required',
            'ans' => 'required',
            'description' => 'required'
        ]);
       
        $post = new Quiz();
        $post->resource_id = request('resource_id');
        $post->question = request('question');
        
        $post->time = request('time');
        $post->chA = request('chA');
        $post->chB = request('chB');
        $post->chC = request('chC');
        $post->chD = request('chD');
        $post->ans = request('ans');
        $post->description = request('description');      
   

        $post->save();

        return redirect('/posts')->with('success', 'Post Created Successfully!');
    }
    
    public function index(Request $request){
        $resource=Resource::find($request->file_id);
      
        return $resource->quizzes;
        // $resource=Quiz::where('resource_id',$request->file_id)->get();

        // return $resource;

    }

}
