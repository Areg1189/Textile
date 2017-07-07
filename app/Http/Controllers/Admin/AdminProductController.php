<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProFilter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use App\Models\FilterCategory;
use Illuminate\Support\Facades\Validator;
use App\Models\Color;
use App\Models\Image;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {

        Category::where('link', $request->cat)->firstOrFail();
        $sub = SubCategory::where('link', $request->name)->firstOrFail();
        $filters = FilterCategory::get();
        $products = Product::get();
        return view('vendor.adminlte.products', [
            'sub' => $sub,
            'filters' => $filters,
            'products' => $products,
        ]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hy_name' => 'required|string',
            'en_name' => 'required|string',
            'ru_name' => 'required|string',
            'color.*' => 'min:6|max:8',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,JPEG,png,PNG,jpg,JPG,gif,svg'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        if ($request->hy_description || $request->en_description || $request->ru_description) {
            $validator = Validator::make($request->all(), [
                'hy_description' => 'required',
                'en_description' => 'required',
                'ru_description' => 'required',
            ]);
            if ($validator->fails()) {
                dd($validator->errors());
                return back()->withErrors($validator->errors())->withInput();
            }
        }
        $link = mb_strtolower($request->en_name);
        $link = str_replace(' ', '-', $link);

        $product = Product::create([
            'code' => time() . $request->en_name,
            'link' => $link,
            'sale' => $request->sale,
            'parent_id' => $request->cat,
            'hy' => [
                'name' => $request->hy_name,
            ],
            'en' => [
                'name' => $request->en_name,
            ],
            'ru' => [
                'name' => $request->ru_name,
            ]
        ]);
        if ($request->color[0]) {
            foreach ($request->color as $color) {
                Color::create([
                    'product_id' => $product->id,
                    'color' => $color,
                ]);
            }
        }

        $files = $request->file('image');
        $folderName = '/image/product';
        $names = [];
        $count = count($files);
        for ($i = $count - 1; $i > -1; $i--) {
            $names[$i] = $files[$i]->getClientOriginalName();
            if (file_exists(public_path() . $folderName . '/' . $names[$i])) {
                $names[$i] = time() . $names[$i];
            }
            $files[$i]->move(public_path() . $folderName, $names[$i]);
            Image::create([
                'image_name' => $names[$i],
                'product_id' => $product->id,
            ]);
        }
        if ($request->filter_checkbox[0]) {
            for ($i = 0; $i < count($request->filter_checkbox); $i++) {

                ProFilter::create([
                    'filter_value' => $request->filter_checkbox[$i],
                    'price' => $request->price[$i],
                    'prod_id' => $product->id,
                ]);
            }
        }
        if ($product) {
            return back()->with('newCat', $product->id);
        }

    }

    public function update(Request $request)
    {
        if (!$request->prod) {
            return abort(404);
        }
        $filters = FilterCategory::get();
        $product = Product::where('link', $request->prod)->firstOrFail();
        $sub = SubCategory::where('id', $product->parent->id)->firstOrFail();
        if ($request->key && $request->key == 'one') {
            return View::make('vendor.adminlte.updatePage.updateProduct', [
                'product' => $product,
                'filters' => $filters,
                'sub' => $sub,
            ]);
        }

        $validator = Validator::make($request->all(), [
            'hy_name' => 'required|string',
            'en_name' => 'required|string',
            'ru_name' => 'required|string',
            'color.*' => 'min:6|max:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        if ($request->hy_description1 || $request->en_description1 || $request->ru_description1) {
            $validator = Validator::make($request->all(), [
                'hy_description1' => 'required',
                'en_description1' => 'required',
                'ru_description1' => 'required',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator->errors())->withInput();
            }
        }

        if (!$request->image_name || $files = $request->file('image')) {
            $validImage = Validator::make($request->all(), [
                'image' => 'required',
                'image.*' => 'image|mimes:jpeg,JPEG,png,jpg,JPG,gif,svg|max:2048'
            ]);
            if ($validImage->fails()) {
                return redirect()->back()->withErrors($validImage->errors())->withInput();
            }
        }


        $link = mb_strtolower($request->en_name);
        $link = str_replace(' ', '-', $link);
        $product->link = $link;
        $product->sale = $request->sale;
        $product->translate('hy')->name = $request->hy_name;
        $product->translate('en')->name = $request->en_name;
        $product->translate('ru')->name = $request->ru_name;
        $product->translate('hy')->description = $request->hy_description1;
        $product->translate('en')->description = $request->en_description1;
        $product->translate('ru')->description = $request->ru_description1;
        $product->save();


        Color::where('product_id', $product->id)->delete();
        if ($request->color[0]) {
            foreach ($request->color as $color) {
                Color::create([
                    'product_id' => $product->id,
                    'color' => $color,
                ]);
            }
        }
        if ($request->file('image')) {
            $files = $request->file('image');
            $folderName = '/image/product';
            $names = [];
            $count = count($files);
            for ($i = $count - 1; $i > -1; $i--) {
                $names[$i] = $files[$i]->getClientOriginalName();
                if (file_exists(public_path() . $folderName . '/' . $names[$i])) {
                    $names[$i] = time() . $names[$i];
                }
                $files[$i]->move(public_path() . $folderName, $names[$i]);
                Image::create([
                    'image_name' => $names[$i],
                    'product_id' => $product->id,
                ]);
            }
        }

        if ($request->image_name) {
            $image_name = $request->image_name;

            Image::where(['product_id' => $product->id])->chunk(count($image_name), function ($images) use ($image_name) {
                $j = 0;
                foreach ($images as $image) {
                    Image::where('id', $image->id)->update(['image_name' => $image_name[$j]]);
                    $j++;
                }
            });

        }

        ProFilter::where('prod_id', $product->id)->delete();

        if ($request->filter_checkbox[0]){

            for ($i = 0; $i < count($request->filter_checkbox); $i++) {

                ProFilter::create([
                    'filter_value' => $request->filter_checkbox[$i],
                    'price' => $request->price[$i],
                    'prod_id' => $product->id,
                ]);
            }
        }
        if ($product) {
            return back()->with('newCat', $product->id);
        }
    }


    public function delete(Request $request)
    {

        $cat = SubCategory::where('link', $request->prod)->firstOrFail();
//        $cat->roles()->detach();
//        $cat->deleteTranslations();
        $cat->delete();
        return 1;

    }
}
