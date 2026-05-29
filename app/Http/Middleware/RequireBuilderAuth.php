<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequireBuilderAuth
{
    /** URL prefixes that require Builder authentication. */
    protected array $protectedPrefixes = [
        'help',
        'faq',
        'en/help',
        'en/faq',
    ];

    public function handle(Request $request, Closure $next)
    {
        if (! config('app.help_auth_enabled')) {
            return $next($request);
        }

        if (! $this->isProtectedPath($request)) {
            return $next($request);
        }

        if ($request->session()->get('builder_auth')) {
            return $next($request);
        }

        $redirect = urlencode($request->fullUrl());
        return redirect('/builder-auth/check?redirect=' . $redirect);
    }

    protected function isProtectedPath(Request $request): bool
    {
        $path = trim($request->path(), '/');

        foreach ($this->protectedPrefixes as $prefix) {
            if ($path === $prefix || str_starts_with($path, $prefix . '/')) {
                return true;
            }
        }

        return false;
    }
}
