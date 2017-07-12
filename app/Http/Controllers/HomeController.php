<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\HomeImage;
use App\Models\SubCategory;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeImage = HomeImage::where('code', 'home-image')->first();
        $topCategories = SubCategory::where('top', '>', 0)->get();
        $subCategories = SubCategory::get();
        return view('home', [
            'homeImage' => $homeImage,
            'topCategories' => $topCategories,
            'subCategories' => $subCategories
        ]);
    }


    public function about(){
        return view('about');
    }


    public function getCategory(Request $request)
    {
        if (!$request->cat || !$request->name) {
            return abort(404);
        }

        $category = Category::where('link', $request->name)->firstOrFail();
        $subCategory = SubCategory::where('link', $request->cat)->firstOrFail();

        if(count($subCategory->products) < 5)  {
            $releated_products = $subCategory->products;
        } else {
            $releated_products = $subCategory->products->random(4);
        }


        return view('products', [
            'subCategory' => $subCategory,
            'category' => $category,
            'releated_products' => $releated_products
        ]);
    }


    public function getProduct(Request $request){
//        if (!$request->prod || !$request->name) {
//            return abort(404);
//        }

        return view('product');
    }
}
