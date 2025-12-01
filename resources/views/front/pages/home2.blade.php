@extends('front.layouts.front')

@section('content')

<style>
    /* Moving Offers Banner */
    .moving-offers-banner {
        background: linear-gradient(135deg, #14b8a6 0%, #0ea5e9 50%, #3b82f6 100%);
        padding: 12px 0;
        overflow: hidden;
    }
    .offers-marquee {
        overflow: hidden;
        white-space: nowrap;
    }
    .offers-content {
        display: inline-block;
        animation: scroll-offers 25s linear infinite;
        white-space: nowrap;
    }
    .offer-text {
        color: #fff;
        font-size: 15px;
        font-weight: 500;
        margin: 0 30px;
    }
    .offer-separator {
        color: rgba(255,255,255,0.5);
        margin: 0 10px;
    }
    @keyframes scroll-offers {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    /* Transition Cards */
    .transition-cards-section {
        background: #f8f9fa;
    }
    .transition-card-box {
        background: #fff;
        border-radius: 15px;
        padding: 40px 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid #e9ecef;
    }
    .transition-card-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }
    .transition-icon-wrapper {
        margin-bottom: 20px;
    }
    .transition-icon-wrapper img {
        max-width: 80px;
    }
    .transition-content h5 {
        color: #2d3748;
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    .transition-content p {
        color: #718096;
        line-height: 1.7;
        margin-bottom: 15px;
    }
    .transition-link {
        color: #14b8a6;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .transition-link:hover {
        color: #3b82f6;
        text-decoration: none;
    }

    /* Merged Comparison & Form Section */
    .merged-comparison-form-con {
        background: linear-gradient(135deg, #14b8a6 0%, #0ea5e9 50%, #3b82f6 100%);
        position: relative;
        overflow: hidden;
    }
    .merged-comparison-form-con::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 1;
    }
    .merged-comparison-form-con::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -5%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 1;
    }
    .merged-section-wrapper {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 15px;
        position: relative;
        z-index: 2;
    }
    .comparison-side,
    .col-lg-6:first-child {
        background: linear-gradient(135deg, rgba(20, 184, 166, 0.95) 0%, rgba(14, 165, 233, 0.95) 50%, rgba(59, 130, 246, 0.95) 100%);
        padding: 60px 50px;
        position: relative;
        min-height: 100%;
    }
    .comparison-side::before,
    .col-lg-6:first-child::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100px;
        height: 100%;
        background: linear-gradient(to left, rgba(255,255,255,0.15), transparent);
        z-index: 1;
    }
    .comparison-side::after,
    .col-lg-6:first-child::after {
        content: '';
        position: absolute;
        top: 20px;
        left: 20px;
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        z-index: 1;
    }
    .comparison-content-wrapper {
        position: relative;
        z-index: 2;
    }
    .comparison-wrapper-modern {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 30px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .comparison-table-modern {
        margin-bottom: 0;
        background: transparent;
    }
    .comparison-table-modern thead th {
        background: rgba(255, 255, 255, 0.15);
        border-bottom: 2px solid rgba(255, 255, 255, 0.3);
        padding: 18px 15px;
        font-weight: 700;
        color: #fff;
        font-size: 16px;
    }
    .comparison-table-modern tbody td {
        padding: 18px 15px;
        vertical-align: middle;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        color: #fff;
    }
    .comparison-table-modern tbody tr:hover {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
    }
    .feature-col-modern, .feature-cell-modern {
        font-weight: 600;
        color: #fff;
        width: 40%;
    }
    .us-col-modern {
        color: #10b981;
        width: 50%;
    }
    .others-col-modern {
        color: #ef4444;
        width: 50%;
    }
    .us-cell-modern i {
        font-size: 20px;
        color: #10b981;
    }
    .others-cell-modern i {
        font-size: 20px;
        color: #ef4444;
    }

    /* Form Side */
    .form-side,
    .col-lg-6:last-child {
        background: linear-gradient(135deg, #f0fdfa 0%, #e0f2fe 50%, #dbeafe 100%);
        padding: 60px 50px;
        position: relative;
    }
    .form-side::before,
    .col-lg-6:last-child::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background: linear-gradient(180deg, #14b8a6 0%, #0ea5e9 50%, #3b82f6 100%);
    }
    .enrollment-form-content-wrapper {
        max-width: 100%;
        position: relative;
        z-index: 2;
    }
    .form-card-wrapper {
        background: #fff;
        border-radius: 25px;
        padding: 50px 40px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(20, 184, 166, 0.1);
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .form-card-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, #14b8a6 0%, #0ea5e9 50%, #3b82f6 100%);
    }
    .form-card-wrapper::after {
        content: '';
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(102, 126, 234, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
    }
    .form-card-wrapper:hover {
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(102, 126, 234, 0.15);
        transform: translateY(-2px);
    }
    .form-card-wrapper .heading-title-con {
        position: relative;
        z-index: 2;
        margin-bottom: 30px;
    }
    .form-card-wrapper .heading-title-con .special-text {
        color: #14b8a6;
    }
    .form-card-wrapper .heading-title-con h2 {
        color: #2d3748;
    }
    .form-card-wrapper .heading-title-con p {
        color: #718096;
    }
    .enrollment-form-modern {
        position: relative;
        z-index: 2;
    }
    .form-group-modern {
        margin-bottom: 0;
        position: relative;
    }
    .form-group-modern label {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 10px;
        display: block;
        font-size: 14px;
        letter-spacing: 0.3px;
    }
    .form-control-modern {
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        padding: 15px 20px;
        font-size: 15px;
        transition: all 0.3s ease;
        width: 100%;
        background: #f8f9fa;
        color: #2d3748;
        font-weight: 500;
    }
    .form-control-modern:focus {
        border-color: #14b8a6;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(20, 184, 166, 0.12), 0 4px 12px rgba(20, 184, 166, 0.1);
        outline: none;
        transform: translateY(-1px);
    }
    .form-control-modern::placeholder {
        color: #a0aec0;
        font-weight: 400;
    }
    .form-control-modern:hover:not(:focus) {
        border-color: #cbd5e0;
        background: #fff;
    }
    .form-check-modern {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    .form-check-input-modern {
        margin-top: 4px;
        width: 18px;
        height: 18px;
        cursor: pointer;
    }
    .form-check-input-modern:checked {
        background-color: #14b8a6;
        border-color: #14b8a6;
    }
    .form-check-label-modern {
        font-size: 14px;
        color: #4a5568;
        line-height: 1.6;
        cursor: pointer;
    }
    .btn-enroll-modern {
        background: linear-gradient(135deg, #14b8a6 0%, #0ea5e9 50%, #3b82f6 100%);
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 18px 45px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        box-shadow: 0 10px 30px rgba(20, 184, 166, 0.35), 0 0 0 0 rgba(59, 130, 246, 0.5);
        position: relative;
        overflow: hidden;
    }
    .btn-enroll-modern::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }
    .btn-enroll-modern:hover::before {
        width: 300px;
        height: 300px;
    }
    .btn-enroll-modern:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 45px rgba(20, 184, 166, 0.45), 0 0 0 4px rgba(59, 130, 246, 0.1);
    }
    .btn-enroll-modern span,
    .btn-enroll-modern i {
        position: relative;
        z-index: 1;
    }
    .btn-enroll-modern i {
        transition: transform 0.3s ease;
    }
    .btn-enroll-modern:hover i {
        transform: translateX(5px);
    }

    /* Hero Features */
    .hero-features span {
        color: #4a5568;
        font-size: 15px;
    }

    /* Popular Courses Section */
    .popular-courses-con {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        position: relative;
        overflow: hidden;
    }
    .courses-box-modern {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .courses-box-modern:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    }
    .courses-box-modern .img-outer {
        position: relative;
        overflow: hidden;
        height: 220px;
    }
    .courses-box-modern .img-outer img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .courses-box-modern:hover .img-outer img {
        transform: scale(1.1);
    }
    .course-price {
        top: 15px;
        right: 15px;
        background: linear-gradient(135deg, #14b8a6 0%, #0ea5e9 50%, #3b82f6 100%);
        color: #fff;
        padding: 8px 15px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 16px;
        z-index: 2;
        box-shadow: 0 4px 15px rgba(20, 184, 166, 0.3);
    }
    .course-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(20, 184, 166, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s ease;
        z-index: 1;
    }
    .courses-box-modern:hover .course-overlay {
        opacity: 1;
    }
    .course-preview-btn {
        color: #fff;
        padding: 12px 30px;
        border: 2px solid #fff;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .course-preview-btn:hover {
        background: #fff;
        color: #14b8a6;
        transform: scale(1.05);
    }
    .course-bottom-con {
        padding: 25px 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    .course-meta {
        color: #718096;
        font-size: 14px;
    }
    .course-meta i {
        color: #14b8a6;
    }
    .courses-box-modern h5 {
        color: #2d3748;
        font-size: 1.4rem;
        margin-bottom: 10px;
    }
    .courses-box-modern p {
        color: #718096;
        line-height: 1.7;
        font-size: 14px;
        flex-grow: 1;
    }
    .course-instructor {
        margin-top: auto;
    }
    .instructor-img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e2e8f0;
    }
    .course-divider {
        margin: 0 20px;
        border-color: #e2e8f0;
    }
    .course-footer {
        padding: 15px 20px;
        background: #f8f9fa;
    }
    .course-enroll-link {
        color: #14b8a6;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }
    .course-enroll-link:hover {
        color: #3b82f6;
        transform: translateX(5px);
        text-decoration: none;
    }
    .course-rating {
        display: flex;
        align-items: center;
        color: #2d3748;
        font-weight: 600;
        font-size: 14px;
    }
    .course-rating i {
        font-size: 16px;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .comparison-side,
        .form-side {
            padding: 40px 30px;
        }
        .merged-section-wrapper {
            padding: 0 10px;
        }
        .form-card-wrapper {
            padding: 40px 30px;
        }
    }
    @media (max-width: 768px) {
        .comparison-side,
        .form-side {
            padding: 30px 20px;
        }
        .comparison-wrapper-modern {
            padding: 20px 15px;
            overflow-x: auto;
        }
        .comparison-table-modern {
            min-width: 600px;
        }
        .form-card-wrapper {
            padding: 35px 25px;
            border-radius: 20px;
        }
        .offer-text {
            font-size: 13px;
            margin: 0 15px;
        }
        .courses-box-modern {
            margin-bottom: 30px;
        }
        .course-bottom-con {
            padding: 20px 15px;
        }
        .course-meta {
            flex-direction: column;
            gap: 10px;
        }
        .course-meta .lesson {
            margin-right: 0;
        }
        .course-footer {
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }
        .form-group-modern {
            margin-bottom: 1rem;
        }
        .form-control-modern {
            padding: 14px 18px;
        }
        .btn-enroll-modern {
            width: 100%;
            justify-content: center;
            padding: 16px 30px;
        }
    }
</style>

    <!-- MOVING OFFERS BANNER -->
    <section class="float-left w-100 moving-offers-banner position-relative main-box">
        <div class="container">
            <div class="offers-marquee">
                <div class="offers-content">
                    <span class="offer-text">🎓 Special Offer: Get 50% Off on All Courses - Limited Time Only!</span>
                    <span class="offer-separator">•</span>
                    <span class="offer-text">✨ New Batch Starting Soon - Enroll Now & Get Free Study Materials!</span>
                    <span class="offer-separator">•</span>
                    <span class="offer-text">🏆 Join 10,000+ Successful Students - Start Your Journey Today!</span>
                    <span class="offer-separator">•</span>
                    <span class="offer-text">💼 Career Guidance Included - Transform Your Future Now!</span>
                    <span class="offer-separator">•</span>
                    <span class="offer-text">🎁 Early Bird Discount: Save Up to 60% - Don't Miss Out!</span>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN LANDING PAGE HERO SECTION -->
    <section class="float-left w-100 banner-con postion-relative main-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="banner-content-con">
                        <span class="d-block special-text">Welcome to Eternity Classes</span>
                        <h1 class="">Transform Your Future <br>
                            Through Quality <br>
                            Education</h1>
                        <p class="font-weight-light">Join thousands of successful students who have achieved their career goals through our comprehensive learning programs. Experience world-class education designed to empower your future.</p>
                        <div class="hero-features mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-check-circle text-success mr-2"></i>
                                <span>Expert Instructors with Industry Experience</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-check-circle text-success mr-2"></i>
                                <span>100% Placement Support & Career Guidance</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-check-circle text-success mr-2"></i>
                                <span>Flexible Learning Options - Online & Offline</span>
                            </div>
                        </div>
                        <div class="light-green-btn d-inline-block mr-3">
                            <a href="{{ url('courses') }}" class="d-inline-block">Explore Courses</a>
                        </div>
                        <div class="dark-btn d-inline-block">
                            <a href="#enrollment-form" class="d-inline-block">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="banner-img-con position-relative text-center">
                        <img class="img-fluid position-absolute obj1" alt="object" src="{{ asset('assets/front/images/home2/vector1.png') }}">
                        <img class="img-fluid position-absolute obj2" alt="object" src="{{ asset('assets/front/images/home2/vector2.png') }}">
                        <img class="img-fluid position-absolute obj3" alt="object" src="{{ asset('assets/front/images/home2/vector3.png') }}">
                        <img class="img-fluid position-absolute obj4" alt="object" src="{{ asset('assets/front/images/home2/vector4.png') }}">
                        <img class="home-img img1" src="{{ asset('assets/front/images/home2/banner-inner-img.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSITION CARDS SECTION -->
    <section class="float-left w-100 transition-cards-section position-relative main-box padding-top80 padding-bottom116">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="transition-card-box wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="transition-icon-wrapper">
                            <img class="img-fluid" alt="icon" src="{{ asset('assets/front/images/home2/featured-service-icon1.png') }}">
                        </div>
                        <div class="transition-content">
                            <h5 class="font-weight-600">Expert Learning</h5>
                            <p class="mb-0">Learn from industry experts with years of real-world experience. Our instructors bring practical knowledge to every lesson.</p>
                            <a href="{{ url('courses') }}" class="transition-link mt-3 d-inline-block">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="transition-card-box wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="transition-icon-wrapper">
                            <img class="img-fluid" alt="icon" src="{{ asset('assets/front/images/home2/featured-service-icon2.png') }}">
                        </div>
                        <div class="transition-content">
                            <h5 class="font-weight-600">Certified Programs</h5>
                            <p class="mb-0">Get industry-recognized certificates that boost your career. Our programs are designed to meet global standards.</p>
                            <a href="{{ url('courses') }}" class="transition-link mt-3 d-inline-block">Explore <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="transition-card-box wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="transition-icon-wrapper">
                            <img class="img-fluid" alt="icon" src="{{ asset('assets/front/images/home2/featured-service-icon3.png') }}">
                        </div>
                        <div class="transition-content">
                            <h5 class="font-weight-600">Community Support</h5>
                            <p class="mb-0">Join a vibrant community of learners. Get support, share knowledge, and grow together with peers and mentors.</p>
                            <a href="{{ url('about') }}" class="transition-link mt-3 d-inline-block">Join Now <i class="fas fa-arrow-right ml-2"></i></a>
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
                <span class="d-block special-text">incidunt</span>
                <h2 class="font-weight-600 large-font">Popular Courses</h2>
                <p>Explore our comprehensive range of courses designed to help you achieve your career goals. <br>
                    Choose from industry-leading programs taught by expert instructors.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="courses-box-modern">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="img" src="{{ asset('assets/front/images/home2/course-img1.jpg') }}">
                                <span class="course-price position-absolute">$100</span>
                                <div class="course-overlay">
                                    <a href="{{ url('courses') }}" class="course-preview-btn">
                                        <i class="fa-solid fa-eye"></i> Preview
                                    </a>
                                </div>
                            </div>
                            <div class="course-bottom-con">
                                <div class="course-meta d-flex justify-content-center align-items-center mb-3">
                                    <div class="lesson d-flex align-items-center mr-4">
                                        <i class="fa-solid fa-book mr-2"></i>
                                        <span class="text-size-13">38 Lessons</span>
                                    </div>
                                    <div class="date d-flex align-items-center">
                                        <i class="fa-solid fa-calendar-days mr-2"></i>
                                        <span class="text-size-13">25 Oct, 2024</span>
                                    </div>
                                </div>
                                <h5 class="font-weight-600 mb-2">English Course</h5>
                                <p class="mb-3">Master the English language with our comprehensive course designed for all skill levels. Improve your communication skills and boost your career.</p>
                                <div class="course-instructor mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/front/images/home2/testimonial-person1.png') }}" alt="instructor" class="instructor-img">
                                        <span class="ml-2 text-size-13">By John Smith</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="course-divider">
                        <div class="course-footer d-flex justify-content-between align-items-center">
                            <a href="{{ url('courses') }}" class="course-enroll-link">
                                Enroll now <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="course-rating">
                                <i class="fa-solid fa-star text-warning"></i>
                                <span class="ml-1">4.8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="courses-box-modern">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="img" src="{{ asset('assets/front/images/home2/course-img2.jpg') }}">
                                <span class="course-price position-absolute">$250</span>
                                <div class="course-overlay">
                                    <a href="{{ url('courses') }}" class="course-preview-btn">
                                        <i class="fa-solid fa-eye"></i> Preview
                                    </a>
                                </div>
                            </div>
                            <div class="course-bottom-con">
                                <div class="course-meta d-flex justify-content-center align-items-center mb-3">
                                    <div class="lesson d-flex align-items-center mr-4">
                                        <i class="fa-solid fa-book mr-2"></i>
                                        <span class="text-size-13">42 Lessons</span>
                                    </div>
                                    <div class="date d-flex align-items-center">
                                        <i class="fa-solid fa-calendar-days mr-2"></i>
                                        <span class="text-size-13">15 Nov, 2024</span>
                                    </div>
                                </div>
                                <h5 class="font-weight-600 mb-2">Accounting</h5>
                                <p class="mb-3">Learn accounting principles and financial management from industry experts. Perfect for beginners and professionals looking to advance their skills.</p>
                                <div class="course-instructor mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/front/images/home2/testimonial-person2.png') }}" alt="instructor" class="instructor-img">
                                        <span class="ml-2 text-size-13">By Sarah Johnson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="course-divider">
                        <div class="course-footer d-flex justify-content-between align-items-center">
                            <a href="{{ url('courses') }}" class="course-enroll-link">
                                Enroll now <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="course-rating">
                                <i class="fa-solid fa-star text-warning"></i>
                                <span class="ml-1">4.9</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="courses-box-modern">
                        <div class="course-inner-sub">
                            <div class="img-outer position-relative">
                                <img class="img-fluid" alt="img" src="{{ asset('assets/front/images/home2/course-img3.jpg') }}">
                                <span class="course-price position-absolute">$400</span>
                                <div class="course-overlay">
                                    <a href="{{ url('courses') }}" class="course-preview-btn">
                                        <i class="fa-solid fa-eye"></i> Preview
                                    </a>
                                </div>
                            </div>
                            <div class="course-bottom-con">
                                <div class="course-meta d-flex justify-content-center align-items-center mb-3">
                                    <div class="lesson d-flex align-items-center mr-4">
                                        <i class="fa-solid fa-book mr-2"></i>
                                        <span class="text-size-13">50 Lessons</span>
                                    </div>
                                    <div class="date d-flex align-items-center">
                                        <i class="fa-solid fa-calendar-days mr-2"></i>
                                        <span class="text-size-13">1 Dec, 2024</span>
                                    </div>
                                </div>
                                <h5 class="font-weight-600 mb-2">Technology</h5>
                                <p class="mb-3">Stay ahead with cutting-edge technology courses. Learn programming, web development, and modern tech skills from industry professionals.</p>
                                <div class="course-instructor mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/front/images/home2/testimonial-person3.png') }}" alt="instructor" class="instructor-img">
                                        <span class="ml-2 text-size-13">By Mike Davis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="course-divider">
                        <div class="course-footer d-flex justify-content-between align-items-center">
                            <a href="{{ url('courses') }}" class="course-enroll-link">
                                Enroll now <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="course-rating">
                                <i class="fa-solid fa-star text-warning"></i>
                                <span class="ml-1">5.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="light-green-btn d-inline-block mt-4">
                <a href="{{ url('courses') }}" class="d-inline-block">View all Courses</a>
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
                    <div class="col-lg-6">
                        <div class="comparison-content-wrapper">
                            <div class="comparison-wrapper-modern">
                                <div class="heading-title-con mb-4">
                                    <span class="d-block special-text">Why Choose Us</span>
                                    <h2 class="font-weight-600 large-font text-white">Us vs Others</h2>
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
                                                
                                                <td class="us-cell-modern text-center">
                                                    <i class="fa-solid fa-check-circle"></i>
                                                    <span class="ml-2">Industry Experts</span>
                                                </td>
                                                <td class="others-cell-modern text-center">
                                                    <i class="fa-solid fa-times-circle"></i>
                                                    <span class="ml-2">Limited Experience</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="us-cell-modern text-center">
                                                    <i class="fa-solid fa-check-circle"></i>
                                                    <span class="ml-2">100% Guaranteed</span>
                                                </td>
                                                <td class="others-cell-modern text-center">
                                                    <i class="fa-solid fa-times-circle"></i>
                                                    <span class="ml-2">Not Guaranteed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                               
                                                <td class="us-cell-modern text-center">
                                                    <i class="fa-solid fa-check-circle"></i>
                                                    <span class="ml-2">Free & Updated</span>
                                                </td>
                                                <td class="others-cell-modern text-center">
                                                    <i class="fa-solid fa-times-circle"></i>
                                                    <span class="ml-2">Paid & Outdated</span>
                                                </td>
                                            </tr>
                                            <tr>
                                              
                                                <td class="us-cell-modern text-center">
                                                    <i class="fa-solid fa-check-circle"></i>
                                                    <span class="ml-2">Daily Live Classes</span>
                                                </td>
                                                <td class="others-cell-modern text-center">
                                                    <i class="fa-solid fa-times-circle"></i>
                                                    <span class="ml-2">Recorded Only</span>
                                                </td>
                                            </tr>
                                            <tr>
                                               
                                                <td class="us-cell-modern text-center">
                                                    <i class="fa-solid fa-check-circle"></i>
                                                    <span class="ml-2">24/7 Support</span>
                                                </td>
                                                <td class="others-cell-modern text-center">
                                                    <i class="fa-solid fa-times-circle"></i>
                                                    <span class="ml-2">Limited Hours</span>
                                                </td>
                                            </tr>
                                            <tr>
                                               
                                                <td class="us-cell-modern text-center">
                                                    <i class="fa-solid fa-check-circle"></i>
                                                    <span class="ml-2">Personalized Counseling</span>
                                                </td>
                                                <td class="others-cell-modern text-center">
                                                    <i class="fa-solid fa-times-circle"></i>
                                                    <span class="ml-2">No Guidance</span>
                                                </td>
                                            </tr>
                                            <tr>
                                               
                                                <td class="us-cell-modern text-center">
                                                    <i class="fa-solid fa-check-circle"></i>
                                                    <span class="ml-2">Learn at Your Pace</span>
                                                </td>
                                                <td class="others-cell-modern text-center">
                                                    <i class="fa-solid fa-times-circle"></i>
                                                    <span class="ml-2">Fixed Schedule</span>
                                                </td>
                                            </tr>
                                            <tr>
                                              
                                                <td class="us-cell-modern text-center">
                                                    <i class="fa-solid fa-check-circle"></i>
                                                    <span class="ml-2">Best Value for Money</span>
                                                </td>
                                                <td class="others-cell-modern text-center">
                                                    <i class="fa-solid fa-times-circle"></i>
                                                    <span class="ml-2">Expensive</span>
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
                    <div class="col-lg-6">
                        <div class="enrollment-form-content-wrapper">
                            <div class="form-card-wrapper">
                                <div class="heading-title-con mb-4">
                                    <span class="d-block special-text">Get Started</span>
                                    <h2 class="font-weight-600 large-font">Enroll Now</h2>
                                    <p>Fill out the form to start your learning journey with us</p>
                                </div>
                                <form class="main-form enrollment-form-modern" method="post" id="enrollmentForm">
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
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group-modern">
                                            <label for="enroll_education">Grade</label>
                                            <select class="form-control-modern" name="Grade" id="enroll_education">
                                                <option value="">Select Grade</option>
                                                <option value="high-school">High School</option>
                                                <option value="diploma">Diploma</option>
                                                <option value="bachelor">Bachelor's Degree</option>
                                                <option value="master">Master's Degree</option>
                                                <option value="other">Other</option>
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
                                    <button type="submit" id="enroll_submit" class="btn-enroll-modern">
                                        <span>Submit Enrollment</span>
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

    <!-- ADDITIONAL INFORMATION ABOUT US SECTION -->
    <section class="float-left w-100 additional-info-con position-relative main-box padding-top116 padding-bottom116">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
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
    </section>

    <!-- MOVING REVIEWS SECTION -->
    <section class="float-left w-100 moving-reviews-con position-relative main-box padding-top116 padding-bottom116">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
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
                                <div class="review-stars mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                <p class="review-text">"Eternity Classes transformed my career completely. The instructors are amazing and the course material is comprehensive. I got placed in a top company right after completing the course!"</p>
                                <div class="review-author">
                                    <img src="{{ asset('assets/front/images/home2/testimonial-person1.png') }}" alt="reviewer" class="reviewer-img">
                                    <div class="reviewer-info">
                                        <h6 class="mb-0">Sarah Johnson</h6>
                                        <span class="reviewer-role">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                <p class="review-text">"The best decision I made was joining Eternity Classes. The support from faculty and career guidance helped me land my dream job. Highly recommended!"</p>
                                <div class="review-author">
                                    <img src="{{ asset('assets/front/images/home2/testimonial-person2.png') }}" alt="reviewer" class="reviewer-img">
                                    <div class="reviewer-info">
                                        <h6 class="mb-0">Michael Chen</h6>
                                        <span class="reviewer-role">Data Analyst</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                <p class="review-text">"Excellent teaching methodology and practical approach. The live sessions and doubt resolution made learning so much easier. Thank you Eternity Classes!"</p>
                                <div class="review-author">
                                    <img src="{{ asset('assets/front/images/home2/testimonial-person3.png') }}" alt="reviewer" class="reviewer-img">
                                    <div class="reviewer-info">
                                        <h6 class="mb-0">Emily Rodriguez</h6>
                                        <span class="reviewer-role">Graphic Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                <p class="review-text">"The course structure is perfect and the instructors are very knowledgeable. I learned so much in such a short time. Worth every penny!"</p>
                                <div class="review-author">
                                    <img src="{{ asset('assets/front/images/home2/testimonial-person1.png') }}" alt="reviewer" class="reviewer-img">
                                    <div class="reviewer-info">
                                        <h6 class="mb-0">David Kumar</h6>
                                        <span class="reviewer-role">Software Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-content">
                                <div class="review-stars mb-3">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                                <p class="review-text">"Amazing experience! The flexible schedule allowed me to learn while working. The placement support team is outstanding and helped me get multiple job offers."</p>
                                <div class="review-author">
                                    <img src="{{ asset('assets/front/images/home2/testimonial-person2.png') }}" alt="reviewer" class="reviewer-img">
                                    <div class="reviewer-info">
                                        <h6 class="mb-0">Lisa Anderson</h6>
                                        <span class="reviewer-role">Business Analyst</span>
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
<style>
    /* Additional Information Section */
    .additional-info-con {
        background: #fff;
    }
    .info-card {
        background: #fff;
        border-radius: 15px;
        padding: 35px 25px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid #e9ecef;
    }
    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        border-color: #14b8a6;
    }
    .info-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #14b8a6 0%, #0ea5e9 50%, #3b82f6 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        transition: all 0.3s ease;
    }
    .info-card:hover .info-icon {
        transform: scale(1.1) rotate(5deg);
    }
    .info-icon i {
        font-size: 35px;
        color: #fff;
    }
    .info-card h5 {
        color: #2d3748;
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    .info-card p {
        color: #718096;
        line-height: 1.7;
        margin-bottom: 0;
        font-size: 14px;
    }

    /* Moving Reviews Section */
    .moving-reviews-con {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        position: relative;
    }
    .reviews-carousel-wrapper {
        position: relative;
        padding: 0 70px;
        max-width: 1400px;
        margin: 0 auto;
    }
    .reviews-carousel-container {
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    .reviews-track {
        display: flex;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        gap: 30px;
        will-change: transform;
        width: fit-content;
    }
    .review-card {
        flex: 0 0 calc(33.333% - 20px);
        min-width: calc(33.333% - 20px);
        max-width: calc(33.333% - 20px);
        width: calc(33.333% - 20px);
        flex-shrink: 0;
        background: #fff;
        border-radius: 20px;
        padding: 35px 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    .review-stars i {
        font-size: 18px;
        margin-right: 3px;
    }
    .review-text {
        color: #4a5568;
        line-height: 1.8;
        font-size: 15px;
        margin-bottom: 25px;
        font-style: italic;
    }
    .review-author {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    .reviewer-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #e2e8f0;
    }
    .reviewer-info h6 {
        color: #2d3748;
        font-weight: 600;
        font-size: 16px;
    }
    .reviewer-role {
        color: #718096;
        font-size: 13px;
    }
    .carousel-nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background: #fff;
        border: 2px solid #14b8a6;
        border-radius: 50%;
        color: #14b8a6;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .carousel-nav-btn:hover {
        background: #14b8a6;
        color: #fff;
        transform: translateY(-50%) scale(1.1);
    }
    .prev-btn {
        left: 0;
    }
    .next-btn {
        right: 0;
    }

    /* Responsive for Reviews */
    @media (max-width: 992px) {
        .review-card {
            flex: 0 0 calc(50% - 15px);
            min-width: calc(50% - 15px);
            max-width: calc(50% - 15px);
            width: calc(50% - 15px);
        }
        .reviews-carousel-wrapper {
            padding: 0 60px;
        }
    }
    @media (max-width: 768px) {
        .review-card {
            flex: 0 0 100%;
            min-width: 100%;
            max-width: 100%;
            width: 100%;
        }
        .reviews-carousel-wrapper {
            padding: 0 50px;
        }
        .carousel-nav-btn {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }
        .info-card {
            padding: 25px 20px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enrollment Form Handler
        const enrollmentForm = document.getElementById('enrollmentForm');
        if (enrollmentForm) {
            enrollmentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your enrollment! We will contact you soon.');
                this.reset();
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
                
                // Calculate card width including gap
                const gap = 30;
                const cardWidthWithGap = (containerWidth - (gap * (reviewsPerView - 1))) / reviewsPerView;
                const totalCardWidth = cardWidthWithGap + gap;
                
                const maxIndex = Math.max(0, totalReviews - reviewsPerView);
                currentReviewIndex = Math.min(currentReviewIndex, maxIndex);
                currentReviewIndex = Math.max(0, currentReviewIndex);
                
                // Calculate translateX based on card width
                const translateX = currentReviewIndex * totalCardWidth;
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
