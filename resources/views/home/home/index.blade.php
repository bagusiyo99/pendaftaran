{{-- mx-auto d-block : Gambar Ketengah --}}
{{-- float-left: Gambar kekiri --}}
{{-- float-rightk : Gambar ke kanan --}}
{{-- img-fluid :gambar otomatis menyesuaikan --}}

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators ">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach ($banner as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="/{{ $item->gambar }}" width="100%" height="700px" alt="">
            </div>
        @endforeach

    </div>
    <button class="carousel-control-prev text-success" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next text-success" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>




<section class="fitur" data-aos="fade-down" data-aos-easing="linear" data-aos-offset="200">
    <div class="fe-box">
        <a>
            <img src="img/icon/1.jpg" alt="">
            <h6> Kurikulum </h6>
        </a>
    </div>

    <div class="fe-box">
        <a>
            <img src="img/icon/2.jpg" alt="">
            <h6> Prestasi </h6>
        </a>
    </div>

    <div class="fe-box">
        <a>
            <img src="img/icon/3.jpg" alt="">
            <h6> Akreditasi </h6>
        </a>
    </div>

    <div class="fe-box">
        <a>
            <img src="img/icon/4.jpg" alt="">
            <h6> Daftar</h6>
        </a>
    </div>

    <div class="fe-box">
        <a>
            <img src="img/icon/5.jpg" alt="">
            <h6> Alumni </h6>
        </a>
    </div>

    <div class="fe-box">
        <a>
            <img src="img/icon/6.jpg" alt="">
            <h6> Bantuan </h6>
        </a>
    </div>

</section>


<div class="main">
    <h3 class="heading">About</h3>
</div>


<section class="info">
    <div class="main-info">
        <img src="/{{ settings()->get('foto') }}" data-aos="fade-right" data-aos-offset="500"
            data-aos-easing="ease-in-sine">
        <div class="tulis" data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <h4>Selamat Datang di Smk xxxx</h4>
            {{-- <h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1> --}}
            <p>{{ settings()->get('desc') }} </p>

        </div>
    </div>

</section>


<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title">About Us</h2>
                    <h3 class="into-sub-title">We deliver landmark projects</h3>
                    <p>We are rethoric question ran over her cheek When she reached the first hills of the Italic
                        Mountains,
                        she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                        Village
                        and the subline of her own road, the Line Lane.</p>
                </div><!-- Intro box end -->

                <div class="gap-20"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-trophy"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">We've Repution for Excellence</h3>
                            </div>
                        </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-sliders-h"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">We Build Partnerships</h3>
                            </div>
                        </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-thumbs-up"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Guided by Commitment</h3>
                            </div>
                        </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">A Team of Professionals</h3>
                            </div>
                        </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->
            </div><!-- Col end -->

            <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="into-sub-title">Our Values</h3>
                <p>Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy
                    street art, tattooed beard literally.</p>

                <div class="accordion accordion-group" id="our-values-accordion">
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Safety
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#our-values-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidata
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Customer Service
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#our-values-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidata
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Integrity
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#our-values-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidata
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Accordion end -->

            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->

<div class="bg-success  my-3">

    <div class="container my-5">
        <div class="text-center text-white" data-aos="zoom-in" data-aos-offset="200">
            <h4> Hati-Hati Penipuan</h4>
            <p> <strong> Selain dari website ini dan kontak yang tersedia kami tidak mempunyai website lain, jika ada
                    yang
                    mengatasnamakan kami harap lapor</strong> </p>
        </div>
    </div>
</div>



<div class="main">
    <h3 class="heading">Informasi</h3>
</div>
<main class="container">

    <div class="p-5 p-md-4 mb-5 text-white rounded bg-success" data-aos="fade-down" data-aos-easing="linear"
        data-aos-duration="1500">
        <div>
            <h1 class="display-5 fst-italic">Ayok Daftarkan putra atau putri terbaik anda di pesantren ini dan dapatkan
                diskon pendaftaran pertama</h1>
            <p class="lead my-3">Dapatkan Update Informasi Terbaru hanya di website ini </p>
        </div>
    </div>

    <div class="row mb-2" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="4500">
        @foreach ($informasi as $item)
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static masee">
                        <strong class="d-inline-block mb-2 text-success">Informasi Terbaru</strong>
                        <h3 class="mb-1">{{ $item->judul }}</h3>
                        <p class="card-text mb-3">{!! Str::limit($item->deskripsi, 200) !!}</p>
                        <a clas="info mt-5" href="/informasi/{{ $item->id }}">Lanjutkan Membaca</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="/{{ $item->gambar }}">

                    </div>
                </div>

            </div>
        @endforeach

    </div>
</main>
