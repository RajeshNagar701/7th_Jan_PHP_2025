<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class aafterlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('aid'))
        {
            
        }
        else
        {
            echo "<script>
             window.location='/admin-login';
            </script>";
        }
        return $next($request);
    }
}
