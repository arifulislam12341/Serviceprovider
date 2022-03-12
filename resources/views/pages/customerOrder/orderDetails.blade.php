@extends('layout.app')

@section('content')

<h1>Order List</h1>

    <table class="table table-border">

        <tr>

            <th>Order ID</th>
            <th>Product ID</th>
            <th>Unit Price</th>
            <th>Customer ID</th>
            <th>service_provider ID</th>
            <th>Customer Name</th>
            <th>customer Address</th>
            <th>Status</th>
        </tr>

        @foreach($details as $detail)

       <tr>

            <td>{{$detail->order_id}}</td>
            <td>{{$detail->product_id}}</td>
            <td>{{$detail->unit_price}}</td>
            <td>{{$detail->customer_id}}</td>
            <td>{{$detail->service_provider_id}}</td>
            <td>{{$detail->customer_name}}</td>
            <td>{{$detail->customer_address}}</td>
            <td>{{$detail->status}}</td>

            <td><a class="btn btn-primary px-3"  href="">Order Done</a></td>
        </tr>

        @endforeach
    </table>

@endsection