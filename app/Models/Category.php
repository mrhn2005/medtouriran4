<?php

namespace App\Models;

use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Category as Cat;

class Category extends Cat
{
    use Resizable;

    protected $translatable = ['title', 'excerpt', 'body'];

    protected $fillable = ['slug', 'title' , 'excerpt', 'body'];

    public function doctors(){
          return $this->belongsToMany('App\Models\Doctor','doctor_category');
    }  

    public function packages(){
        return $this->belongsToMany('App\Models\Package','package_category');
    }


    public function parent(){
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }
    
    public function link($absolute = false)
    {
        return route('category.show',[$this->id,$this->getTranslatedAttribute('slug')]);
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id')
            ->with('children');
    }
    
    public function parent_items()
    {
        return $this->hasMany('App\Models\Category')
            ->whereNull('parent_id');
    }

    public function css_class(){
        return strtolower($this->parent->title);
    }

}
