@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider Info</title>
</head>
<body style="background-image: url('images/serviceprovider.jpeg')">
<br>

  
<h1 class="text-center text-white">Service Provider Profile Details</h1>

<br>
<br>
    <table class="table table-hover">
 
    <tr class="table-dark  " >

<th class="text-white text-uppercase fw-bold">User id</th>
<th class="text-white text-uppercase fw-bold">Name</th>
<th class="text-white text-uppercase fw-bold">Email</th>
<th class="text-white text-uppercase fw-bold">Password</th>
<th class="text-white text-uppercase fw-bold">Phone</th>
<th class="text-white text-uppercase fw-bold">Servicetype</th>

<th class="text-white text-uppercase fw-bold">Address</th>
</tr>


        
        @foreach($details as $detail)
        <tr class=" table-success ">
            <td>{{$detail->id}}</td>
      
            <td>{{$detail->name}}</td>
      
            <td>{{$detail->email}}</td>
       
            <td>{{$detail->password}}</td>
     
            <td>{{$detail->phoneno}}</td>

            <td>{{$detail->servicetype}}</td>
    
            <td>{{$detail->address}}</td>
        </tr>
        @endforeach

        </table>


</body>
</html>
@endsection