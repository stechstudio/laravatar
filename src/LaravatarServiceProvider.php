<?php

namespace STS\Laravatar;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LaravatarServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(realpath(__DIR__.'/../config/laravatar.php'), 'laravatar');
    }

    public function boot()
    {
        $this->publishes([realpath(__DIR__.'/../config/laravatar.php') => config_path('laravatar.php')]);

        $this->loadViewsFrom(realpath(__DIR__.'/../resources/views'), 'laravatar');
        View::addNamespace('laravatar', realpath(__DIR__.'/../resources/views'));
        Blade::componentNamespace('STS\Laravatar\Components', 'laravatar');
    }
}
