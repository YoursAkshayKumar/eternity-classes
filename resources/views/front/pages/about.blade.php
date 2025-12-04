@extends('front.layouts.front')

@section('content')
    <!-- BANNER SECTION -->
    <section class="float-left w-100 sub-banner-con postion-relative main-box text-center">
        <img alt="vector" class="triangle-shape img-fluid position-absolute" src="{{ asset('assets/front/images/triangle-vector1.png') }}">
        <img alt="vector" class="half-circle-shape img-fluid position-absolute" src="{{ asset('assets/front/images/green-circle-shape.png') }}">
        <img alt="vector" class="triangle-shape-prple img-fluid position-absolute" src="{{ asset('assets/front/images/triangle-vector2.png') }}">
        <img alt="vector" class="half-circle-shape-prple img-fluid position-absolute"
            src="{{ asset('assets/front/images/prple-circle-shape.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12 mr-auto ml-auto">
                    <div class="sub-banner-inner-con padding-top80">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="img-fluid d-inline-block left-img" alt="vector"
                                src="{{ asset('assets/front/images/dots-vector.png') }}">
                            <h1 class="d-inline-block mb-0">About Us</h1>
                            <img class="img-fluid d-inline-block right-img" alt="vector"
                                src="{{ asset('assets/front/images/dots-vector.png') }}">
                            <!-- d flex -->
                        </div>
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    <i class="fa-solid fa-angles-right"></i>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
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
    <!-- GET TO KNOW SETION -->
    <section class="float-left w-100 get-to-know-con position-relative padding-top116 padding-bottom main-box">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="get-img">
                        <img src="{{ asset('assets/front/images/get-to-know-img.png') }}" alt="image" class="img-fluid">
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="get-content">
                        <span class="d-block special-text">Eternity Classes</span>
                        <h2 class="font-weight-600">Get to Know About
                            Eternity Classes</h2>
                        <p class="">Eternity brings you a personalised learning experience that makes education enjoyable, engaging and effective. Our holistic approach creates a happy, motivating environment where students thrive academically and personally.</p>
                        <p class="mb-0">Each learner moves at their own accelerated pace through methods designed around their strengths and unique style of learning. With innovative methods, at Eternity learning isn't just a process - It's a journey of discovery, confidence and Growth.</p>
                        <!-- get content -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-12">
                    <div class="get-to-know-text">
                        <p>Experience reformed learning with Eternity - a platform where you unleash your fear of studies and grow a genuine love for learning. Choose smarter, learn and trust in our quality with a transparent, hassle free refund policy that gives along with a full week of real classes for every student.</p>
                        <p>From powerful 'MIND MAPS' to professionally designed notes, Worksheets and chapter summaries just for you. Backed by expert tutors, personalised progress plans, and diagnostic assessments, Eternity ensures deeper clarity, stronger confidence & a learning journey that truly transforms you.</p>
                        <p class="mb-0">Our approach combines Indian-style learning with global readiness, providing timeless educational methods and conceptual clarity through innovative mind maps and personalized teaching strategies.</p>

                        <!-- get to know -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            {{-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box d-flex align-items-center justify-content-around">
                        <img class="img-fluid d-inline-block" alt="icon" src="{{ asset('assets/front/images/about-icon1.png') }}">
                        <div class="counter-wraper d-inline-block text-left">
                            <h3 class="counter d-inline-block text-left">25 </h3><sup class="d-inline-block">+</sup>
                            <span class="d-block mb-0 text-left">Students</span>
                            <!-- counter -->
                        </div>

                        <!-- counter text -->
                    </div>
                    <!-- counter -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box d-flex align-items-center justify-content-around subb">
                        <img class="img-fluid d-inline-block" alt="icon" src="{{ asset('assets/front/images/about-icon2.png') }}">
                        <div class="counter-wraper d-inline-block text-left">
                            <h3 class="counter d-inline-block text-left">75 </h3><span
                                class="d-inline-block k-span">K</span><sup class="d-inline-block">+</sup>
                            <span class="d-block mb-0 text-left">Courses</span>
                            <!-- counter -->
                        </div>
                        <!-- counter text -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box d-flex align-items-center justify-content-around">
                        <img class="img-fluid d-inline-block" alt="icon" src="{{ asset('assets/front/images/about-icon3.png') }}">
                        <div class="counter-wraper d-inline-block text-left">
                            <h3 class="counter d-inline-block text-left">50 </h3><sup class="d-inline-block">+</sup>
                            <span class="d-block mb-0 text-left">Universities</span>
                            <!-- counter -->
                        </div>
                        <!-- counter text -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box d-flex align-items-center justify-content-around">
                        <img class="img-fluid d-inline-block" alt="icon" src="{{ asset('assets/front/images/about-icon4.png') }}">
                        <div class="counter-wraper d-inline-block text-left">
                            <h3 class="counter d-inline-block text-left">38 </h3><sup class="d-inline-block">+</sup>
                            <span class="d-block mb-0 text-left">Scholarships</span>
                            <!-- counter -->
                        </div>
                        <!-- counter text -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div> --}}
            <!-- container -->
        </div>
        <!-- get to know con -->
    </section>
    <!-- VIDEO SECTION -->
    {{-- <div class="float-left w-100 video-con d-table main-box text-center">
        <div class="d-table-cell align-middle text-center">
            <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="video_icon position-relative">
                            <span class="d-block special-text">consequatur</span>
                            <h2 class="text-white font-size50">Our Teaching Expertise <br>
                                Across the Market</h2>
                            <a class="popup-vimeo"
                                href="https://video-previews.elements.envatousercontent.com/27924da3-bd9e-41d6-90fb-f17ded1e5ede/watermarked_preview/watermarked_preview.mp4">
                                <div class="video_wrapper">
                                    <figure class="mb-0">
                                        <img class="thumb img-fluid text-center" style="cursor: pointer"
                                            src="{{ asset('assets/front/images/video_section_video_icon.png') }}" alt="video-icon">
                                    </figure>
                                </div>
                            </a>
                            <!-- video icon -->
                        </div>
                        <!-- col -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- d table cell -->
        </div>
        <!-- video section -->
    </div> --}}
    <!-- MEET THE LEADERSHIP TEAM SECTION -->
    {{-- <section class="float-left w-100 text-center meet-the-team-con position-relative padding-top padding-bottom">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con">
                <span class="d-block special-text">quisquam</span>
                <h2 class="font-weight-600 large-font">Meet The Leadership Team</h2>
                <p>Reudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, <br>
                    reiciendis voluptatibus maiores alias conseuatur</p>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-box">
                        <img class="img-fluid" alt="image" src="{{ asset('assets/front/images/leadership-team1.png') }}">
                        <h5>Lara Brady</h5>
                        <span class="d-block">
                            Computer, Health
                        </span>
                        <ul
                            class="list-unstyled p-0 m-0 d-flex align-items-center social-icon mb-0 justify-content-center">
                            <li><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f ml-0"></i></a>
                            </li>
                            <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="mr-0"><i
                                        class="fa-brands fa-instagram mr-0"></i></a></li>
                        </ul>
                        <!-- team box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-box">
                        <img class="img-fluid" alt="image" src="{{ asset('assets/front/images/leadership-team2.png') }}">
                        <h5>Mark Porter</h5>
                        <span class="d-block">
                            Language Arts, Math
                        </span>
                        <ul
                            class="list-unstyled p-0 m-0 d-flex align-items-center social-icon mb-0 justify-content-center">
                            <li><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f ml-0"></i></a>
                            </li>
                            <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="mr-0"><i
                                        class="fa-brands fa-instagram mr-0"></i></a></li>
                        </ul>
                        <!-- team box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-box">
                        <img class="img-fluid" alt="image" src="{{ asset('assets/front/images/leadership-team3.png') }}">
                        <h5>Angela Kwang</h5>
                        <span class="d-block">
                            Health, Life Skills
                        </span>
                        <ul
                            class="list-unstyled p-0 m-0 d-flex align-items-center social-icon mb-0 justify-content-center">
                            <li><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f ml-0"></i></a>
                            </li>
                            <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="mr-0"><i
                                        class="fa-brands fa-instagram mr-0"></i></a></li>
                        </ul>
                        <!-- team box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-box">
                        <img class="img-fluid" alt="image" src="{{ asset('assets/front/images/leadership-team4.png') }}">
                        <h5>Cherlyn Long</h5>
                        <span class="d-block">
                            Science, Accounts
                        </span>
                        <ul
                            class="list-unstyled p-0 m-0 d-flex align-items-center social-icon mb-0 justify-content-center">
                            <li><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f ml-0"></i></a>
                            </li>
                            <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="mr-0"><i
                                        class="fa-brands fa-instagram mr-0"></i></a></li>
                        </ul>
                        <!-- team box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- meet the team con -->
    </section> --}}
    <!-- HELPING STUDENTS SECTION -->
    {{-- <section
        class="float-left w-100 position-relative helping-students-con padding-top padding-bottom text-center lavender-bg">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con">
                <span class="d-block special-text">temporata</span>
                <h2 class="font-weight-600 large-font">Helping 4M+ Students Find Job</h2>
                <p>Reudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, <br>
                    reiciendis voluptatibus maiores alias conseuatur</p>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <ul
                                    class="list-unstyled p-0 m-0 text-center d-flex align-items-center justify-content-between">
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon1.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon2.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon3.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon4.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon5.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="carousel-item active">
                                <ul
                                    class="list-unstyled p-0 m-0 text-center d-flex align-items-center justify-content-between">
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon1.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon2.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon3.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon4.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon5.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="carousel-item">
                                <ul
                                    class="list-unstyled p-0 m-0 text-center d-flex align-items-center justify-content-between">
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon1.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon2.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon3.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon4.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                    <li class="position-relative d-inline-block">
                                        <figure class=""><img src="{{ asset('assets/front/images/partners-icon5.png') }}" alt="image"
                                                class="img-fluid"></figure>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- helping students con -->
    </section> --}}
@endsection

@section('js')
@endsection
