<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    // begin get categories
    public function getCategories()
    {
        $getCategory    =   Category::limit(6)->get(['id','name','image']);
        return response()->json([
            'success'                   =>  true,
            'lists'                     =>  $getCategory
        ], 200);
    }
    // end get categories
}
