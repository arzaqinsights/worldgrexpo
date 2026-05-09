<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        if (app()->runningInConsole()) {
            \Illuminate\Support\Facades\View::share('site', cache()->remember('site_settings', 60 * 24, function () {
                return \App\Models\SiteSetting::pluck('value', 'key')->toArray();
            }));
            return;
        }

        try {
            \Illuminate\Support\Facades\View::share('site', cache()->remember('site_settings', 60 * 24, function () {
                return \App\Models\SiteSetting::pluck('value', 'key')->toArray();
            }));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\View::share('site', []);
        }
    }
}
