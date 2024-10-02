<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {
        $locale = session()->get('locale', 'en');
        App::setLocale($locale);
        return $next($request);
    }
}
