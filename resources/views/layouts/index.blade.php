<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/sign-in.css')}}">
</head>
<header>
   <nav class="wrapper">
    <div class="logo">
      <img src="{{asset('img/logo1.png')}}" alt="logo_rosati" width="60px" height="50px">
    </div>
    <ul class="navigation">
      <li><a href="#">Alur Pendaftaran</a></li>
      <li class="dropdown"> 
        <div class="dropbtn">Pendaftaran <i class="fa fa-caret-down"></i></div>
        <div class="dropdown-content">
          <a href="#">Rawat Jalan</a>
          <a href="#">Rawat Inap</a>
        </div>
      </li>
      <li><a href="#">Login</a></li>

    </ul>
   </nav> 

   <div class="container mt-4">
    @yield('container')
  </div>
</header>
</html>