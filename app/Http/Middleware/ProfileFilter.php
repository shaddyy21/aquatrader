<?php

namespace App\Http\Middleware;

use Closure;

class ProfileFilter
{
    protected $guard;

    public function __construct(\Illuminate\Contracts\Auth\Guard $guard)
    {
        $this->guard = $guard;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        dd($request->route());
        $profileID = $request->route('users');
        
        if($this->guard->user()->id != $profileID){
            if($request->ajax()){
                   return response('Unauthorized.', 401);
            }else{
//                    return redirect('login')->with('message','*Unauthorized access!');
                    return redirect('/users/'.$this->guard->user()->id);
                
            }
        }
        return $next($request);
    }
}
