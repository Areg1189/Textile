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
use App\Models\HomeImage;
use Illuminate\Support\Facades\File;
use App\Models\SubCategory;


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


        return view('vendor.adminlte.home');
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

    public function adminMessages()
    {
        $users = User::whereHas('messages')->orWhereHas('messagesSeen')->paginate(20);


        return view('vendor.adminlte.messages', ['users' => $users]);
    }

    public function getUsers()
    {
        $users = User::where('status', 1)->orderBy('id', 'desc')->get();

        return view('vendor.adminlte.users', ['users' => $users]);
    }

    public function messageUser(Request $request)
    {
        $user = User::where('href', $request->user)->firstOrFail();
        $messages = Message::where('user_id', $user->id)->orWhere('to_id', $user->id)->get();
        return View::make('vendor.adminlte.messageContentExample', [
            'messages' => $messages,
            'user' => $user,
        ]);
    }

    public function site()
    {

        $homeImage = HomeImage::where('code', 'home-image')->first();
        $topCategories = SubCategory::where('top', '>', 0)->get();
        $subCategories = SubCategory::get();
        return view('vendor.adminlte.site', [
            'homeImage' => $homeImage,
            'topCategories' => $topCategories,
            'subCategories' => $subCategories,
        ]);
    }

    public function updateHomeImage(Request $request)
    {
//        $this->validate($request,[
//            'prod' => 'required'
//        ]);

        if ($request->key && $request->key == 'one') {
            $product = HomeImage::where('code', $request->prod)->first();
            return View::make('vendor.adminlte.updatePage.updateHomeImage', [
                'product' => $product,
            ]);
        } else {
            $homeImage = HomeImage::where('code', 'home-image')->first();
            if ($request->image) {
                $data = $_POST['image'];
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);

                $data = base64_decode($data);
                $imageName = time() . '.jpg';
                file_put_contents('upload/' . $imageName, $data);
                if (file_exists(public_path() . '/upload/' . $homeImage->image_name)) {
                    File::delete(public_path() . '/upload/' . $homeImage->image_name);
                }
            } else {
                $imageName = $homeImage->image_name;
            }

            $homeImage->image_name = $imageName;
            $homeImage->translate('hy')->text_1 = $request->hy_text_1;
            $homeImage->translate('en')->text_1 = $request->en_text_1;
            $homeImage->translate('ru')->text_1 = $request->ru_text_1;
            $homeImage->translate('hy')->text_2 = $request->hy_text_2;
            $homeImage->translate('en')->text_2 = $request->en_text_2;
            $homeImage->translate('ru')->text_2 = $request->ru_text_2;
            $homeImage->translate('hy')->text_3 = $request->hy_text_3;
            $homeImage->translate('en')->text_3 = $request->en_text_3;
            $homeImage->translate('ru')->text_3 = $request->ru_text_3;
            $homeImage->save();

            return back();

        }

    }
}
