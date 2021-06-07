<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
  
        $url_array = explode('.', parse_url($request->url(), PHP_URL_HOST));
       
        $subdomain = $url_array[0];
        if (in_array($subdomain, Config::get('languages'))){
           App::setLocale($subdomain);

        }

        return $next($request);
    }
}
