<?php

namespace App\Http\Controllers;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        $listProduct = Product::where('new',1)->paginate(4);
        $productSale = Product::where('promotion_price','><',0)->paginate(8);
        return view('frontend.trangchu',compact('slide','listProduct','productSale'));
    }

    public function getAbout()
    {
        return view('frontend.about');
    }

    public function getContact()
    {
        return view('frontend.contacts');
    }
}
