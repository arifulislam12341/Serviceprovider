<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}"><b>Home</b></a>
     
        <a class="nav-link " href="{{route('serviceproviderRegistration')}}"><b>Registration</b></a>
        <a class="nav-link " href="{{route('serviceproviderlogin')}}"><b>LogIn</b></a>
       
        <a class="nav-link " href="{{route('serviceproviderInfo')}}"><b>Information</b></a>
          
        <a class="nav-link " href="{{route('serviceproviderUpdate')}}"><b>Update</b></a>
        
        <a class="nav-link " href="{{route('seeorderDetails')}}"><b>Orderdetails</b></a>
        <a class="nav-link " href="{{route('serviceproviderLogout')}}"><b>Logout</b></a>
      </div>
    </div>
  </div>
</nav>