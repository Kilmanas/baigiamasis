<?php

namespace App\Providers;

use App\Services\Tripsheet;
use Illuminate\Support\ServiceProvider;

class TripsheetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Tripsheet', function ($app) {
            return new Tripsheet();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
