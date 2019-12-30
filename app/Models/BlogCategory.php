<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $translatable = ['title'];

    protected $fillable = ['slug', 'title'];

    public function posts(){
        return $this->belongsToMany('App\Models\Post','blog_category_post');
  } 
}
