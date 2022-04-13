@extends('layout.layout')

@section('container')
    <div class="mb-3">
        <a href="/disposisi" class="btn btn-danger btn-sm">Kembali</a>
    </div>
    <div>
        <h1><strong>Tambah Lembar Disposisi</strong></h1>
        <p class="lead">
            Tambah Lembar Disposisi melalui blanko halaman ini!
        </p>
    </div>
    <div class="mt-3">
        <div class="row">
            <div class="col">
                <form action="/disposisi" method="POST">
                    @csrf
                    <div class="row mb-2">
                        <div class="col">
                            <label for="perihal" class="form-label"><strong>Perihal</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('perihal') is-invalid @enderror" id="perihal" name="perihal" required value="{{ old('perihal') }}">
                            @error('perihal')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="no_agenda" class="form-label"><strong>No. Agenda</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('no_agenda') is-invalid @enderror" id="no_agenda" name="no_agenda" required value="{{ old('no_agenda') }}">
                            @error('no_agenda')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="no_surat" class="form-label"><strong>No. Surat</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('no_surat') is-invalid @enderror" id="no_surat" name="no_surat" required value="{{ old('no_surat') }}">
                            @error('no_surat')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="dari" class="form-label"><strong>Dari</strong></label>
                            <input autocomplete="off" type="text" class="form-control @error('dari') is-invalid @enderror" id="dari" name="dari" required value="{{ old('dari') }}">
                            @error('dari')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="tanggal_disposisi" class="form-label"><strong>Tanggal Surat</strong></label>
                            <input autocomplete="off" type="text" id="datepicker" class="form-control @error('tanggal_disposisi') is-invalid @enderror" id="tanggal_disposisi" name="tanggal_disposisi" value="{{ old('tanggal_disposisi') }}">
                            @error('tanggal_disposisi')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="diterima_tanggal" class="form-label"><strong>Diterima Tanggal</strong></label>
                            <input autocomplete="off" type="text" id="datepicker2" class="form-control @error('diterima_tanggal') is-invalid @enderror" id="diterima_tanggal" name="diterima_tanggal" value="{{ old('diterima_tanggal') }}">
                            @error('diterima_tanggal')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="sifat" id="sangatsegera">
                            <label class="form-check-label" for="sangatsegera">
                              Sangat Segera
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="2" name="sifat" id="segera">
                            <label class="form-check-label" for="segera">
                              Segera
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="3" name="sifat" id="penting">
                            <label class="form-check-label" for="penting">
                              Penting
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="4" name="sifat" id="biasa">
                            <label class="form-check-label" for="biasa">
                              Biasa
                            </label>
                          </div>
                    </div>

                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            </div>
            <div class="col">
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