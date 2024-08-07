<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;

use App\Services\AdminService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

     public function boot(): void
     {
        Paginator::useBootstrap();


     }

    public function register() {
        $this->app->bind('admin', function ($app) {
            return new AdminService();

    });
    }


}
