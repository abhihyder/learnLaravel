<?php

namespace App\Http\Middleware;

use Closure;
// to create middleware write "php artisan make:middleware middlewareName" in git or cmd. then have to register new middleware in kernel.php file
class demoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->about <10){
            return redirect('/contact');
        }
        return $next($request);
    }
}
