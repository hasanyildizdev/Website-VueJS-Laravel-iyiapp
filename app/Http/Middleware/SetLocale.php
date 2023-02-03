<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    private $locales = ['tr', 'en'];

    public function handle($request, Closure $next, $locale)
    {
        if (array_search($locale, $this->locales) === false) {
            return redirect('/');
        }

        App::setLocale($locale);

        return $next($request);
    }

    
}
