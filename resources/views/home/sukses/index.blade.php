{{-- <div>
    <img src="/img/sd.jpg" width="100%" height="400px" alt="...">
</div>
{{-- <div class="container mt-5">
    <div>
        <img src="/logo/LOGO.png" class="mx-auto d-block " width="200px" height="200px">
    </div>
</div> --}}


{{-- <div class="px-5 pt-2 mb-5 text-center border-bottom ">
    <h5 class=" fw-bold">Pendaftaran Sukses </h5>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Silahkan menunggu konfirmasi dari admin melalui email dan nomor telpon sesuai pengisian
            formulir
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <a href="/" type="button" class="btn btn-success btn-lg px-4 me-sm-3">Home</a>
        </div>
    </div>
</div> --}}

<section id="main-container" class="main-container mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-2 ">
                <div id="page-slider" class="page-slider small-bg">
                    <div class="item">
                        <img src="/img/sukses.jpg" class="mx-auto d-block " width="700px" height="400px">

                    </div><!-- Item 1 end -->

                </div><!-- Page slider end-->


            </div><!-- Col end -->
            <div class="col-lg-6 mt-5">
                <h3 class="column-title">Pendaftaran Sukses</h3>
                <p>Silahkan membawa kwitansi untuk pendaftarn ulang</p>
                <blockquote>
                    <p>Everyone has inside them a piece of good news. The good news is you don't know how great you can
                        be! How much you can love! What you can accomplish! And what your potential is.</p>
                </blockquote>
                <p>Silahkan download kwitansi pendaftaran dibawah ini. </p>
                <a class="btn-primary" href="/download-kwitansi/{{ session('nama') }}" target="_blank">Unduh
                    Kwitansi</a>

            </div><!-- Col end -->

            {{-- <p>Nama: {{ session('nama') }}</p> --}}





        </div><!-- Content row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->
