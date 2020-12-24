<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

     public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function grade(){
    	return $this->belongsTo('App\Models\Grade');
    }

    public function course(){
    	return $this->belongsTo('App\Models\Course');
    }

    public function unit(){
    	return $this->belongsTo('App\Models\Unit');
    }

    public function tags(){
    	return $this->belongsToMany('App\Models\Tag');
    }

    public function subunit(){
    	return $this->belongsTo('App\Models\Subunit');
    }

    public function media(){
    	return $this->belongsTo('App\Models\Media');
    }

    public function type(){
    	return $this->belongsTo('App\Models\Type');
    }
    


}
