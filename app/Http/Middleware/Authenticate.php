<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
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
        if (Auth::check() && Auth::user()->role == $guards[0]) {
            return $next($request);
        }
        if (Auth::check() && Auth::user()->name == $guards[0]) {
            return $next($request);
        }
        else {
            return redirect('/login');
        }
    }

    // /**
    //  * Determine if the user is logged in to any of the given guards.
    //  *
    //  * @param  array  $guards
    //  * @return void
    //  *
    //  * @throws \Illuminate\Auth\AuthenticationException
    //  */
    // protected function authenticate(array $guards)
    // {
    //     if (empty($guards)) {
    //         return $this->auth->authenticate();
    //     }

    //     foreach ($guards as $guard) {
    //         if ($this->auth->guard($guard)->check()) {
    //             return $this->auth->shouldUse($guard);
    //         }
    //     }

    //     throw new AuthenticationException('Unauthenticated.', $guards);
    // }
}
