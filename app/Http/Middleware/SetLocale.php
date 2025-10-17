<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        // Get the language from route or session, or fallback to config default
        $locale = $request->route('lang') ?? session('locale', config('app.locale'));

        // ✅ Correct Laravel way — DO NOT use PHP's setlocale() here
        App::setLocale($locale);

        // Save it to session
        session(['locale' => $locale]);

        return $next($request);
    }
}
