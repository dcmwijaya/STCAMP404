<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    public function handle(Request $reqData, Closure $next)
    {
        if(!Session()->has('loginId')){
            return redirect()->route('index');
        }
        return $next($reqData);
    }
}
