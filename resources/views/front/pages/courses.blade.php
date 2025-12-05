@extends('front.layouts.front')

@section('content')
    <!-- BANNER SECTION -->
    <section class="float-left w-100 sub-banner-con postion-relative main-box text-center">
        <img alt="vector" class="triangle-shape img-fluid position-absolute"
            src="{{ asset('assets/front/images//triangle-vector1.png') }}">
        <img alt="vector" class="half-circle-shape img-fluid position-absolute"
            src="{{ asset('assets/front/images//green-circle-shape.png') }}">
        <img alt="vector" class="triangle-shape-prple img-fluid position-absolute"
            src="{{ asset('assets/front/images//triangle-vector2.png') }}">
        <img alt="vector" class="half-circle-shape-prple img-fluid position-absolute"
            src="{{ asset('assets/front/images//prple-circle-shape.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12 mr-auto ml-auto">
                    <div class="sub-banner-inner-con padding-top80">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="img-fluid d-inline-block left-img" alt="vector"
                                src="{{ asset('assets/front/images//dots-vector.png') }}">
                            <h1 class="d-inline-block mb-0">Courses</h1>
                            <img class="img-fluid d-inline-block right-img" alt="vector"
                                src="{{ asset('assets/front/images//dots-vector.png') }}">
                            <!-- d flex -->
                        </div>
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <i class="fa-solid fa-angles-right"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
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
    <!-- PROGRAMS OVERVIEW SECTION -->
    <section class="float-left w-100 position-relative main-box courses-tabs-con padding-top116 padding-bottom116 main-box">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h2 class="font-weight-600 mb-3">Eternity Classes — Expanded Programs Overview</h2>
                        <p class="lead">An enriched academic structure with detailed subject-wise progression while
                            keeping your original approach intact. Olympiad and Competition sections remain unchanged as
                            requested.</p>
                    </div>
                </div>
            </div>

            <!-- tabs  -->
            <div class="tabs-box tabs-options">
                <ul class="nav nav-tabs justify-content-center align-items-center">
                    <li><a class="active" data-toggle="tab" href="#all">All</a></li>
                    <li><a data-toggle="tab" href="#mathematics">Mathematics</a></li>
                    <li><a data-toggle="tab" href="#science">Science</a></li>
                    <li><a data-toggle="tab" href="#english">English</a></li>
                    <li><a data-toggle="tab" href="#olympiads">Olympiads</a></li>
                    <li><a data-toggle="tab" href="#competitive">Competitive Exams</a></li>
                </ul>
                <div class="tab-content">
                    <!-- All Tab -->
                    <div id="all" class="tab-pane fade in active show">
                        <!-- Mathematics Program -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #f8f9fa; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-primary">Mathematics Program (Class 1–10)</h3>
                                    <p class="mb-4">Our Mathematics program builds a strong conceptual foundation through
                                        visual learning, application-driven practice, and structured progression. The
                                        approach remains the same, but with deeper clarity on milestones and learning
                                        outcomes.</p>

                                    <h5 class="font-weight-600 mb-3">What Students Learn</h5>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-3"><strong>Foundational Maths (Class 1–5):</strong>
                                        </h6>

                                        <!-- Topics Grid -->
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Numbers</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Operations</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Word Problems</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Measurement</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Early Geometry</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-project-diagram text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Patterns</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-square text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Shapes</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-chart-bar text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Data Interpretation
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="mb-3">Students build number sense with activity-based learning.</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Place value mastery,
                                                mental maths, introduction to fractions & decimals.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Real-life applications
                                                through money, time, measurement and basic data charts.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Visual models and
                                                manipulatives to build conceptual confidence.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Middle School Maths (Class 6–8):</strong>
                                        </h6>
                                        <p>All the Foundational Maths+</p>
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Algebra foundations
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Integers</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Linear Equations</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Ratio & Proportion</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Mensuration</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-project-diagram text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Geometry</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-square text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Practical Probability
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Transition from
                                                arithmetic to algebraic thinking using step-by-step reasoning.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Deep dive into geometry
                                                proofs, coordinate geometry and data handling.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Complex word problems
                                                that build competition-level analytical skills.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Advanced Mathematics (Class
                                                9–10):</strong></h6>
                                        <p>All the topics till Middle School Maths+</p>
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Polynomials</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Quadratic Equations
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Trigonometry</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Statistics &
                                                            Probability</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Advanced Graphs</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Strong competitive base
                                                development with higher-order reasoning.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Strategic
                                                problem-solving for exam excellence and future olympiad readiness.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Guided practice using
                                                structured worksheets & chapter-wise Mind Maps.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Science Program -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #f8f9fa; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-primary">Science Program (Class 1–10)</h3>
                                    <p class="mb-4">A highly visual and application-driven science curriculum built
                                        around curiosity, experimentation and real-world relevance. The structure remains
                                        unchanged; clarity and depth have been enhanced.</p>

                                    <h5 class="font-weight-600 mb-3">What Students Learn</h5>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Primary Science (Class 1–5):</strong></h6>
                                        <!-- Topics Grid -->
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Plants</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Animals</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Human Body Systems</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">States of matter</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Force</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-project-diagram text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Light</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-square text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Sound</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-chart-bar text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Air
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-chart-bar text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Water
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-chart-bar text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Food & environment
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Hands-on experiments
                                                (home-safe) to build observation skills.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Simple scientific
                                                reasoning and everyday science applications.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Reading-based science
                                                stories to create curiosity.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Integrated Science (Class 6–8): Physics,
                                                Chemistry, Biology fundamentals.</strong></h6>
                                        <p>All the topics till Primary Science+</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Physics:</strong> Motion, force, simple machines, electricity,
                                                magnetism, energy transformation.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Chemistry:</strong> Atoms & molecules, chemical reactions, acids &
                                                bases, separation techniques.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Biology:</strong> Cells, tissues, reproduction, ecosystems, health &
                                                nutrition.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Structured lab
                                                worksheets to enhance scientific thinking.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Senior Science (Class 9–10): Deeper
                                                Physics, Chemistry & Biology</strong></h6>
                                        <p>All the topics till Middle School Science+</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Physics:</strong> Motion laws, gravitation, work & energy,
                                                electricity and circuits.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Chemistry:</strong> Periodic table, bonding, carbon compounds,
                                                numerical chemistry.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Biology:</strong> Genetics, evolution, life processes, control &
                                                coordination.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Exam-style application
                                                with diagrams, numericals and real-world activities.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- English Program -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #f8f9fa; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-primary">English Program (Class 1–10)</h3>
                                    <p class="mb-4">A modern and global English program focusing on communication,
                                        comprehension, creativity and academic readiness. The structure stays intact but
                                        includes deeper breakdowns and clearer progression.</p>

                                    <h5 class="font-weight-600 mb-3">What Students Learn</h5>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>English Foundations (Class 1–5):</strong>
                                        </h6>

                                        <!-- Topics Grid -->
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Phonics</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Vocabulary</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Grammar Basics</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Reading Fluency</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Creative Writing</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Story reading routines
                                                and guided conversations to build confidence.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Early writing (picture
                                                composition, short paragraphs).</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Listening comprehension
                                                and pronunciation drills.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Intermediate English (Class 6–8): Advanced
                                                grammar, structured writing, comprehension & spoken fluency.</strong></h6>
                                        <p>All the topics till English Foundations+</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Formal & informal
                                                letter writing, descriptive & narrative writing.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Poetry/literature
                                                interpretation and theme analysis.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Academic vocabulary
                                                building and debate-style speaking practice.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Senior English (Class 9–10): High-level
                                                writing, literature analysis and critical reading.</strong></h6>
                                        <p>All the topics till Intermediate English+</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Analytical essays,
                                                article writing, report writing.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Deep comprehension,
                                                inference, author's tone & viewpoint.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Preparation for
                                                international curriculum expectations and competitive exams.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Olympiads & Science Olympiads -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #e8f5e9; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-success">Olympiads & Science Olympiads</h3>
                                    <p class="mb-4">We offer targeted preparation for national & international olympiads…
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">British Mathematical Olympiad (BMO)</h6>
                                                <p class="mb-0">Emphasises deep problem-solving and logical reasoning
                                                    beyond school maths.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">CREST Olympiad</h6>
                                                <p class="mb-0">Focuses on concept clarity and application across science
                                                    and maths topics.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">Unicus Olympiad</h6>
                                                <p class="mb-0">Strengthens reasoning and speed with a balance of
                                                    objective and subjective questions.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">Australian Mathematical Olympiad (AMO)
                                                </h6>
                                                <p class="mb-0">Challenges students with advanced mathematical problem
                                                    tasks aligned to global standards.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">Junior Science Olympiad (JSO)</h6>
                                                <p class="mb-0">Builds inquiry-driven science reasoning and multi-concept
                                                    application.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">Australian Science Olympiad (ASO)</h6>
                                                <p class="mb-0">Tests deep understanding and problem-based application
                                                    across science disciplines.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Competitive Exams & Entrance-style Tests -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #fff3e0; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-warning">Competitive Exams & Entrance-style Tests
                                    </h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">11+ (UK-style entrance)</h6>
                                                <p class="mb-0">Preparation focusing on verbal reasoning, non-verbal
                                                    reasoning, maths & comprehension.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">13+ (Secondary entry)</h6>
                                                <p class="mb-0">Advanced reasoning & academic assessment for selective
                                                    school entry.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">16+ (Further entry/college)</h6>
                                                <p class="mb-0">High-level academic readiness for pre-university
                                                    selection.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">AMC 8 (American Mathematics Competition)
                                                </h6>
                                                <p class="mb-0">Middle-school mathematics contest emphasising logical
                                                    problem-solving.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">AMC 10 (American Mathematics Competition)
                                                </h6>
                                                <p class="mb-0">High-school level contest emphasising creative problem
                                                    solving.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All Tab End -->

                    <!-- Mathematics Tab -->
                    <div id="mathematics" class="tab-pane fade">
                        <div class="row">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #f8f9fa; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-primary">Mathematics Program (Class 1–10)</h3>
                                    <p class="mb-4">Our Mathematics program builds a strong conceptual foundation through
                                        visual learning, application-driven practice, and structured progression. The
                                        approach remains the same, but with deeper clarity on milestones and learning
                                        outcomes.</p>

                                    <h5 class="font-weight-600 mb-3">What Students Learn</h5>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-3"><strong>Foundational Maths (Class 1–5):</strong>
                                        </h6>

                                        <!-- Topics Grid -->
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Numbers</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Operations</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Word Problems</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Measurement</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Early Geometry</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-project-diagram text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Patterns</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-square text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Shapes</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-chart-bar text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Data Interpretation
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="mb-3">Students build number sense with activity-based learning.</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Place value mastery,
                                                mental maths, introduction to fractions & decimals.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Real-life applications
                                                through money, time, measurement and basic data charts.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Visual models and
                                                manipulatives to build conceptual confidence.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Middle School Maths (Class 6–8):</strong>
                                        </h6>
                                        <p>All the Foundational Maths+</p>
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Algebra foundations
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Integers</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Linear Equations</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Ratio & Proportion</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Mensuration</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-project-diagram text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Geometry</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-square text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Practical Probability
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Transition from
                                                arithmetic to algebraic thinking using step-by-step reasoning.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Deep dive into geometry
                                                proofs, coordinate geometry and data handling.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Complex word problems
                                                that build competition-level analytical skills.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Advanced Mathematics (Class
                                                9–10):</strong></h6>
                                        <p>All the topics till Middle School Maths+</p>
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Polynomials</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Quadratic Equations
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Trigonometry</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Statistics &
                                                            Probability</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Advanced Graphs</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Strong competitive base
                                                development with higher-order reasoning.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Strategic
                                                problem-solving for exam excellence and future olympiad readiness.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Guided practice using
                                                structured worksheets & chapter-wise Mind Maps.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mathematics Tab End -->

                    <!-- Science Tab -->
                    <div id="science" class="tab-pane fade">
                        <div class="row">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #f8f9fa; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-primary">Science Program (Class 1–10)</h3>
                                    <p class="mb-4">A highly visual and application-driven science curriculum built
                                        around curiosity, experimentation and real-world relevance. The structure remains
                                        unchanged; clarity and depth have been enhanced.</p>

                                    <h5 class="font-weight-600 mb-3">What Students Learn</h5>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Primary Science (Class 1–5):</strong></h6>
                                        <!-- Topics Grid -->
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Plants</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Animals</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Human Body Systems</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">States of matter</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Force</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-project-diagram text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Light</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-square text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Sound</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-chart-bar text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Air
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-chart-bar text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Water
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-chart-bar text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Food & environment
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Hands-on experiments
                                                (home-safe) to build observation skills.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Simple scientific
                                                reasoning and everyday science applications.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Reading-based science
                                                stories to create curiosity.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Integrated Science (Class 6–8): Physics,
                                                Chemistry, Biology fundamentals.</strong></h6>
                                        <p>All the topics till Primary Science+</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Physics:</strong> Motion, force, simple machines, electricity,
                                                magnetism, energy transformation.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Chemistry:</strong> Atoms & molecules, chemical reactions, acids &
                                                bases, separation techniques.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Biology:</strong> Cells, tissues, reproduction, ecosystems, health &
                                                nutrition.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Structured lab
                                                worksheets to enhance scientific thinking.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Senior Science (Class 9–10): Deeper
                                                Physics, Chemistry & Biology</strong></h6>
                                        <p>All the topics till Middle School Science+</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Physics:</strong> Motion laws, gravitation, work & energy,
                                                electricity and circuits.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Chemistry:</strong> Periodic table, bonding, carbon compounds,
                                                numerical chemistry.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i>
                                                <strong>Biology:</strong> Genetics, evolution, life processes, control &
                                                coordination.
                                            </li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Exam-style application
                                                with diagrams, numericals and real-world activities.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Science Tab End -->

                    <!-- English Tab -->
                    <div id="english" class="tab-pane fade">
                        <div class="row">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #f8f9fa; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-primary">English Program (Class 1–10)</h3>
                                    <p class="mb-4">A modern and global English program focusing on communication,
                                        comprehension, creativity and academic readiness. The structure stays intact but
                                        includes deeper breakdowns and clearer progression.</p>

                                    <h5 class="font-weight-600 mb-3">What Students Learn</h5>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>English Foundations (Class 1–5):</strong>
                                        </h6>

                                        <!-- Topics Grid -->
                                        <div class="row mb-3">
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-hashtag text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Phonics</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-calculator text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Vocabulary</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-question-circle text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Grammar Basics</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-ruler text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Reading Fluency</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="topic-card p-3 h-100"
                                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-shapes text-white mr-3"
                                                            style="font-size: 24px;"></i>
                                                        <h6 class="mb-0 text-white font-weight-600">Creative Writing</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Story reading routines
                                                and guided conversations to build confidence.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Early writing (picture
                                                composition, short paragraphs).</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Listening comprehension
                                                and pronunciation drills.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Intermediate English (Class 6–8): Advanced
                                                grammar, structured writing, comprehension & spoken fluency.</strong></h6>
                                        <p>All the topics till English Foundations+</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Formal & informal
                                                letter writing, descriptive & narrative writing.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Poetry/literature
                                                interpretation and theme analysis.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Academic vocabulary
                                                building and debate-style speaking practice.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="font-weight-600 mb-2"><strong>Senior English (Class 9–10): High-level
                                                writing, literature analysis and critical reading.</strong></h6>
                                        <p>All the topics till Intermediate English+</p>
                                        <ul class="list-unstyled ml-4">
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Analytical essays,
                                                article writing, report writing.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Deep comprehension,
                                                inference, author's tone & viewpoint.</li>
                                            <li><i class="fa-solid fa-check text-success mr-2"></i> Preparation for
                                                international curriculum expectations and competitive exams.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- English Tab End -->

                    <!-- Olympiads Tab -->
                    <div id="olympiads" class="tab-pane fade">
                        <div class="row">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #e8f5e9; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-success">Olympiads & Science Olympiads</h3>
                                    <p class="mb-4">We offer targeted preparation for national & international olympiads…
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">British Mathematical Olympiad (BMO)</h6>
                                                <p class="mb-0">Emphasises deep problem-solving and logical reasoning
                                                    beyond school maths.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">CREST Olympiad</h6>
                                                <p class="mb-0">Focuses on concept clarity and application across science
                                                    and maths topics.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">Unicus Olympiad</h6>
                                                <p class="mb-0">Strengthens reasoning and speed with a balance of
                                                    objective and subjective questions.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">Australian Mathematical Olympiad (AMO)
                                                </h6>
                                                <p class="mb-0">Challenges students with advanced mathematical problem
                                                    tasks aligned to global standards.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">Junior Science Olympiad (JSO)</h6>
                                                <p class="mb-0">Builds inquiry-driven science reasoning and multi-concept
                                                    application.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="olympiad-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #28a745;">
                                                <h6 class="font-weight-600 mb-2">Australian Science Olympiad (ASO)</h6>
                                                <p class="mb-0">Tests deep understanding and problem-based application
                                                    across science disciplines.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Olympiads Tab End -->

                    <!-- Competitive Exams Tab -->
                    <div id="competitive" class="tab-pane fade">
                        <div class="row">
                            <div class="col-12">
                                <div class="program-section p-4 mb-4" style="background: #fff3e0; border-radius: 10px;">
                                    <h3 class="font-weight-600 mb-4 text-warning">Competitive Exams & Entrance-style Tests
                                    </h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">11+ (UK-style entrance)</h6>
                                                <p class="mb-0">Preparation focusing on verbal reasoning, non-verbal
                                                    reasoning, maths & comprehension.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">13+ (Secondary entry)</h6>
                                                <p class="mb-0">Advanced reasoning & academic assessment for selective
                                                    school entry.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">16+ (Further entry/college)</h6>
                                                <p class="mb-0">High-level academic readiness for pre-university
                                                    selection.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">AMC 8 (American Mathematics Competition)
                                                </h6>
                                                <p class="mb-0">Middle-school mathematics contest emphasising logical
                                                    problem-solving.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="exam-item p-3"
                                                style="background: #fff; border-radius: 8px; border-left: 4px solid #ff9800;">
                                                <h6 class="font-weight-600 mb-2">AMC 10 (American Mathematics Competition)
                                                </h6>
                                                <p class="mb-0">High-school level contest emphasising creative problem
                                                    solving.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Competitive Exams Tab End -->

                </div>
            </div>
            <!-- tabs  -->
            <!-- container -->
        </div>
        <!-- courses tabs con -->
    </section>
    <!-- programs overview section -->
@endsection

@section('js')
@endsection
