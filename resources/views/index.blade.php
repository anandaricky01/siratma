@extends('layout.layout')

@section('container')
    <div class="row my-5">
        <div class="col">
            <img src="/img/logo-provinsi-jatim.png" class="rounded" alt="" style="width: 80%;">
        </div>
        <div class="col">
            <h1 style="font-size: 100px;">SiRatma</h1>
            <p style="font-size: 20px;"> <strong>Sistem Informasi Surat Menyurat</strong> adalah aplikasi untuk menginput segala jenis persuratan mulai dari Surat Masuk maupun Surat Keluar CDK Wilayah Malang</p>
            <p class=""></p>
            <a href="surat-masuk" class="btn btn-primary">Surat Masuk</a>
            <a href="surat-keluar" class="btn btn-warning">Surat Keluar</a>

        </div>
    </div>
@endsection

    