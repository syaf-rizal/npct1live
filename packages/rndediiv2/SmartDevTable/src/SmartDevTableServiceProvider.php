<?php

namespace rndediiv2\SmartDevTable;

use Illuminate\Support\ServiceProvider;

class SmartDevTableServiceProvider extends  ServiceProvider
{

    public function boot()
    {
        $this->publishes([
           __DIR__ . '/views/components/pagination/paging.blade.php' => base_path('/resources/views/components/pagination/paging.blade.php'),
            __DIR__ . '/css/bootstrap-material-datetimepicker.css' => base_path('public/css/bootstrap-material-datetimepicker.css'),
            __DIR__ . '/css/SmartDevTable.css' => base_path('public/css/SmartDevTable.css'),
            __DIR__ . '/script/SmartDevTable.js' => base_path('public/js/SmartDevTable.js'),
            __DIR__ . '/script/bootstrap-material-datetimepicker.js' => base_path('public/js/bootstrap-material-datetimepicker.js')
        ]);
    }

    public function register()
    {
        $this->app->singleton(SmartDevTable::class, function (){
            return new SmartDevTable();
        });
        $this->app->alias(SmartDevTable::class, 'SmartDevTable');
    }

}