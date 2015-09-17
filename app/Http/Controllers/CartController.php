<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Cart as Cart;

class CartController extends Controller
{
    public function showCart(){
        $items = array(
            'id' => 3,
            'name' => 'Another Product',
            'price' => 120.00,
            'quantity' => 1
        );
        
            // Make the insert...
        Cart::insert($items);
        
//        print_r(Cart::contents());
        return view("cart");
    }  
        
}
