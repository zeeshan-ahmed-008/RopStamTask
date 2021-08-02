<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    // begin get products
    public function getProducts()
    {
        $getProduct    =   Product::limit(3)->get(['id','image','name','category_id','currency','price','rent_type','average_ratings','total_ratings','total_reviews','refundable','coupon_code','size','tenure']);
        return response()->json([
            'success'                   =>  true,
            'lists'                     =>  $getProduct
        ], 200);
    }
    // end get products

    // begin get product
    public function getProduct($id)
    {
        $getProduct    =   Product::with('ProductImage')->where('id',$id)->first(['id','image','name','category_id','currency','price','rent_type','average_ratings','total_ratings','total_reviews','refundable','coupon_code','size','tenure']);
        return response()->json([
            'success'                   =>  true,
            'lists'                     =>  $getProduct
        ], 200);
    }
    // end get product
}
