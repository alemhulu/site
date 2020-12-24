<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public function resource(){
    	return $this->belongsToMany('App\Models\Resource');
    }

    public function courses(){
    	return $this->hasMany('App\Models\Course');
    }

    public function resources(){
    	return $this->hasMany('App\Models\Resource');
    }

}
