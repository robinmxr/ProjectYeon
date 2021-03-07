<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use http\Exception;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()!=NULL) {
            if(auth()->user()->is_admin == 1){
                return $next($request);
            }


            abort(403);
        }
        else {
            abort(403);
        }

    }
}
