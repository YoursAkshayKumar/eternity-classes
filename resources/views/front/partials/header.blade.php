 <!-- HEADER SECTION -->
 <header class="w-100 flaot-left header-con main-box position-relative">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ url('/') }}">
        <figure class="mb-0">
          <img src="{{ asset('assets/front/images/logo/logo.png') }}" height="100" alt="logo-icon">
        </figure>
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link p-0" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-0" href="{{ url('courses') }}">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-0" href="{{ url('about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-0" href="{{ url('blogs') }}">Blogs</a>
          </li>
        </ul>
        <div class="header-contact">
          <ul class="list-unstyled mb-0">
            <li><a href="{{ url('contact') }}" class="contact-btn d-inline-block">Contact</a></li>
            <!-- list unstyled -->
          </ul>
          <!-- header contact -->
        </div>
        <!-- navbar collapse -->
      </div>
    </nav>
    <!-- container -->
  </div>
  <!-- header-con -->
</header>
<!-- BANNER SECTION -->