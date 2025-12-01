@extends('admin.partials.layouts.master')

@section('title', 'Blogs | Eternity Classes')

@section('sub-title', 'Blogs')
@section('pagetitle', 'Blogs')
@section('buttonTitle', 'Add Blog')
@section('link', 'admin/blog-add')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admin/libs/air-datepicker/air-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/libs/@yaireo/tagify/tagify.css') }}">
@endsection

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="card mb-0 h-100">
            <div class="row align-items-end p-4">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <form id="frmBlogFilter" name="frmBlogFilter" type="form"
                        method="post" autocomplete="off" onsubmit="return false;">
                        <input type="hidden" name="_token"
                            value="{{ csrf_token() }}" />

                        <div class="filter-box">
                            <div class="row align-items-end">
                                <div class="col-sm-2">
                                    <label for="search">Search</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="search" class="form-control" placeholder="Search blogs...">
                                </div>
                                <div class="col-sm-2 text-right">
                                    <button type="button" class="btn btn-primary btn-sm blog-filter-btn-go">Go!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table id="blogsTable" class="data-table-basic table-hover align-middle table table-nowrap w-100">
                <thead class="bg-light bg-opacity-30">
                    <tr>
                        <th data-visible="false">&nbsp;</th>
                        <th>#</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th data-orderable="false">Featured Image</th>
                        <th>Status</th>
                        <th data-orderable="false">Created On</th>
                        <th data-orderable="false">Edit</th>
                        <th data-orderable="false">Delete</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')

<!-- Datatable js -->
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        var tblBlogs = $('#blogsTable').DataTable({
            'scrollX': true,
            'scrollCollapse': true,
            'scrollY': screen.height / 2.3,
            /**********************/
            'dom': 'rtip',
            'processing': true,
            'serverSide': true,
            'ajax': {
                url: "{{ url(env('ADMIN_URL_PREFIX') . '/blog-ajax-load') }}",
                type: 'POST',
                data: function(d) {
                    d["_token"] = "{{ csrf_token() }}";
                    d.frmData = $("#frmBlogFilter").serialize();
                },
            },
            'initComplete': function(settings, json) {
                $('[data-toggle="tooltip"]').tooltip();
            },
            'drawCallback': function(setings, json) {
                $('[data-toggle="tooltip"]').tooltip();
            },
            "order": [
                [0, "desc"]
            ],
            'columns': [{
                    name: 'created_on',
                    data: 'created_on',
                    visible: false
                },
                {
                    name: 'id',
                    render: function(data, type, row, meta) {
                        let cnt = row.id;
                        return cnt;
                    }
                },
                {
                    name: 'title',
                    render: function(data, type, row, meta) {
                        return row.title;
                    }
                },
                {
                    name: 'slug',
                    render: function(data, type, row, meta) {
                        return row.slug;
                    }
                },
                {
                    name: 'og_image_url',
                    render: function(data, type, row, meta) {
                        if (row.og_image_url && row.og_image_url != '') {
                            return `<img src="${row.og_image_url}" class="img-fluid" style="max-width: 100px; max-height: 60px;">`;
                        } else {
                            return '<span class="text-muted">No Image</span>';
                        }
                    }
                },
                {
                    name: 'status',
                    render: function(data, type, row, meta) {
                        let statusClass = 'warning';
                        let statusText = row.status;
                        if (row.status == 'published') {
                            statusClass = 'success';
                        } else if (row.status == 'archived') {
                            statusClass = 'secondary';
                        } else if (row.status == 'pending_review') {
                            statusClass = 'info';
                        }
                        return `<span class="badge bg-${statusClass}">${statusText.charAt(0).toUpperCase() + statusText.slice(1).replace('_', ' ')}</span>`;
                    }
                },
                {
                    name: 'created_on',
                    render: function(data, type, row, meta) {
                        let date = '';
                        if (row.created_on != null) {
                            date = moment(row.created_on).format('MM/DD/YYYY');
                        } else {
                            date = '';
                        }
                        return date;
                    }
                },
                {
                    render: function(data, type, row, meta) {
                        data = `<div class="hstack gap-2 fs-15">
                                    <a href="{{ url(env('ADMIN_URL_PREFIX') . '/blog-edit') }}/${row.id}" class="btn icon-btn-sm btn-light-primary">
                                        <i class="ri-pencil-line"></i>
                                    </a>
                                </div>`;
                        return data;
                    },
                    orderable: false
                },
                {
                    render: function(data, type, row, meta) {
                        data = `<div class="hstack gap-2 fs-15">
                                      <a href="{{ url(env('ADMIN_URL_PREFIX') . '/blog-delete') }}/${row.id}" class="btn icon-btn-sm btn-light-danger delete-item">
                                        <i class="ri-delete-bin-line"></i>
                                    </a>
                                </div>`;
                        return data;
                    },
                    orderable: false
                },
            ],
        });

        $('.blog-filter-btn-go').off('click').on('click', function() {
            tblBlogs.ajax.reload();
        });
    });
</script>


<!-- App js -->
<script type="module" src="{{ asset('assets/admin/js/app.js') }}"></script>

@endsection

