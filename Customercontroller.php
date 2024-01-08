<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers; 


class Customercontroller extends Controller

{
    public function index()
    {
    	return view('customer');
    }
    public function store(Request $request)
    {
        	$request->validate(
       [
           'name'=>'required',
           
            'Email'=>'required|email',
            'gen'=>'required',
             
            'Password'=>'required',
            'CPassword'=>'required',
               'state'=>'required',
             'country'=>'required',
                'Address'=>'required',
                  'date1'=>'required',


       ]

   	);
     print_r($request->all()); 
     $customer = new Customers;
     $customer->name=$request['name'];
     $customer->email=$request['Email'];
     $customer->gender=$request['gen'];
     $customer->adderess=$request['Address'];
     $customer->state=$request['state'];
     $customer->country=$request['country'];
     $customer->DOB=$request['date1']; 
     $customer->password=md5($request['Password']);	
     $customer->save();
     return redirect('/customer/view');//route pass kiya hai

    }
    public function view()
    {
          $customer=Customers::all();
        /*  echo "<pre>";
          print_r($customer);
          echo"</pre>";
          die;
          */
          $data =compact('customer');
          return view('customerview')->with($data);
    }
    public function  navigateview()
    {
        return view('navigation');
    }
}
