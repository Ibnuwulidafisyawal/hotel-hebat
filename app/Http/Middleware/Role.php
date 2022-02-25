<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
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
    //     if (session('role') === 'resepsionis') {
    //         return redirect(RouteServiceProvider::RESEPTIONIS_HOME);
    //     }else{
    //         session()->flush();
    //         return redirect()->route('login');
    //     }
    //     return $next($request);

        if(auth()->user('role') === 'resepsionis'){
            return $next($request);
        }
        return redirect('dashboard-reseptionis.reservasi')->with('error',"You don't have admin access.");
    }

    
    }