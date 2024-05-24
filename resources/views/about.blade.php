@extends('layouts.app')
@section('page', 'About')
@section('content')
    <section class="about section-bg">
        <div class="container" data-aos="fade-up">
        
            <div class="section-title">
                <h2>About</h2>
                <h3>Find Out More<br> <span>About Us</span></h3>
                
                 </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <h3><span style="color: #0434a2">Our Vision</span></h3>
                <p>To be a transformed team of individual, families and communities  in Kenya by the true word of God.</p>    
                
                <h3><span style="color: #0434a2">Our Mission.</span></h3>
                    <p class="fst-italic">
                        To reach, train and send workers into harvest fields
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    
                <h3> <span style="color: #0434a2"><center>Our Core Values</center></span></h3>
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

    

    <section id="churches" class="churches section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <h3><span>Pastors</span></h3>
            </div>
            

            <style>
* {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 14.2%;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<div class="row">
  <div class="column" style="background-color:white;">
  <img src="assets/img/pass.jpg"><center>
    <h5>Rev. Micheal Muthee</h5>
    <p><i>(Sinior pst.)</i></center></p>
  </div>
  <div class="column" style="background-color:white;">
  <img src="assets/img/pass1.jpg"><center>
    <h5>Pst. Alice Muthee</h5>
    <p><i>(Ass. Sinior pst.)</i></center></p>
  </div>
  <div class="column" style="background-color:white;">
  <img src="assets/img/pass.jpg"><center>
    <h5>Pst. Nickson Mutuma</h5>
    <p><i>(H.Q.Resident pst)</i></center></p>
  </div>
  <div class="column" style="background-color:white;">
  <img src="assets/img/pass.jpg"><center>
    <h5>Pst. Morris Kirimi</h5>
    <p><i>(H.Q Youth pst.)</i></center></p>
  </div>
  <div class="column" style="background-color:white;">
  <img src="assets/img/pass.jpg"><center>
    <h5>Pst. Amon Mugo</h5>
    <p><i>(Resident pst. <br>Kangethia.)</i></center></p>
  </div>
  <div class="column" style="background-color:white;">
  <img src="assets/img/pass.jpg"><center>
    <h5>Pst. Joseph Ng'ang'a</h2>
    <p><i>(Resident pst.<br> Githure.)</i></center></p>
  </div><div class="column" style="background-color:white;">
  <img src="assets/img/pass.jpg"><center>
    <h5>Pst. Joshua Kirema</h5>
    <p><i>(Resident pst.<br> Airstrip.)</i></center></p>
  </div>
</div>
            
    

  
    </section><!-- End Team Section -->

@endsection
