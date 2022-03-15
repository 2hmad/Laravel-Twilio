<?php

namespace Dot2hmad\LaravelTwilio\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelTwilio extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'laraveltwilio';
    }
}
