<?php

namespace App\Http\Middleware;

use Closure;

class MDUserClient
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
      $user_role=\Auth::user();
      if($user_role->type_users!=2){
        return route('home');
      }
        return $next($request);
    }
}
