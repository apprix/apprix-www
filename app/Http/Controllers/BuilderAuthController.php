<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuilderAuthController extends Controller
{
    const BUILDER_LOGIN_URL = 'https://builder.apprix.fi/b/';

    /**
     * Serve a page that checks the Builder session via JS,
     * then either sets our session or redirects to Builder login.
     */
    public function check(Request $request)
    {
        $redirect = $this->safeRedirect($request);

        return response(view('builder_auth.check', [
            'checkliUrl'      => config('app.builder_checkli_url'),
            'builderLoginUrl' => self::BUILDER_LOGIN_URL,
            'redirectUrl'     => $redirect,
        ]));
    }

    /**
     * Called by JS after a successful Builder session check.
     * Sets the Laravel session and redirects to the original URL.
     */
    public function verify(Request $request)
    {
        $redirectUrl = $this->safeRedirect($request);

        $request->session()->put('builder_auth', true);
        $request->session()->put('builder_auth_at', now()->timestamp);

        return response()->json(['ok' => true, 'redirect' => $redirectUrl]);
    }

    /**
     * Clear the Builder auth session (e.g. if Builder API returns 0 on a later check).
     */
    public function logout(Request $request)
    {
        $request->session()->forget(['builder_auth', 'builder_auth_at']);
        return redirect(self::BUILDER_LOGIN_URL);
    }

    /**
     * Sanitize the post-login redirect target to a same-site path, preventing
     * open-redirect abuse. Absolute URLs must match the current request host;
     * anything else (external host, protocol-relative, or a non-path scheme such
     * as javascript:) falls back to /help. Always returns a relative same-site path.
     */
    private function safeRedirect(Request $request): string
    {
        $redirect = (string) $request->input('redirect', '/help');

        $parts = parse_url($redirect);
        if ($parts === false) {
            return '/help';
        }

        // Reject absolute URLs that point at a different host.
        if (isset($parts['host']) && $parts['host'] !== $request->getHost()) {
            return '/help';
        }

        $path = $parts['path'] ?? '/help';

        // Only allow same-site absolute paths; reject relative and protocol-relative (//host).
        if (! str_starts_with($path, '/') || str_starts_with($path, '//')) {
            return '/help';
        }

        return $path . (isset($parts['query']) ? '?' . $parts['query'] : '');
    }
}
