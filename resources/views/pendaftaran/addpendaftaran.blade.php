@extends('layouts.main')
  
@section('container')
<div class="padding-top1">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/pendaftaranrawatjalan"> Back</a>
            </div>
        </div>

        <form action="{{ route('daftarstore') }}" method="POST">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Berkunjung</strong>
                        <input type="date" name="tgl_berkunjung" class="form-control" placeholder="Nomor Asuransi">
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Klinik:</strong>
                    <select class="form-select" name="klinik" aria-label=".form-select-sm example">
                      <option selected>Pilih Klinik</option>
                      <option value="Umum">Umum</option>
                      <option value="Bedah">Bedah</option>
                      <option value="Gigi">Gigi</option>
                      <option value="Kardiologi">Kardiologi</option>
                      <option value="Gastroenterologi">Gastroenterologi</option>
                      <option value="Dermatologi">Dermatologi</option>
                      <option value="Ortopedi">Ortopedi</option>
                      <option value="Pediatri">Pediatri</option>  
                      <option value="Psikiatri">Psikiatri</option>
                      <option value="Urologi">Urologi</option>
                      <option value="Hematologi">Hematologi</option>
                  </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection