<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    /*===========================================================================*/
    /*                          Shows login form                                 */
    /*===========================================================================*/
    public function showLoginForm(){
        return view('login');
      
    }
    /*===========================================================================*/

    
    public function processLoginForm(Request $request,\Illuminate\Contracts\Auth\Guard $auth){
//        dd($auth);
        $credential = $request->only('username', 'password');
        
        if($auth->attempt($credential)){
            return "Yeah!";
        }else{
            return "Nope!";
        }
    }
    
    public function logout(){
        
    }
}
