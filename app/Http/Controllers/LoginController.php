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
//            return "Yeah!";
            return redirect()->intended('types/1');
        }else{
            return redirect('login')->with('message','Incorrect username or password. Please try again!');
        }
    }
    
    public function logout(\Illuminate\Contracts\Auth\Guard $auth){
        $auth->logout();
        return redirect('types/1');
    }
}
