<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\Social_icons;
use App\Models\Subscriber;
use phpDocumentor\Reflection\Types\Null_;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $categories = Category::get();
        $social_icons = Social_icons::get();
        $subscriber_count = Subscriber::where('new', 0)->count();
        $subscribers_count = Subscriber::count();

        View::share([
            'categories'  => $categories,
            'social_icons' => $social_icons,
            'subscriber_count' => $subscriber_count,
            'subscribers_count' => $subscribers_count,
        ]);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
        config([
            'laravellocalization.useAcceptLanguageHeader' => true,
            'laravellocalization.hideDefaultLocaleInURL' => true
        ]);
    }
}
