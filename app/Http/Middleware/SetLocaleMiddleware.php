<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{
    /**
    
    *Handle an incoming request.*
    *@param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next*/
    public function handle(Request $request, Closure $next){
        
        $language = $request->getPreferredLanguage(config('app.locales'));
        
        if (session()->has('locale')) {
            $language = session()->get('locale');
        }
        
        App::setLocale($language);
        
        return $next($request);
    }
    
    
}


