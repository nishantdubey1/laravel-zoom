<?php

namespace NishantDubey1\Zoom;


use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class LaravelZoomServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravelzoom.php',
            'laravelzoom'
        );

    }

}
