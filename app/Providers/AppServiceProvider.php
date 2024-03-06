<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

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
            $title = '';

            $routeName = Route::currentRouteName();

            switch ($routeName) {
                case 'product.index':
                    $title = 'Dashboard | DioFactory';
                    break;
                case 'product.create':
                    $title = 'Buat | DioFactory';
                    break;
                case 'product.edit':
                    $title = 'Edit | DioFactory';
                    break;
                default:
                    $title = 'Home | DioFactory';
                    break;
            }

            $view->with('title', $title);
        });
    }
}
