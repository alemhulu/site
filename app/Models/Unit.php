<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    public function course(){
    	return $this->belongsTo('App\Models\Course');
    }

    public function subunits(){
    	return $this->hasMany('App\Models\Subunit')->orderBy('name','asc');
    }

    public function resources(){
    	return $this->hasMany('App\Models\Resource');
    }
}
