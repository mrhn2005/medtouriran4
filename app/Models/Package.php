<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;
use App\Helpers\Helper;
use App;
use App\Traits\CanNotParentItself;

class Package extends Model
{
    use Translatable,
        Resizable,
        CanNotParentItself;
        
    protected $translatable = ['title', 'subtitle', 'timeline','description','before_price','after_price','testimonial','slug','pricing'];
    
    public function children()
    {
        return $this->hasMany('App\Models\Package', 'parent_id')
            ->with('children');
    }
    
    public function parent_items()
    {
        return $this->hasMany('App\Models\Package')
            ->whereNull('parent_id');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    
    public function items(){
        return $this->belongsToMany('App\Models\PackageItem','package_package_item','package_id','package_item_id');
    }

    public function timelines(){
        return $this->belongsToMany('App\Models\Timeline','package_timeline','package_id','timeline_id');
    }
    public function cities(){
        return $this->belongsToMany('App\Models\City','package_city');
    }

    public function city(){
        return $this->cities()->first();
    }

    public function prices(){
        return $this->belongsToMany('App\Models\PackagePrice','package_package_price','package_id','package_price_id');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category','package_category');
    }

    public function reviews()
    {
        return $this->morphMany('App\Models\Review', 'reviewable');
    }
    public function css_class(){
        $first_category=$this->categories->first();
        if($first_category){
            return strtolower(Helper::remove_space($first_category->parent_id!=null?$first_category->parent->title:$first_category->title));
        }
        return 'medical';
    }

    public function city_class(){
        return strtolower(Helper::remove_space($this->city()->title));
    }

    public function scopeRelations($query)
    {
        return $query->where('parent_id',null)->withTranslations(App::getLocale())
        ->with(['cities.translations','items.translations','categories.parent']);
    }
}
