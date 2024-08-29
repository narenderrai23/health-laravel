<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType): Response
    {

        if (auth()->check() && auth()->user()->type == $userType) {
            return $next($request);
        }
        if (auth()->check() && auth()->user()->type == 'admin') {
            return redirect()->route('admin.index');
        }
        return redirect('/login');
        // return response()->json(['You do not have permission to access for this page.']);
    }
}
