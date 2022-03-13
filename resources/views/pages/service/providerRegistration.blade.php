
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
<body style="background-image: url('images/registration.jpg')">
    <div class="container">
    <!-- <div class="row  justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-6 ">
                    <img class="img-fluid" src="{{URL('images/registration.jpg')}}" alt="">
                </div> -->
   <center>
                <div class=" col-lg-4  ">
<center>
<form action="{{route('serviceproviderRegistration')}}" class="form-group" method="post">
{{csrf_field()}}
    <label class="text-white text-uppercase fw-bold" for="">Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Password</label>
    <input type="password" class="form-control" name="password" value="{{old('password')}}">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">PhoneNumber</label>
    <input type="text" class="form-control" name="phonenu" value="{{old('phoneno')}}">
    @error('phonenu')
    <span>{{$message}}</span>
    @enderror
    <br>
    <!-- <label for="validationDefault04"  class="form-label">Service Type</label>
    <select type="text" class="form-control" name="servicetype" value="{{old('servicetype')}}" id="validationDefault04"     >
  
    <option selected>Select a service type</option>
  <option value="1">Home Cleaning</option>
  <option value="2">AC Reparing</option>
  <option value="3">AC Cleaning</option>
    </select>
    @error('servicetype')
    <span>{{$message}}</span>
    @enderror
    <br> -->
    <label class="text-white text-uppercase fw-bold" for="validationDefault04" class="form-label">Service Type</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option value="1">Home Cleaning</option>
  <option value="2">AC Reparing</option>
  <option value="3">AC Cleaning</option>
    </select>
    <br>

    <!-- <label for="validationDefault04" class="form-label">Status</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option value="1">Active</option>
      <option value="1">Deactive</option>

    </select> -->

    <label class="text-white text-uppercase fw-bold" for="">Office Address</label>
    <input type="text" class="form-control" name="address" value="{{old('address')}}">
    @error('address')
    <span>{{$message}}</span>
    @enderror
    <br>
    <button class="btn btn-outline-secondary text-uppercase fst-italic fw-bold btn-lg" type="submit">Submit</button>
    <!-- <input type="submit" class="btn btn-secondary btn-lg">Submit</input> -->
</div>
</div>

</form>
</center>
</center>
</body>
</html>
@endsection