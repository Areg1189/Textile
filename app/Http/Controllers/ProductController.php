<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->cat) {
            return abort(404);
        }

        $subCategory = SubCategory::where('link', $request->cat)->firstOrFail();
        $category = $subCategory->category;
        $products = Product::where('parent_id', $subCategory->id)->orderBy('id', 'desc')->paginate(9);

        $other_products = Product::where('parent_id', '!=', $subCategory->id)->inRandomOrder()->limit(4)->get();


        return view('products', [
            'subCategory' => $subCategory,
            'category' => $category,
            'other_products' => $other_products,
            'products' => $products,
        ]);
    }

    public function getProduct(Request $request)
    {
        if (!$request->cat || !$request->prod) {
            return abort(404);
        }

        $subCat = SubCategory::where('link', $request->cat)->firstOrFail();
        $product = Product::where('link', $request->prod)->firstOrFail();
        $other_products = Product::where('parent_id', '!=', $subCat->id)->inRandomOrder()->limit(4)->get();
        return view('singleProduct', [
            'subCat' => $subCat,
            'product' => $product,
            'other_products' => $other_products,

        ]);
    }


    public function getComment(Request $request){
dd($request->prod);
        $validator = Validator::make($request->all(), [
            'prod' => 'required|unique:products|max:40',
            'comment' => 'required',
        ]);
        if ($validator->fails()){
            return abort(404);
        }
        return 1;
    }
}
