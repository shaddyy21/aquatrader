<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    
   // $product = \App\Models\Product::find(1);
   // return $product->type; 
    
//    $order = \App\Models\Order::find(1);
//    return $order->user; 
    
    // $user = \App\Models\User::find(1);
    // return $user->order;
    
//    $types = \App\Models\Type::find(1);
//    return $types->products; 
    
//    $order = \App\Models\Order::find(1);
//    return $order->products;
    
    /*===========================================================================*/
    /*                     List of all users                                      */
    /*===========================================================================*/
    //    $users = \App\Models\User::all();
    //    return $users;
    /*===========================================================================*/
    
    
/*===========================================================================*/
/*                      Adding items one by one                              */
/*===========================================================================*/
//    $type = new \App\Models\Type();
//    $type->name = "Shark";
//    $type->save();
//    
//    return $type;
/*===========================================================================*/
    
    
/*===========================================================================*/
/*                      Adding items all the once                            */
/*===========================================================================*/
//   $user =  \App\Models\User::create([
//        "username"=>"JoeJai",
//        "firstname"=>"Joe",
//        "lastname"=>"Jai",
//        "email"=>"joe.jai@gmail.com",
//        "password"=>"bla"
//   ]);
//    
//    return $user;
/*===========================================================================*/
   
    
/*===========================================================================*/
/*                              Views                                        */
/*===========================================================================*/
    return view('welcome');
/*===========================================================================*/
});


/*===========================================================================*/
/*                              About Page Route                             */
/*===========================================================================*/
    Route::get('about', function () {
        return view('about');
    });
/*===========================================================================*/


/*===========================================================================*/
/*                              Contact Page Route                           */
/*===========================================================================*/
    Route::get('contact', function () {
        return view('contact');
    });
/*===========================================================================*/


/*===========================================================================*/
/*                              Types Page Route                             */
/*===========================================================================*/
    Route::get('types/{id}', function ($id) {
        $type = \App\Models\Type::find($id);
        return view('types',compact("type"));
    });
/*===========================================================================*/


/*===========================================================================*/
/*                              Create Products                              */
/*===========================================================================*/
    Route::get('products/create', function () {
      return view('createProduct');
    });
/*===========================================================================*/


/*===========================================================================*/
/*                              Adding Form for Products                     */
/*===========================================================================*/
    Route::post('products',function (\App\Http\Requests\CreateProductRequest $request){
      $product = \App\Models\Product::create($request->all());
      return redirect('types/'.$product->type->id);
    });
/*===========================================================================*/



/*===========================================================================*/
/*                             Editing Form for Products                     */
/*===========================================================================*/
    Route::get('products/{id}/edit',function ($id){
        $product = \App\Models\Product::find($id);
        return view('editProduct',compact('product'));
    });
/*===========================================================================*/


/*===========================================================================*/
/*                             Updating Products                             */
/*===========================================================================*/
    Route::put('products/{id}',function ($id,\App\Http\Requests\UpdateProductRequest $request){
        $product = \App\Models\Product::find($id);
        $product->fill($request->all());
        $product->save();
        return redirect('types/'.$product->type->id);
    });
/*===========================================================================*/

/*===========================================================================*/
/*                             Create Users                                   */
/*===========================================================================*/
    Route::get('users/create', function (){
        return view('createUser');
    });
/*===========================================================================*/


/*===========================================================================*/
/*                             Users Page Route                              */
/*===========================================================================*/
    Route::get('users/{id}', function ($id){
        $user = \App\Models\User::find($id);
        return view('users',compact('user'));
    });
/*===========================================================================*/


/*===========================================================================*/
/*                             Adding Form for Users                         */
/*===========================================================================*/
    Route::post('users', function (\App\Http\Requests\CreateUserRequest $request){
        $user = \App\Models\User::create($request->all());
        return redirect('users/'.$user->id);
    });
/*===========================================================================*/


/*===========================================================================*/
/*                             Editing Form for Users                         */
/*===========================================================================*/
    Route::get('users/{id}/edit', function ($id){
        $user = \App\Models\User::find($id);
        return view('editUser',compact('user'));
    });
/*===========================================================================*/


/*===========================================================================*/
/*                             Updating Users                                */
/*===========================================================================*/
    Route::put('users/{id}', function ($id,\App\Http\Requests\UpdateUserRequest $request){
        $user = \App\Models\User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect('users/'.$user->id);
    });
/*===========================================================================*/





