<?php

namespace App\Http\Middleware;

use App\User;
use Auth;
use Closure;

class RoleMiddleware
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
        $user = User::where('id', Auth::id())->first();
        if($user->role==2){
            return redirect('/login');
        }
        return $next($request);
    }
}
