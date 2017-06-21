<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;
use Illuminate\Support\Facades\View;
use App\Models\Category;


class AdminController extends Controller
{

    public function index()
    {
//        Category::create([
//            'code' => 'grec',
//            'price' => '2000',
//            'hy' => [
//                'name' => 'Greece',
//                'description' => 'hayeren',
//            ],
//            'en' => [
//                'name' => 'Grèce',
//                'description' => 'angleren',
//            ],
//            'ru' => [
//                'name' => 'Grèce',
//                'description' => 'ruseren',
//            ]
//        ]);

//$a = Category::where('code', 'grec')->first();
//        dd($a->translate(session('locale'))->name);
//        Category::where('code', 'grec')->delete();


        $users = User::where('status', 1)->get();

        return view('vendor.adminlte.home', ['users' => $users]);
    }


    public function blockUser(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'public' => 'required|boolean',
            'user' => 'required'
        ]);

        if ($validate->fails()) {
            return abort(404);
        }
        $result = User::where('href', $request->user)->update(['block' => $request->public]);
        if ($result) {
            return 1;
        }
    }


    public function sendMessage(Request $request)
    {
        if ($request->id) {
            $user = User::where('href', $request->id)->firstOrFail();
            $messages = Message::where('user_id', $user->id)->orWhere('to_id', $user->id)->get();
            return view('vendor.adminlte.sendMessage', [
                'user' => $user,
                'messages' => $messages
            ]);
        }

    }

    public function getMessageAdmin(Request $request)
    {

        $user = User::where('href', $request->id)->firstOrFail();
        if ($request->key && $request->key == 'set') {
            $messages = Message::where('id', '>', $request->message)->where(function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->orWhere('to_id', $user->id);
            })->get();
            Message::where(function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->orWhere('to_id', $user->id);
            })->update(['status_admin' => 1]);
            if ($messages->first()) {
                return View::make('vendor.adminlte.messageTemplate', [
                    'messages' => $messages,
                ]);
            }

            return 0;
        } else {
            $message = Message::create([
                'user_id' => Auth::user()->id,
                'to_id' => $user->id,
                'text' => $request->text,
            ]);
            return View::make('vendor.adminlte.messageTemplate', [
                'message' => $message,
            ]);
        }
    }
}
