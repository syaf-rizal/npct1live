<?php

namespace rndediiv2\CustomHelper;

use Illuminate\Support\ServiceProvider;

class CustomHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application service
     *
     * @return void
     */
    public function void()
    {

    }

    /**
     * Register the application services
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CustomHelper::class, function (){
           return new CustomHelper();
        });
        $this->app->alias(CustomHelper::class, 'CustomHelper');
    }
}