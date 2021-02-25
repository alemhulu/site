<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public function resources(){
    	return $this->hasMany('App\Models\Resource')->inRandomOrder();
    }
    
    public function allresources($contentType){
        
        // return $this->hasMany('App\Models\Resource')->where('published',1)->orderBy('created_at', 'desc')->paginate( 4, ['*'], "ContentType".$contentType);
        return $this->hasMany('App\Models\Resource')->orderBy('created_at', 'desc')->paginate( 4, ['*'], "ContentType".$contentType);
    }

    public function videoresources(){

        $video = Media::where('name', "Video")->first();

        return $this->hasMany('App\Models\Resource')->where('media_id',$video->id)->orderBy('created_at', 'desc');
    }

    public function Documentresources(){

        $Document = Media::where('name', "Document")->first();

        return $this->hasMany('App\Models\Resource')->where('media_id',$Document->id)->orderBy('created_at', 'desc');
    }

    public function dynamicresources()
    {
        $id=4;
        $md = Media::find($id);

        return $this->hasMany('App\Models\Resource')->orderBy('created_at', 'DESC')->where('media_id',$md->id);
    }
}
