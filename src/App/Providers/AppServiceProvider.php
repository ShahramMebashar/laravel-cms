<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Factory::guessFactoryNamesUsing(function (string $name) {
            return 'Database\\Factories\\' . class_basename($name) . 'Factory';
        });

        Factory::guessModelNamesUsing(function (Factory $factory) {
            $namespace = 'Domain\\';
            $baseModelName = str_replace('Factory', '', class_basename($factory));
            $pluralName = Str::plural($baseModelName, 10);
            return $namespace.$pluralName . '\\Models\\' . $baseModelName;
        });
        
    }
}
