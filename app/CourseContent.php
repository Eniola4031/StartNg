<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(Courses::class);
    }
}
