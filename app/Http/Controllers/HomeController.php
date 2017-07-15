<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\About_text;
use App\Models\About_cover;
use App\Models\About_faq;
use App\Models\About_sld;
use App\Models\Employee_block;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\HomeImage;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Mail;
use App\Models\Employee;

class HomeController extends Controller
{

    public function index()
    {
        $homeImage = HomeImage::where('code', 'home-image')->first();
        $topCategories = SubCategory::where('top', '>', 0)->get();
        $subCategories = SubCategory::get();
        $sliders = Product::where('slider_new', 'new')->orWhere('slider_sale', 'sale')->get();
        return view('home', [
            'homeImage' => $homeImage,
            'topCategories' => $topCategories,
            'subCategories' => $subCategories,
            'sliders' => $sliders,
        ]);
    }


    public function about(){
        $employees = Employee::get();
        $about_text = About_text::first();
        $cover = About_cover::first();
        $show = Employee_block::first();
        $about_faq = About_faq::get();
        $about_slider = About_sld::get();

        return view('about',[
            'employees' => $employees,
            'about_text' => $about_text,
            'cover' => $cover,
            'show' => $show,
            'about_faq' => $about_faq,
            'about_slider' => $about_slider,
        ]);
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






}
