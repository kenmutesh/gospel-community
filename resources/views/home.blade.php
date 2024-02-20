@extends('layouts.app')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>Gospel Community Fellowship</span></h1>
        <h2>Its by christ alone</h2>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=hjHMvgbXlk8" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Featured Services Section -->



    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->



    <!-- ======= Pricing Section ======= -->
{{--    <section id="pricing" class="pricing">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="section-title">--}}
{{--                <h2>Pricing</h2>--}}
{{--                <h3>Check our <span>Pricing</span></h3>--}}
{{--                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>--}}
{{--            </div>--}}

{{--            <div class="row">--}}

{{--                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="box">--}}
{{--                        <h3>Free</h3>--}}
{{--                        <h4><sup>$</sup>0<span> / month</span></h4>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li class="na">Pharetra massa</li>--}}
{{--                            <li class="na">Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <div class="btn-wrap">--}}
{{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="box featured">--}}
{{--                        <h3>Business</h3>--}}
{{--                        <h4><sup>$</sup>19<span> / month</span></h4>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li>Pharetra massa</li>--}}
{{--                            <li class="na">Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <div class="btn-wrap">--}}
{{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="box">--}}
{{--                        <h3>Developer</h3>--}}
{{--                        <h4><sup>$</sup>29<span> / month</span></h4>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li>Pharetra massa</li>--}}
{{--                            <li>Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <div class="btn-wrap">--}}
{{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">--}}
{{--                    <div class="box">--}}
{{--                        <span class="advanced">Advanced</span>--}}
{{--                        <h3>Ultimate</h3>--}}
{{--                        <h4><sup>$</sup>49<span> / month</span></h4>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li>Pharetra massa</li>--}}
{{--                            <li>Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <div class="btn-wrap">--}}
{{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Pricing Section -->--}}

    <!-- ======= Frequently Asked Questions Section ======= -->
{{--    <section id="faq" class="faq section-bg">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="section-title">--}}
{{--                <h2>F.A.Q</h2>--}}
{{--                <h3>Frequently Asked <span>Questions</span></h3>--}}
{{--                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>--}}
{{--            </div>--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-10">--}}
{{--                    <ul class="faq-list">--}}

{{--                        <li>--}}
{{--                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">--}}
{{--                                <p>--}}
{{--                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">--}}
{{--                                <p>--}}
{{--                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">--}}
{{--                                <p>--}}
{{--                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">--}}
{{--                                <p>--}}
{{--                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">--}}
{{--                                <p>--}}
{{--                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">--}}
{{--                                <p>--}}
{{--                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Frequently Asked Questions Section -->--}}

    <!-- ======= Contact Section ======= -->


</main><!-- End #main -->

@endsection


