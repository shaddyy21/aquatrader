<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
 /*==========================================================*/
 /*                 Shows About page                         */
 /*==========================================================*/
    public function showAbout(){
        return view('about');
    }
 /*==========================================================*/
    
    
 /*==========================================================*/
 /*                 Shows Contact page                       */
 /*==========================================================*/
    public function showContact(){
        return view('contact');
    }
 /*==========================================================*/
}
