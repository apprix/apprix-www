<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BuilderAuth
{
    /**
     * The Builder session cookie name and expected value.
     *
     * NOTE: This cookie must be set on the .apprix.fi shared domain by the
     * Builder application for this check to work across subdomains.
     * Currently it is only set on builder.apprix.fi — the Builder team
     * needs to update the cookie domain to .apprix.fi.
     */
    private const COOKIE_NAME  = '-lt';
    private const COOKIE_VALUE = '991127fb2d4c18bd7d5cffe907974b87';

    public function handle(Request $request, Closure $next): Response
    {
        if (
            config('app.help_auth_enabled') &&
            $request->is('help', 'help/*') &&
            ! $this->isAuthenticated($request)
        ) {
            return response()->view('docs.auth_required', [
                'return_url' => $request->url(),
            ], 401);
        }

        return $next($request);
    }

    private function isAuthenticated(Request $request): bool
    {
        return $request->cookie(self::COOKIE_NAME) === self::COOKIE_VALUE;
    }
}
