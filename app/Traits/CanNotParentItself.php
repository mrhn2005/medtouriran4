<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait CanNotParentItself
{

    protected static function bootCanNotParentItself(): void
    {
        static::saving(function ($model) : void {
            if(request()->parent_id == $model->id){
                $model->parent_id = null;
            }
        });
    }
}
