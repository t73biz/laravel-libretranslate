<?php

namespace T73 Biz LLC\LaravelLibretranslate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use T73 Biz LLC\LaravelLibretranslate\Commands\LaravelLibretranslateCommand;

class LaravelLibretranslateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-libretranslate')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_libretranslate_table')
            ->hasCommand(LaravelLibretranslateCommand::class);
    }
}
