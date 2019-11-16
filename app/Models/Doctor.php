<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;
use App\Helpers\Helper;

class Doctor extends Model
{
     use Translatable,
        Resizable;
        
        
    protected $translatable = ['name', 'about', 'testimonal','education','skills'];
    
    public function networks(){
        return $this->hasMany('App\Models\Network');
    }
    
    
    public function categories(){
        return $this->belongsToMany('App\Models\Category','doctor_category');
    }
    
    public function city(){
        return $this->belongsTo('App\Models\City');
    }

    public function main_category(){
        $first_category=$this->categories->first();
        if(count($this->categories)>0){
            return strtolower(Helper::remove_space($first_category->parent_id!=null?$first_category->parent->title:$first_category->title));
        }
        return '';
    }
}
