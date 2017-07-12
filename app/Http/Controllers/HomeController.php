<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\HomeImage;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeImage = HomeImage::where('code', 'home-image')->first();
        $topCategories = SubCategory::where('top', '>', 0)->get();
        $subCategories = SubCategory::get();
        return view('home', [
            'homeImage' => $homeImage,
            'topCategories' => $topCategories,
            'subCategories' => $subCategories
        ]);
    }


    public function about(){
        return view('about');
    }


    public function contactus(){
        return view('contactus');
    }

    public function send_email(Request $request){
        $name = $request->name;
        $email = $request->email;
        $number = $request->phone;
        $subject = $request->subject;
        $text = $request->text;

        try{

            Mail::send('emails.email', [
                'email'=>$email,
                'name'=>$name,
                'number'=>$number,
                'text' => $text,
                'subject' => $subject
            ], function ($message) use ($email, $name, $number, $text, $subject) {
                $message->to(getenv('MAIL_USERNAME'));
                $message->from($email, $name);
            });

            return back()->with("success", "Your Email Was Successfully Sent");
        } catch (\Exception $e){
            return back()->with("error", "Your Email Was Not Sent");
        }
    }


    public function getCategory(Request $request)
    {
        if (!$request->cat) {
            return abort(404);
        }

        $subCategory = SubCategory::where('link', $request->cat)->firstOrFail();
        $category = $subCategory->category;


        if(count($subCategory->products) < 5)  {
            $releated_products = $subCategory->products;
        } else {
            $releated_products = $subCategory->products->random(4);
        }


        return view('products', [
            'subCategory' => $subCategory,
            'category' => $category,
            'releated_products' => $releated_products
        ]);
    }


    public function getProduct(Request $request){
//        if (!$request->prod || !$request->name) {
//            return abort(404);
//        }

        return view('product');
    }
}
