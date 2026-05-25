<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequireBuilderAuth
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('builder_auth')) {
            return $next($request);
        }

        $redirect = urlencode($request->fullUrl());
        return redirect('/builder-auth/check?redirect=' . $redirect);
    }
}
