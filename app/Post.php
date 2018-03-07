<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //Handles posts

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'title',
      'content',
    ];


}
