<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheClass extends Model
{
    protected $table="classes";
    protected $primaryKey="id";
    protected $fillable=['class_name'];
}