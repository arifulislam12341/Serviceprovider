@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider Dash Board</title>
</head>
<body>
    <header>
    <h1>Hi {{Session::get ("serviceId")}}</h1>
    </header>




    
</body>
</html>
@endsection