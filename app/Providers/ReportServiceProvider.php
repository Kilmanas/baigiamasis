<?php

namespace App\Providers;

use App\Services\Report;
use Illuminate\Support\ServiceProvider;

class ReportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Report', function ($app) {
            return new Report();
        });
    }
}
