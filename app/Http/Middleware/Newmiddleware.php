<?php

namespace App\Http\Middleware;

use Closure;
use App\facades\Policies;
class Newmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Policies::AdminPolicy()==false) {
            return redirect('/'); 
            die;              
          }else{
            return $next($request);
          }
    }
}
