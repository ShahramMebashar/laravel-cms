<?php

use Illuminate\Support\Facades\Route;

Route::get('login', function() {
    return 'done';
})
->name('login')
->withoutMiddleware('auth.admin');