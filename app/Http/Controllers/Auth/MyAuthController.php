<?php

namespace App\Http\Controllers\Auth;

use Acacha\AdminLTETemplateLaravel\Console\Routes\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyAuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:40',
            'password' => 'required|min:6',
        ]);
        $pass = md5($request->password);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $pass, 'status' => '1'], $request->has('remember'))) {
            if(Auth::user()->rol){
                return redirect(route('admin'));
            }
            return redirect()->back();
        } else {
            return back()->with('error', __('auth.IncorrectLogin'));
        }
    }
}
