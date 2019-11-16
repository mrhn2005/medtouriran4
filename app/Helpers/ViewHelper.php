<?php 

namespace App\Helpers;

use App;
use DB;
use App\Models\Hotel;
use App\Models\Doctor;
use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use App\Models\Benefit;
use App\Models\Faq;
use App\Models\Tag;
use App\Models\Link;
use App\Models\WhatsApp;

use Illuminate\Support\Facades\Cache;

class ViewHelper
{

    const CACHE_DAY=4;
    const POST_PER_BLOG=6;
     public static function menu(){
      //   return  Cache::remember('my_front_menu_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
             $cities=City::withTranslations(App::getLocale())->orderBy('created_at','desc')->get();
             $categories=Category::where('parent_id',null)->with('children.translations')->withTranslations(App::getLocale())->get();
             return view('front.common.header',compact(['cities','categories']))->render();
      //   });
     }

//    public static function menu(){
//        // return  Cache::remember('my_front_menu_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
//            $cities=City::withTranslations(App::getLocale())->orderBy('created_at','desc')->get();
//            $categories= Category::withTranslations()->get();
//            return menu('front','front.common.menu-dynamic',['categories'=>$categories,'cities'=>$cities]);
//        // });
//    }
    
    public static function about(){       
      //  return  Cache::remember('my_front_about_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
            $num_of_hotels=Hotel::where('type','hotels')->count();
            $num_of_medical_centers=Hotel::where('type','medical-centers')->count();
            $num_of_doctors=Doctor::count();
            $num_of_treatments=Category::count();
            return view('front.common.about',compact(['num_of_hotels','num_of_medical_centers','num_of_doctors','num_of_treatments']))->render();
      //  });
    }

    public static function why_us(){       
      //  return  Cache::remember('my_front_benefit_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
            $benefits=Benefit::where('type',2)->withTranslations(App::getLocale())->get();
            return view('front.common.why-us',compact(['benefits']))->render();
      //  });
    }
    public static function footer(){       
      //  return  Cache::remember('my_front_footer_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
            $links=Link::withTranslations(App::getLocale())->orderBy('order','asc')->get();;
            $cities=City::withTranslations(App::getLocale())->get();
            return view('front.common.footer',compact(['cities','links']))->render();
      //  });
    }

    public static function contact(){       
      //  return  Cache::remember('my_front_contact_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
        $cities=City::withTranslations(App::getLocale())->get();
        return view('front.pages.single.contact-us.includes.contact',compact(['cities']))->render();
      //  });
    }

    public static function faq(){       
               // return  Cache::remember('my_front_faq_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
                $faqs=Faq::withTranslations(App::getLocale())->get();
                return view('front.pages.single.faq.includes.faq',compact(['faqs']))->render();
               // });
    }

    public static function blog_sidebar(){
        $popular_tags_ids = DB::table('tag_post')
            ->join('tags', 'tag_post.tag_id', '=', 'tags.id')
            ->select(DB::raw('count(*) as repetition, tags.id'))
            ->groupBy('tag_post.tag_id')
            ->orderBy('repetition', 'desc')->limit(6)->pluck('id'); 
        $popular_tags=Tag::withTranslations(App::getLocale())->find($popular_tags_ids); 
        $recent_posts=Post::withTranslations(App::getLocale())->orderBy('created_at','desc')->limit(ViewHelper::POST_PER_BLOG)->get();
        return view('front.pages.blog.includes.sidebar',compact(['recent_posts','popular_tags']))->render();
    }

    public static function whatsapp(){       
               // return  Cache::remember('my_front_faq_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
                $whatsapp_accounts=WhatsApp::all();
                return view('front.common.whatsapp',compact(['whatsapp_accounts']))->render();
               // });
    }

    public static function socials(){       
               // return  Cache::remember('my_front_socials_'.App::getLocale(), \Carbon\Carbon::now()->addDays(ViewHelper::CACHE_DAY), function () {
                return view('front.common.fixed-social')->render();
               // });
    }

}