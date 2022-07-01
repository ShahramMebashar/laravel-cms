<?php
use Illuminate\Support\Facades\Route;


Route::get('posts/create', function () {
    return 'done';
})->name('posts.create');

require __DIR__ . '/admin_auth.php';


