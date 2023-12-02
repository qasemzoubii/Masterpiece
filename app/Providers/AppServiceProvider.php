<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

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


        View::composer('*', function ($view) {
            $navCategories = Category::all();
            $user = Auth::user();

            if ($user) {
                $cart = Cart::where('user_id', $user->id)->get();
            } else {
                $cart = session('cart', []);
            }

            $view->with(compact('navCategories', 'cart'));

            Paginator::useBootstrap();
        });













        // View::composer('*', function ($view) {
        //     $navCategories = Category::all();
        //     $view->with('navCategories', $navCategories);
        // });
    }
}