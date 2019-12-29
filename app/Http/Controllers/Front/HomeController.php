<?php

namespace App\Http\Controllers\Front;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;
use View;
use App\Traits\Language;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Cache;
use DB;

use TCG\Voyager\Models\Page as Page;

use App\Models\Post;
use App\Models\Category;
use App\Models\Social;
use App\Models\Doctor;
use App\Models\Benefit;
use App\Models\Testimonial;
use App\Models\Package;
use App\Models\Hotel;
use App\Models\City;
use App\Models\VideoReview;
use App\Models\Member;
use App\Models\Review;
use App\Models\Subscriber;
use App\Models\Tag;
use App\Models\Request as Req;

use App\Mail\ProcedureRequested;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private $per_page=12;
    private $post_per_home=3;
    private $category_per_home=8;
    private $doctor_per_doctor=3;
    private $hotel_per_hotel=4;
    private $cache_minutes=1;
    private $testimonial_per_home=5;
    private $package_per_home=20;
    private $package_per_packages=24;
    private $package_per_procedure=2;
    private $post_per_blog=6;
    private $doctor_per_home=6;
    private $video_por_home=5;
    private $num_popular_tags=6;

    public function __construct()
    {
        View::share([
           'socials'=>Social::withTranslations(App::getLocale())->get(),
           'is_rtl'=>Helper::isRtl(),
           ]);
    }
    
   
    public function home_page()
    {
        $categories=Category::where('parent_id', '!=', null)->with('parent.translations')->withTranslations(App::getLocale())->get();
        $benefits=Benefit::withTranslations(App::getLocale())->get();
        $posts=Post::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->limit($this->post_per_home)->get();
        $packages=Package::relations()->where('first_page', 1)->orderBy('created_at', 'desc')->limit($this->package_per_home)->get();
        $videos=VideoReview::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->limit($this->video_por_home)->get();
        $cities=City::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->get();
        return view('front.pages.home.home', compact(
            ['categories','benefits','posts','packages','videos','cities']
        ));
    }
    

    public function packages()
    {
        $categories=Category::where('parent_id', null)->withTranslations(App::getLocale())->get();
        $cities=City::withTranslations(App::getLocale())->get();
        $packages=Package::relations()->orderBy('created_at', 'desc')->paginate($this->package_per_packages);
        return view('front.pages.packages.packages', compact('categories', 'packages', 'cities'));
    }

    public function package(Package $package, $slug="")
    {
        $package->load(['items.translations','prices.translations','children.items.translations','timelines.translations']);
        return view('front.pages.packages.package', compact('package'));
    }


    public function hotels($type)
    {
        $hotels=Hotel::where('type', $type)->with(['items.translations','city.translations'])->withTranslations(App::getLocale())->orderBy('created_at', 'desc')->get();
        if (count($hotels)<1) {
            abort(404);
        };
        $cities=City::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->get();
        return view('front.pages.services.hotels.hotels', compact('hotels', 'cities'));
    }

    public function hotel($type, Hotel $hotel, $slug="")
    {
        $hotel->load(['items.translations','city.translations']);
        $related_hotels=Hotel::where('type', $type)->with(['city.translations'])
                        ->withTranslations(App::getLocale())->orderBy('created_at', 'desc')->limit($this->hotel_per_hotel)->get();
        return view('front.pages.services.hotels.hotel', compact('hotel', 'related_hotels'));
    }


    public function procedures($slug="all")
    {
        $active_category_slug=$slug;
        $categories=Category::withTranslations(App::getLocale())->with('parent.translations')->get();
        return view('front.pages.procedures.procedures', compact(['categories','active_category_slug']));
    }
    
    public function procedure(Category $category, $slug="")
    {
        $category->load(['packages.children.items.translations','packages.children.cities.translations']);
        $categories=Category::where('parent_id', null)->withTranslations(App::getLocale())->get();
        return view('front.pages.procedures.procedure', compact('category', 'categories'));
    }


    public function doctors()
    {
        $doctors=Doctor::withTranslations(App::getLocale())
                ->with(['categories.translations','city.translations','categories.parent'])->orderBy('order', 'asc')->paginate($this->doctor_per_home);
        $all_doctors=Doctor::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->get();
        $categories=Category::where('parent_id', '!=', null)->withTranslations(App::getLocale())->get();
        $hotels=Hotel::withTranslations(App::getLocale())->inRandomOrder()->limit($this->package_per_procedure)->get();
        return view('front.pages.services.doctors.doctors', compact('doctors', 'all_doctors', 'categories', 'hotels'));
    }
    
    public function doctor(Doctor $doctor, $slug="")
    {
        $doctor->load('categories');
        $categoryIds = $doctor->categories->pluck('id')->toArray();

        $related_doctors = Doctor::whereHas('categories', function ($q) use ($categoryIds) {
            $q->whereIn('category_id', $categoryIds);
        })->where('id', '!=', $doctor->id)
        ->inRandomOrder()->limit($this->doctor_per_doctor)->get();

        return view('front.pages.services.doctors.doctor', compact('doctor', 'related_doctors'));
    }


    public function blogs()
    {
        if (in_array(App::getLocale(), array_keys(config('lang.except_blog_lang')))) {
            return redirect(route('locale.switch', 'en'), 301);
        }
        $posts=Post::withTranslations(App::getLocale())->with('authorId')->orderBy('created_at', 'desc')->paginate($this->post_per_blog);
        return view('front.pages.blog.posts', compact('posts'));
    }
    
    public function blog(Post $single_post, $slug="")
    {
        if (in_array(App::getLocale(), array_keys(config('lang.except_blog_lang')))) {
            return redirect(route('locale.switch', 'en'), 301);
        }
        $single_post->load('tags.translations');
        return view('front.pages.blog.post', compact('single_post'));
    }

    public function tag_show(Tag $tag, $slug="")
    {
        $tag_title=$tag->title;
        // return $tag_id;
        $posts=Post::withTranslations(App::getLocale())->whereHas('tags', function ($q) use ($tag_title) {
            $q->where('title', $tag_title);
        })->paginate($this->package_per_packages);

        return view('front.pages.blog.posts', compact('posts'));
    }


    public function patient_review()
    {
        $videos=VideoReview::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->get();
        $testimonials=Testimonial::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->get();
        return view('front.pages.single.patientReview.index', compact('videos', 'testimonials'));
    }

    
    public function destinations()
    {
        $cities=City::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->get();
        return view('front.pages.medicalTourism.destinations.destinations', compact('cities'));
    }
    
    public function destination(City $city, $slug="")
    {
        return view('front.pages.medicalTourism.destinations.destination', compact('city'));
    }


    public function pages_show($slug)
    {
        $page=Page::where('slug', $slug)->firstOrFail();
        
        if (view()->exists('front.pages.single.'.$slug.'.index')) {
            return view('front.pages.single.'.$slug.'.index', compact('page'));
        } else {
            return view('front.pages.single.default', compact('page'));
        }
    }
    

    public function home_search(Request $request)
    {
        $category_title=$request->category;
        $city_title=$request->city;
        $cities=City::withTranslations(App::getLocale())->orderBy('created_at', 'desc')->get();
        $categories=Category::where('parent_id', '!=', null)->withTranslations(App::getLocale())->get();
        if ($category_title==''&&$city_title=='') {
            return redirect()->route('package.index');
            $packages=Package::where('parent_id', null)->withTranslations(App::getLocale())->orderBy('created_at', 'desc')->paginate($this->package_per_packages);
        } elseif ($category_title=='') {
            $city=City::where('title', $city_title)->first();
            return redirect()->route('aboutMedical.destination.show', [$city,$city->slug]);
        } elseif ($city_title=='') {
            $category=Category::where('title', $category_title)->first();
            return redirect()->route('procedure.show', [$category,$category->slug]);
        } else {
            $category=Category::where('title', $category_title)->first();
            return redirect()->route('procedure.show', [$category,$category->slug]);
        }
        

        return view('front.pages.single.search.homeSearch', compact('categories', 'packages', 'cities'));
    }

    public function medicalTourism()
    {
        return view('front.pages.medicalTourism.about.aboutMedicalTourism');
    }
    
    
    public function category_request(Request $request)
    {
        $req=Req::create($request->all());
        Mail::to(['medtouriran@gmail.com','info@medtouriran.com'])->bcc('mrhn2005@gmail.com')->queue(new ProcedureRequested($req));
        return redirect()->back()->with([
            'message'=>trans('messages.success_created'),
            'alert-type'=>'success'
        ]);
    }
    
    public function comment_store(Request $request)
    {
        Review::create($request->all());
        return redirect()->back()->with([
            'message'=>trans('messages.success_created'),
            'alert-type'=>'success'
        ]);
    }
    
    public function services()
    {
        $benefits=Benefit::where('type', 3)->withTranslations(App::getLocale())->get();
        return view('front.pages.services.services', compact('benefits'));
    }
    
    public function subscriber_store(Request $request)
    {
        Subscriber::create($request->all());
        return redirect()->back()->with([
            'message'=>trans('messages.success_created'),
            'alert-type'=>'success'
        ]);
    }


    
    public function test()
    {
        return dd(DB::connection(App::getLocale())->table('wp_posts')->join('wp_postmeta', 'wp_posts.id', '=', 'wp_postmeta.post_id')->where('meta_key', '_wp_attached_file')->orderBy('post_date', 'desc')->limit($this->post_per_home)->get()) ;
        $post=Post::first();
        
        return $post->thumbnail('small');
        // return Uuid::generate();
        $slug='lorem-ipsum-post-trans';
        $post=Post::withTranslations()->where(function ($query) use ($slug) {
            dd($query);
        })
            ->get();
        return $post->getTranslatedAttribute('slug');
        // return App::getLocale();
        $categories= Category::withTranslations()->get();
        $menu = Cache::remember('menu'.App::getLocale(), 1, function () use ($categories) {
            return menu('front', 'front.common.menu', ['categories'=>$categories]);
        });
        return $menu;
       
        return $categories;
        // dd($categories);
        return view('home', compact('categories'));
    }
}
