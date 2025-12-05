@extends('front.layouts.front')

@section('content')

    <!-- MOVING OFFERS BANNER -->
    <section class="float-left w-100 moving-offers-banner position-relative main-box">
        <img class="img-fluid position-absolute dot1" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="top: 50%; left: 2%; opacity: 0.1; z-index: 0; transform: translateY(-50%);">
        <img class="img-fluid position-absolute dot2" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="top: 50%; right: 2%; opacity: 0.1; z-index: 0; transform: translateY(-50%);">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="offers-marquee">
                <div class="offers-content">
                    <span class="offer-text">🎓 One Week Free Classes!</span>
                    <span class="offer-separator">•</span>
                    <span class="offer-text">✨ Money Back Guarantee!</span>
                    <span class="offer-separator">•</span>
                    <span class="offer-text">💼 24*7 Support!</span>
                    <span class="offer-separator">•</span>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN LANDING PAGE HERO SECTION -->
    <section class="float-left w-100 banner-con postion-relative main-box">
        <img class="img-fluid position-absolute objct1" alt="object" src="{{ asset('assets/front/images/home2/vector1.png') }}" style="top: 40%; left: 2%; opacity: 0.3; z-index: 0;">
        <img class="img-fluid position-absolute objct2" alt="object" src="{{ asset('assets/front/images/home2/vector2.png') }}" style="bottom: 10%; right: 5%; opacity: 0.3; z-index: 0;">
        <img class="img-fluid position-absolute dot1" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="top: 20%; right: 10%; opacity: 0.2; z-index: 0;">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="banner-content-con">
                        <span class="d-block special-text">Welcome to Eternity Classes</span>
                        <h1 class="mb-3">Your SUCCESS story <br>Begins here</h1>
                        <p class="mb-3" style="font-size: 16px; color: #718096; font-style: italic; font-weight: 500;">Indian-style learning with global readiness</p>
                        <p class="font-weight-light mb-3">Eternity brings you a personalised learning experience with timeless <b><strong>mindmaps</strong></b> & <b><strong>conceptual clarity</strong></b> that makes education enjoyable, engaging and effective. Our holistic approach creates a happy, motivating environment where students thrive academically and personally.</p>
                        <p class="font-weight-light mb-3">Each learner moves at their own accelerated pace through methods designed around their strengths and unique style of learning. With innovative timeless mindmap & conceptual clarity throughout.</p>
                        {{-- <div class="hero-features mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-check-circle text-success mr-2"></i>
                                <span>Personalised Learning Experience</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-check-circle text-success mr-2"></i>
                                <span>Holistic Approach for Academic & Personal Growth</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-check-circle text-success mr-2"></i>
                                <span>Learn at Your Own Accelerated Pace</span>
                            </div>
                        </div> --}}
                        <p class="mb-4" style="font-size: 17px; font-style: italic; color: #2d3748; font-weight: 500;">"At Eternity learning isn't just a process - It's a journey of discovery, confidence and Growth."</p>
                        <div class="light-green-btn d-inline-block mr-3">
                            <a href="{{ url('courses') }}" class="d-inline-block">Explore Courses</a>
                        </div>
                        <div class="dark-btn d-inline-block">
                            <a href="#enrollment-form" class="d-inline-block">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    {{-- <div class="banner-img-con position-relative text-center">
                        <div class="education-animated-banner-wrapper">
                            <img class="img-fluid education-animated-banner" 
                                 src="{{ asset('assets/front/images/tutor-1.png') }}" 
                                 alt="Education Animation">
                        </div>
                    </div> --}}
                    <img src="{{ asset('assets/front/images/tutor-1.png') }}" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

     
    <!-- TRANSITION CARDS SECTION -->
    <section class="float-left w-100 transition-cards-section position-relative main-box padding-top80 padding-bottom116">
        <img class="img-fluid position-absolute objct1" alt="object" src="{{ asset('assets/front/images/home2/vector3.png') }}" style="top: 15%; left: 0; opacity: 0.25; z-index: 0;">
        <img class="img-fluid position-absolute objct2" alt="object" src="{{ asset('assets/front/images/home2/vector4.png') }}" style="bottom: 15%; right: 0; opacity: 0.25; z-index: 0;">
        <img class="img-fluid position-absolute dot1" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="top: 50%; left: 5%; opacity: 0.15; z-index: 0;">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="transition-card-box card-by-you wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="transition-icon-wrapper text-center">
                            <img class="img-fluid" alt="icon" src="{{ asset('assets/front/images/by-you.png') }}" width="250" height="250">
                        </div>
                        <div class="transition-content">
                            <h5 class="font-weight-600">By You</h5>
                            <div class="transition-content-wrapper">
                                <div class="transition-content-default">
                                    <p class="mb-0">Your Course,<br>Your Schedule,<br>Your Learning style.</p>
                                </div>
                                <div class="transition-content-hover">
                                    <p class="mb-0">Design your course your way, learn on a schedule that fits your lifestyle, and progress through a Syllabus tailored to your unique learning style.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="transition-card-box card-for-you wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="transition-icon-wrapper text-center">
                            <img class="img-fluid" alt="icon" src="{{ asset('assets/front/images/for-you.png') }}" width="250" height="250">
                        </div>
                        <div class="transition-content">
                            <h5 class="font-weight-600">For You</h5>
                            <div class="transition-content-wrapper">
                                <div class="transition-content-default">
                                    <p class="mb-0">Personalised learning. and holistic growth beyond academics</p>
                                </div>
                                <div class="transition-content-hover">
                                    <p class="mb-0">Eternity is designed to deliver a personalised learning experience that fosters well-rounded development and goes far beyond academic growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="transition-card-box card-to-you wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="transition-icon-wrapper text-center">
                            <img class="img-fluid" alt="icon" src="{{ asset('assets/front/images/to-you.png') }}" width="250" height="250">
                        </div>
                        <div class="transition-content">
                            <h5 class="font-weight-600">To You</h5>
                            <div class="transition-content-wrapper">
                                <div class="transition-content-default">
                                    <p class="mb-0">Seamless Learning,<br>expert Guidance.<br>Endless possibilities.</p>
                                </div>
                                <div class="transition-content-hover">
                                    <p class="mb-0">Experience Seamless classes guided by experienced tutors, explore new horizons in education And unlock a new empowered version of yourself.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

         <!-- MERGED: US VS OTHERS & ENROLLMENT FORM SECTION -->
         <section id="enrollment-form" class="float-left w-100 merged-comparison-form-con position-relative main-box padding-top116 padding-bottom116">
            <img class="img-fluid position-absolute dot1" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}">
            <img class="img-fluid position-absolute dot2" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}">
            <div class="container-fluid px-0">
                <div class="merged-section-wrapper">
                    <div class="row no-gutters">
                        <!-- Left Side: Us vs Others Comparison -->
                        {{-- <div class="col-lg-6 comparison-side"> --}}
                        <div class="col-lg-7">
                            <div class="comparison-content-wrapper">
                                <div class="comparison-wrapper-modern">
                                    <div class="heading-title-con mb-4">
                                        <span class="d-block special-text">Why Choose Us</span>
                                        <h2 class="font-weight-600 large-font text-white">ETERNITY vs Others</h2>
                                        <p class="text-white">See why thousands of students choose Eternity Classes over other institutions</p>
                                    </div>
    
                                    <div class="table-responsive">
                                        <table class="table comparison-table-modern">
                                            <thead>
                                                <tr>                                                
                                                    <th class="us-col-modern text-center">Eternity Classes</th>
                                                    <th class="others-col-modern text-center">Others</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="us-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">✨</span>
                                                        <span class="ml-2">Money back Guarantee</span>
                                                    </td>
                                                    <td class="others-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">🚫</span>
                                                        <span class="ml-2">No Refund Assurance</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="us-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">🎓</span>
                                                        <span class="ml-2">One-week free Class</span>
                                                    </td>
                                                    <td class="others-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">⏰</span>
                                                        <span class="ml-2">No full trial</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="us-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">📊</span>
                                                        <span class="ml-2">Assessment-based Study phase</span>
                                                    </td>
                                                    <td class="others-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">👥</span>
                                                        <span class="ml-2">Uniform teaching for All.</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="us-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">💼</span>
                                                        <span class="ml-2">24x7 support for doubt solving</span>
                                                    </td>
                                                    <td class="others-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">🔇</span>
                                                        <span class="ml-2">No response support</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="us-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">👨‍🏫</span>
                                                        <span class="ml-2">Different Teachers for every subject.</span>
                                                    </td>
                                                    <td class="others-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">👤</span>
                                                        <span class="ml-2">one teacher for multiple subject.</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="us-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">📅</span>
                                                        <span class="ml-2">On Demand classes across all subjects.</span>
                                                    </td>
                                                    <td class="others-cell-modern text-left">
                                                        <span style="font-size: 20px; margin-right: 8px;">📵</span>
                                                        <span class="ml-2">No on-demand classes.</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Side: Enrollment Form -->
                        {{-- <div class="col-lg-6 form-side"> --}}
                        <div class="col-lg-5">
                            <div class="enrollment-form-content-wrapper">
                                <div class="form-card-wrapper">
                                    <div class="heading-title-con mb-4">
                                        <span class="d-block special-text">Get Started</span>
                                        <h2 class="font-weight-600 large-font">Book Free Demo Class</h2>
                                        <p>Fill out the form to start your learning journey with us</p>
                                    </div>
                                    <form class="main-form enrollment-form-modern" method="post" id="enrollmentForm" action="{{ url('/enrollment/submit') }}">
                                        @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group-modern">
                                                <label for="enroll_fname">Full Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control-modern" placeholder="Enter your full name" name="fname" id="enroll_fname" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group-modern">
                                                <label for="enroll_email">Email Address <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control-modern" placeholder="Enter your email" name="email" id="enroll_email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group-modern">
                                                <label for="enroll_phone">Phone Number <span class="text-danger">*</span></label>
                                                <input type="tel" class="form-control-modern" placeholder="Enter your phone" name="phone" id="enroll_phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group-modern">
                                                <label for="enroll_course">Select Course <span class="text-danger">*</span></label>
                                                <select class="form-control-modern" name="course" id="enroll_course" required>
                                                    <option value="">Choose a course</option>
                                                    <option value="maths">Maths</option>
                                                    <option value="science">Science</option>
                                                    <option value="english">English</option>
                                                    <option value="olympiad">Olympiad</option>
                                                    <option value="competitive-exams">Competitive Exams</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group-modern">
                                                <label for="enroll_education">Grade</label>
                                                <select class="form-control-modern" name="Grade" id="enroll_education">
                                                    <option value="">Select Grade</option>
                                                    <option value="kinder-garden">Kinder Garden</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group-modern">
                                                <label for="enroll_source">How did you hear about us?</label>
                                                <select class="form-control-modern" name="source" id="enroll_source">
                                                    <option value="">Select Option</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="linkedin">LinkedIn</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-modern mb-3">
                                        <div class="form-check-modern">
                                            <input class="form-check-input-modern" type="checkbox" id="enroll_terms" name="terms" required>
                                            <label class="form-check-label-modern" for="enroll_terms">
                                                I agree to the <a href="#" class="text-primary">Terms & Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" id="enroll_submit" class="btn-enroll-modern">
                                            <span>Book a free Demo Class</span>
                                            <i class="fa-solid fa-arrow-right ml-2"></i>
                                        </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- FEATURES SECTION 1 -->
    <section class="float-left w-100 features-section-1 position-relative main-box padding-top116 padding-bottom116">
        <img class="img-fluid position-absolute objct1" alt="object" src="{{ asset('assets/front/images/home2/vector2.png') }}" style="top: 10%; right: 5%; opacity: 0.2; z-index: 0;">
        <img class="img-fluid position-absolute objct2" alt="object" src="{{ asset('assets/front/images/home2/vector1.png') }}" style="bottom: 10%; left: 5%; opacity: 0.2; z-index: 0;">
        <img class="img-fluid position-absolute dot1" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="top: 50%; right: 10%; opacity: 0.15; z-index: 0;">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="heading-title-con text-center mb-5">
                {{-- <span class="d-block special-text">Our Approach</span> --}}
                <h2 class="font-weight-600 large-font">Our Core Values</h2>
                <p>On your journey to success</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="feature-card-box feature-card-1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="feature-icon-wrapper">
                            <img src="{{ asset('assets/front/images/complete-personality-development.png') }}" height="150" width="150" alt="Complete Personality Development" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-content-wrapper">
                                <div class="feature-content-default">
                                    <h5 class="font-weight-600 lh-sm">Complete Personality Development</h5>
                                </div>
                                <div class="feature-content-hover">
                                    <p class="mb-0">Confidence and Esteem building, Critical thinking & Problem Solving and Self-growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="feature-card-box feature-card-2 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="feature-icon-wrapper">
                            <img src="{{ asset('assets/front/images/accelerated-growth-of-your-child.png') }}" height="150" width="150" alt="Accelerated growth of your child" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-content-wrapper">
                                <div class="feature-content-default">
                                    <h5 class="font-weight-600 lh-sm">Accelerated growth of your child</h5>
                                </div>
                                <div class="feature-content-hover">
                                    <p class="mb-0">we aim to enhance the student's learning process & elevate their overall learning curve.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="feature-card-box feature-card-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="feature-icon-wrapper">
                            <img src="{{ asset('assets/front/images/personalised-learning.png') }}" height="150" width="150" alt="Personalised Learning" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-content-wrapper">
                                <div class="feature-content-default">
                                    <h5 class="font-weight-600 lh-sm">Personalised Learning</h5>
                                </div>
                                <div class="feature-content-hover">
                                    <p class="mb-0">We customize learning journey based on their performance, interests & learning needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="feature-card-box feature-card-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="feature-icon-wrapper">
                            <img src="{{ asset('assets/front/images/seamless-rescheduling.png') }}" height="150" width="150" alt="Seamless Rescheduling" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-content-wrapper">
                                <div class="feature-content-default">
                                    <h5 class="font-weight-600 lh-sm">Seamless Rescheduling</h5>
                                </div>
                                <div class="feature-content-hover">
                                    <p class="mb-0">Effortless and Hassle free Rescheduling. So that you don't miss out. Because life gets busy & we understand that.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="feature-card-box feature-card-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="feature-icon-wrapper">
                            <img src="{{ asset('assets/front/images/doubt-clearing-sessions.png') }}" height="150" width="150" alt="Doubt & Clearing Sessions" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-content-wrapper">
                                <div class="feature-content-default">
                                    <h5 class="font-weight-600 lh-sm">Doubt & Clearing Sessions</h5>
                                </div>
                                <div class="feature-content-hover">
                                    <p class="mb-0">We believe no doubt should go unanswered. Instant, personalised doubt-clearing sessions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="feature-card-box feature-card-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="feature-icon-wrapper">
                            <img src="{{ asset('assets/front/images/study-material.png') }}" height="150" width="150" alt="Study Material" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-content-wrapper">
                                <div class="feature-content-default">
                                    <h5 class="font-weight-600 lh-sm">Study Material</h5>
                                </div>
                                <div class="feature-content-hover">
                                    <p class="mb-0">Quick, sharp and effective notes for study, designed to accelerate learning according to your comfort & curriculum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="feature-card-box feature-card-7 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="feature-icon-wrapper">
                            <img src="{{ asset('assets/front/images/beyond-academic.png') }}" height="150" width="150" alt="Beyond Academic" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-content-wrapper">
                                <div class="feature-content-default">
                                    <h5 class="font-weight-600 lh-sm">Beyond Academic</h5>
                                </div>
                                <div class="feature-content-hover">
                                    <p class="mb-0">We primarily focus on developing essential life skills, real world abilities that go far beyond textbooks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="feature-card-box feature-card-8 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="feature-icon-wrapper">
                            <img src="{{ asset('assets/front/images/your-own-story.png') }}" height="150" width="150" alt="Your own Story" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-content-wrapper">
                                <div class="feature-content-default">
                                    <h5 class="font-weight-600 lh-sm">Your own Story</h5>
                                </div>
                                <div class="feature-content-hover">
                                    <p class="mb-0">We eagerly look forward to feature your success story to shine in this section.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR COURSES SECTION -->
    <section class="float-left w-100 position-relative popular-courses-con main-box padding-top116 padding-bottom116 text-center">
        <img class="img-fluid position-absolute objct1" alt="object" src="{{ asset('assets/front/images/home2/vector3.png') }}">
        <img class="img-fluid position-absolute objct2" alt="object" src="{{ asset('assets/front/images/home2/vector4.png') }}">
        <img class="img-fluid position-absolute objct3" alt="object" src="{{ asset('assets/front/images/home2/vector2.png') }}">
        <img class="img-fluid position-absolute objct4" alt="object" src="{{ asset('assets/front/images/home2/vector2.png') }}">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <h2 class="font-weight-600 large-font">Our Programs</h2>
                <p></p>

            </div>
            <div class="row courses-row-single">
                <div class="col-lg col-md-6 mb-4">
                    <div class="courses-box-modern">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="English Course" src="{{ asset('assets/front/images/english.png') }}">
                            </div>
                            <div class="course-bottom-con text-center">
                                <a href="{{ url('courses') }}" class="course-title-link">
                                    <h5 class="font-weight-600 mb-0">English</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 mb-4">
                    <div class="courses-box-modern">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="Maths Course" src="{{ asset('assets/front/images/maths.png') }}">
                            </div>
                            <div class="course-bottom-con text-center">
                                <a href="{{ url('courses') }}" class="course-title-link">
                                    <h5 class="font-weight-600 mb-0">Maths</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 mb-4">
                    <div class="courses-box-modern">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="Science Course" src="{{ asset('assets/front/images/science.png') }}">
                            </div>
                            <div class="course-bottom-con text-center">
                                <a href="{{ url('courses') }}" class="course-title-link">
                                    <h5 class="font-weight-600 mb-0">Science</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 mb-4">
                    <div class="courses-box-modern">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="Olympiad Course" src="{{ asset('assets/front/images/olympiad.png') }}">
                            </div>
                            <div class="course-bottom-con text-center">
                                <a href="{{ url('courses') }}" class="course-title-link">
                                    <h5 class="font-weight-600 mb-0">Olympiad</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 mb-4">
                    <div class="courses-box-modern">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="Competitive Exams" src="{{ asset('assets/front/images/competitve-exams.png') }}">
                            </div>
                            <div class="course-bottom-con text-center">
                                <a href="{{ url('courses') }}" class="course-title-link">
                                    <h5 class="font-weight-600 mb-0">Competitive Exams</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="light-green-btn d-inline-block mt-4">
                <a href="{{ url('courses') }}" class="d-inline-block">View Courses</a>
            </div>
        </div>
    </section>

    <!-- MORE INFO SECTION -->
    <section class="float-left w-100 more-info-section position-relative main-box padding-top116 padding-bottom116">
        <img class="img-fluid position-absolute objct1" alt="object" src="{{ asset('assets/front/images/home2/vector3.png') }}" style="top: 10%; left: 0; opacity: 0.25; z-index: 0;">
        <img class="img-fluid position-absolute objct2" alt="object" src="{{ asset('assets/front/images/home2/vector4.png') }}" style="bottom: 10%; right: 0; opacity: 0.25; z-index: 0;">
        <img class="img-fluid position-absolute objct3" alt="object" src="{{ asset('assets/front/images/home2/vector2.png') }}" style="top: 50%; right: 5%; opacity: 0.2; z-index: 0; transform: translateY(-50%);">
        <img class="img-fluid position-absolute dot1" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="top: 20%; left: 5%; opacity: 0.15; z-index: 0;">
        <img class="img-fluid position-absolute dot2" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="bottom: 20%; right: 8%; opacity: 0.15; z-index: 0;">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" style="position: relative; z-index: 1;">
            <div class="heading-title-con text-center mb-5">
                <span class="d-block special-text">More Info</span>
                <h2 class="font-weight-600 large-font">Experience Reformed Learning with Eternity</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="more-info-content text-center">
                        <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #2d3748;">
                            A platform where you unleash your fear of studies and grow a genuine love for learning. 
                            Choose smarter, learn better and trust in our quality with a transparent, <b class="text-dark"><strong>hassle-free refund 
                            policy</strong></b> that gives along with a <b class="text-dark"><strong>full week of real classes</strong></b> for every student.
                        </p>
                        <div class="row mt-5">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="info-feature-box">
                                    <div class="info-feature-icon mb-3">
                                        <i class="fa-solid fa-brain" style="font-size: 48px; color: #28a745;"></i>
                                    </div>
                                    <h5 class="font-weight-600 mb-3">Powerful Mind Maps</h5>
                                    <p class="mb-0">Visual learning tools designed to enhance understanding and retention of complex concepts.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="info-feature-box">
                                    <div class="info-feature-icon mb-3">
                                        <i class="fa-solid fa-file-alt" style="font-size: 48px; color: #28a745;"></i>
                                    </div>
                                    <h5 class="font-weight-600 mb-3">Professional Study Materials</h5>
                                    <p class="mb-0">Professionally designed notes, worksheets, and chapter summaries just for you aligned with your pace.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="info-feature-box">
                                    <div class="info-feature-icon mb-3">
                                        <i class="fa-solid fa-user-tie" style="font-size: 48px; color: #28a745;"></i>
                                    </div>
                                    <h5 class="font-weight-600 mb-3">Expert Tutors & Support</h5>
                                    <p class="mb-0">Backed by expert tutors, personalised progress plans, and diagnostic assessments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="more-info-highlight mt-5 p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 15px; border-left: 5px solid #28a745;">
                            <p class="mb-0" style="font-size: 20px; font-style: italic; color: #2d3748; font-weight: 500; line-height: 1.8;">
                                Eternity ensures deeper clarity, stronger confidence & a learning journey that truly transforms you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ADDITIONAL INFORMATION ABOUT US SECTION -->
    {{-- <section class="float-left w-100 additional-info-con position-relative main-box padding-top116 padding-bottom116">
        <img class="img-fluid position-absolute objct1" alt="object" src="{{ asset('assets/front/images/home2/vector1.png') }}" style="top: 10%; right: 3%; opacity: 0.2; z-index: 0;">
        <img class="img-fluid position-absolute objct2" alt="object" src="{{ asset('assets/front/images/home2/vector2.png') }}" style="bottom: 10%; left: 3%; opacity: 0.2; z-index: 0;">
        <img class="img-fluid position-absolute objct3" alt="object" src="{{ asset('assets/front/images/home2/vector3.png') }}" style="top: 50%; left: 0; opacity: 0.15; z-index: 0;">
        <img class="img-fluid position-absolute dot1" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="top: 25%; left: 5%; opacity: 0.1; z-index: 0;">
        <img class="img-fluid position-absolute dot2" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="bottom: 25%; right: 5%; opacity: 0.1; z-index: 0;">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" style="position: relative; z-index: 1;">
            <div class="additional-info-wrapper">
                <div class="heading-title-con text-center mb-5">
                    <span class="d-block special-text">Learn More</span>
                    <h2 class="font-weight-600 large-font">Additional Information About Us</h2>
                    <p>Discover what makes Eternity Classes the perfect choice for your educational journey</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <h5 class="font-weight-600">25+ Years Experience</h5>
                            <p>With over two decades of excellence in education, we have helped thousands of students achieve their dreams and build successful careers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <h5 class="font-weight-600">50,000+ Students</h5>
                            <p>Join our growing community of successful graduates who have transformed their lives through our comprehensive learning programs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <h5 class="font-weight-600">Award Winning</h5>
                            <p>Recognized as the best educational institution with multiple awards for excellence in teaching and student success.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <h5 class="font-weight-600">Global Recognition</h5>
                            <p>Our certificates are recognized worldwide, opening doors to international career opportunities for our students.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <h5 class="font-weight-600">Industry Partnerships</h5>
                            <p>We collaborate with leading companies to provide real-world experience and direct placement opportunities for our students.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h5 class="font-weight-600">95% Success Rate</h5>
                            <p>Our proven teaching methodology ensures that 95% of our students successfully complete their courses and achieve their goals.</p>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- MOVING REVIEWS SECTION -->
    <section class="float-left w-100 moving-reviews-con position-relative main-box padding-top116 padding-bottom116">
        <img class="img-fluid position-absolute objct1" alt="object" src="{{ asset('assets/front/images/home2/vector4.png') }}" style="top: 15%; left: 2%; opacity: 0.25; z-index: 0;">
        <img class="img-fluid position-absolute objct2" alt="object" src="{{ asset('assets/front/images/home2/vector1.png') }}" style="bottom: 15%; right: 2%; opacity: 0.25; z-index: 0;">
        <img class="img-fluid position-absolute objct3" alt="object" src="{{ asset('assets/front/images/home2/vector2.png') }}" style="top: 50%; right: 0; opacity: 0.15; z-index: 0;">
        <img class="img-fluid position-absolute dot1" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="top: 30%; right: 8%; opacity: 0.12; z-index: 0;">
        <img class="img-fluid position-absolute dot2" alt="icon" src="{{ asset('assets/front/images/home2/dots.png') }}" style="bottom: 30%; left: 8%; opacity: 0.12; z-index: 0;">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" style="position: relative; z-index: 1;">
            <div class="heading-title-con text-center mb-5">
                <span class="d-block special-text">Testimonials</span>
                <h2 class="font-weight-600 large-font">What Our Students Say</h2>
                <p>Read what our students have to say about their learning experience with us</p>
            </div>
            <div class="reviews-carousel-wrapper position-relative">
                <button class="carousel-nav-btn prev-btn" type="button" id="reviewsPrev">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <div class="reviews-carousel-container">
                    <div class="reviews-track" id="reviewsTrack">
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3" style="display: flex; gap: 5px;">
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                </div>
                                <p class="review-text" style="font-size: 15px; line-height: 1.6; color: #2d3748; margin-bottom: 20px; min-height: 100px;">"Eternity Classes transformed my career completely. The instructors are amazing and the course material is comprehensive. I got placed in a top company right after completing the course!"</p>
                                <div class="review-author" style="display: flex; align-items: center; gap: 15px;">
                                    {{-- <img src="{{ asset('assets/front/images/home2/testimonial-person1.png') }}" alt="reviewer" class="reviewer-img" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;"> --}}
                                    <div class="reviewer-info">
                                        <h6 class="mb-0" style="font-weight: 600; color: #2d3748; margin-bottom: 5px;">Sarah Khan</h6>
                                        <span class="reviewer-role" style="font-size: 14px; color: #718096;">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3" style="display: flex; gap: 5px;">
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                </div>
                                <p class="review-text" style="font-size: 15px; line-height: 1.6; color: #2d3748; margin-bottom: 20px; min-height: 100px;">"The best decision I made was joining Eternity Classes. The support from faculty and career guidance helped me land my dream job. Highly recommended!"</p>
                                <div class="review-author" style="display: flex; align-items: center; gap: 15px;">
                                    {{-- <img src="{{ asset('assets/front/images/home2/testimonial-person2.png') }}" alt="reviewer" class="reviewer-img" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;"> --}}
                                    <div class="reviewer-info">
                                        <h6 class="mb-0" style="font-weight: 600; color: #2d3748; margin-bottom: 5px;">Mukesh Chandra</h6>
                                        <span class="reviewer-role" style="font-size: 14px; color: #718096;">Data Analyst</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3" style="display: flex; gap: 5px;">
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                </div>
                                <p class="review-text" style="font-size: 15px; line-height: 1.6; color: #2d3748; margin-bottom: 20px; min-height: 100px;">"Excellent teaching methodology and practical approach. The live sessions and doubt resolution made learning so much easier. Thank you Eternity Classes!"</p>
                                <div class="review-author" style="display: flex; align-items: center; gap: 15px;">
                                    {{-- <img src="{{ asset('assets/front/images/home2/testimonial-person3.png') }}" alt="reviewer" class="reviewer-img" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;"> --}}
                                    <div class="reviewer-info">
                                        <h6 class="mb-0" style="font-weight: 600; color: #2d3748; margin-bottom: 5px;">Esha Gupta</h6>
                                        <span class="reviewer-role" style="font-size: 14px; color: #718096;">Graphic Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3" style="display: flex; gap: 5px;">
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                </div>
                                <p class="review-text" style="font-size: 15px; line-height: 1.6; color: #2d3748; margin-bottom: 20px; min-height: 100px;">"The course structure is perfect and the instructors are very knowledgeable. I learned so much in such a short time. Worth every penny!"</p>
                                <div class="review-author" style="display: flex; align-items: center; gap: 15px;">
                                    {{-- <img src="{{ asset('assets/front/images/home2/testimonial-person1.png') }}" alt="reviewer" class="reviewer-img" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;"> --}}
                                    <div class="reviewer-info">
                                        <h6 class="mb-0" style="font-weight: 600; color: #2d3748; margin-bottom: 5px;">David Kumar</h6>
                                        <span class="reviewer-role" style="font-size: 14px; color: #718096;">Software Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3" style="display: flex; gap: 5px;">
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc107; font-size: 18px;"></i>
                                </div>
                                <p class="review-text" style="font-size: 15px; line-height: 1.6; color: #2d3748; margin-bottom: 20px; min-height: 100px;">"Amazing experience! The flexible schedule allowed me to learn while working. The placement support team is outstanding and helped me get multiple job offers."</p>
                                <div class="review-author" style="display: flex; align-items: center; gap: 15px;">
                                    {{-- <img src="{{ asset('assets/front/images/home2/testimonial-person2.png') }}" alt="reviewer" class="reviewer-img" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;"> --}}
                                    <div class="reviewer-info">
                                        <h6 class="mb-0" style="font-weight: 600; color: #2d3748; margin-bottom: 5px;">Lokesh Yadav</h6>
                                        <span class="reviewer-role" style="font-size: 14px; color: #718096;">Business Analyst</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-nav-btn next-btn" type="button" id="reviewsNext">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>
@endsection

@section('js')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enrollment Form Handler
        const enrollmentForm = document.getElementById('enrollmentForm');
        if (enrollmentForm) {
            enrollmentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                const submitButton = document.getElementById('enroll_submit');
                const originalButtonText = submitButton.innerHTML;
                
                // Disable submit button and show loading
                submitButton.disabled = true;
                submitButton.innerHTML = '<span>Submitting...</span><i class="fa-solid fa-spinner fa-spin ml-2"></i>';
                
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert(data.message || 'Thank you for your enrollment! We will contact you soon.');
                        this.reset();
                    } else {
                        let errorMessage = data.message || 'An error occurred. Please try again.';
                        if (data.data && typeof data.data === 'object') {
                            const errors = Object.values(data.data).flat();
                            if (errors.length > 0) {
                                errorMessage = errors.join('\n');
                            }
                        }
                        alert(errorMessage);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again later.');
                })
                .finally(() => {
                    // Re-enable submit button
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonText;
                });
            });
        }

        // Reviews Carousel
        const reviewsTrack = document.getElementById('reviewsTrack');
        const reviewCards = document.querySelectorAll('.review-card');
        const reviewsContainer = document.querySelector('.reviews-carousel-container');
        
        if (reviewsTrack && reviewCards.length > 0 && reviewsContainer) {
            let currentReviewIndex = 0;
            const totalReviews = reviewCards.length;
            let autoSlideInterval;
            
            function getReviewsPerView() {
                const width = window.innerWidth;
                if (width >= 992) return 3;
                if (width >= 768) return 2;
                return 1;
            }

            function updateCarousel() {
                if (reviewCards.length === 0 || !reviewsTrack) return;
                
                const reviewsPerView = getReviewsPerView();
                const containerWidth = reviewsContainer.offsetWidth;
                const gap = window.innerWidth >= 768 ? 30 : 20;
                
                // Calculate card width based on container width and gaps
                let cardWidth;
                
                if (window.innerWidth >= 992) {
                    // Desktop: 3 cards visible
                    cardWidth = (containerWidth - (gap * 2)) / 3;
                } else if (window.innerWidth >= 768) {
                    // Tablet: 2 cards visible
                    cardWidth = (containerWidth - gap) / 2;
                } else {
                    // Mobile: 1 card visible
                    cardWidth = containerWidth;
                }
                
                // Set card widths dynamically
                reviewCards.forEach(card => {
                    card.style.width = `${cardWidth}px`;
                    card.style.minWidth = `${cardWidth}px`;
                    card.style.maxWidth = `${cardWidth}px`;
                });
                
                // Calculate the total width needed to move one card (card width + gap)
                const totalCardWidth = cardWidth + gap;
                
                // Ensure we don't go beyond the last card
                const maxIndex = Math.max(0, totalReviews - reviewsPerView);
                currentReviewIndex = Math.min(currentReviewIndex, maxIndex);
                currentReviewIndex = Math.max(0, currentReviewIndex);
                
                // Calculate translateX - ensure last card is fully visible
                let translateX = currentReviewIndex * totalCardWidth;
                
                // Ensure we don't scroll past the last card
                const totalTrackWidth = (cardWidth * totalReviews) + (gap * (totalReviews - 1));
                const maxTranslateX = Math.max(0, totalTrackWidth - containerWidth);
                translateX = Math.min(translateX, maxTranslateX);
                
                reviewsTrack.style.transform = `translateX(-${translateX}px)`;
            }

            const reviewsNext = document.getElementById('reviewsNext');
            const reviewsPrev = document.getElementById('reviewsPrev');

            if (reviewsNext) {
                reviewsNext.addEventListener('click', function() {
                    const reviewsPerView = getReviewsPerView();
                    const maxIndex = Math.max(0, totalReviews - reviewsPerView);
                    if (currentReviewIndex < maxIndex) {
                        currentReviewIndex++;
                    } else {
                        currentReviewIndex = 0;
                    }
                    updateCarousel();
                });
            }

            if (reviewsPrev) {
                reviewsPrev.addEventListener('click', function() {
                    const reviewsPerView = getReviewsPerView();
                    const maxIndex = Math.max(0, totalReviews - reviewsPerView);
                    if (currentReviewIndex > 0) {
                        currentReviewIndex--;
                    } else {
                        currentReviewIndex = maxIndex;
                    }
                    updateCarousel();
                });
            }

            // Auto-slide reviews
            function startAutoSlide() {
                if (autoSlideInterval) clearInterval(autoSlideInterval);
                autoSlideInterval = setInterval(function() {
                    const reviewsPerView = getReviewsPerView();
                    const maxIndex = Math.max(0, totalReviews - reviewsPerView);
                    if (currentReviewIndex < maxIndex) {
                        currentReviewIndex++;
                    } else {
                        currentReviewIndex = 0;
                    }
                    updateCarousel();
                }, 5000);
            }

            // Pause auto-slide on hover
            const carouselWrapper = document.querySelector('.reviews-carousel-wrapper');
            if (carouselWrapper) {
                carouselWrapper.addEventListener('mouseenter', function() {
                    if (autoSlideInterval) clearInterval(autoSlideInterval);
                });
                carouselWrapper.addEventListener('mouseleave', function() {
                    startAutoSlide();
                });
            }

            // Update on window resize
            let resizeTimeout;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(function() {
                    currentReviewIndex = 0;
                    updateCarousel();
                    startAutoSlide();
                }, 300);
            });

            // Initialize
            setTimeout(function() {
                updateCarousel();
                startAutoSlide();
            }, 200);
        }
    });
</script>
@endsection
