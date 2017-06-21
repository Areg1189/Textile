<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class AdminCategoryController extends Controller
{
    public function index(){
        return view('vendor.adminlte.categories');
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'hy_name' => 'required|string',
            'en_name' => 'required|string',
            'ru_name' => 'required|string',
        ]);
        if ($validator->fails()){
            return back()->with('error', 'add')->withErrors($validator->errors())->withInput();
        }
        $link = mb_strtolower($request->en_name);
        $link = str_replace('-', ' ', $link);
        $newCat = Category::create([
            'code' => $request->en_name,
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
        if ($newCat){
            return back()->with('newCat', $newCat->id);
        }

    }
}
