  <!-- FOOTER SECTION  -->
  <div class="float-left w-100 position-relative footer-con main-box padding-top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="footer-inner-content">
            <a href="{{ url('/') }}"><img class="img-fluid" alt="icon" src="{{ asset('assets/front/images/logo-footer.png') }}" height="100" width="100"></a>
            <p>Your dedicated partner in academic excellence and holistic growth. We deliver personalized, expert-guided tuition to ensure seamless learning and help every student unlock their full potential.</p>
            
            <!-- footer inner content -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="footer-inner-links-con">
            <h6 class="text-white span-heading d-block">Quick Links</h6>
            <ul class="p-0 m-0 list-unstyled">
              <li><a href="{{ url('/') }}"> Home</a></li>
              <li><a href="{{ url('about') }}"> About</a></li>
              <li><a href="{{ url('courses') }}">Courses</a></li>
              <li><a href="{{ url('blogs') }}"> Blog</a></li>
              <!-- list unstyled -->
            </ul>
            <!--  footer inner links con-->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="footer-inner-content var4 pr-0">
            <h6 class="text-white span-heading d-block">Newsletter</h6>
            <p>Sign Up to Our Newsletter to Get Latest <br>
              Updates & Services</p>
            <form id="newsletterForm" method="POST">
              @csrf
              <div class="form-group mb-0 position-relative">
                <input type="email" class="form_style" placeholder="Email address" name="email" id="newsletter_email" required>
                <button type="submit" id="newsletter_submit_btn"><i class="fa-sharp fa-solid fa-paper-plane"></i></button>
              </div>
              <div id="newsletter_message" class="mt-2" style="display: none; font-size: 14px;"></div>
            </form>
            <ul class="list-unstyled p-0 m-0 d-flex align-items-center social-icon mb-0">
              <li><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f ml-0"></i></a></li>
              <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/" class="mr-0"><i class="fa-brands fa-instagram mr-0"></i></a></li>
            </ul>
            <!-- footer inner links con -->
          </div>
          <!-- col -->
        </div>

        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <hr>
    <div class="container">
      <div class="float-left w-100 copyright-con text-center main-box">
        <p class="mb-0">© {{ date('Y') }} {{ env('APP_NAME') }}. All Rights Reserved</p>
        <!-- copyright con -->
      </div>
      <!-- container -->
    </div>
    <!-- footer-con -->
  </div>
