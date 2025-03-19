<?php

namespace DanielHe4rt\FilamentPosthog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DanielHe4rt\FilamentPosthog\FilamentPosthog
 */
class FilamentPosthog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DanielHe4rt\FilamentPosthog\FilamentPosthog::class;
    }
}
