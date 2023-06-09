<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/file.css')}}">
    <link rel="icon" href="{{ asset('template/dist/img/logo1.png') }}">
    @stack('css')
    <title>Rosati | </title>
  </head>
  <body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="logo1">
                    <a href="/dashboarduser">
                        <img src="{{asset('img/logo1.png')}}" alt="logo_rosati" width="60px" height="50px">
                    </a>
                </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="/alur">Alur Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/pengaduanusers/create">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('pendaftaran.create') }}">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/faq">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    UAS
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/mahasiswa">Azmal Syafiq Fakhri</a></li>
                    <li><a class="dropdown-item" href="/dafa_mahasiswa">M Dafa Aldian</a></li>
                    <li><a class="dropdown-item" href="/mhsgege">Sugini Injani</a></li>
                    <li><a class="dropdown-item" href="/mahasiswas">Hana Dewi Shoviyah</a></li>
                    <li><a class="dropdown-item" href="/mahasiswamalindas">Malinda Ratnaduhita</a></li>
                    {{-- <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li> --}}
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
 
                {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
            </div>
            </div>
        </nav>
    </header>   
    <div class="container">
        @yield('container')
    </div>
    <div class="flex">
        @yield('flex')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/sign-in.css')}}">
</body>
</html>