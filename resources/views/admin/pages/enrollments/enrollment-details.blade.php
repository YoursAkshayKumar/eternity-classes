@extends('admin.partials.layouts.master')

@section('title', 'Enrollment Details | Eternity Classes')

@section('sub-title', 'Enrollment Details')
@section('pagetitle', 'Enrollment Details')
@section('buttonTitle', 'Back to List')
@section('link', env('ADMIN_URL_PREFIX') . '/enrollments')

@section('css')
@endsection

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="card mb-0 h-100">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h4 class="mb-3">Enrollment Information</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Full Name:</label>
                        <p class="form-control-static">{{ $enrollment->full_name }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Email:</label>
                        <p class="form-control-static">{{ $enrollment->email }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Phone:</label>
                        <p class="form-control-static">{{ $enrollment->phone }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Course:</label>
                        <p class="form-control-static">
                            {{ $enrollment->course ? ucwords(str_replace('-', ' ', $enrollment->course)) : '-' }}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Grade:</label>
                        <p class="form-control-static">
                            {{ $enrollment->grade ? ucwords(str_replace('-', ' ', $enrollment->grade)) : '-' }}
                        </p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">How did you hear about us:</label>
                        <p class="form-control-static">
                            {{ $enrollment->source ? ucwords(str_replace('-', ' ', $enrollment->source)) : '-' }}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Terms Accepted:</label>
                        <p class="form-control-static">
                            @if($enrollment->terms_accepted)
                                <span class="badge bg-success">Yes</span>
                            @else
                                <span class="badge bg-danger">No</span>
                            @endif
                        </p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Status:</label>
                        <p class="form-control-static">
                            @if($enrollment->status == 1)
                                <span class="badge bg-success">Approved</span>
                            @elseif($enrollment->status == 2)
                                <span class="badge bg-danger">Rejected</span>
                            @else
                                <span class="badge bg-warning">Pending</span>
                            @endif
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Created On:</label>
                        <p class="form-control-static">
                            {{ $enrollment->created_on ? \Carbon\Carbon::parse($enrollment->created_on)->format('M d, Y H:i') : '-' }}
                        </p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Updated On:</label>
                        <p class="form-control-static">
                            {{ $enrollment->updated_on ? \Carbon\Carbon::parse($enrollment->updated_on)->format('M d, Y H:i') : '-' }}
                        </p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <form id="frmUpdateStatus" method="POST" action="{{ url(env('ADMIN_URL_PREFIX') . '/enrollment-update-status') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $enrollment->id }}">
                            <label class="form-label fw-bold">Change Status:</label>
                            <div class="d-flex gap-2 mb-3">
                                <select name="status" class="form-control" style="max-width: 200px;">
                                    <option value="0" {{ $enrollment->status == 0 ? 'selected' : '' }}>Pending</option>
                                    <option value="1" {{ $enrollment->status == 1 ? 'selected' : '' }}>Approved</option>
                                    <option value="2" {{ $enrollment->status == 2 ? 'selected' : '' }}>Rejected</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <form id="frmUpdateNotes" method="POST" action="{{ url(env('ADMIN_URL_PREFIX') . '/enrollment-update-notes') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $enrollment->id }}">
                            <label class="form-label fw-bold">Admin Notes:</label>
                            <textarea name="admin_notes" class="form-control" rows="4" placeholder="Add notes about this enrollment...">{{ $enrollment->admin_notes }}</textarea>
                            <button type="submit" class="btn btn-primary mt-2">Save Notes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#frmUpdateStatus').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: form.serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        alert(response.message);
                        location.reload();
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
        });

        $('#frmUpdateNotes').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: form.serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        alert(response.message);
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
        });
    });
</script>

<!-- App js -->
<script type="module" src="{{ asset('assets/admin/js/app.js') }}"></script>

@endsection

