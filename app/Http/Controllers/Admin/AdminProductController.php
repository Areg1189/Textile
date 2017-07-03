<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{
    public function index(Request $request){
        Category::where('link', $request->cat)->firstOrFail();
        $sub = SubCategory::where('link', $request->name)->firstOrFail();

        return view('vendor.adminlte.products',[
            'sub' => $sub,
        ]);
    }
}
