<div class="containe">
<div class="d-flex justify-content-evenly">
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-white text-uppercase fw-bold fst-italic" aria-current="page" href="{{route('home')}}"><b>Home</b></a>
     
        <a class="nav-link text-white text-uppercase fw-bold fst-italic" href="{{route('serviceproviderRegistration')}}"><b>Registration</b></a>
        <a class="nav-link text-white text-uppercase fw-bold fst-italic" href="{{route('serviceproviderlogin')}}"><b>LogIn</b></a>
       
        <a class="nav-link text-white text-uppercase fw-bold fst-italic " href="{{route('serviceproviderInfo')}}"><b>Information</b></a>
          
        <a class="nav-link text-white text-uppercase fw-bold fst-italic " href="{{route('serviceproviderUpdate')}}"><b>Update</b></a>
        <a class="nav-link text-white text-uppercase bg-danger fw-bold fst-italic" href="{{route('serviceproviderDelete')}}"><b>Delete Account</b></a>
      
        
        <a class="nav-link text-white text-uppercase fw-bold fst-italic " href="{{route('seeorderDetails')}}"><b>Orderdetails</b></a>
        <a class="nav-link text-white text-uppercase fw-bold fst-italic" href="{{route('serviceproviderLogout')}}"><b>Logout</b></a>
      
      </div>
    </div>
  </div>
  </div>
  </div>
</nav>