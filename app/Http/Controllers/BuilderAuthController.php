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
        $redirect = $request->input('redirect', '/help');

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
        $redirectUrl = $request->input('redirect', '/help');

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
}
