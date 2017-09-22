<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index ()
    {
        $listProduct = Product::paginate(15);
        $listType = ProductType::all();
        return view('frontend.product',compact('listProduct','listType'));
    }

    function getProductType($id)
    {
        if ($id)
        {
            $listProduct = Product::where('id_type',$id)->paginate(15);
            if ($listProduct->count() < 1) return view('404_notfound');
        } else
        {
            return view('404_notfound');
        }

        $topProduct = Product::where('id_type','<>',$id)->orderBy('id', 'desc')->take(6)->get();
        $listType = ProductType::all();
        $proNameType = ProductType::where('id',$id)->first();
        return view('frontend.product',compact('listProduct','topProduct','listType','proNameType'));
    }

    public function detailProduct($id)
    {
        if ($id)
        {
            $dataProduct = Product::where('id',$id)->get();
            if ($dataProduct->count() < 1) return view('404_notfound');
            $seenData = Session::get('e');
            $check = 'not';
            if (empty($seenData))
            {
                $seenData = array();
                $data = json_decode(json_encode($dataProduct[0]), true);
                $seenData[] = $data;
                Session::put('e',$seenData);
            } else {
                $data = json_decode(json_encode($dataProduct[0]), true);
                foreach ($seenData as $item) {
                    if ($item['name'] == $data['name']) {
                        $check = 'exits'; break;
                    }
                }
                if ($check == 'not') {
                    if (count($seenData) == 10) $seenData = array_pop($seenData);
                    array_unshift($seenData,$data);
                    Session::put('e',$seenData);
                }
            }
        } else
        {
            return view('404_notfound');
        }

        return view('frontend.product_detail',compact('dataProduct','seenData'));
    }
}
