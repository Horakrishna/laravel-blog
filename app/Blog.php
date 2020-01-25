<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =['category_id','blog_title','blogshort_dis','bloglong_dis','blog_image','publication_status'];
}
