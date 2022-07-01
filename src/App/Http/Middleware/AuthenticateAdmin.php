<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;

class AuthenticateAdmin extends Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        parent::authenticate($request, $guards);
        $this->authenticateAdmin($request, $guards);
        return $next($request);
    }

    public function authenticateAdmin(Request $request, ...$guards)
    {
        //TODO:: implement admin login 
        return true;
        // esle 
        // $this->unauthenticated($request, $guards);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        //TODO: redirect to admi login route
        if (! $request->expectsJson()) {
            return route('admin.login');
        }
    }
}
