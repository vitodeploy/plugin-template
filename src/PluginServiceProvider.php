<?php

namespace Vendor\Name;

use Illuminate\Support\ServiceProvider;

class PluginServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->app->booted(function () {
            // Register plugin features here
            // https://vitodeploy.com/docs/plugins
        });
    }
}
