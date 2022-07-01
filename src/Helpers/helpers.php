<?php

use Domain\Users\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

if(!function_exists('current_user')) {
    /**
     * Get current authenticated user
     * @return Illuminate\Contracts\Auth\Authenticatable | Domain\Users\Models\User::class | null
     */
    function current_user(): ?Authenticatable {
        return Auth::user();
    }
}


if(!function_exists('current_user_id')) {
    /**
     * Get current authenticated user id
     * @return int | null
     */
    function current_user_id(): ?int {
        return Auth::id();
    }
}