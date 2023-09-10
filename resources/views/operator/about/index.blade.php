@extends('layouts.app_sneat')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="/operator/about/update" method="POST" enctype="multipart/form-data">
                        @method('PUT')

                        @csrf
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="judul"
                                class="form-control                             
                        @error('judul')
                            is-invalid
                            @enderror"
                                placeholder="Judul" value="{{ isset($about) ? $about->judul : old('judul') }}">
                            @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Alamat</label>
                            <textarea id="tiny" name="alamat"class="form-control" cols="30" rows="10">{{ isset($about) ? $about->alamat : old('alamat') }} </textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Sambutan Kepala Sekolah</label>
                            <textarea id="tiny" name="deskripsi"class="form-control" cols="30" rows="10">{{ isset($about) ? $about->deskripsi : old('deskripsi') }} </textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Misi</label>
                            <textarea id="tiny" name="misi"class="form-control" cols="30" rows="10">{{ isset($about) ? $about->misi : old('misi') }} </textarea>
                            @error('misi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Visi</label>
                            <textarea id="tiny" name="visi"class="form-control" cols="30" rows="10">{{ isset($about) ? $about->visi : old('visi') }} </textarea>
                            @error('visi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Nomor Telpon insitusi</label>
                            <textarea id="tiny" name="hp"class="form-control" cols="30" rows="10">{{ isset($about) ? $about->hp : old('hp') }} </textarea>
                            @error('hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group mt-3">
                            <label for="">Kepala Sekolah</label>
                            <input type="file" name="gambar"
                                class="form-control 
                            @error('gambar')
                            is-invalid
                            @enderror"
                                placeholder="Gambar">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            @if (isset($about))
                                <img src="/{{ $about->gambar }}" width="20%" class="mt-4" alt="">
                            @endif
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Logo</label>
                            <input type="file" name="logo"
                                class="form-control 
                            @error('logo')
                            is-invalid
                            @enderror"
                                placeholder="logo">
                            @error('logo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            @if (isset($about))
                                <img src="/{{ $about->logo }}" width="20%" class="mt-4" alt="">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
