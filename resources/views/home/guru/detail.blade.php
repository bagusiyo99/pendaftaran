<div>
    <img src="/img/sd.jpg" width="100%" height="400px" class="imm mb-5">
</div>







<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            {{-- 
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        <h3 class="widget-title">Solutions</h3>
                        <ul class="nav service-menu">
                            <li><a href="service-single.html">Home Construction</a></li>
                            <li class="active"><a href="service-single.html">Building Remodels</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Exterior Design</a></li>
                            <li><a href="#">Renovation</a></li>
                            <li><a href="#">Safety Management</a></li>
                        </ul>
                    </div><!-- Widget end -->

                    <div class="widget">
                        <div class="quote-item quote-border">
                            <div class="quote-text-border">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad
                                squid.
                            </div>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png"
                                    alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Weldon Cash</h3>
                                    <span class="quote-subtext">CEO, First Choice Group</span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->

                    </div><!-- Widget end -->

                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end --> --}}

            <div class="col-xl-12 col-lg-12">
                <div class="content-inner-page">

                    <h2 class="column-title mrt-0 text-center">{{ $guru->judul }}</h2>
                    <h4 class="column-title mrt-0 text-center">{{ $guru->mapel }}</h4>

                    <div id="page-slider" class="page-slider">
                        <div class="item">
                            <img src="/{{ $guru->gambar }}" class="mx-auto d-block " width="550px" height="400px">

                        </div>

                    </div><!-- Page slider end -->






                    <div class="gap-40"></div>

                    <div class="row mt-5">
                        <div class="col-md-8">
                            <h3 class="column-title-small">Biodata </h3>
                            <p>{!! $guru->deskripsi !!}</p>
                            {{-- <ul class="list-arrow">
                                <li>Partnership Strategy tristique eleifend.</li>
                                <li>Opporutnity to work with amet elit a.</li>
                                <li>Saving Time to Deal with commodo iaculis.</li>
                                <li>Leadership skills to manage erat volutpat.</li>
                                <li>Cut cost without sacrificing dolore magna.</li>
                                <li>Automate your business elis tristique.</li>
                            </ul> --}}
                        </div>

                        <div class="col-md-4 mt-5 mt-md-0">
                            <h3 class="column-title-small ">Berikut Sosial Media Guru</h3>
                            <ul class="sosmed">
                                <li>
                                    <a title="Facebook " href="#">
                                        <span class="sosialikon"><i class="fab fa-facebook-f"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Twitter " href="#">
                                        <span class="sosialikon"><i class="fab fa-twitter"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Instagram" href="#">
                                        <span class="sosialikon"><i class="fab fa-instagram"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a title="tiktok" href="#">
                                        <span class="sosialikon"><i class="fab fa-tiktok"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--2nd row end -->

                    {{-- <div class="gap-40"></div>

                    <div class="call-to-action classic">
                        <div class="row align-items-center">
                            <div class="col-md-8 text-center text-md-left">
                                <div class="call-to-action-text">
                                    <h3 class="action-title">Interested with this service.</h3>
                                </div>
                            </div><!-- Col end -->
                            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                <div class="call-to-action-btn">
                                    <a class="btn btn-primary" href="#">Get a Quote</a>
                                </div>
                            </div><!-- col end -->
                        </div><!-- row end -->
                    </div><!-- Action end --> --}}

                </div><!-- Content inner end -->
            </div><!-- Content Col end -->


        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->
