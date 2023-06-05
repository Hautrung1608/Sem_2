<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Helper\Cart;
use App\Helper\ProductTotal;

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
       Paginator::useBootstrapFive();

       view()->composer('*',function($view){
        $cats = Category::get();
        $cart = new Cart();
        // $productTotal = new ProductTotal();
        $view->with(compact('cats','cart'));
       });



    //    View::share('cart',$cart);
    }


}
