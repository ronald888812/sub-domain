<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocalizationMiddleware
{

    public function handle(Request $request, Closure $next)
    {
         if ($request->session()->has('locale')) {
       
            \App::setLocale($request->session()->get('locale'));
        }
        return $next($request);
    }
}
