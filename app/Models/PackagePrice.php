<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

class PackagePrice extends Model
{
    use Translatable;
        
        
    protected $translatable = ['title'];

    public $additional_attributes = ['full_description'];

    public function getFullDescriptionAttribute()
    {
        return $this->title.": ".$this->price." $";
    }
}
