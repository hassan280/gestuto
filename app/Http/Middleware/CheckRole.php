<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,string $role)
    {
        if ($role == 'teacher' && auth()->user()->type !=1){
            abort(403);
        }
        if ($role == 'student' && auth()->user()->type !=2){
            abort(403);
        }
        
        return $next($request);
    }
}
