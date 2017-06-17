<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){

        $users = User::where('status',1)->get();

//        dd($users);

        return view('vendor.adminlte.home', ['users' => $users]);
    }


    public  function  blockUser(Request $request){
        $validate = Validator::make($request->all(), [
            'public'=>'required|boolean',
            'user'=>'required'
        ]);

        if ($validate->fails()){
            return abort(404);
        }

        $result = User::where('href', $request->user)->update(['block' => $request->public]);
    }


    public  function  sendMessage(Request $request){
        if ($request->id){
            $user = User::where('href', $request->id)->firstOrFail();
            return view('vendor.adminlte.sendMessage', ['user'=>$user]);
        }

    }
}
