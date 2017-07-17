<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Reviews;

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


    public function getComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);
        if ($validator->fails() || Auth::guest() || !$request->prod) {
            return abort(404);
        }
        $product = Product::where('link', $request->prod)->firstOrFail();
        $review = Reviews::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'text' => $request->comment,
            'published' => 0,
        ]);
        if ($review){
            return response()->json(['success' => __('product.message_successful')]);
        }
    }


}
