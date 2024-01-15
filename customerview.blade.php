<!DOCTYPE html>
<html>
<head>
    
    

    <title>Customer Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
<nav class="navbar navbar-expand bg-dark navbar-dark" id="nav1">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item" id="brand">
                <a class="navbar-brand" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/reg')}}">Register</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="{{url('/customer/view/{id}')}}">Customer View</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href=""></a>
            </li>
            <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
            <li class="nav-item" id="prfa">
                <a class="nav-link ms-3" href="profile.php"><i class="fa fa-user"></i> Profile</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <h1 style="text-align: center; background-color:rgb(255,125,255,125)">Customer View</h1>
</div>
 <a href="{{ route('customerroute', ['id' => $customer->id]) }}">
    <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
</a>

<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Address</th>
        <th>State</th>
        <th>Country</th>
        <th>DOB</th>
        <th>Status</th>
        <th>Action</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($customer as $cust)
        <tr>
            <td>{{$cust->name}}</td>
            <td>{{$cust->email}}</td>
            <td>
                @if($cust->gender=='m')
                    Male
                @elseif($cust->gender=='f')
                    Female
                @else
                    Other
                @endif
            </td>
            <td>{{$cust->adderess}}</td>
            <td>{{$cust->state}}</td>
            <td>{{$cust->country}}</td>
            <td>{{$cust->DOB}}</td>
            <td>
                @if($cust->status=='1')
                    <button class="btn btn-success">Active</button>
                @else
                    <button class="btn btn-danger">Inactive</button>
                @endif
            </td>
            <td>
                <a href="{{url('/customer/delete/')}}/{{$cust->id}}">
                    <button class="btn btn-danger">Delete</button>
                </a>
            </td>
            <td>
              <a href="{{url('/edit/')}}/{{$cust->id}}">
                 <button class="btn btn-primary">Update</button>
              </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
