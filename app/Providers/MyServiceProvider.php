<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{


    public function register()
    {
        $this->app->bind('App\Repositories\MyInterface', 'App\Repositories\MyRepository');
    }
    public function boot()
    {
        //
    }
}
