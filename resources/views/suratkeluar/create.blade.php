@extends('layout.layout')

@section('container')
    <div class="mb-3">
        <a href="/surat-keluar" class="btn btn-danger btn-sm">Kembali</a>
    </div>
    <div>
        <h1><strong>Tambah Surat Keluar</strong></h1>
        <p class="lead">
            Tambahkan Surat Keluar Baru melalui blanko halaman ini!
        </p>
    </div>
    <div class="my-3">
        @if(session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {!! session('danger') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
        @endif
    </div>
    <div class="mt-3">
        <div class="row">
            <div class="col">
                <form action="/surat-keluar" method="POST">
                    @csrf
                    <div class="row mb-2">
                        <div class="col">
                            <label for="kode" class="form-label"><strong>Kode</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" required value="{{ old('kode') }}">
                            @error('kode')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="lampiran" class="form-label"><strong>lampiran</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('lampiran') is-invalid @enderror" id="lampiran" name="lampiran" required value="{{ old('lampiran') }}">
                            @error('lampiran')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="tanggal_surat" class="form-label"><strong>Tanggal Surat</strong></label>
                            <input autocomplete="off" type="text" id="datepicker" class="form-control @error('tanggal_surat') is-invalid @enderror" id="tanggal_surat" name="tanggal_surat" value="{{ old('tanggal_surat') }}">
                            @error('tanggal_surat')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="pengolah" class="form-label"><strong>Pengolah</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('pengolah') is-invalid @enderror" id="pengolah" name="pengolah" required value="{{ old('pengolah') }}">
                            @error('pengolah')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="box" class="form-label"><strong>Box</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('box') is-invalid @enderror" id="box" name="box" required value="{{ old('box') }}">
                            @error('box')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="dari_kepada" class="form-label"><strong>Dari</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('dari_kepada') is-invalid @enderror" id="dari_kepada" name="dari_kepada" required value="{{ old('dari_kepada') }}">
                            @error('dari_kepada')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="isi_ringkas" class="form-label"><strong>Isi Ringkas</strong></label>
                        <textarea class="form-control @error('isi_ringkas') is-invalid @enderror" name="isi_ringkas" id="isi_ringkas" cols="30" rows="3" required>{{ old('isi_ringkas') }}</textarea>
                        @error('isi_ringkas')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="catatan" class="form-label"><strong>Catatan</strong></label>
                        <textarea class="form-control @error('catatan') is-invalid @enderror" name="catatan" id="catatan" cols="30" rows="3" required>{{ old('catatan') }}</textarea>
                        @error('catatan')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            </div>
            <div class="col">
                <div class="mb-3">
                    <img src="/img/suratkeluar.png" alt="surat keluar" width="100%;" class="rounded-3">
                </div>
                <div class="alert alert-primary" role="alert">
                    <ol>
                        <strong>
                            Syarat Pengisian Surat!
                        </strong>
                        <li>Isi data pada blanko yang sudah disiapkan</li>
                        <li>Data yang diisi harus sesuai pada kolom blanko (Misal jika mengisi <u>No Surat</u>, maka harus mengisi kolom <u>No Surat</u>, dan seterusnya)</li>
                        <li>Semua kolom pada blanko wajin diisi semua (Kecuali No Surat)</li>
                        <li>Blanko harus diisi dengan benar dan tepat</li>
                        <li>Jika seluruh kolom telah terisi, klik <u>Submit</u></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection