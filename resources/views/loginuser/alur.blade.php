@extends('layouts.main')

@section('container')
<main>
    <link rel="stylesheet" href="{{asset('css\alur.css')}}">
    <div class="padding-top1">Beranda > {{$title}}</div> 
    <div id="content">
        <article id="pendaftaran" class="card">
<h2>Alur Pendaftaran Online</h2>
<img src="{{asset('alurimg/rs.jpg')}}" class="featured-image" alt="rs">
<h3>Alur Pendaftaran Pasien Rawat Jalan secara Online</h3>
<p>	1. Buka situs web Rosati <br />
2. Login menggunakan nomor HP dan masukkan kode OTP nya <br />
3. Jika belum mempunyai akun, regustrasi terlebih dahulu sampai akun terverifikasi <br />
4. Klik pendaftaran pasien rawat jalan <br />
5. Pilih sebagai pasien baru atau pasien lama <br />
6. Isikan data diri sesuai alur <br />
7. Pastikan semua data diri benar dan klinik yang dipilih sesuai <br />
8. Jika semua sudah terisi dengan benar maka Anda akan mendapatkan nomor antrian </p>
</article>

<article id="pengaduan" class="card">
<h2>Alur Pengaduan</h2>
<img src="{{asset('alurimg/pengaduan.png')}}" class="featured-image" alt="pengaduan">
<h3>Alur Pengaduan secara Online</h3>
<p>1. Buka situs web Rosati<br />
2. Setelah masuk ke situs Rosati, pilih pengaduan <br />
3. Isi identitas diri<br />
4. Ketikkan pengaduan yang ingin disampaikan<br />
5. Tunggu hingga pengaduan selesai diproses dan Anda akan mendapatkan balasan melalui email</p>
</article>
</div>
</body>
<body>
    <aside>
        <article class="profile card">
            <header>
    <h2>RS ROSATI</h2>
    <p>Rumah Sakit Rombel 1 TI</p>
    <figure>
        <img src="{{asset('alurimg/logoROSATI.png')}}" class="profile img" alt="logorosati">
    </figure>
    </header>
    <section>
        <h3>Informasi Lainnya</h3>
        <table>
            <tr>
                <th>Email</th>
                <td>rosati@gmail.com</td>
            </tr>
            <tr>
                <th>Telp</th>
                <td>021021021</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>Kota Semarang</td>
            </tr>
            <tr>
                <th>IGD</th>
                <td>252525</td>
            </tr>
            
        </table>

    </article>
</aside>


</figure>

</main>
@endsection