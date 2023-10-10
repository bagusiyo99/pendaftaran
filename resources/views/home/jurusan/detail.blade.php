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

                    <h2 class="column-title mrt-0 text-center">{{ $jurusan->judul }}</h2>

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                        <div class="item">
                            <img src="/{{ $jurusan->gambar }}" class="mx-auto d-block " width="550px" height="400px">

                        </div>

                    </div><!-- Page slider end -->


                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <p>{!! $jurusan->deskripsi !!}
                            </p>
                        </div><!-- col end -->
                    </div><!-- 1st row end-->



                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="column-title-small">What Makes Us Different</h3>

                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                ad
                                squid. 3 wolf
                                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                laborum eiusmod.
                                Consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin
                                pellentesque et non erat
                                tincidunt nunc posuere.</p>
                            <ul class="list-arrow">
                                <li>Partnership Strategy tristique eleifend.</li>
                                <li>Opporutnity to work with amet elit a.</li>
                                <li>Saving Time to Deal with commodo iaculis.</li>
                                <li>Leadership skills to manage erat volutpat.</li>
                                <li>Cut cost without sacrificing dolore magna.</li>
                                <li>Automate your business elis tristique.</li>
                            </ul>
                        </div>

                        <div class="col-md-6 mt-5 mt-md-0">
                            <h3 class="column-title-small">You Should Know</h3>

                            <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Does the law require head protection on construction sites?
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                            terry
                                            richardson ad squid. 3
                                            wolf
                                            moon officia aute, non cupidata
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                What are the first aid requirements for sites?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip
                                            ex ea com modo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                            dolore
                                            eu fugiat nulla
                                            pariatur.
                                            Excepteur sint occaecat cupid henderit in voluptate velit esse cillu
                                            oris
                                            nisi ut aliquip ex ea
                                            com
                                            matat.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                What is an appointed person?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.
                                            Lorem Ipsum has been
                                            the
                                            industry’s standard dummy text ever since the 1500s, when an unknown
                                            printer
                                            took a galley of type
                                            and
                                            scrambled it to make a type specimen book.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Accordion end -->
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
