<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
     //認証ミドルウェアの設定変更
    public function handle($request, Closure $next, $guard = null)
    {
        //if (Auth::guard($guard)->check()) でログインしているかどうかを判断しています。
        if (Auth::guard($guard)->check()) {
            return redirect('/');//トップページに変更
        }

        return $next($request);
    }
}
