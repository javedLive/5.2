<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
	 use SoftDeletes; 
    protected $table="courses";
    protected $primaryKey="course_id";

 
    protected $dates = ['deleted_at']; 

    protected $fillable=['course_code','course_title','course_credit','type','image'];
}
