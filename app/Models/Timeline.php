<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;

class Timeline extends Model
{
    use Translatable;
        
    
    protected $translatable = ['title', 'description'];

    public $additional_attributes = ['short_description'];

    public function getShortDescriptionAttribute()
    {
        return $this->title.": ".Str::words($this->description,7);
    }
    
}
