<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->cat) {
            return abort(404);
        }

        $subCategory = SubCategory::where('link', $request->cat)->firstOrFail();
        $category = $subCategory->category;
        $products = Product::where('id', $subCategory->id)->orderBy('id', 'desc')->paginate(20);


        if(count($subCategory->products) < 5)  {
            $releated_products = $subCategory->products;
        } else {
            $releated_products = $subCategory->products->random(4);
        }


        return view('products', [
            'subCategory' => $subCategory,
            'category' => $category,
            'releated_products' => $releated_products,
            'products' => $products,
        ]);
    }
}
