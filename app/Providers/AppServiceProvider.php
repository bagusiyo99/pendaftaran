<?php

namespace App\Providers;

use App\Models\About;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
                // Mengambil data "About" pertama
        $about = About::first();
        // Membuat variabel global untuk data "About"
        view()->share('global_about', $about);

        Paginator::useBootstrap();
    }
}
