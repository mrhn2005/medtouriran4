<?php

namespace App\Http\Controllers\front;

use App;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function local_switch($locale, Request $request){
        App::setLocale($locale);
       
        return redirect()->to(Helper::get_locale_url($locale,url()->previous()));

    }
}
