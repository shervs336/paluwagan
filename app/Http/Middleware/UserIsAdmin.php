<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class UserIsAdmin
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
        if(!Auth::user()->admin)
        {
            flash('You have no access to modify the shares.')->error();

            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
