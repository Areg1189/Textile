<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use App\Models\FilterCategory;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {
        Category::where('link', $request->cat)->firstOrFail();
        $sub = SubCategory::where('link', $request->name)->firstOrFail();
        $filters = FilterCategory::get();
        return view('vendor.adminlte.products', [
            'sub' => $sub,
            'filters' => $filters,
        ]);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(),[
           'hy_name' => 'required|string',
           'en_name' => 'required|string',
           'ru_name' => 'required|string',
           'color.*' => 'main:6|max:8',
           'price' => 'integer|numeric|min:1',
           'sale' => 'integer|numeric|min:1',
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();
        }
        if ($request->hy_description || $request->en_description || $request->ru_description){
            $validator = Validator::make($request->all(),[
                'hy_description' => 'required',
                'en_description' => 'required',
                'ru_description' => 'required',
            ]);
            if ($validator->fails()){
                return back()->withErrors($validator->errors())->withInput();
            }
        }

//        $product = Product::create([
//                'code' => $request->en_name,
//                'link' => $link,
//                'image_name' => $imageName,
//                'category_id' => $cat->id,
//                'hy' => [
//                    'name' => $request->hy_name,
//                ],
//                'en' => [
//                    'name' => $request->en_name,
//                ],
//                'ru' => [
//                    'name' => $request->ru_name,
//                ]
//
//        ]);

    }
}
