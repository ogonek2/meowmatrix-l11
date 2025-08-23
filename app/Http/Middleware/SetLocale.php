<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\Response)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        // Get locale from session or default to 'uk'
        $locale = Session::get('locale', 'uk');
        
        // Validate locale
        if (!in_array($locale, ['uk', 'en'])) {
            $locale = 'uk';
        }
        
        // Set application locale
        App::setLocale($locale);
        
        return $next($request);
    }
}
