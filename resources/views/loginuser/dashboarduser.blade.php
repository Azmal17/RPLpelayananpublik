@extends('layouts.main')

@section('flex')

    <div class="padding-top p-left border-bot border-top " ></div>
    <div class="container">
        <div class="topg mt-3 ">
                <div class="textbox ">
                    <h1>ROSATI</h1>
                    <h2>
                        Melayani pasien dengan <span>sepenuh hati</span>
                    </h2>
                    <p> Pelayanan Rumah Sakit Rombel Satu TI juga baik dengan tenaga kesehatan yang baik, mulai dari perawat, dokter, alat kesehatan dan obatnya. Rumah Sakit ini dapat menjadi salah satu pilihan warga masyarakat Kota Semarang untuk memenuhi kebutuhan terkait kesehatan. Harga pengobatan juga memiliki tarif murah.</p>
                </div>
            <div class="imgbox">
                <img src="{{asset('img/medical.jpg')}}" alt="rawat jalan" class="p-3 logo2" height="500px" >
            </div>
        </div>
    </div>

    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4 ">
              <i class="fas fa-gem me-3"></i>ROSATI
            </h6>
            <p >
                Salah satu Rumah Sakit di Kota Semarang. Rumah Sakit ini melayani pasien Rumah Sakit seperti periksa kesehatan (check up), pembuatan surat keterangan sehat, periksa umum, periksa gigi, Konsultasi, KIA , TB.Paru, kusta dan lainnya.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              LAYANAN
            </h6>
            <p>
              <a href="/alur" class="text-reset">Alur layanan</a>
            </p>
            <p>
              <a href="/pengaduanuser" class="text-reset">Pengaduan</a>
            </p>
            <p>
              <a href="{{ route('pendaftaran.create') }}" class="text-reset">Pendaftaran</a>
            </p>
            <p>
              <a href="/faq" class="text-reset">FAQ</a>
            </p>
          </div>
          <!-- Grid column -->
  

  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Semarang, Jawa Tengah, Indonesia</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              rosati@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +6286384729342</p>
            <p><i class="fas fa-print me-3"></i> +6287354719374</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://pelayananpublikrosati.me">pelayananpublikrosati.me</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    
    {{-- <div class="row">
        <img src="{{asset('img/rawat inap.jpg')}}" alt="rawat inap" height="500px">
    </div> --}}

    
    
@endsection