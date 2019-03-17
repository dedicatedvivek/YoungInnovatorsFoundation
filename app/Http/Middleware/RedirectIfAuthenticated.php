<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Support\Facades\Auth;

    class RedirectIfAuthenticated
    {
        public function handle($request, Closure $next, $guard = null)
        {
            if ($guard == "members" && Auth::guard($guard)->check()) {
                return redirect('/members');
            }
            if ($guard == "volunteers" && Auth::guard($guard)->check()) {
                return redirect('/volunteers');
            }
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }

            return $next($request);
        }
    }
