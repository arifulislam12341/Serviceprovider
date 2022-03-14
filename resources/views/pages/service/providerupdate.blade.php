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
<body style="background-image: url('images/registration.jpg')">
<br>
<center>
<h2 class="text-white text-uppercase fw-bold">Update Information</h2>

<div class=" col-lg-7 ">
<form action="{{route('serviceproviderUpdate')}}" class="form-group" method="post">

  

    {{csrf_field()}}

    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif
   <div style="background-color:rgba(0,0,0,0.5);" class="row p-3">
   <div class="col-lg-6">
    <label class="text-white text-uppercase fw-bold" for="">ID</label>

<input type="text" name="id" id="" value="{{$user->id}}" class="form-control" readonly>

@error('')

    <span class="text-danger">{{$message}}</span>

@enderror

        <label class="text-white text-uppercase fw-bold" for="">Name</label>

        <input type="text" name="name" id="" value="{{$user->name}}" class="form-control" >

        @error('name')

            <span class="text-danger">{{$message}}</span>

        @enderror

        <br>
        <label class="text-white text-uppercase fw-bold" for="">Email</label>

<input type="text" name="email" id="" value="{{$user->email}}" class="form-control" >

@error('email')

    <span class="text-danger">{{$message}}</span>

@enderror

<br>

<label class="text-white text-uppercase fw-bold" for="">Office Address</label>

<input type="text" name="address" id="" value="{{ $user->address}}" class="form-control">

@error('address')

<span class="text-danger">{{$message}}</span>

@enderror
    </div>
      <div class="col-lg-6">
      <label class="text-white text-uppercase fw-bold" for="">Password</label>

<input type="text" name="password" id="" value="{{ $user->password}}" class="form-control">

@error('password')

    <span class="text-danger">{{$message}}</span>

@enderror

<br>
<label class="text-white text-uppercase fw-bold" for="">PhoneNumber</label>

<input type="text" name="phonenu" id="" value="{{ $user->phoneno}}" class="form-control">

@error('phonenu')

<span class="text-danger">{{$message}}</span>

@enderror

<br>
<label class="text-white text-uppercase fw-bold" for="">ServiceType</label>

<input type="text" name="servicetype" id="" value="{{ $user->servicetype}}" class="form-control">

@error('servicetype')

<span class="text-danger">{{$message}}</span>

@enderror
      </div>
   </div>
   <br>
   <button class="btn btn-outline-secondary text-uppercase fst-italic fw-bold btn-lg" type="submit">Submit</button>           

</form>
</center>
</body>
</html>
@endsection

