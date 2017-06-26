<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AdminSubCategoryController extends Controller
{
    public function index(Request $request)
    {
        $cat = Category::wheer('link', $request->cet)->firstOrFail();
        return view('vendor.adminlte.categories',[
            'cat' => $cat,
        ]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hy_name' => 'required|string',
            'en_name' => 'required|string',
            'ru_name' => 'required|string',
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('error', 'add')->withErrors($validator->errors())->withInput();
        }

        $cat = Category::where('link', $request->cat)->firstOrFail();

        $link = mb_strtolower($request->en_name);
        $link = str_replace(' ', '-', $link);

        if ($request->image) {
            $data = $_POST['image'];
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('images/subCategory/' . $imageName, $data);
        }
        $newCat = SubCategory::create([
            'code' => $request->en_name,
            'link' => $link,
            'image_name' => $imageName,
            'category_id' => $cat->id,
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
        if ($newCat) {
            return back()->with('newCat', $newCat->id);
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'prod' => 'required',
        ]);
        $cat = SubCategory::where('link', $request->prod)->firstOrFail();

        if ($request->key && $request->key == 'one') {
            return View::make('vendor.adminlte.updatePage.updateSubCat', [
                'product' => $cat
            ]);
        }
        $validator = Validator::make($request->all(), [
            'hy_name' => 'required|string|email',
            'en_name' => 'required|string',
            'ru_name' => 'required|string',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $link = mb_strtolower($request->en_name);
        $link = str_replace(' ', '-', $link);
        $cat->code = $request->en_name;
        $cat->link = $link;
        $cat->translate('hy')->name = $request->hy_name;
        $cat->translate('en')->name = $request->en_name;
        $cat->translate('ru')->name = $request->ru_name;
        $cat->save();
        if ($cat) {
            return back()->with([
                'success' => 'Category Updated',
                'newCat' => $cat->id,
            ]);
        }
    }
//
//    public function show(Request $request)
//    {
//        $category = Category::where('link', $request->name)->firstOrFail();
//
//        return view('vendor.adminlte.subCategories',[
//            'category' => $category,
//        ]);
//    }
//
//    public function delete(Request $request)
//    {
//        $cat = Category::where('link', $request->prod)->firstOrFail();
////        $cat->roles()->detach();
//        $cat->deleteTranslations();
//        $cat->delete();
//        return 1;
//
//    }
}
