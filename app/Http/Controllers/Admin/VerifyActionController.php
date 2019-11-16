<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use TCG\Voyager\Models\DataType;
use Illuminate\Support\Facades\DB;

class VerifyActionController extends Controller
{
    use BreadRelationshipParser;

    public function update(DataType $dataType, $id)
    {
        
        $slug=$dataType->slug;
        $row = DB::table($dataType->name)->where('id', $id)->update(['active' => 1]);
        
        return redirect()->back();
    }
}
