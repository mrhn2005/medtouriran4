<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

class Faq extends Model
{
    use Translatable;

    protected $translatable = ['question','answer'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_faq');
    }

    public function main_category(){
        $first_category=$this->categories->first();
        if(count($this->categories)>0){
            return Helper::remove_space($first_category->parent_id!=null?$first_category->parent->title:$first_category->title);
        }
        return '';
    }
}
