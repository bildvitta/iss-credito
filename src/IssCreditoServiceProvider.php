<?php

namespace Bildvitta\IssCredito;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bildvitta\IssCredito\Commands\IssCreditoCommand;

class IssCreditoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('iss-credito')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_iss-credito_table')
            ->hasCommand(IssCreditoCommand::class);
    }
}
