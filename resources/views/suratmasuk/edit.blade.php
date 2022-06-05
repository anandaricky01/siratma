@extends('layout.layout')

@section('container')
    <div class="mb-3">
        <a href="/surat-masuk" class="btn btn-danger btn-sm">Kembali</a>
    </div>
    <div>
        <h1><strong>Edit Surat Masuk</strong></h1>
        <p class="lead">
            Edit Surat Masuk Baru melalui blanko halaman ini!
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
                <form action="/surat-masuk/{{ $suratmasuk->id }}" method="POST">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="{{ $suratmasuk->id }}">
                    <div class="row mb-2">
                        <div class="col">
                            <label for="no_surat" class="form-label">No. Surat</label>
                            <input autocomplete="off" type="text" class="form-control @error('no_surat') is-invalid @enderror" id="no_surat" name="no_surat" required value="{{ $suratmasuk->no_surat }}">
                            @error('no_surat')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="kode" class="form-label">Kode</label>
                            <input autocomplete="off" type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" required value="{{ $suratmasuk->kode_pengarsipan->kode_pengarsipan }}">
                            @error('kode')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                            <input autocomplete="off" type="text" id="datepicker" class="form-control @error('tanggal_surat') is-invalid @enderror" id="tanggal_surat" name="tanggal_surat" value="{{ $suratmasuk->tanggal_surat }}">
                            @error('tanggal_surat')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="pengolah" class="form-label">Pengolah</label>
                            <input autocomplete="off" type="text" class="form-control @error('pengolah') is-invalid @enderror" id="pengolah" name="pengolah" required value="{{ $suratmasuk->pengolah }}">
                            @error('pengolah')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="tanggal_diteruskan" class="form-label">Tanggal Diteruskan</label>
                            <input autocomplete="off" type="text" id="datepicker2" class="form-control @error('tanggal_diteruskan') is-invalid @enderror" id="tanggal_diteruskan" name="tanggal_diteruskan" value="{{ $suratmasuk->tanggal_diteruskan }}">
                            @error('tanggal_diteruskan')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="lampiran" class="form-label">lampiran</label>
                            <input autocomplete="off" type="text" class="form-control @error('lampiran') is-invalid @enderror" id="lampiran" name="lampiran" required value="{{ $suratmasuk->lampiran }}">
                            @error('lampiran')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="dari_kepada" class="form-label">Dari</label>
                            <input autocomplete="off" type="text" class="form-control @error('dari_kepada') is-invalid @enderror" id="dari_kepada" name="dari_kepada" required value="{{ $suratmasuk->dari_kepada }}">
                            @error('dari_kepada')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="box" class="form-label">Index</label>
                            <input autocomplete="off" type="text" class="form-control @error('box') is-invalid @enderror" id="box" name="box" required value="{{ $suratmasuk->box }}">
                            @error('box')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="tanda_diterima" class="form-label">Tanda Terima</label>
                            <input autocomplete="off" type="text" class="form-control @error('tanda_diterima') is-invalid @enderror" id="tanda_diterima" name="tanda_diterima" required value="{{ $suratmasuk->tanda_diterima }}">
                            @error('tanda_diterima')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="isi_ringkas" class="form-label">Isi Ringkas</label>
                        <textarea class="form-control @error('isi_ringkas') is-invalid @enderror" name="isi_ringkas" id="isi_ringkas" cols="30" rows="3" required>{{ $suratmasuk->isi_ringkas }}</textarea>
                        @error('isi_ringkas')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="catatan" class="form-label">Catatan</label>
                        <textarea class="form-control @error('catatan') is-invalid @enderror" name="catatan" id="catatan" cols="30" rows="3" required>{{ $suratmasuk->catatan }}</textarea>
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
                    <img src="/img/suratmasuk.png" alt="surat masuk" width="100%;" class="rounded-3">
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
                        <li></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection