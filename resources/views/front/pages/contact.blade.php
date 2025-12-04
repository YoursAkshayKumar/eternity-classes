@extends('front.layouts.front')

@section('content')


<!-- BANNER SECTION -->
<section class="float-left w-100 sub-banner-con postion-relative main-box text-center">
    <img alt="vector" class="triangle-shape img-fluid position-absolute" src="assets/images/triangle-vector1.png">
    <img alt="vector" class="half-circle-shape img-fluid position-absolute" src="assets/images/green-circle-shape.png">
    <img alt="vector" class="triangle-shape-prple img-fluid position-absolute" src="assets/images/triangle-vector2.png">
    <img alt="vector" class="half-circle-shape-prple img-fluid position-absolute"
      src="assets/images/prple-circle-shape.png">
    <div class="container">
      <div class="row">
        <div class="col-xl-7 col-lg-12 mr-auto ml-auto">
          <div class="sub-banner-inner-con padding-top80">
            <div class="d-flex align-items-center justify-content-center">
              <img class="img-fluid d-inline-block left-img" alt="vector" src="assets/images/dots-vector.png">
              <h1 class="d-inline-block mb-0">Contact</h1>
              <img class="img-fluid d-inline-block right-img" alt="vector" src="assets/images/dots-vector.png">
              <!-- d flex -->
            </div>
            <div class="breadcrumb-con d-inline-block">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                  <i class="fa-solid fa-angles-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </div>
            <!-- sub banner inner con -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- banner con -->
  </section>
  <!-- bg outer wrapper -->
</div>
<!-- LETS TALK WITH US SECTION -->
<section class="float-left w-100 lets-talk-with-us-con position-relative main-box padding-top116 padding-bottom">
  <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-7 order-xl-0 order-lg-0 order-md-0 order-1">
        <div class="heading-title-con">
          <span class="d-block special-text">Get in touch</span>
          <h2 class="font-weight-600 large-font">Let’s Talk With Us</h2>
          <!-- heading title con -->
        </div>
        <form class="main-form" method="post" id="contactpage">
          <ul class="list-unstyled p-0 float-left w-100 mb-0">
            <li>
              <input type="text" placeholder="Name" name="fname" id="fname">
            </li>
            <li>
              <input type="email" placeholder="Email" name="email" id="email">
            </li>
            <li>
              <input type="tel" placeholder="Phone" name="phone" id="phone">
            </li>
            <li>
              <input type="text" placeholder="Subject" name="subject" id="subject">
            </li>
            <li>
              <textarea placeholder="Message" rows="6" name="msg"></textarea>
            </li>
          </ul>
          <div class="light-green-btn">
            <button type="submit" id="submit">Send Now</button>
          </div>
        </form>
        <!-- col -->
      </div>
      <div class="col-lg-5 col-md-5">
        <img class="img-fluid" alt="image" src="assets/images/lets-talk-img.png">
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <div class="row con2">
      <div class="col-lg-4 col-md-6">
        <div class="counter-box d-flex align-items-center">
          <img class="img-fluid d-inline-block" alt="icon" src="assets/images/contact-feature-icon1.png">
          <div class="contact-feature-inner d-inline-block text-left">
            <h5 class="d-inline-block text-left mb-0">Email: </h5>
            <a href="mailto:help.eginary@gmail.com" class="mb-0 d-block">help.eginary@gmail.com</a>
            <!-- counter feature inner -->
          </div>
          <!-- counter-box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="counter-box d-flex align-items-center">
          <img class="img-fluid d-inline-block" alt="icon" src="assets/images/contact-feature-icon2.png">
          <div class="contact-feature-inner d-inline-block text-left">
            <h5 class="d-inline-block text-left mb-0">Location: </h5>
            <a class="mb-0 d-block" href="https://maps.app.goo.gl/LmSq3W1SdF5yQLEH7">69 Queen St, Melbourne</a>
            <!-- counter feature -->
          </div>
          <!-- counter-box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="counter-box d-flex align-items-center">
          <img class="img-fluid d-inline-block" alt="icon" src="assets/images/contact-feature-icon3.png">
          <div class="contact-feature-inner d-inline-block text-left">
            <h5 class="d-inline-block text-left mb-0">Phone: </h5>
            <a href="tel:+79281234545" class="mb-0 d-block">+7 (928)-123-45-45</a>
            <!-- counter feature inner-->
          </div>
          <!-- counter-box -->
        </div>
        <!-- col -->
      </div>
      <!-- row2 -->
    </div>
    <!-- container -->
  </div>
  <!-- lets talk with us con -->
</section>


@endsection

@section('js')
@endsection