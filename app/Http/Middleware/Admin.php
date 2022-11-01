<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $user = $request->user(); //voir un user authentifie au systeme
        if ($user && $user->role == 'admin') {
            return $next($request); //pour dire continuer si la precedente condition est verifiee
        } else {
            return redirect('/login');
            /*on peut aussi utiliser {return redirect()->route('login');}
            dont route('login ici est le nom de la route donne)*/
        }

        return $next($request);
    }
}
