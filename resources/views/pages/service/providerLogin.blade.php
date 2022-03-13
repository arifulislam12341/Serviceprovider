@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceProvider Login</title>
</head>
<body style="background-image: url('images/login.jpg')">
<center>
    <br>
    <br>
    <br>
<div style="background-color:rgba(0,0,0,0.8);" class=" col-lg-3 ">
<form action="{{route('serviceproviderlogin')}}" class="form-group" method="post">
{{csrf_field()}}
    
   
    <label class="text-white fs-5 text-uppercase fst-italic fw-bold" for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}"
    <?php if(isset($_COOKIE['remember'])) 
						{
							echo $_COOKIE['remember'];
						} ?>
					 	value = "<?php if(isset($_COOKIE['remember'])) 
				 		{
					 	echo $_COOKIE['remember'];
						} ?>">
    
    @error('email')
    <span>{{$message}}</span>
    @enderror
    
    <span><br>
						{{Cookie::get('name')}}
				</span>
    <label  class="text-white fs-5 text-uppercase fst-italic fw-bold" for="">Password</label>
    <input type="password" class="form-control" name="password" value="{{old('password')}}">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <div class="form-group d-md-flex">
				<div class="w-50">
					<label class="checkbox-wrap text-white checkbox-primary">
									<input type="checkbox" name="remember">Remember Me</input>
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="w-50 text-md-right">
								
							</div>
			</div>
    <button  class="btn btn-outline-secondary  text-white btn-lg" type="submit"><b>LOGIN<b></button>
   
</div>
</center>
</form>
</body>
</html>

@endsection