<div>
    <img src="/img/sd.jpg" width="100%" class="img-fluid" alt="...">
</div>




<div class="container">

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="container mt-5  ">
        <div class="text-center">
            <h1> Pendaftaran Siswa</h1>
        </div>
    </div>









</div>
<div class="container register mb-5">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Selamat Datang</h3>
            <p>Silahkan Melakukan Pendaftaran, kuota yang disediakan berjumlah 3000 siswa. jika mengalami kendala dalam
                mengisi formulir, Segera
                kontak kami. Diharapkan mengisi formulir hanya satu kali, Semoga Beruntung !!! </p>
            {{-- <input type="submit" name="" value="Login" /><br /> --}}
        </div>
        <div class="col-md-9 register-right">
            <form action="/pendaftaran/send" method="POST" enctype="multipart/form-data" class="row g-3 align-center">
                @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Diharapkan Mengisi Dengan Benar</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label1">Nama Lengkap</label>

                                    <input type="text" name="nama"
                                        class="form-control                             
                        @error('nama')
                            is-invalid
                            @enderror"
                                        placeholder="Nama Lengkap"
                                        value="{{ isset($pendaftaran) ? $pendaftaran->nama : old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label1">Email</label>

                                    <input type="email" name="email"
                                        class="form-control                             
                        @error('email')
                            is-invalid
                            @enderror"
                                        placeholder="Email"
                                        value="{{ isset($pendaftaran) ? $pendaftaran->email : old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label1">Alamat</label>

                                    <input type="text" id="inputAddress" placeholder="Alamat" name="alamat"
                                        class="form-control                             
                        @error('alamat')
                            is-invalid
                            @enderror"
                                        value="{{ isset($pendaftaran) ? $pendaftaran->alamat : old('alamat') }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label1">Whatsapp</label>

                                    <input type="text" id="inputAddress" placeholder="Whatsapp" name="telpon"
                                        class="form-control                             
                        @error('telpon')
                            is-invalid
                            @enderror"
                                        value="{{ isset($pendaftaran) ? $pendaftaran->telpon : old('telpon') }}">
                                    @error('telpon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="form-label1">Motivasi</label>

                                        <textarea id="exampleFormControlTextarea1" rows="3" name="pesan"
                                            class="form-control                             
                        @error('pesan')
                            is-invalid
                            @enderror"
                                            value="{{ isset($pendaftaran) ? $pendaftaran->pesan : old('pesan') }}"></textarea>
                                        @error('pesan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btnRegister col-md-3" value="Daftar Sekarang">


                        </div>

                    </div>

                </div>
            </form>
            {{-- CheckPendaftarLimit agar otomatis tertutup --}}
            <script>
                function checkPendaftarLimit() {
                    fetch('/api/pendaftar/count')
                        .then(response => response.json())
                        .then(data => {
                            if (data.count >= 5) {
                                window.location.href = '/full';
                            }
                        });
                }

                // Panggil fungsi checkPendaftarLimit saat halaman dimuat
                checkPendaftarLimit();
            </script>

        </div>
    </div>
</div>


</div>
