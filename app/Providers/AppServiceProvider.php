<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend/header',function ($view){
            $listProductType = ProductType::all();
            $view->with('listProductType',$listProductType);
        });

        view()->composer('frontend/header',function ($view){
            if (Session('cart')) {
                $oldCart = Session::get('carts');
                $cart = new Cart($oldCart);
                $view->with([
                    'cart'=>Session::get('carts'),
                    'product_cart'  => $cart->items,
                    'totalPrice'    => $cart->totalPrice,
                    'totalQty'      => $cart->totalQty,
                ]);
            }
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
