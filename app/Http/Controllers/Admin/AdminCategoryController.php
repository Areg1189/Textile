<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Models\FilterCategory;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('vendor.adminlte.categories');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hy_name' => 'required|string',
            'en_name' => 'required|string',
            'ru_name' => 'required|string',
        ]);
        if ($validator->fails()) {
            return back()->with('error', 'add')->withErrors($validator->errors())->withInput();
        }
        $link = mb_strtolower($request->en_name);
        $link = str_replace(' ', '-', $link);
        $newCat = Category::create([
            'code' => $request->en_name.$link,
            'link' => $link,

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
        $cat = Category::where('link', $request->prod)->firstOrFail();

        if ($request->key && $request->key == 'one') {
            return View::make('vendor.adminlte.updatePage.updateCat', [
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

    public function show(Request $request)
    {
        $category = Category::where('link', $request->name)->firstOrFail();

        $filters = FilterCategory::get();
        return view('vendor.adminlte.subCategories',[
            'category' => $category,
            'filters' => $filters,
        ]);
    }

    public function delete(Request $request)
    {
        $cat = Category::where('link', $request->prod)->firstOrFail();
//        $cat->roles()->detach();
        $cat->deleteTranslations();
        $cat->delete();
        return 1;

    }
}
