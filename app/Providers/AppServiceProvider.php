<?php

namespace App\Providers;

use App\Http\Controllers\HomeController;
use App\Models\FaviconAndTitle;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function ($view) {
            $categories = (new HomeController())->getActiveCategories();

            $faviconAndTitle = FaviconAndTitle::first();
            $favicon = $faviconAndTitle->favicon ?? 'default_favicon.png';
            $siteTitle = $faviconAndTitle->title ?? 'E-Commerce';

            $view->with([
                'categories' => $categories,
                'favicon' => $favicon,
                'siteTitle' => $siteTitle,
            ]);
        });
    }
}
