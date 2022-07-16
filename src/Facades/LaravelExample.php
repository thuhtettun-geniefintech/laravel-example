<?php

namespace Thuhtet\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thuhtet\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-example';
    }
}
