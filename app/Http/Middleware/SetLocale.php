<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Language;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Try first URL segment
        $segment = $request->segment(1);

        if ($segment) {
            $lang = Language::where('code', $segment)->where('active', true)->first();
        } else {
            $lang = null;
        }

        if (! $lang) {
            // fallback to default language entry
            $lang = Language::where('is_default', true)->first();
        }

        if ($lang) {
            app()->setLocale($lang->code);
            // optionally store current language in container for views
            view()->share('currentLanguage', $lang);
        }

        return $next($request);
    }
}
