@extends('admin.partials.layouts.master')

@section('title', 'Newsletter Subscriptions | Eternity Classes')

@section('sub-title', 'Newsletter Subscriptions')
@section('pagetitle', 'Newsletter Subscriptions')
@section('buttonTitle', '')
@section('link', '')

@section('css')
@endsection

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="card mb-0 h-100">
            <div class="row align-items-end p-4">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                    <form id="frmNewsletterFilter" name="frmNewsletterFilter" type="form"
                        method="post" autocomplete="off" onsubmit="return false;">
                        <input type="hidden" name="_token"
                            value="{{ csrf_token() }}" />
                        <div class="filter-box">
                            <div class="row align-items-end">
                                <div class="col-sm-4">
                                    <label for="status">Status</label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="status" class="form-control">
                                        <option value="">All</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form id="frmNewsletterSearch" name="frmNewsletterSearch" type="form"
                        method="post" autocomplete="off" onsubmit="return false;">
                        <input type="hidden" name="_token"
                            value="{{ csrf_token() }}" />

                        <div class="filter-box">
                            <div class="row align-items-end">
                                <div class="col-sm-2">
                                    <label for="search">Search</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="search" class="form-control" placeholder="Search by email...">
                                </div>
                                <div class="col-sm-2 text-right">
                                    <button type="button" class="btn btn-primary btn-sm newsletter-filter-btn-go">Go!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table id="newsletterTable" class="data-table-basic table-hover align-middle table table-nowrap w-100">
                <thead class="bg-light bg-opacity-30">
                    <tr>
                        <th data-visible="false">&nbsp;</th>
                        <th>#</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th data-orderable="false">Subscribed On</th>
                        <th data-orderable="false">Actions</th>
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

        var tblNewsletter = $('#newsletterTable').DataTable({
            'scrollX': true,
            'scrollCollapse': true,
            'scrollY': screen.height / 2.3,
            /**********************/
            'dom': 'rtip',
            'processing': true,
            'serverSide': true,
            'ajax': {
                url: "{{ url(env('ADMIN_URL_PREFIX') . '/newsletter-ajax-load') }}",
                type: 'POST',
                data: function(d) {
                    d["_token"] = "{{ csrf_token() }}";
                    d.frmData = $("#frmNewsletterFilter").serialize() + "&" + $("#frmNewsletterSearch").serialize();
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
                    name: 'subscribed_at',
                    data: 'subscribed_at',
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
                    name: 'email',
                    render: function(data, type, row, meta) {
                        return row.email;
                    }
                },
                {
                    name: 'status',
                    render: function(data, type, row, meta) {
                        let statusClass = 'danger';
                        let statusText = 'Inactive';
                        if (row.status == 1) {
                            statusClass = 'success';
                            statusText = 'Active';
                        }
                        return `<span class="badge bg-${statusClass}">${statusText}</span>`;
                    }
                },
                {
                    name: 'subscribed_at',
                    render: function(data, type, row, meta) {
                        let date = '';
                        if (row.subscribed_at != null) {
                            date = moment(row.subscribed_at).format('MM/DD/YYYY HH:mm');
                        } else {
                            date = '';
                        }
                        return date;
                    }
                },
                {
                    render: function(data, type, row, meta) {
                        data = `<div class="hstack gap-2 fs-15">
                                    <div class="btn-group">
                                        <button type="button" class="btn icon-btn-sm btn-light-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-settings-3-line"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item change-status" href="javascript:void(0);" data-id="${row.id}" data-status="1">Mark as Active</a></li>
                                            <li><a class="dropdown-item change-status" href="javascript:void(0);" data-id="${row.id}" data-status="0">Mark as Inactive</a></li>
                                        </ul>
                                    </div>
                                </div>`;
                        return data;
                    },
                    orderable: false
                },
                {
                    render: function(data, type, row, meta) {
                        data = `<div class="hstack gap-2 fs-15">
                                      <a href="{{ url(env('ADMIN_URL_PREFIX') . '/newsletter-delete') }}/${row.id}" class="btn icon-btn-sm btn-light-danger delete-item">
                                        <i class="ri-delete-bin-line"></i>
                                    </a>
                                </div>`;
                        return data;
                    },
                    orderable: false
                },
            ],
        });

        $('.newsletter-filter-btn-go').off('click').on('click', function() {
            tblNewsletter.ajax.reload();
        });

        // Handle status change
        $(document).on('click', '.change-status', function() {
            var newsletterId = $(this).data('id');
            var status = $(this).data('status');
            
            if (confirm('Are you sure you want to change the status?')) {
                $.ajax({
                    url: "{{ url(env('ADMIN_URL_PREFIX') . '/newsletter-update-status') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: newsletterId,
                        status: status
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            alert(response.message);
                            tblNewsletter.ajax.reload();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        var errorMsg = 'An error occurred';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMsg = xhr.responseJSON.message;
                        }
                        alert(errorMsg);
                    }
                });
            }
        });
    });
</script>


<!-- App js -->
<script type="module" src="{{ asset('assets/admin/js/app.js') }}"></script>

@endsection

