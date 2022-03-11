
@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider Registration</title>
</head>
<body>
<form action="{{route('serviceproviderRegistration')}}" class="form-group" method="post">
{{csrf_field()}}
    <label for=""> Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Password</label>
    <input type="password" class="form-control" name="password" value="{{old('password')}}">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">PhoneNumber</label>
    <input type="text" class="form-control" name="phonenu" value="{{old('phoneno')}}">
    @error('phonenu')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Service Type</label>
    <input type="text" class="form-control" name="servicetype" value="{{old('servicetype')}}">
    @error('servicetype')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Office Address</label>
    <input type="text" class="form-control" name="address" value="{{old('address')}}">
    @error('address')
    <span>{{$message}}</span>
    @enderror
    <input type="submit">
</form>
</body>
</html>
@endsection