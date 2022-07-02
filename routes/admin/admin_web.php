<?php


use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Admin\controllers\DashboardController;

Route::redirect('/', RouteServiceProvider::ADMIN_HOME, 301);

Route::get('dashboard', DashboardController::class)->name('dashboard');

Route::get('posts/create', function () {
    return 'done';
})->name('posts.create');

require __DIR__ . '/admin_auth.php';


