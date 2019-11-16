<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Benefit extends Model
{
    use Translatable;

    protected $translatable = ['body','title'];

    protected $fillable = ['body','title'];
}
