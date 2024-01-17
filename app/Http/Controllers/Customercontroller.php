<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers; 


class Customercontroller extends Controller

{
    public function index()
    {
    /*	$customer=Customers::where('id',$id)->first();
    
      $title="Customer Registration";
      $data=compact('title','customer');*/
    
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

    /* print_r($request->all()); 
     */
}
public function view()
    {
          $customer=Customers::all();//$customer is object
          /*echo "<pre>";
          print_r($customer);
          echo"</pre>";*/
          //die;
          
         $data =compact('customer');
          return view('customerview')->with($data);
    }


 public function  navigateview()
    {
        return view('navigation');
    }
      public function delete($id)
    {
              echo $id;
              $customer=Customers::find($id);
              echo"<pre>";
              print_r($customer);
              if(!is_null($customer))
              {
                $customer->delete();
              }
              return redirect()->back();
     }

 public function edit($id)
{
    echo $id;
    $customer = Customers::find($id);
    /*echo "<pre>";
    print_r($customer);
    */
    if (is_null($customer)) {
        return redirect('customerview');
    } else {
        // Corrected the variable name and assignment
      $title="Update Customer";
        $data=compact('customer', 'title');
        return view('customerupdate')->with($data);
    }
}
public function abc()
    {
      /*$customer=Customers::where('id',$id)->first();
      $url=url('/cus/',$id);
      $title="Customer Registration";
      $data=compact('url','title','customer');*/
      return view('customer');
    }

public function update1( Request $request)

{
print_r($request->all());
 $customer = Customers::find( $request->id);
    $customer->name=$request->name;
     $customer->email=$request['Email'];
     $customer->gender=$request['gen'];
     $customer->adderess=$request['Address'];
     $customer->state=$request['state'];
     $customer->country=$request['country'];
     $customer->DOB=$request['date1']; 
     $customer->password=md5($request['Password']); 
     $customer->save();
     return redirect('customerview');

}
public function update2()
{
  return view('customerupdate');
}

}