<?php

namespace App\Http\Controllers;


use App\Models\FilterSub;
use App\Models\FilterValue;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Reviews;
use Illuminate\Support\Facades\View;
use Gloudemans\Shoppingcart\Facades\Cart;

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
        if ($review) {
            return response()->json(['success' => __('product.message_successful')]);
        }
    }

    public function pstFilterProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cat' => 'required',
        ]);
        if ($validator->fails()) {
            return abort(404);
        }
        $cat = SubCategory::where('code', $request->cat)->firstOrFail();
        if ($request->filter[0]) {
            $products = Product::where('parent_id', $cat->id)->where(function ($query) use ($request) {
                $query->whereHas('filters', function ($query) use ($request) {
                    $query->whereIn('filter_value', $request->filter);
                });
            })->orderBy('id', 'desc')->paginate(9);
        } else {
            $products = Product::where('parent_id', $cat->id)->orderBy('id', 'desc')->paginate(9);
        }
        if ($products->first()) {
            return View::make('includes.productList', [
                'products' => $products,
            ]);
        } else {
            $products = Product::where('parent_id', $cat->id)->inRandomOrder()->limit(3)->get();
            return View::make('includes.notProduct', [
                'products' => $products,
            ]);
        }

    }

    public function priceAjax(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'filter' => 'required',
            'filter.*' => 'required',
            'prod' => 'required',
        ]);
        if ($validator->fails()) {
            return abort(404);
        }
        $product = Product::where('code', $request->prod)->firstOrFail();
        $price = $product->price;
        $sale = $product->sale;
        foreach ($request->filter as $filter) {
            $prodFilter = $product->filters->where('filter_value', $filter)->first();
            if ($prodFilter->plusMinus == '+') {
                $price = $price + $prodFilter->price;
            } else {
                $price = $price - $prodFilter->price;
            }
        }
        if ($sale) {
            if ($sale < 100) {
                $sale1 = $price / 100;
                $sale = $sale1 * $sale;
                $price = $price - $sale;
            }
        }
        return response()->json(['price' => $price]);
    }

    public function add_to_cart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'color' => 'required|max:7',
            'prod' => 'required',
            'gty' => 'required|integer|numeric|min:1',
            'filter' => 'required',
            'filter.*' => 'required',
            'fl' => 'required',
            'fl.*' => 'required',
            'name' => 'required',
            'name.*' => 'required',
        ]);
        if ($validator->fails()) {
            return abort(404);
        }
        $product = Product::where('code', $request->prod)->firstOrFail();
        $price = $product->price;
        $sale = $product->sale;
        foreach ($request->filter as $key => $filter) {
            if ($request->fl[$key] == 'sub'){
                FilterSub::where('code', $filter)->whereTranslationLike('name', $request->name[$key])->firstOrFile();
            }elseif ($request->fl[$key] == 'val'){
                FilterSub::where('code', $filter)->whereTranslationLike('name', $request->name[$key])->firstOrFile();
            }
            $prodFilter = $product->filters->where('filter_value', $filter)->first();
            if ($prodFilter->plusMinus == '+') {
                $price = $price + $prodFilter->price;
            } else {
                $price = $price - $prodFilter->price;
            }
        }
        if ($sale) {
            if ($sale < 100) {
                $sale1 = $price / 100;
                $sale = $sale1 * $sale;
                $price = $price - $sale;
            }
        }
        $color = $request->color;

        Cart::add([
            'id' => $product->id,
            'name' => $product->translate(session('locale'))->name,
            'qty' => $request->qty,
            'price' => $price,
            'options' => [
                'color' => $color
            ]
        ]);
        dd(Cart::content());
    }

}
