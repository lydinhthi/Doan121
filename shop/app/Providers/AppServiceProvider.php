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
        view()->composer('header',function($view){
            $loai_sp = ProductType::all();
            
            $view->with('loai_sp',$loai_sp);
        });

        view()->composer(['header','page.dat_hang'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                //kiểm tra xem giỏ hàng có sp nào dk mua chưa
                $cart = new Cart($oldCart);
                $product_cart = $cart->items ;          
                // foreach ($product_cart as $key => $value) {
                //     dd($value[1]['item']['id']);
                // }
                // dd($cart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
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
