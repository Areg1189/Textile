<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Auth::routes();
        Route::get('home', 'HomeController@index')->name('home');
        Route::get('', 'HomeController@index')->name('home');


        Route::get('register/confirm/{token}', 'Auth\AdvancedReg@confirm')->name('registerEmail');
        Route::get('repeat_confirm', 'Auth\AdvancedReg@getRepeat')->name('getRepeat');

        Route::post('login', 'Auth\MyAuthController@login')->name('login');

        Route::post('register', 'Auth\AdvancedReg@register')->name('register');
        Route::post('repeat_confirm', 'Auth\AdvancedReg@postRepeat');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email')->middleware('passwordEmail');

//        =================  USER  ================== //
        Route::group(['middleware' => 'user', 'prefix' => 'user/{id}'], function () {

            Route::get('', 'Users\UserController@index')->name('user');

            Route::get('settings', 'Users\UserController@getSettings')->name('userSettings');

            Route::get('purchases', 'Users\UserController@getPurchases')->name('userPurchases');

            Route::get('message', 'Users\UserController@getSendAdmin')->name('userGetMessage');

            Route::post('getMessage', 'Users\UserController@getMessage')->name('getMessage');

            Route::post('postMessage', 'Users\UserController@postSendAdmin')->name('userPostMessage');

            Route::post('editDennis', 'Users\UserController@editDennis')->name('editDennis');

            Route::post('changePassword', 'Users\UserController@changePassword')->name('changePassword');

            Route::post('deleteUser', 'Users\UserController@deleteUser')->name('deleteUser');
        });

        //        =================  ADMIN  ================== //

        Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
            Route::get('', 'Admin\AdminController@index')->name('admin');
            Route::get('message/{id?}', 'Admin\AdminController@sendMessage')->name('sendMessage');
            Route::get('categories', 'Admin\AdminCategoryController@index')->name('adminCategories');
            Route::get('category/{name}', 'Admin\AdminCategoryController@show')->name('adminCategory');



            Route::post('addCategory', 'Admin\AdminCategoryController@create')->name('addCategory');

            Route::post('block', 'Admin\AdminController@blockUser')->name('blockUser');

            Route::post('getMessageAdmin', 'Admin\AdminController@getMessageAdmin')->name('getMessageAdmin');
        });

    });