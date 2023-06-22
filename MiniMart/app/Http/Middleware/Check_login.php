<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class Check_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   

        // kiểm tra sesion admin_email có tồn tại neeuys k toofnt ại qua lại trang login
        if(Auth::check()==false)
            return redirect(url('backend/login'));
        return $next($request);
    }
}
