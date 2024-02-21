@extends('layouts.app')

@section('content')
    <section class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About</h2>
                <h3>Find Out More <span>About Us</span></h3>
                <h4>Our Vision</h4>
                <p>To be a transformed team of individual, families and communities  in Kenya by the true word of God.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3>Our Mission.</h3>
                    <p class="fst-italic">
                        To reach, train and send workers into harvest fields
                    </p>
                    <h3>Our <span style="color: #0434a2">Core Values</span></h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="custom-list">
                                    <li><h5>Sound doctrine</h5></li>
                                    <li><h5>Unwavering faith</h5></li>
                                    <li><h5>Fruitfulness (multiply & increase)</h5></li>
                                    <li><h5>Integrity and trustfulness</h5></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="custom-list">
                                    <li><h5>Selfless service</h5></li>
                                    <li><h5>Persistent prayer</h5></li>
                                    <li><h5>Upholding Christian family values</h5></li>

                                </ul>
                            </div>
                        </div>
                    </div>
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
                <h3>Our Hardworking <span>Partners</span></h3>
            </div>

            <div class="row">


                <div class="d-flex h-100px align-items-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://mytemplechurch.com/"><i class="bi bi-browser-chrome"></i></a>
                                <a href="https://www.facebook.com/TempleIMC"><i class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>My Temple Church</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

@endsection
