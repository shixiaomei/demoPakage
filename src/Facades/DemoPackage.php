<?php

namespace bella\DemoPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \bella\DemoPackage\DemoPackage
 */
class DemoPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \bella\DemoPackage\DemoPackage::class;
    }
}
