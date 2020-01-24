<?php

namespace App\Models;

use App\Traits\CanNotParentItself;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use CanNotParentItself;
    
    protected $guarded=[];

    public function reviewable()
    {
        return $this->morphTo();
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }

    public function reply()
    {
        return $this->hasOne('App\Models\Review', 'parent_id');
    }
}
