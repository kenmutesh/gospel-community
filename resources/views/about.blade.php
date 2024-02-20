@extends('layouts.app')

@section('content')
    <section class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About</h2>
                <h3>Find Out More <span>About Us</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                            </div>
                        </li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hardworking <span>Team</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

@endsection
