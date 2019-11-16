<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Spatial;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;

class Hotel extends Model
{
    use Translatable,
        Resizable,
        Spatial;

    protected $spatial = ['location'];
        
    protected $translatable = ['title','description','slug'];

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function items()
    {
        return $this->belongsToMany('App\Models\HotelItem', 'hotel_hotel_item', 'hotel_id', 'hotel_item_id');
    }

    public function service()
    {
        $type=array("hotels"=>trans('home.hotel'),
                    "hostels"=>trans('home.hostel'),
                    "medical-centers"=>trans('home.medical_center'));
        return $type[$this->type];
    }

    public function services()
    {
        $type=array("hotels"=>trans('home.hotels'),
                    "hostels"=>trans('home.hostels'),
                    "medical-centers"=>trans('home.medical_centers'));
        return $type[$this->type];
    }

    public function reviews()
    {
        return $this->morphMany('App\Models\Review', 'reviewable');
    }
}
