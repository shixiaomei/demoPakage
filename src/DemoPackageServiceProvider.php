<?php

namespace bella\DemoPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use bella\DemoPackage\Commands\DemoPackageCommand;

class DemoPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('demopackage')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_demopackage_table')
            ->hasCommand(DemoPackageCommand::class);
    }
}
