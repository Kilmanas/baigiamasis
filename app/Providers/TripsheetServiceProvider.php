<?php

namespace App\Providers;

use App\Services\TripsheetParams;
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
        $this->app->bind('App\Services\TripsheetParams', function ($app) {
            return new TripsheetParams();
        });
    }
}
