<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('ziggy:generate-ts', function () {
    Artisan::call('ziggy:generate resources/js/ziggy.ts');
    $this->info('Generate a Typescript file containing Ziggy’s routes and configuration.');
});
