<?php

namespace App\Http\Middleware;

use App\Http\Requests\CheckUserRequest;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next): Response
    {
        if(session('admin_logged_in'))
            return $next($request);
        else
            return redirect(route('admin.login'));
    }
}
