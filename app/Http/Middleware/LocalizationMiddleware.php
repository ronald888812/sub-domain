<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
class LocalizationMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        //  if ($request->session()->has('locale')) {
       
        //     \App::setLocale($request->session()->get('locale'));
        // }
        // return $next($request);

        //
        if (Session::has('applocale') AND array_key_exists(Session::get('applocale'), Config::get('languages'))) {
            App::setLocale(Session::get('applocale'));
        }
        else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale(Config::get('app.fallback_locale'));
        }
        return $next($request);



        //
        // if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('languages'))) {
        //     App::setLocale(Session()->get('applocale'));
        // }
        // else { // This is optional as Laravel will automatically set the fallback language if there is none specified
        //     App::setLocale(config('app.fallback_locale'));
        // }
        // return $next($request);
    }
}
