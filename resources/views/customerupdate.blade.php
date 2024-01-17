<!DOCTYPE html>
<html>
<head>
<style type="text/css">

</style>
<script>
/*function validateForm() {
  let x = document.forms["myForm"]["Firstname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  let y = document.forms["myForm"]["Lastname"].value;
  if (y == "") {
    alert("LastName must be filled out");
    return false;
  }
   let z = document.forms["myForm"]["Email"].value;
  if (z == "") {
    alert("Email must be filled out");
    return false;
  }
  let a = document.forms["myForm"]["Password"].value;
  if (a == "") {
    alert("Password must be filled out");
    return false;
  }
}*/

</script>



  <title>User registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:lightblue">
  <nav class="navbar navbar-expand bg-dark navbar-dark" id="nav1">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item" id="brand">
                <a class="navbar-brand" href="" ></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/cus')}}">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/reg3')}}">Register</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/customer/view/')}}">Customerview</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href=""></a>
            </li>
             <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="profile.php"><i class="fa fa-user"></i> Profile</a>
            </li>
           
        </ul>
    </div>
</nav>
<div class="container"style="background-color:lightgreen " >
  <h1 align="center">{{$title}}</h1>
  
</div>
<center>
  <form action="{{route('update1',['id' =>'9'])}}" name="myForm" method="post" onsubmit="return validateForm()"  enctype="multipart/form-data">
    @csrf
    
    
<div class="container">
<div class="row">


  <div class="col-sm-6">

<div class="form-group">
      <label for="Customer Name"> Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter FirstName" name="name"value={{$customer->name}} >
      <span class="text-danger">
        @error('name')
            {{$message}}

        @enderror
      </span>
    </div>
  </div>












   
  <div class="col-sm-6">

    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="Email" class="form-control" id="email" placeholder="Email" name="Email" value={{$customer->email}}>
       <span class="text-danger">
        @error('Email')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>





  
  <div class="col-sm-6">
  
    <div class="form-group">
      <label for="Passwoed">Password:</label>
      <input type="password" class="form-control" id="Pwd" placeholder="Enter password" name="Password">
      <span class="text-danger">
        @error('Password')
            {{$message}}

        @enderror
      </span>
  </div>

</div>
   
  <div class="col-sm-6">
  
    <div class="form-group">
      <label for="ConfirmPasswoed">Confirm Password:</label>
      <input type="password" class="form-control" id="CPwd" placeholder="Enter password" name="CPassword">
      <span class="text-danger">
        @error('Password')
            {{$message}}

        @enderror
      </span>
  </div>

</div>

 
  <div class="col-sm-6">
  
    <div class="form-group">
      <label for="C">Country:</label>
      <input type="text" class="form-control" id="country" placeholder="country" name="country"value={{$customer->country}}>
      <span class="text-danger">
        @error('country')
            {{$message}}

        @enderror
      </span>
  </div>
</div>
 
  <div class="col-sm-6">
  
    <div class="form-group">
      <label for="State">State</label>
      <input type="text" class="form-control" id="state" placeholder="Enter state" name="state" value={{$customer->state}}>
      <span class="text-danger">
        @error('state')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>

  <div class="col-sm-12">
  
    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="textarea" class="form-control" id="Address" placeholder="EnterAddress " name="Address"value={{$customer->adderess}}>
      <span class="text-danger">
        @error('Address')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>
<div class="col-sm-6">
  
    <div class="form-group">
       <label for="gender">Gender:</label><br>
   Male<input type="radio"  id="gen1" placeholder="Enter gender" name="gen"  value="m"{{$customer->gender=="m"?"checked":""}}>
  
    Female<input type="radio"  id="gen2" placeholder="Enter gender" name="gen" value="f"{{$customer->gender=="f"?"checked":""}}>
    
    Other<input type="radio"  id="gen3" placeholder="Enter gender" name="gen" value="o"{{$customer->gender=="o"?"checked":""}}>
   
  
      <span class="text-danger">
        @error('gen')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>
<div class="col-sm-6">
  
    <div class="form-group">
       <label for="date">date of birth:</label><br>
  <input type="date"  id="date" placeholder="Enter date" name="date1"value={{$customer->DOB}}>
    
  
      <span class="text-danger">
        @error('date1')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>
<div class="col-sm-6">
  
    <div class="form-group">
       <label for="file">Upload:</label><br>
  <input type="file"  id="file1" placeholder="Enter file" name="myfile">
    
  
      <span class="text-danger">
        @error('myfile1')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>

 
  <div class="form-group">
   <input type="submit" class="btn btn-primary" name="submit"id="submit">
<a href="Login.php">Login</a>
  
</div>

</div>
</form>
</center>
</body>
</html>