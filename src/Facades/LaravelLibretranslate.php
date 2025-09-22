<?php

namespace T73 Biz LLC\LaravelLibretranslate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \T73 Biz LLC\LaravelLibretranslate\LaravelLibretranslate
 */
class LaravelLibretranslate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \T73 Biz LLC\LaravelLibretranslate\LaravelLibretranslate::class;
    }
}
