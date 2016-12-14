<?php

namespace App\Http\Middleware;

use Closure;

class TeacherMiddleware
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
        //rank
        //admin = 1 teacher = 2

        if(Auth::user()->rank == 1 || Auth::user()->rank == 2){
            return $next($request);
        }else{
            return redirect()->route('/home');
        }
    }
}
