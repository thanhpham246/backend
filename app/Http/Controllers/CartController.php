<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Session;
class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::find($id);

        $oldCart = Session('carts') ? Session::get('carts') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        Session::put('carts',$cart);

        return redirect()->back();
    }
}
