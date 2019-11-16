<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

use TCG\Voyager\Facades\Voyager;
use App\FormFields\Ckeditor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);
         Voyager::addAction(\App\Actions\Duplicate::class);
         Voyager::addAction(\App\Actions\Verify::class);
        //  URL::forceScheme('https');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::addFormField(Ckeditor::class);
        // dd($this->app);
    }
}
