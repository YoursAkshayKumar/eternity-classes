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
                            <h1 class="d-inline-block mb-0">Blogs</h1>
                            <img class="img-fluid d-inline-block right-img" alt="vector"
                                src="{{ asset('assets/front/images/dots-vector.png') }}">
                        </div>
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    <i class="fa-solid fa-angles-right"></i>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOGS SECTION -->
    <section class="float-left w-100 blog-con position-relative padding-top116 padding-bottom main-box">
        <div class="container">
            <div class="row">
                @if(isset($blogs) && $blogs->count() > 0)
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="blog-box position-relative float-left w-100">
                                <div class="blog-img-con position-relative overflow-hidden">
                                    @if($blog->og_image_url)
                                        <img src="{{ $blog->og_image_url }}" alt="{{ $blog->title }}" class="img-fluid">
                                    @else
                                        <img src="{{ asset('assets/front/images/blog-img1.png') }}" alt="{{ $blog->title }}" class="img-fluid">
                                    @endif
                                    <div class="blog-date-con position-absolute">
                                        <span class="d-block">{{ \Carbon\Carbon::parse($blog->created_on)->format('d') }}</span>
                                        <span class="d-block">{{ \Carbon\Carbon::parse($blog->created_on)->format('M') }}</span>
                                    </div>
                                </div>
                                <div class="blog-content-con">
                                    <h3 class="font-weight-600">
                                        <a href="{{ url('/blog/' . $blog->slug) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <p class="mb-3">
                                        {{ $blog->excerpt ? \Illuminate\Support\Str::limit($blog->excerpt, 150) : \Illuminate\Support\Str::limit(strip_tags($blog->content), 150) }}
                                    </p>
                                    <div class="blog-btn-con">
                                        <a href="{{ url('/blog/' . $blog->slug) }}" class="d-inline-block">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="text-center py-5">
                            <h3>No blogs found</h3>
                            <p class="text-muted">Check back later for new blog posts.</p>
                        </div>
                    </div>
                @endif
            </div>
            
            <!-- Pagination -->
            @if(isset($blogs) && $blogs->hasPages())
                <div class="row">
                    <div class="col-12">
                        <div class="pagination-wrapper">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

