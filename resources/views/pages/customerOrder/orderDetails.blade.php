@extends('layout.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url('images/orderdetails.jpg')">
<h1>Order List</h1>

<table class="table table-hover">

    <tr class="table-dark  ">

        <th class="text-white text-uppercase fw-bold">Order ID</th>
        <th class="text-white text-uppercase fw-bold">Product ID</th>
        <th class="text-white text-uppercase fw-bold">Unit Price</th>
        <th class="text-white text-uppercase fw-bold">Customer ID</th>
        <th class="text-white text-uppercase fw-bold">service_provider ID</th>
        <th class="text-white text-uppercase fw-bold">Customer Name</th>
        <th class="text-white text-uppercase fw-bold">customer Address</th>
        <th class="text-white text-uppercase fw-bold">Status</th>
        <th></th>
        <th></th>
    </tr>
    
    @foreach($details as $detail)

   <tr class=" table-success ">

        <td>{{$detail->order_id}}</td>
        <td>{{$detail->product_id}}</td>
        <td>{{$detail->unit_price}}</td>
        <td>{{$detail->customer_id}}</td>
        <td>{{$detail->service_provider_id}}</td>
        <td>{{$detail->customer_name}}</td>
        <td>{{$detail->customer_address}}</td>
        <td>{{$detail->status}}</td> 
        <td>  <a class="btn btn-primary px-3"  href="/statusChange/{{$detail->order_id}}">Order Done</a></td> 
        
        <td> <a class="btn btn-danger px-3"  href="/orderCancel/{{$detail->order_id}}">Cancel Order</a></td> 
    </tr>
    @endforeach
   
</table>



    
</body>
</html>
@endsection