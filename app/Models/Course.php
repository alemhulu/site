<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function resource()
    {
        return $this->belongsToMany('App\Models\Resource');
    }

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade');
    }

    public function units()
    {
        return $this->hasMany('App\Models\Unit')->orderBy('name', 'asc');
    }

    public function resources()
    {
        return $this->hasMany('App\Models\Resource');
    }
    // public static function find($slug){
    //     return cache()->remember('grade',50,function() use ($slug){
    //         return $slug+4;
    //     });
    // }
}
