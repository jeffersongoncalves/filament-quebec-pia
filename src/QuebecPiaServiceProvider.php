<?php

namespace JeffersonGoncalves\Filament\QuebecPia;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class QuebecPiaServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-quebec-pia';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
