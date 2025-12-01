@extends('front.layouts.front')

@section('content')

<style>
    /* Modern Contact Form Styles */
    .contact-form-modern {
        background: #fff;
        border-radius: 20px;
        padding: 50px 40px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        margin-top: 40px;
    }

    .contact-form-modern .form-group {
        margin-bottom: 0;
    }

    .contact-form-modern .form-label {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 10px;
        display: block;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .contact-form-modern .form-label i {
        color: #667eea;
        margin-right: 8px;
        font-size: 12px;
    }

    .contact-form-modern .form-control-modern {
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        padding: 15px 20px 15px 50px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: #f8f9fa;
        color: #2d3748;
        height: auto;
    }

    .contact-form-modern .form-control-modern:focus {
        border-color: #667eea;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        outline: none;
    }

    .contact-form-modern .form-control-modern::placeholder {
        color: #a0aec0;
        font-size: 14px;
    }

    .contact-form-modern textarea.form-control-modern {
        padding: 15px 20px 15px 50px;
        resize: vertical;
        min-height: 150px;
    }

    .contact-form-modern .form-icon-wrapper {
        position: absolute;
        left: 18px;
        top: 42px;
        color: #667eea;
        font-size: 16px;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .contact-form-modern .form-icon-wrapper.textarea-icon {
        top: 48px;
    }

    .contact-form-modern .form-group:focus-within .form-icon-wrapper {
        color: #764ba2;
        transform: scale(1.1);
    }

    .contact-form-modern .btn-submit-modern {
        background: transparent;
        border: none;
        color: inherit;
        font-size: 16px;
        font-weight: 600;
        padding: 15px 40px;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .contact-form-modern .btn-submit-modern:hover {
        transform: translateY(-2px);
    }

    .contact-form-modern .btn-submit-modern i {
        transition: transform 0.3s ease;
    }

    .contact-form-modern .btn-submit-modern:hover i {
        transform: translateX(5px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .contact-form-modern {
            padding: 30px 20px;
        }

        .contact-form-modern .form-control-modern {
            padding: 12px 15px 12px 45px;
        }

        .contact-form-modern .form-icon-wrapper {
            left: 15px;
            top: 38px;
            font-size: 14px;
        }

        .contact-form-modern .form-icon-wrapper.textarea-icon {
            top: 44px;
        }
    }

    /* Animation for form fields */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .contact-form-modern .form-group {
        animation: slideInUp 0.5s ease forwards;
    }

    .contact-form-modern .form-group:nth-child(1) { animation-delay: 0.1s; }
    .contact-form-modern .form-group:nth-child(2) { animation-delay: 0.2s; }
    .contact-form-modern .form-group:nth-child(3) { animation-delay: 0.3s; }
    .contact-form-modern .form-group:nth-child(4) { animation-delay: 0.4s; }
    .contact-form-modern .form-group:nth-child(5) { animation-delay: 0.5s; }
</style>

    <!-- OUTER BG WRAPPER -->
    <div class="bg-outer-wrapper position-relative float-left w-100">

        <section class="float-left w-100 banner-con postion-relative main-box">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="banner-content-con">
                            <h1 class="">The Smarter <br>
                                Way To Learn <br>
                                Anything</h1>
                            <p class="font-weight-light">Omnis dolor repellendus temporibus aue <br>
                                quibus dam et aut officiis debitis.</p>
                            <div class="light-green-btn d-inline-block">
                                <a href="{{ url('contact') }}" class="d-inline-block">Contact Us</a>
                            </div>
                            <div class="dark-btn d-inline-block">
                                <a href="{{ url('about') }}" class="d-inline-block">Read More</a>
                            </div>

                            <!-- banner content con -->
                        </div>
                        <!-- col -->
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="banner-img-con position-relative text-center">
                            <img class="img-fluid position-absolute obj1" alt="object"
                                src="{{ asset('assets/front/images/home2/vector1.png') }}">
                            <img class="img-fluid position-absolute obj2" alt="object"
                                src="{{ asset('assets/front/images/home2/vector2.png') }}">
                            <img class="img-fluid position-absolute obj3" alt="object"
                                src="{{ asset('assets/front/images/home2/vector3.png') }}">
                            <img class="img-fluid position-absolute obj4" alt="object"
                                src="{{ asset('assets/front/images/home2/vector4.png') }}">
                            <img class="img-fluid position-absolute obj5" alt="object"
                                src="{{ asset('assets/front/images/home2/vector2.png') }}">
                            <img class="home-img img1" src="{{ asset('assets/front/images/home2/banner-inner-img.png') }}"
                                alt="image">
                            <img class="home-img img2"
                                src="{{ asset('assets/front/images/home2/banner-inner-img-responsive.png') }}"
                                alt="image">
                            <!-- banner image con -->
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

    {{-- <!-- ABOUT US SECTION -->
    <section class="aboutus_con position-relative float-left w-100 postion-relative main-box padding-top80 padding-bottom116">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-md-left text-center">
                    <div class="aboutus_images_wrapper position-relative">
                        <img class="img-fluid" src="{{ asset('assets/front/images/home2/advance-your-career-img.jpg') }}"
                            alt="image">
                        <img class="img-fluid position-absolute book-icon"
                            src="{{ asset('assets/front/images/home2/book-icon.png') }}" alt="image">
                        <!-- aboutus image wrapper -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="aboutus_content">
                        <span class="d-block special-text">consequatur</span>
                        <h2 class="font-weight-600 large-font">Advance Your Carrier
                            Lear Something New</h2>
                        <p class="">Harum quidem rerum facilis est et expedita distinctio
                            nam libero tempore, cum soluta nobis est eligendi
                            optio cumque nihil impedit quo minus. </p>
                        <ul class="list-unstyled p-0">
                            <li>
                                <div class="span_wrapper">
                                    <span class="counter">25</span>
                                    <sup class="plus">+</sup>
                                </div>
                                <p class="text-size-14 m-0">Students</p>
                            </li>
                            <li>
                                <div class="span_wrapper">
                                    <span class="counter">75</span><span class="d-inline-block k-text">K</span>
                                    <sup class="plus">+</sup>
                                </div>
                                <p class="text-size-14 m-0">Active Courses</p>
                            </li>
                            <li>
                                <div class="span_wrapper">
                                    <span class="counter">250</span>
                                    <sup class="plus">+</sup>
                                </div>
                                <p class="text-size-14 m-0">Free Courses</p>
                            </li>
                        </ul>
                        <div class="light-green-btn d-inline-block">
                            <a href="{{ url('about') }}" class="d-inline-block">Learn More</a>
                        </div>
                        <!-- aboutus content -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- aboutus con -->
    </section> --}}

    <!-- US VS OTHERS COMPARISON SECTION -->
    <section class="float-left w-100 us-vs-others-con position-relative main-box padding-top116 padding-bottom116">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center mb-5">
                <span class="d-block special-text">Why Choose Us</span>
                <h2 class="font-weight-600 large-font">Us vs Others</h2>
                <p>See why thousands of students choose Eternity Classes over other institutions</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="comparison-wrapper">
                        <div class="table-responsive">
                            <table class="table comparison-table">
                                <thead>
                                    <tr>
                                        <th class="feature-col">Features</th>
                                        <th class="us-col text-center">Eternity Classes</th>
                                        <th class="others-col text-center">Others</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="feature-cell font-weight-600">Expert Instructors</td>
                                        <td class="us-cell text-center">
                                            <i class="fa-solid fa-check-circle text-success"></i>
                                            <span class="ml-2">Industry Experts</span>
                                        </td>
                                        <td class="others-cell text-center">
                                            <i class="fa-solid fa-times-circle text-danger"></i>
                                            <span class="ml-2">Limited Experience</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="feature-cell font-weight-600">Placement Support</td>
                                        <td class="us-cell text-center">
                                            <i class="fa-solid fa-check-circle text-success"></i>
                                            <span class="ml-2">100% Guaranteed</span>
                                        </td>
                                        <td class="others-cell text-center">
                                            <i class="fa-solid fa-times-circle text-danger"></i>
                                            <span class="ml-2">Not Guaranteed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="feature-cell font-weight-600">Course Material</td>
                                        <td class="us-cell text-center">
                                            <i class="fa-solid fa-check-circle text-success"></i>
                                            <span class="ml-2">Free & Updated</span>
                                        </td>
                                        <td class="others-cell text-center">
                                            <i class="fa-solid fa-times-circle text-danger"></i>
                                            <span class="ml-2">Paid & Outdated</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="feature-cell font-weight-600">Live Sessions</td>
                                        <td class="us-cell text-center">
                                            <i class="fa-solid fa-check-circle text-success"></i>
                                            <span class="ml-2">Daily Live Classes</span>
                                        </td>
                                        <td class="others-cell text-center">
                                            <i class="fa-solid fa-times-circle text-danger"></i>
                                            <span class="ml-2">Recorded Only</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="feature-cell font-weight-600">Doubt Resolution</td>
                                        <td class="us-cell text-center">
                                            <i class="fa-solid fa-check-circle text-success"></i>
                                            <span class="ml-2">24/7 Support</span>
                                        </td>
                                        <td class="others-cell text-center">
                                            <i class="fa-solid fa-times-circle text-danger"></i>
                                            <span class="ml-2">Limited Hours</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="feature-cell font-weight-600">Career Guidance</td>
                                        <td class="us-cell text-center">
                                            <i class="fa-solid fa-check-circle text-success"></i>
                                            <span class="ml-2">Personalized Counseling</span>
                                        </td>
                                        <td class="others-cell text-center">
                                            <i class="fa-solid fa-times-circle text-danger"></i>
                                            <span class="ml-2">No Guidance</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="feature-cell font-weight-600">Flexible Schedule</td>
                                        <td class="us-cell text-center">
                                            <i class="fa-solid fa-check-circle text-success"></i>
                                            <span class="ml-2">Learn at Your Pace</span>
                                        </td>
                                        <td class="others-cell text-center">
                                            <i class="fa-solid fa-times-circle text-danger"></i>
                                            <span class="ml-2">Fixed Schedule</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="feature-cell font-weight-600">Affordable Pricing</td>
                                        <td class="us-cell text-center">
                                            <i class="fa-solid fa-check-circle text-success"></i>
                                            <span class="ml-2">Best Value for Money</span>
                                        </td>
                                        <td class="others-cell text-center">
                                            <i class="fa-solid fa-times-circle text-danger"></i>
                                            <span class="ml-2">Expensive</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ENROLLMENT FORM SECTION -->
    <section id="enrollment-form"
        class="float-left w-100 enrollment-form-con position-relative main-box padding-top116 padding-bottom116">
        <img class="img-fluid position-absolute dot1" alt="icon"
            src="{{ asset('assets/front/images/home2/dots.png') }}">
        <img class="img-fluid position-absolute dot2" alt="icon"
            src="{{ asset('assets/front/images/home2/dots.png') }}">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto">
                    <div class="enrollment-form-wrapper">
                        <div class="heading-title-con text-center mb-4">
                            <span class="d-block special-text">Get Started</span>
                            <h2 class="font-weight-600 large-font">Enrollment Form</h2>
                            <p>Fill out the form below to start your learning journey with us</p>
                        </div>
                        <form class="main-form enrollment-form" method="post" id="enrollmentForm">
                            <ul class="list-unstyled p-0 float-left w-100 mb-0">
                                <li class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Full Name *" name="fname" id="enroll_fname"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="Email Address *" name="email"
                                            id="enroll_email" required>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-6">
                                        <input type="tel" placeholder="Phone Number *" name="phone"
                                            id="enroll_phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="course" id="enroll_course" required
                                            style="padding: 12px 15px; border: 2px solid #e2e8f0; border-radius: 5px; width: 100%;">
                                            <option value="">Select Course *</option>
                                            <option value="web-development">Web Development</option>
                                            <option value="data-science">Data Science</option>
                                            <option value="digital-marketing">Digital Marketing</option>
                                            <option value="graphic-design">Graphic Design</option>
                                            <option value="business-management">Business Management</option>
                                            <option value="accounting">Accounting</option>
                                            <option value="english">English Language</option>
                                            <option value="technology">Technology</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-6">
                                        <select class="form-control" name="education" id="enroll_education"
                                            style="padding: 12px 15px; border: 2px solid #e2e8f0; border-radius: 5px; width: 100%;">
                                            <option value="">Education Level</option>
                                            <option value="high-school">High School</option>
                                            <option value="diploma">Diploma</option>
                                            <option value="bachelor">Bachelor's Degree</option>
                                            <option value="master">Master's Degree</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="preferred_time" id="enroll_preferred_time"
                                            style="padding: 12px 15px; border: 2px solid #e2e8f0; border-radius: 5px; width: 100%;">
                                            <option value="">Preferred Time</option>
                                            <option value="morning">Morning (9 AM - 12 PM)</option>
                                            <option value="afternoon">Afternoon (12 PM - 4 PM)</option>
                                            <option value="evening">Evening (4 PM - 8 PM)</option>
                                            <option value="weekend">Weekend</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <textarea placeholder="Message (Optional)" rows="6" name="message" id="enroll_message"></textarea>
                                </li>
                                <li>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="enroll_terms" name="terms"
                                            required>
                                        <label class="form-check-label" for="enroll_terms" style="font-size: 14px;">
                                            I agree to the <a href="#" class="text-primary">Terms & Conditions</a>
                                            and <a href="#" class="text-primary">Privacy Policy</a>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            <div class="light-green-btn text-center">
                                <button type="submit" id="enroll_submit" class="border-0 bg-transparent">Submit
                                    Enrollment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED SERVICES SECTION -->
    <section
        class="float-left w-100 position-relative featured-services-outer-con padding-top116 padding-bottom116 main-box">
        <img class="img-fluid position-absolute objct1" alt="object"
            src="{{ asset('assets/front/images/home2/vector3.png') }}">
        <img class="img-fluid position-absolute objct2" alt="object"
            src="{{ asset('assets/front/images/home2/vector4.png') }}">
        <img class="img-fluid position-absolute objct3" alt="object"
            src="{{ asset('assets/front/images/home2/vector2.png') }}">
        <img class="img-fluid position-absolute objct4" alt="object"
            src="{{ asset('assets/front/images/home2/vector2.png') }}">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text">Temporibus</span>
                <h2 class="font-weight-600 large-font text-white">Feautred Services</h2>
                <p class="text-white">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur <br>
                    sed quia non numquam eius modi incidunt</p>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="white-box d-flex align-items-center">
                        <img class="img-fluid" alt="icon"
                            src="{{ asset('assets/front/images/home2/featured-service-icon1.png') }}">
                        <div class="feature-content">
                            <h5 class="font-weight-600">Awesome Teachers</h5>
                            <p class="mb-0">Omnis dolor repellendus tepor bus autem sui
                                busdam et aut officiis debitis eiusmod temor
                                incididunt labore.</p>
                            <!-- feature content -->
                        </div>
                        <!-- white box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="white-box d-flex align-items-center">
                        <img class="img-fluid" alt="icon"
                            src="{{ asset('assets/front/images/home2/featured-service-icon2.png') }}">
                        <div class="feature-content">
                            <h5 class="font-weight-600">Global Certificate</h5>
                            <p class="mb-0">Omnis dolor repellendus tepor bus autem sui
                                busdam et aut officiis debitis eiusmod temor
                                incididunt labore.</p>
                            <!-- feature content -->
                        </div>
                        <!-- white box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="white-box d-flex align-items-center">
                        <img class="img-fluid" alt="icon"
                            src="{{ asset('assets/front/images/home2/featured-service-icon3.png') }}">
                        <div class="feature-content">
                            <h5 class="font-weight-600">Best Programme</h5>
                            <p class="mb-0">Omnis dolor repellendus tepor bus autem sui
                                busdam et aut officiis debitis eiusmod temor
                                incididunt labore.</p>
                            <!-- feature content -->
                        </div>
                        <!-- white box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="white-box d-flex align-items-center">
                        <img class="img-fluid" alt="icon"
                            src="{{ asset('assets/front/images/home2/featured-service-icon4.png') }}">
                        <div class="feature-content">
                            <h5 class="font-weight-600">Business Knowledge</h5>
                            <p class="mb-0">Omnis dolor repellendus tepor bus autem sui
                                busdam et aut officiis debitis eiusmod temor
                                incididunt labore.</p>
                            <!-- feature content -->
                        </div>
                        <!-- white box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- featured services con -->
    </section>

    <!-- FIND OUR MORE SECTION  -->
    <section class="float-left w-100 position-relative find-out-more-con padding-top116 padding-bottom116 main-box">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-xl-0 order-lg-0 order-md-0 order-1">
                    <div class="services-content-con">
                        <span class="d-block special-text">sapiente</span>
                        <h2 class="font-weight-600 large-font">Find Out More About
                            Learning Experience</h2>
                        <p class="font-weight-light">Neque porro quisquam est, qui dolorem ipsum dolor sit
                            amet, consectetursed quia non numaeius modi incidunt
                            dolor in reprehenderit in voluvelit esse cillum dolore eu
                            fugiat nulla pariatur. </p>
                        <ul class="list-unstyled p-0 listing">
                            <li class="position-relative"><i class="fa-solid fa-check mr-3"></i>Labore et dolore magnam
                                aliuam ruaerat
                                como</li>
                            <li class="position-relative"><i class="fa-solid fa-check mr-3"></i>Quam nihil molestiae
                                consequatur vel
                                illum eius </li>
                            <li class="position-relative mb-0"><i class="fa-solid fa-check mr-3"></i>Earue iosa nuae ab
                                ilvlo
                                inventore
                                veritatis labore </li>
                            <!-- list unstyled -->
                        </ul>
                        <div class="light-green-btn d-inline-block">
                            <a href="{{ url('services') }}" class="d-inline-block mt-0">Read More</a>
                        </div>
                        <!-- services content con -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <img class="" alt="image" src="{{ asset('assets/front/images/home2/ffind-out-img.png') }}">
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- find out more con -->
    </section>

    <!-- POPULAR COURSES SECTION  -->
    <section
        class="float-left w-100 position-relative main-box popular-courses-con padding-top116 padding-bottom116 text-center">
        <img class="img-fluid position-absolute objct1" alt="object"
            src="{{ asset('assets/front/images/home2/vector3.png') }}">
        <img class="img-fluid position-absolute objct2" alt="object"
            src="{{ asset('assets/front/images/home2/vector4.png') }}">
        <img class="img-fluid position-absolute objct3" alt="object"
            src="{{ asset('assets/front/images/home2/vector2.png') }}">
        <img class="img-fluid position-absolute objct4" alt="object"
            src="{{ asset('assets/front/images/home2/vector2.png') }}">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text">incidunt</span>
                <h2 class="font-weight-600 large-font">Popular Courses</h2>
                <p>Exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi <br>
                    consequatur velit esse magni dolores</p>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="courses-box">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="img"
                                    src="{{ asset('assets/front/images/home2/course-img1.jpg') }}">
                                <span class="d-block text-white position-absolute">$100</span>
                            </div>
                            <div class="course-bottom-con">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <div class="lesson">
                                        <i class="fa-solid fa-book"></i>
                                        <span class="text-size-13 text mr-0">38 Lessons</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-13 text">25 Oct, 2020</span>
                                    </div>
                                </div>
                                <h5 class="font-weight-600">English Course</h5>
                                <p class="mb-0">Quis nostrud exercitation ullamco labor
                                    nisi ut aliquip commodo.</p>
                                <!-- course inner sub -->
                            </div>
                            <!-- course bottom con -->
                        </div>
                        <hr>
                        <a href="courses.html" class="d-inline-block">Enroll now <i
                                class="fas fa-arrow-right ml-2"></i></a>

                        <!-- courses box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="courses-box">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="img"
                                    src="{{ asset('assets/front/images/home2/course-img2.jpg') }}">
                                <span class="d-block text-white position-absolute">$250</span>
                            </div>
                            <div class="course-bottom-con">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <div class="lesson">
                                        <i class="fa-solid fa-book"></i>
                                        <span class="text-size-13 text mr-0">38 Lessons</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-13 text">25 Oct, 2020</span>
                                    </div>
                                </div>
                                <h5 class="font-weight-600">Accounting</h5>
                                <p class="mb-0">Quis nostrud exercitation ullamco labor
                                    nisi ut aliquip commodo.</p>
                                <!-- course inner sub -->
                            </div>
                            <!-- course bottom con -->
                        </div>
                        <hr>
                        <a href="{{ url('courses') }}" class="d-inline-block">Enroll now <i
                                class="fas fa-arrow-right ml-2"></i></a>


                        <!-- courses box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-4 col-md-6 last-con">
                    <div class="courses-box mb-0">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="img"
                                    src="{{ asset('assets/front/images/home2/course-img3.jpg') }}" alt="image">
                                <span class="d-block text-white position-absolute">$400</span>
                            </div>
                            <div class="course-bottom-con">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <div class="lesson">
                                        <i class="fa-solid fa-book"></i>
                                        <span class="text-size-13 text mr-0">38 Lessons</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-13 text">25 Oct, 2020</span>
                                    </div>
                                </div>
                                <h5 class="font-weight-600">Technology</h5>
                                <p class="mb-0">Quis nostrud exercitation ullamco labor
                                    nisi ut aliquip commodo.</p>
                                <!-- course inner sub -->
                            </div>
                            <!-- course bottom con -->
                        </div>
                        <hr>
                        <a href="{{ url('courses') }}" class="d-inline-block">Enroll now <i
                                class="fas fa-arrow-right ml-2"></i></a>

                        <!-- courses box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <div class="light-green-btn d-inline-block">
                <a href="{{ url('contact') }}" class="d-inline-block">View all Courses</a>
            </div>
            <!-- container -->
        </div>
        <!-- popular courses con -->
    </section>
    <!-- FIND OUT HOW WE HELP STUDENTS -->
    <section
        class="float-left w-100 position-relative helping-student-video-con  padding-top116 padding-bottom116 main-box text-center">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text">voluptatem</span>
                <h2 class="font-weight-600 large-font">Find Out How We Help Students</h2>
                <p>Exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi <br>
                    consequatur velit esse magni dolores</p>
                <!-- heading title con -->
            </div>
            <div class="video-inner-wrap position-relative d-table w-100 float-left">
                <div class="d-table-cell align-middle text-center">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <img class="img-fluid position-absolute dot1" alt="icon"
                                src="{{ asset('assets/front/images/home2/dots.png') }}">
                            <img class="img-fluid position-absolute dot2" alt="icon"
                                src="{{ asset('assets/front/images/home2/dots.png') }}">
                            <div class="video_icon position-relative">
                                <a class="popup-vimeo"
                                    href="https://video-previews.elements.envatousercontent.com/h264-video-previews/79b865eb-60f3-41d7-8240-5beebaa70664/11687174.mp4">
                                    <div class="video_wrapper">
                                        <figure class="mb-0">
                                            <img class="thumb img-fluid text-center" style="cursor: pointer"
                                                src="{{ asset('assets/front/images/home2/video-icon.png') }}"
                                                alt="video-icon">
                                        </figure>
                                    </div>
                                </a>
                                <!-- video icon -->
                            </div>
                            <!-- col -->
                        </div>
                        <!-- row -->
                    </div>
                    <!-- table cell -->
                </div>
                <!-- video inner wrap -->
            </div>
            <!-- container -->
        </div>
        <!-- find how help students con -->
    </section>
    <!-- TESTIMONIAL SECTION -->
    <section
        class="electrictestimonial-con position-relative float-left w-100 padding-top116 padding-bottom116 main-box text-center">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text text-white">pariature</span>
                <h2 class="font-weight-600 large-font text-white">Success Testimonials</h2>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div id="electric_testimonial_slider" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators position-relative">
                            <li data-target="#electric_testimonial_slider" data-slide-to="0">
                                <figure class="mb-0">
                                    <img src="{{ asset('assets/front/images/home2/testimonial-person2.png') }}"
                                        alt="image" class="img-fluid">
                                </figure>
                            </li>
                            <li data-target="#electric_testimonial_slider" data-slide-to="1" class="active">
                                <figure class="mb-0">
                                    <img src="{{ asset('assets/front/images/home2/testimonial-person1.png') }}"
                                        alt="image" class="img-fluid">
                                </figure>
                            </li>
                            <li data-target="#electric_testimonial_slider" data-slide-to="2">
                                <figure class="mb-0">
                                    <img src="{{ asset('assets/front/images/home2/testimonial-person3.png') }}"
                                        alt="image" class="img-fluid">
                                </figure>
                            </li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="testimonial-box mb-0">
                                    <h3 class="text-white mb-0">“ Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum
                                        dolore eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim id est laborum ”
                                    </h3>
                                    <!-- testimonial box -->
                                </div>
                                <!-- item -->
                            </div>
                            <div class="carousel-item active">
                                <div class="testimonial-box mb-0">
                                    <h3 class="text-white mb-0">“ Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum
                                        dolore eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim id est laborum ”
                                    </h3>
                                    <!-- testimonial box -->
                                </div>
                                <!-- item -->
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-box mb-0">
                                    <h3 class="text-white mb-0">“ Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum
                                        dolore eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim id est laborum ”
                                    </h3>
                                    <!-- testimonial box -->
                                </div>
                                <!-- item -->
                            </div>
                            <!-- carousel inner -->
                        </div>
                        <div class="pagination_outer">
                            <button class="carousel-control-prev" type="button"
                                data-target="#electric_testimonial_slider" data-slide="prev">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-target="#electric_testimonial_slider" data-slide="next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWS BLOGS SECTION -->
    <section
        class="float-left w-100 position-relative news-blogs-con padding-top116 padding-bottom116 main-box text-center">
        <img class="img-fluid position-absolute objct1" alt="object"
            src="{{ asset('assets/front/images/home2/vector3.png') }}">
        <img class="img-fluid position-absolute objct2" alt="object"
            src="{{ asset('assets/front/images/home2/vector4.png') }}">
        <img class="img-fluid position-absolute objct3" alt="object"
            src="{{ asset('assets/front/images/home2/vector2.png') }}">
        <img class="img-fluid position-absolute objct4" alt="object"
            src="{{ asset('assets/front/images/home2/vector2.png') }}">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text">corporis</span>
                <h2 class="font-weight-600 large-font">Our Latest Blogs</h2>
                <p>Exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi <br>
                    consequatur velit esse magni dolores</p>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="new-blog-box overlay position-relative text-left">
                        <figure><img class="img-fluid" alt="image"
                                src="{{ asset('assets/front/images/home2/news-blog-img1.jpg') }}"></figure>
                        <div class="team-content position-absolute">
                            <span class="text-white d-block sub-text">Dolore </span>
                            <p class="text-white text-left"><a href="blog.html" class="text-white">Exercitationem ullam
                                    coror
                                    is aboriosam</a></p>
                            <i class="fa-solid fa-calendar-days mr-1 text-white"></i>
                            <span class="text-size-13 text text-white"> 25 Oct, 2020 | by admin</span>
                            <!-- team content -->
                        </div>
                        <!-- blog box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="new-blog-box overlay position-relative text-left">
                        <figure><img class="img-fluid" alt="image"
                                src="{{ asset('assets/front/images/home2/news-blog-img2.jpg') }}"></figure>
                        <div class="team-content position-absolute">
                            <span class="text-white d-block sub-text">Laboris </span>
                            <p class="text-white text-left"><a href="blog.html" class="text-white">Suscipit laboriosam,
                                    nisi ut
                                    aliquid exea</a></p>
                            <i class="fa-solid fa-calendar-days mr-1 text-white"></i>
                            <span class="text-size-13 text text-white"> 25 Oct, 2020 | by admin</span>
                            <!-- team content -->
                        </div>
                        <!-- blog box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="new-blog-box overlay position-relative text-left">
                        <figure><img class="img-fluid" alt="image"
                                src="{{ asset('assets/front/images/home2/news-blog-img3.jpg') }}"></figure>
                        <div class="team-content position-absolute">
                            <span class="text-white d-block sub-text">Venia </span>
                            <p class="text-white text-left"><a href="blog.html" class="text-white">Nihil molestiae
                                    consequatu
                                    vel illum sui</a></p>
                            <i class="fa-solid fa-calendar-days mr-1 text-white"></i>
                            <span class="text-size-13 text text-white"> 25 Oct, 2020 | by admin</span>
                            <!-- team content -->
                        </div>
                        <!-- blog box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <div class="light-green-btn d-inline-block">
                <a href="{{ url('blog') }}" class="d-inline-block">View all Blogs</a>
            </div>
            <!-- container -->
        </div>
        <!-- news blogs con -->
    </section>
    <!-- GET IN TOUCH SECTION -->
    <section class="float-left w-100 position-relative contact-us-con padding-top116 main-box text-center">
        <img class="img-fluid position-absolute dot1" alt="icon"
            src="{{ asset('assets/front/images/home2/dots.png') }}">
        <img class="img-fluid position-absolute dot2" alt="icon"
            src="{{ asset('assets/front/images/home2/dots.png') }}">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row mb-0">
                <div class="col-xl-10 col-lg-12 col-md-12 col-12 mr-auto ml-auto">
                    <div class="heading-title-con text-center">
                        <span class="d-block special-text">Get in touch</span>
                        <h2 class="font-weight-600">Contact Us Now</h2>
                        <!-- heading title con -->
                    </div>
                    <form class="contact-form-modern" method="post" id="contactpage">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group position-relative">
                                    <label for="fname" class="form-label">
                                        <i class="fa-solid fa-user"></i> Full Name
                                    </label>
                                    <input type="text" class="form-control form-control-modern" placeholder="Enter your full name" name="fname" id="fname" required>
                                    <div class="form-icon-wrapper">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group position-relative">
                                    <label for="email" class="form-label">
                                        <i class="fa-solid fa-envelope"></i> Email Address
                                    </label>
                                    <input type="email" class="form-control form-control-modern" placeholder="Enter your email address" name="email" id="email" required>
                                    <div class="form-icon-wrapper">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group position-relative">
                                    <label for="phone" class="form-label">
                                        <i class="fa-solid fa-phone"></i> Phone Number
                                    </label>
                                    <input type="tel" class="form-control form-control-modern" placeholder="Enter your phone number" name="phone" id="phone" required>
                                    <div class="form-icon-wrapper">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group position-relative">
                                    <label for="subject" class="form-label">
                                        <i class="fa-solid fa-tag"></i> Subject
                                    </label>
                                    <input type="text" class="form-control form-control-modern" placeholder="Enter message subject" name="subject" id="subject" required>
                                    <div class="form-icon-wrapper">
                                        <i class="fa-solid fa-tag"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group position-relative">
                                    <label for="msg" class="form-label">
                                        <i class="fa-solid fa-message"></i> Message
                                    </label>
                                    <textarea class="form-control form-control-modern" placeholder="Enter your message here..." rows="6" name="msg" id="msg" required></textarea>
                                    <div class="form-icon-wrapper textarea-icon">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="light-green-btn">
                                    <button type="submit" id="submit" class="btn-submit-modern">
                                        <span>Send Message</span>
                                        <i class="fa-solid fa-paper-plane ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- contact us con -->
    </section>
@endsection

@section('js')

@endsection
