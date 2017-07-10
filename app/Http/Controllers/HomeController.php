<?php

namespace App\Http\Controllers;

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
        return view('home',[
            'homeImage' => $homeImage,
            'topCategories' => $topCategories,
            'subCategories' => $subCategories
        ]);
    }

    public function getCategory(Request $request){
        if (!$request->cat){
            return abort(404);
        }

        $subCategory = SubCategory::where('link', $request->link)->firstOrFail();

        return view('products',[
            'subCategory' => $subCategory
        ]);
    }
}
