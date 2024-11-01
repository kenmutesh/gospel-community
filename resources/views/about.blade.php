@extends('layouts.app')
@section('page', 'About')
@section('content')
<div class="about section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>About</h2>
            <h3>Find Out More<br> <span>About Us</span></h3>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <h3><span style="color: #0434a2">Our Vision</span></h3>
                <p>To be a transformed team of individual, families and communities in Kenya by the true word of God.</p>
                <h3><span style="color: #0434a2">Our Mission.</span></h3>
                <p class="fst-italic">To reach, train and send workers into harvest fields</p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3><span style="color: #0434a2"><center>Our Core Values</center></span></h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="custom-list">
                                <h5>Sound doctrine.</h5>
                                <h5>Unwavering faith.</h5>
                                <h5>Fruitfulness (multiply & increase).</h5>
                                <h5>Integrity and trustfulness.</h5>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="custom-list">
                                <h5>Selfless service.</h5>
                                <h5>Persistent prayer.</h5>
                                <h5>Upholding Christian family values.</h5>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="churches" class="churches section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Team</h2>
            <h3><span>Pastors</span></h3>
        </div>

        <div class="slider">
            <div class="slides">
                <div class="slide">
                    <div class="column">
                        <img src="assets/img/pass.jpg" class="img-fluid" alt="Rev. Micheal Muthee">
                        <center>
                            <h5>Rev. Micheal Muthee</h5>
                            <p><i>(Senior pst.)</i></center>
                        </p>
                    </div>
                    <div class="column">
                        <img src="assets/img/pass1.jpg" class="img-fluid" alt="Pst. Alice Muthee">
                        <center>
                            <h5>Pst. Alice Muthee</h5>
                            <p><i>(Senior pst.)</i></center>
                        </p>
                    </div>
                    <div class="column">
                        <img src="assets/img/pass.jpg" class="img-fluid" alt="Pst. Nickson Mutuma">
                        <center>
                            <h5>Pst. Nickson Mutuma</h5>
                            <p><i>(Resident pst H.Q.)</i></center>
                        </p>
                    </div>
                    <div class="column">
                        <img src="assets/img/pass.jpg" class="img-fluid" alt="Pst. Morris Kirimi">
                        <center>
                            <h5>Pst. Morris Kirimi</h5>
                            <p><i>(Youth pst. H.Q)</i></center>
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <div class="column">
                        <img src="assets/img/pass.jpg" class="img-fluid" alt="Pst. Amon Mugo">
                        <center>
                            <h5>Pst. Amon Mugo</h5>
                            <p><i>(Resident pst.<br>Kangethia.)</i></center>
                        </p>
                    </div>
                    <div class="column">
                        <img src="assets/img/pass.jpg" class="img-fluid" alt="Pst. Joseph Ng'ang'a">
                        <center>
                            <h5>Pst. Joseph Ng'ang'a</h5>
                            <p><i>(Resident pst.<br> Githure.)</i></center>
                        </p>
                    </div>
                    <div class="column">
                        <img src="assets/img/pass.jpg" class="img-fluid" alt="Pst. Joshua Kirema">
                        <center>
                            <h5>Pst. Joshua Kirema</h5>
                            <p><i>(Resident pst.<br> Airstrip.)</i></center>
                        </p>
                    </div>
                </div>
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>
</div>

@endsection

<style>
* {
    box-sizing: border-box;
}

.slider {
    position: relative;
    overflow: hidden;
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%; /* Each slide takes the full width */
    display: flex;
    justify-content: space-around; /* Space out columns */
}

.column {
    flex: 1 0 25%; /* Show 4 members on larger screens */
    padding: 10px;
    text-align: center;
}

img {
    width: 100%;
    height: auto;
    border-radius: 5px; /* Optional: round edges */
}

button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255, 255, 255, 0.7);
    border: none;
    cursor: pointer;
    padding: 10px;
    z-index: 1;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

@media (max-width: 768px) {
    .column {
        flex: 1 0 50%; /* Show 2 members on mobile */
    }
}
</style>

<script>
let currentSlide = 0;

function moveSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    currentSlide += direction;

    if (currentSlide < 0) {
        currentSlide = totalSlides - 1; // Go to last slide
    } else if (currentSlide >= totalSlides) {
        currentSlide = 0; // Go to first slide
    }

    const offset = -currentSlide * 100; // Calculate offset for sliding
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}

// Optional: Auto slide
setInterval(() => moveSlide(1), 5000); // Change slide every 5 seconds
</script>
