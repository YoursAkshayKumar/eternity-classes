@extends('admin.partials.layouts.master')

@section('title', 'Enrollments | Eternity Classes')

@section('sub-title', 'Enrollments')
@section('pagetitle', 'Enrollments')
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
                    <form id="frmEnrollmentFilter" name="frmEnrollmentFilter" type="form"
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
                                        <option value="0">Pending</option>
                                        <option value="1">Approved</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form id="frmEnrollmentSearch" name="frmEnrollmentSearch" type="form"
                        method="post" autocomplete="off" onsubmit="return false;">
                        <input type="hidden" name="_token"
                            value="{{ csrf_token() }}" />

                        <div class="filter-box">
                            <div class="row align-items-end">
                                <div class="col-sm-2">
                                    <label for="search">Search</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="search" class="form-control" placeholder="Search by name, email, phone, course...">
                                </div>
                                <div class="col-sm-2 text-right">
                                    <button type="button" class="btn btn-primary btn-sm enrollment-filter-btn-go">Go!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table id="enrollmentsTable" class="data-table-basic table-hover align-middle table table-nowrap w-100">
                <thead class="bg-light bg-opacity-30">
                    <tr>
                        <th data-visible="false">&nbsp;</th>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th data-orderable="false">Created On</th>
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

        var tblEnrollments = $('#enrollmentsTable').DataTable({
            'scrollX': true,
            'scrollCollapse': true,
            'scrollY': screen.height / 2.3,
            /**********************/
            'dom': 'rtip',
            'processing': true,
            'serverSide': true,
            'ajax': {
                url: "{{ url(env('ADMIN_URL_PREFIX') . '/enrollment-ajax-load') }}",
                type: 'POST',
                data: function(d) {
                    d["_token"] = "{{ csrf_token() }}";
                    d.frmData = $("#frmEnrollmentFilter").serialize() + "&" + $("#frmEnrollmentSearch").serialize();
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
                    name: 'full_name',
                    render: function(data, type, row, meta) {
                        return row.full_name;
                    }
                },
                {
                    name: 'email',
                    render: function(data, type, row, meta) {
                        return row.email;
                    }
                },
                {
                    name: 'phone',
                    render: function(data, type, row, meta) {
                        return row.phone;
                    }
                },
                {
                    name: 'course',
                    render: function(data, type, row, meta) {
                        return row.course ? row.course.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase()) : '-';
                    }
                },
                {
                    name: 'grade',
                    render: function(data, type, row, meta) {
                        return row.grade ? row.grade.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase()) : '-';
                    }
                },
                {
                    name: 'status',
                    render: function(data, type, row, meta) {
                        let statusClass = 'warning';
                        let statusText = 'Pending';
                        if (row.status == 1) {
                            statusClass = 'success';
                            statusText = 'Approved';
                        } else if (row.status == 2) {
                            statusClass = 'danger';
                            statusText = 'Rejected';
                        }
                        return `<span class="badge bg-${statusClass}">${statusText}</span>`;
                    }
                },
                {
                    name: 'created_on',
                    render: function(data, type, row, meta) {
                        let date = '';
                        if (row.created_on != null) {
                            date = moment(row.created_on).format('MM/DD/YYYY HH:mm');
                        } else {
                            date = '';
                        }
                        return date;
                    }
                },
                {
                    render: function(data, type, row, meta) {
                        data = `<div class="hstack gap-2 fs-15">
                                    <a href="{{ url(env('ADMIN_URL_PREFIX') . '/enrollment-details') }}/${row.id}" class="btn icon-btn-sm btn-light-info" title="View Details">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                    <div class="btn-group">
                                        <button type="button" class="btn icon-btn-sm btn-light-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-settings-3-line"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item change-status" href="javascript:void(0);" data-id="${row.id}" data-status="0">Mark as Pending</a></li>
                                            <li><a class="dropdown-item change-status" href="javascript:void(0);" data-id="${row.id}" data-status="1">Mark as Approved</a></li>
                                            <li><a class="dropdown-item change-status" href="javascript:void(0);" data-id="${row.id}" data-status="2">Mark as Rejected</a></li>
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
                                      <a href="{{ url(env('ADMIN_URL_PREFIX') . '/enrollment-delete') }}/${row.id}" class="btn icon-btn-sm btn-light-danger delete-item">
                                        <i class="ri-delete-bin-line"></i>
                                    </a>
                                </div>`;
                        return data;
                    },
                    orderable: false
                },
            ],
        });

        $('.enrollment-filter-btn-go').off('click').on('click', function() {
            tblEnrollments.ajax.reload();
        });

        // Handle status change
        $(document).on('click', '.change-status', function() {
            var enrollmentId = $(this).data('id');
            var status = $(this).data('status');
            
            if (confirm('Are you sure you want to change the status?')) {
                $.ajax({
                    url: "{{ url(env('ADMIN_URL_PREFIX') . '/enrollment-update-status') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: enrollmentId,
                        status: status
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            alert(response.message);
                            tblEnrollments.ajax.reload();
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

