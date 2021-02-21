<?php

namespace Wreckitq\Tenancy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wreckitq\Tenancy\Commands\TenancyCommand;

class TenancyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tenancy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tenancy_table')
            ->hasCommand(TenancyCommand::class);
    }
}
