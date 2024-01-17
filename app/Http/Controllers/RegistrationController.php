<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
   public function index()
   {
   	return view('form');
   }
   public function register(Request $request)
   {
   	/*dd($request->all());
   	return view('register');*/
   	$request->validate(
       [
           'Firstname'=>'required',
           'Lastname'=>'required',
            'Email'=>'required|email',
            'Password'=>'required'

       ]

   	);
    
   	print_r($request->all());
   }
}
?>
