<?php

namespace JeffersonGoncalves\Filament\QuebecPia;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuebecPiaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-quebec-pia')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
