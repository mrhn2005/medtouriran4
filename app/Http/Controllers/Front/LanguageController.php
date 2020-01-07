<?php

namespace App\Http\Controllers\front;

use App;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function local_switch($locale){
        if (preg_match('/.{2}\/blog.*/', url()->previous()) and in_array(App::getLocale(), array_keys(config('lang.except_blog_lang')))) { 
            return redirect()->to(Helper::get_locale_url($locale,''));
        }       
        return redirect()->to(Helper::get_locale_url($locale, url()->previous()));

    }
}
