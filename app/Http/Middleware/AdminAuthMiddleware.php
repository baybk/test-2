<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('api')->check()) {
            $user = Auth::guard('api')->user();
            if ($user->is_admin) {
                return $next($request);
            }
        }
        return response()->json(
            ['message' => __('auth.admin_un_authenticated')],
            401
        );
    }
}
