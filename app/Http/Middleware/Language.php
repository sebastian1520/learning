<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('appLocale')){
            $configLanguage = config('Language')[session('appLocale')];
            setlocale(LC_TIME, $configLanguage[1] . '.utf8');
            Carbon::setlocale(session('appLocale'));
            App::setlocale(session('appLocale'));
        }else{
            session()->put('appLocale', config('app.fallback_locale'));
            setlocale(LC_TIME, 'es_ES.utf8');
            Carbon::setlocale(session('appLocale'));
            App::setlocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
