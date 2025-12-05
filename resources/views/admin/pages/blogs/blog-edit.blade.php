@extends('admin.partials.layouts.master3')

@section('title', 'Edit Blog | Eternity Classes')
@section('sub-title', 'Blogs' )
@section('pagetitle', 'Blogs')
@section('buttonTitle', 'Blog List')
@section('link', 'admin/blogs')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admin/libs/air-datepicker/air-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/libs/dropzone/dropzone.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/libs/quill/quill.core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/libs/quill/quill.bubble.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/libs/quill/quill.snow.css') }}">
@endsection

@section('content')


<div class="card mb-0">
    <div class="card-header">
        <h5 class="mb-0">Edit Blog</h5>
    </div>
    <div class="card-body add-post">
        <form name="frmEditBlog" type="form"
            action="{{ url(env('ADMIN_URL_PREFIX') . '/blog-edit') }}" method="post"
            autocomplete="off" enctype="multipart/form-data" class="frm-blog">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="id" value="{{ $blog->blog_id }}">
            <input type="hidden" name="fileOld" value="{{ $blog->og_image_url ?? '' }}">
            
            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="title">Title <span class="text-danger">*</span></label>
                    <input type="text" id="title" class="form-control" placeholder="Blog Title" name="title"
                        required="" value="{{ $blog->title ?? '' }}">
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="slug">Slug</label>
                    <input type="text" id="slug" class="form-control" placeholder="blog-slug-url" name="slug" value="{{ $blog->slug ?? '' }}">
                    <small class="text-muted">Leave empty to auto-generate from title</small>
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="excerpt">Excerpt</label>
                    <textarea id="excerpt" class="form-control" placeholder="Short description" name="excerpt" rows="3">{{ $blog->excerpt ?? '' }}</textarea>
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="content">Content <span class="text-danger">*</span></label>
                    <div id="editBlogEditor" style="height: 300px;"></div>
                    <textarea id="content" name="content" style="display: none;">{{ $blog->content ?? '' }}</textarea>
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-6">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select id="status" name="status" class="form-control" required>
                        <option value="draft" {{ ($blog->status ?? '') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ ($blog->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="pending_review" {{ ($blog->status ?? '') == 'pending_review' ? 'selected' : '' }}>Pending Review</option>
                        <option value="archived" {{ ($blog->status ?? '') == 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="published_at">Published Date</label>
                    <input type="datetime-local" id="published_at" name="published_at" class="form-control" value="{{ $blog->published_at ? date('Y-m-d\TH:i', strtotime($blog->published_at)) : '' }}">
                    <small class="text-muted">Leave empty to auto-set when status is published</small>
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label>OG Image (Featured Image) <span class="text-muted">(for social sharing)</span></label>
                    <input type="file" name="og_image_url" accept="image/*" class="form-control" id="imgInp">
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    @php
                    $imgSrc = '';
                    if (isset($blog->og_image_url) && !empty($blog->og_image_url)) {
                        $imgSrc = $blog->og_image_url;
                    }
                    @endphp
                    <img id="preview" src="{{ $imgSrc }}" class="img-fluid" style="max-width: 300px; max-height: 200px; {{ empty($imgSrc) ? 'display: none;' : '' }}"
                        onerror="this.style.display='none'" onload="this.style.display=''">
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="seo_title">SEO Title</label>
                    <input type="text" id="seo_title" class="form-control" placeholder="SEO Meta Title (if different from title)" name="seo_title" value="{{ $blog->seo_title ?? '' }}">
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="meta_description">Meta Description</label>
                    <textarea id="meta_description" class="form-control" placeholder="SEO Meta Description" name="meta_description" rows="2">{{ $blog->meta_description ?? '' }}</textarea>
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input type="text" id="meta_keywords" class="form-control" placeholder="keyword1, keyword2, keyword3" name="meta_keywords" value="{{ $blog->meta_keywords ?? '' }}">
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="canonical_url">Canonical URL</label>
                    <input type="text" id="canonical_url" class="form-control" placeholder="Preferred URL to prevent duplicate content" name="canonical_url" value="{{ $blog->canonical_url ?? '' }}">
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="og_title">OG Title <span class="text-muted">(for social sharing)</span></label>
                    <input type="text" id="og_title" class="form-control" placeholder="Open Graph Title" name="og_title" value="{{ $blog->og_title ?? '' }}">
                </div>
            </div>

            <div class="row mb-1">
                <div class="form-group col-md-12">
                    <label for="og_description">OG Description <span class="text-muted">(for social sharing)</span></label>
                    <textarea id="og_description" class="form-control" placeholder="Open Graph Description" name="og_description" rows="2">{{ $blog->og_description ?? '' }}</textarea>
                </div>
            </div>

            <div class="status_summary d-none">
                <div class="alert alert-dismissible" role="alert">
                </div>
            </div>

            <div class="d-flex justify-content-end gap-3 mt-4">
                <button class="btn btn-primary" type="button" id="btnSubmit">Save</button>
                <input class="btn btn-light" type="reset" value="Discard">
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<!-- Air Datepicker js -->
<script src="{{ asset('assets/admin/libs/air-datepicker/air-datepicker.js') }}"></script>

<!-- Dropzone js -->
<script src="{{ asset('assets/admin/libs/dropzone/dropzone-min.js') }}"></script>

<!-- Editor js -->
<script src="{{ asset('assets/admin/libs/quill/quill.js') }}"></script>

<!-- Blog js -->
<script src="{{ asset('assets/admin/js/pages/blog.init.js') }}"></script>

<!-- App js -->
<script type="module" src="{{ asset('assets/admin/js/app.js') }}"></script>

<script src="{{ asset('assets/admin/js/app-custom.js') }}"></script>

<script type="text/javascript">
    // Initialize Quill editor - use var to avoid redeclaration error
    var editBlogEditor = document.getElementById('editBlogEditor');
    var quillEditor;
    if (editBlogEditor && !window.blogQuillEditor) {
        quillEditor = new Quill('#editBlogEditor', {
            theme: 'snow',
            modules: {
                toolbar: true,
            },
            placeholder: 'Compose your content here...',
        });
        
        // Store globally to avoid duplicate initialization
        window.blogQuillEditor = quillEditor;
        
        // Set existing content
        var existingContent = document.getElementById('content').value;
        if (existingContent) {
            quillEditor.root.innerHTML = existingContent;
        }
    } else if (window.blogQuillEditor) {
        quillEditor = window.blogQuillEditor;
    }

    // Auto-generate slug from title
    $('#title').on('input', function() {
        if ($('#slug').val() == '') {
            var slug = $(this).val().toLowerCase()
                .replace(/[^\w\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim();
            $('#slug').val(slug);
        }
    });

    // Initialize jQuery Validate on the form
    var elm = $('form[name=frmEditBlog]');
    
    // Add custom validation method for Quill content
    $.validator.addMethod("quillRequired", function(value, element) {
        // Sync Quill content to textarea before validation
        if (quillEditor) {
            $('#content').val(quillEditor.root.innerHTML);
            // Check if content has actual text (not just empty tags)
            var textContent = quillEditor.getText().trim();
            return textContent.length > 0;
        }
        return false;
    }, "Content is required");

    elm.validate({
        rules: {
            title: {
                required: true
            },
            content: {
                quillRequired: true
            },
            status: {
                required: true
            }
        },
        messages: {
            title: {
                required: "Title is required"
            },
            content: {
                quillRequired: "Content is required"
            },
            status: {
                required: "Status is required"
            }
        },
        errorClass: "error",
        validClass: "valid",
        errorPlacement: function(error, element) {
            if (element.attr("name") == "content") {
                error.insertAfter("#editBlogEditor");
            } else {
                error.insertAfter(element);
            }
        }
    });

    // Override the click handler to sync content before Forms_Submit validation
    elm.find('#btnSubmit').off('click').on('click', function(e) {
        // Sync Quill content to textarea before any validation
        if (quillEditor) {
            $('#content').val(quillEditor.root.innerHTML);
        }
        
        // Now trigger validation - Forms_Submit will check this
        if (elm.valid()) {
            // If valid, manually trigger the AJAX submission
            var btn = $(this);
            btn.find('.fa-spinner').removeClass('d-none');
            
            var dataVal = "ctime=" + new Date().getTime();
            var frm = elm[0];
            
            $.ajax({
                processData: false,
                contentType: false,
                url: elm.attr("action") + "?" + dataVal,
                type: 'POST',
                data: new FormData(frm),
                success: (data) => {
                    console.log({ data });
                    if (data.redirect != undefined) {
                        window.location.href = data.redirect;
                    }
                    if (data.message && data.message.length > 0) {
                        toastr[data.status](data.message);
                    }
                    btn.find('.fa-spinner').addClass('d-none');
                },
                error: (error) => {
                    console.log({ error });
                    var errorMsg = error.responseJSON && error.responseJSON.message ? error.responseJSON.message : 'An error occurred';
                    toastr["error"](errorMsg);
                    btn.find('.fa-spinner').addClass('d-none');
                },
            });
        }
    });

    // Image preview
    var imgInp = document.getElementById('imgInp');
    var preview = document.getElementById('preview');
    if (imgInp) {
        imgInp.onchange = evt => {
            var file = imgInp.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file)
                preview.style.display = 'block';
            }
        }
    }
</script>

@endsection

