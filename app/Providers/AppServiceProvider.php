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
            \Illuminate\Support\Facades\View::share('site', []);
            \Illuminate\Support\Facades\View::share('menu', []);
            return;
        }

        try {
            \Illuminate\Support\Facades\View::share('site', cache()->remember('site_settings', 60 * 24, function () {
                return \App\Models\SiteSetting::pluck('value', 'key')->toArray();
            }));

            \Illuminate\Support\Facades\View::share('menu', cache()->remember('website_menu', 60 * 24, function () {
                return [
                    ['name' => 'HOME', 'route' => 'home', 'active' => '/'],
                    [
                        'name' => 'ABOUT',
                        'route' => 'about.index',
                        'active' => 'about',
                        'sub_menu' => [
                            ['name' => 'Institutional Profile', 'route' => 'about.index', 'active' => 'about'],
                            ['name' => 'Global Chairman', 'route' => 'about.index', 'active' => 'about/chairman'],
                            ['name' => 'Core Leadership', 'route' => 'about.index', 'active' => 'about/leadership'],
                            ['name' => 'Wall of Excellence', 'route' => 'excellence.index', 'active' => 'wall-of-excellence'],
                        ]
                    ],
                    [
                        'name' => 'PARTICIPATE',
                        'route' => 'join.index',
                        'active' => 'join',
                        'sub_menu' => \App\Models\Form::where('status', 'published')->where('is_hidden', false)->get()->map(function ($form) {
                            return [
                                'name' => $form->name,
                                'route' => 'join.forms.show',
                                'slug' => $form->slug,
                                'active' => 'join/application/' . $form->slug
                            ];
                        })->toArray()
                    ],
                    [
                        'name' => 'SECTORS',
                        'route' => 'sectors.index',
                        'active' => 'sectors',
                        'mega' => true,
                        'sub_menu' => config('sectors.sectors')
                    ],
                    ['name' => 'EVENTS & SUMMITS', 'route' => 'events.index', 'active' => 'events'],
                    ['name' => 'THINK-TANK BLOG', 'route' => 'blog.index', 'active' => 'blog'],
                    ['name' => 'MEDIA GALLERY', 'route' => 'gallery', 'active' => 'gallery'],
                ];
            }));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\View::share('site', []);
            \Illuminate\Support\Facades\View::share('menu', []);
        }
    }
}
