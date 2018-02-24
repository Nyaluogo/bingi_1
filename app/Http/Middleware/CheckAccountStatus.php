<?php

namespace Nyabingi\Http\Middleware;

use Closure;
use Auth;

class CheckAccountStatus
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
        if(Auth::user()->account_status == "inactive"){
          Auth::logout();
          return redirect('home')->withErrors(['message' =>'An email has been sent to you verify your account to continue']);
        }
        elseif(Auth::user()->account_status != "active"){
          Auth::logout();
          return redirect('login');
        }
        return $next($request);
    }
}
