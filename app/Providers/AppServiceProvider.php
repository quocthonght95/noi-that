<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Sentinel;
use App\Models\Category;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view) {
            $view->with('userlogin', Sentinel::getUser());
        });
        View::composer('*', function($view) {
            $view->with('category', Category::All());
        });
        View::composer('frontend.partials.header', function($view) {
            $view->with('quantity', Cart::count());
            $view->with('contents', Cart::content());
            $view->with('totals', Cart::total());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
