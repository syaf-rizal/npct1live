<?php

namespace rndediiv2\CustomHelper\Facades;

use Illuminate\Support\Facades\Facade;

class CustomHelper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'CustomHelper';
    }
}