<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Testimonial extends Model
{
    use Resizable,
        Translatable;
        
        
    protected $translatable = ['name', 'position', 'quote'];
}
