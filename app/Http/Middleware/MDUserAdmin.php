<?php

namespace App\Http\Middleware;

use Closure;

class MDUserAdmin
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
      if($user_role->type_users!=1){
      return redirect('home');
      }
        return $next($request);
    }
}
