<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthenticate
{
    public function handle(Request $request, Closure $next)
    {
        dd('sadadsd');
        // Custom authentication logic
        if (!Auth::check()) {
            // You can redirect to a custom login route or show an error
            return redirect()->route('login'); // Modify this to your desired route
        }

        return $next($request);
    }
}

