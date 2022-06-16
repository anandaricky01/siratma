@extends('layout.layout')

@section('container')
<div class="my-5 text-center">
    <h1 class=""><strong>Halaman Arsip Korespondensi</strong></h1>
    <p class="lead">Cek semua Arsip yang telah di input di halaman ini!</p>
</div>

<form action="/arsip-korespondensi" method="POST">
    @csrf
    <div class="row justify-content-md-center">
        <div class="col-3">
            <div class="mb-3">
              <select id="disabledSelect" class="form-select" name="bulan">
                <option>Bulan</option>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3">
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Tahun" name="tahun">
            </div>
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<div class="text-center">
    <img class="" src="/img/Surat.png" alt="" width="35%">
</div>

@endsection