<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class StudentMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'student') {
            return $next($request);
        }

        return redirect('/login')->withErrors('Anda tidak memiliki akses ke halaman ini.');
    }
}
