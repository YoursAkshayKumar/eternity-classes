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
                            <h1 class="d-inline-block mb-0">Blog Details</h1>
                            <img class="img-fluid d-inline-block right-img" alt="vector"
                                src="{{ asset('assets/front/images/dots-vector.png') }}">
                        </div>
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    <i class="fa-solid fa-angles-right"></i>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ url('/blogs') }}">Blogs</a>
                                    <i class="fa-solid fa-angles-right"></i>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ \Illuminate\Support\Str::limit($blog->title, 30) }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG DETAILS SECTION -->
    <section class="float-left w-100 blog-details-con position-relative padding-top116 padding-bottom main-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-inner-con float-left w-100">
                        <div class="blog-details-img-con position-relative mb-4">
                            @if($blog->og_image_url)
                                <img src="{{ $blog->og_image_url }}" alt="{{ $blog->title }}" class="img-fluid w-100">
                            @else
                                <img src="{{ asset('assets/front/images/blog-img1.png') }}" alt="{{ $blog->title }}" class="img-fluid w-100">
                            @endif
                            <div class="blog-date-con position-absolute">
                                <span class="d-block">{{ \Carbon\Carbon::parse($blog->created_on)->format('d') }}</span>
                                <span class="d-block">{{ \Carbon\Carbon::parse($blog->created_on)->format('M') }}</span>
                            </div>
                        </div>
                        <div class="blog-details-content-con">
                            <h2 class="font-weight-600 mb-3">{{ $blog->title }}</h2>
                            <div class="blog-meta mb-4">
                                <span class="d-inline-block mr-3"><i class="fa-solid fa-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_on)->format('F d, Y') }}</span>
                                <span class="d-inline-block"><i class="fa-solid fa-user"></i> Admin</span>
                            </div>
                            @if($blog->excerpt)
                                <div class="blog-excerpt mb-4">
                                    <p class="lead">{{ $blog->excerpt }}</p>
                                </div>
                            @endif
                            <div class="blog-content">
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="blog-sidebar-con float-left w-100">
                        @if(isset($relatedBlogs) && count($relatedBlogs) > 0)
                            <div class="sidebar-widget mb-4">
                                <h3 class="font-weight-600 mb-3">Related Blogs</h3>
                                <div class="related-blogs-con">
                                    @foreach($relatedBlogs as $relatedBlog)
                                        <div class="related-blog-item mb-3 pb-3 border-bottom">
                                            <div class="row">
                                                <div class="col-4">
                                                    @if($relatedBlog->og_image_url)
                                                        <img src="{{ $relatedBlog->og_image_url }}" alt="{{ $relatedBlog->title }}" class="img-fluid">
                                                    @else
                                                        <img src="{{ asset('assets/front/images/blog-img1.png') }}" alt="{{ $relatedBlog->title }}" class="img-fluid">
                                                    @endif
                                                </div>
                                                <div class="col-8">
                                                    <h5 class="font-weight-600 mb-2">
                                                        <a href="{{ url('/blog/' . $relatedBlog->slug) }}">{{ \Illuminate\Support\Str::limit($relatedBlog->title, 50) }}</a>
                                                    </h5>
                                                    <span class="text-muted small">{{ \Carbon\Carbon::parse($relatedBlog->created_on)->format('M d, Y') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="sidebar-widget">
                            <div class="blog-btn-con text-center">
                                <a href="{{ url('/blogs') }}" class="d-inline-block btn btn-primary">Back to Blogs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

