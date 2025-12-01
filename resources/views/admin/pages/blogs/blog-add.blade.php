@extends('admin.partials.layouts.master3')

@section('title', 'Add Blog | Eternity Classes')
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
    <h5 class="mb-0">Add Blog</h5>
  </div>
  <div class="card-body add-post">
    <form name="frmAddBlog" type="form"
      action="{{ url(env('ADMIN_URL_PREFIX') . '/blog-add') }}" method="post"
      autocomplete="off" enctype="multipart/form-data" class="frm-blog">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="title">Title <span class="text-danger">*</span></label>
          <input type="text" id="title" class="form-control" placeholder="Blog Title" name="title"
            required="">
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="slug">Slug</label>
          <input type="text" id="slug" class="form-control" placeholder="blog-slug-url" name="slug">
          <small class="text-muted">Leave empty to auto-generate from title</small>
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="excerpt">Excerpt</label>
          <textarea id="excerpt" class="form-control" placeholder="Short description" name="excerpt" rows="3"></textarea>
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="content">Content <span class="text-danger">*</span></label>
          <div id="createBlogEditor" style="height: 300px;"></div>
          <textarea id="content" name="content" style="display: none;"></textarea>
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-6">
          <label for="status">Status <span class="text-danger">*</span></label>
          <select id="status" name="status" class="form-control" required>
            <option value="draft">Draft</option>
            <option value="published">Published</option>
            <option value="pending_review">Pending Review</option>
            <option value="archived">Archived</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="published_at">Published Date</label>
          <input type="datetime-local" id="published_at" name="published_at" class="form-control">
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
          <img id="preview" src="#" class="img-fluid" style="max-width: 300px; max-height: 200px; display: none;"
            onerror="this.style.display='none'" onload="this.style.display=''">
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="seo_title">SEO Title</label>
          <input type="text" id="seo_title" class="form-control" placeholder="SEO Meta Title (if different from title)" name="seo_title">
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="meta_description">Meta Description</label>
          <textarea id="meta_description" class="form-control" placeholder="SEO Meta Description" name="meta_description" rows="2"></textarea>
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="meta_keywords">Meta Keywords</label>
          <input type="text" id="meta_keywords" class="form-control" placeholder="keyword1, keyword2, keyword3" name="meta_keywords">
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="canonical_url">Canonical URL</label>
          <input type="text" id="canonical_url" class="form-control" placeholder="Preferred URL to prevent duplicate content" name="canonical_url">
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="og_title">OG Title <span class="text-muted">(for social sharing)</span></label>
          <input type="text" id="og_title" class="form-control" placeholder="Open Graph Title" name="og_title">
        </div>
      </div>

      <div class="row mb-1">
        <div class="form-group col-md-12">
          <label for="og_description">OG Description <span class="text-muted">(for social sharing)</span></label>
          <textarea id="og_description" class="form-control" placeholder="Open Graph Description" name="og_description" rows="2"></textarea>
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
  // Initialize Quill editor
  let createBlogEditor = document.getElementById('createBlogEditor');
  let quillEditor;
  if (createBlogEditor) {
    quillEditor = new Quill('#createBlogEditor', {
      theme: 'snow',
      modules: {
        toolbar: true,
      },
      placeholder: 'Compose your content here...',
    });
  }

  // Auto-generate slug from title
  $('#title').on('input', function() {
    if ($('#slug').val() == '') {
      let slug = $(this).val().toLowerCase()
        .replace(/[^\w\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .trim();
      $('#slug').val(slug);
    }
  });

  var elm = $('form[name=frmAddBlog]');
  stsPanel_JS.Forms_Submit(elm.find('#btnSubmit'), elm, true, '', (response) => {
    // Update content textarea with Quill content before submit
    if (quillEditor) {
      $('#content').val(quillEditor.root.innerHTML);
    }
  });

  // Image preview
  const imgInp = document.getElementById('imgInp');
  const preview = document.getElementById('preview');
  if (imgInp) {
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        preview.src = URL.createObjectURL(file)
        preview.style.display = 'block';
      }
    }
  }
</script>

@endsection

