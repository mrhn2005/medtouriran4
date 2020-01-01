<?php

namespace App\Models;

use App\Traits\CanNotParentItself;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class BlogCategory extends Model
{
    use Translatable,
        CanNotParentItself;
    
    protected $translatable = ['title'];

    protected $fillable = ['slug', 'title'];

    public function posts(){
        return $this->belongsToMany('App\Models\Post','blog_category_post');
    } 

    public function children()
    {
        return $this->hasMany('App\Models\BlogCategory', 'parent_id')
            ->with('children');
    }
    
    public function parent_items()
    {
        return $this->hasMany('App\Models\BlogCategory')
            ->whereNull('parent_id');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
