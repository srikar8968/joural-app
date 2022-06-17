<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\Category;
use App\Models\Page;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.navigation', 'layouts.footer', 'components.journal-col'], function ($view) {
            $categories = Category::orderBy('name')->get();

            $view->with('categories', $categories);
        });

        View::composer('layouts.footer', function ($view) {
            $pages = Page::all();

            $view->with('pages', $pages);
        });
    }
}
