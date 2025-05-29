<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check() || Auth::user()->role !== $role || Auth::user()->status !== 'active') {
            // abort(403, 'Unauthorized');
            $status = Auth::user()->status;
            return redirect()->back()->with('error', "Your Account status is $status");
        }

        return $next($request);
    }
}
