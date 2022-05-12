<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_ENV') == 'production') {
            $this->app->bind('path.public', function () {
                return base_path() . '/../public_html/helpdesk/';
            });
        } else {
            $this->app->bind('path.public', function() {
                return realpath('../public_html');
            });
        }
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
