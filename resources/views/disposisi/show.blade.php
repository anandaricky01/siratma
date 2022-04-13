@extends('layout.layout')

@section('container')

<div class="mb-2">
  <a href="/disposisi" class="btn btn-danger btn-sm">Kembali</a>
  <div class="row">
    <div class="col-4 text-end">
      <img src="/img/Surat.png" alt="" style="width: 70%; align:right;">
    </div>
    <div class="col text-start">
      <h1 class="align-middle"><strong>Detail Lembar Disposisi</strong></h1>
      <p class="lead">Tolong perhatikan baik - baik setiap informasi pada disposisi dan pastikan sudah memiliki data yang benar</p>
      <a href="/disposisi/{{ $disposisi->id }}/pdf" class="btn btn-primary">Print Disposisi</a>
      <a href="/disposisi/{{ $disposisi->id }}/edit" class="btn btn-warning">Edit Disposisi</a>
      <form action="/disposisi/{{ $disposisi->id }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" type="submit" onclick="return confirm('Kamu yakin?')">
          Hapus
        </button>
      </form> 
    </div>
  </div>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col" colspan="6">Detail Surat keluar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Perihal</th>
        <td scope="col" colspan="5">{{ $disposisi->perihal }}</td>
      </tr>
      <tr>
        <th scope="row">No. Urut</th>
        <td>{{ $disposisi->no_urut }}</td>
        <th scope="row">No. Agenda</th>
        <td>{{ $disposisi->no_agenda }}</td>
        <th scope="row">No. Surat</th>
        <td>{{ $disposisi->no_surat }}</td>
      </tr>
      <tr>
        <th scope="row">Tanggal</th>
        <td colspan="2">{{ $disposisi->tanggal_disposisi }}</td>
        <th scope="row">Tanggal Diterima</th>
        <td colspan="2">{{ $disposisi->diterima_tanggal }}</td>
      </tr>
      <tr>
        <th scope="row">Surat Dari </th>
        <td colspan="5">{{ $disposisi->dari }}</td>
      </tr>
      <tr>
        <th scope="row">Sifat</th>
        <td scope="col" colspan="5">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sifat" id="sangatsegera" {{ $disposisi->sifat == 1 ? "checked" : " "}} disabled>
                <label class="form-check-label" for="sangatsegera">
                  <strong>Sangat Segera</strong> 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sifat" id="segera" {{ $disposisi->sifat == 2 ? "checked" : " " }} disabled>
                <label class="form-check-label" for="segera">
                  <strong>Segera</strong> 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sifat" id="penting" {{ $disposisi->sifat == 3 ? "checked" : " " }} disabled>
                <label class="form-check-label" for="penting">
                  <strong>Penting</strong> 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sifat" id="biasa" {{ $disposisi->sifat == 4 ? "checked" : " " }} disabled>
                <label class="form-check-label" for="biasa">
                  <strong>Biasa</strong> 
                </label>
              </div>
        </td>
      </tr>
    </tbody>
  </table>

@endsection