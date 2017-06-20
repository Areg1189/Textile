<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Message;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Schema::defaultStringLength(191);
//        $messageCount = Message::where('status', 0) => get();
//        View::share('messageCount', $messageCount);
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
