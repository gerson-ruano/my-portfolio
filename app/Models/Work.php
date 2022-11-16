<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function user()
    {

        return $this->belongsTo('App\Models\User');
    }

    public function categories()
    {

        return $this->belongsToMany('App\Models\Category');
    }

    public function getAllWorks() 
    {
        $works = Work::all();
        return $works;
    }

    public function getWork($work) 
    {
        $work = Work::find($work);
        return $work;

    }


}
