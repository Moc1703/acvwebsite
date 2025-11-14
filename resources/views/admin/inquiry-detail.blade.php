@extends('layouts.admin')

@section('title', 'Inquiry #' . $inquiry->id)

@section('content')
    <div class="mb-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
            <div class="mb-3 mb-md-0">
                <h1 class="h3 mb-2">
                    <i class="fas fa-user me-2"></i>Inquiry Details #{{ $inquiry->id }}
                </h1>
                <p class="text-muted mb-0">Detail lengkap inquiry dari {{ $inquiry->name }}</p>
            </div>
            <a href="{{ route('admin.inquiries') }}" class="btn btn-outline-secondary admin-btn-sm">
                <i class="fas fa-arrow-left me-2"></i>Back to List
            </a>
        </div>

        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Contact Information -->
                <div class="admin-card">
                    <div class="admin-card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-user me-2"></i>Contact Information
                        </h5>
                    </div>
                    <div class="admin-card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-muted small text-uppercase mb-1">Name</label>
                                    <p class="mb-0 fw-semibold">{{ $inquiry->name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-muted small text-uppercase mb-1">Email</label>
                                    <p class="mb-0">
                                        <a href="mailto:{{ $inquiry->email }}" class="text-decoration-none">
                                            {{ $inquiry->email }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-muted small text-uppercase mb-1">Phone</label>
                                    <p class="mb-0">
                                        @if ($inquiry->phone)
                                            <a href="https://wa.me/{{ str_replace([' ', '-', '+'], '', $inquiry->phone) }}"
                                                target="_blank" class="text-decoration-none">
                                                {{ $inquiry->phone }}
                                                <i class="fab fa-whatsapp ms-2 text-success"></i>
                                            </a>
                                        @else
                                            <span class="text-muted">Not provided</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-muted small text-uppercase mb-1">Company</label>
                                    <p class="mb-0">{{ $inquiry->company ?? 'Not provided' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-muted small text-uppercase mb-1">Type</label>
                                    <p class="mb-0">
                                        @if ($inquiry->user_type)
                                            @if ($inquiry->user_type == 'brand')
                                                <span class="badge bg-primary admin-badge">Brand</span>
                                            @else
                                                <span class="badge bg-info admin-badge">KOL</span>
                                            @endif
                                        @else
                                            <span class="text-muted">Not specified</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            @if ($inquiry->service_interest)
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="text-muted small text-uppercase mb-1">Service Interest</label>
                                        <p class="mb-0">
                                            <span class="badge bg-secondary admin-badge">
                                                {{ ucfirst(str_replace('-', ' ', $inquiry->service_interest)) }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Message -->
                <div class="admin-card">
                    <div class="admin-card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-comment me-2"></i>Message
                        </h5>
                    </div>
                    <div class="admin-card-body">
                        <div class="message-content" style="white-space: pre-wrap; line-height: 1.7;">
                            {{ $inquiry->message }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Status Management -->
                <div class="admin-card mb-4">
                    <div class="admin-card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-cog me-2"></i>Status Management
                        </h5>
                    </div>
                    <div class="admin-card-body">
                        <form action="{{ route('admin.inquiries.update-status', $inquiry->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="status" class="form-label fw-semibold">Current Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="new" {{ $inquiry->status == 'new' ? 'selected' : '' }}>New</option>
                                    <option value="contacted" {{ $inquiry->status == 'contacted' ? 'selected' : '' }}>
                                        Contacted</option>
                                    <option value="qualified" {{ $inquiry->status == 'qualified' ? 'selected' : '' }}>
                                        Qualified</option>
                                    <option value="closed" {{ $inquiry->status == 'closed' ? 'selected' : '' }}>Closed
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-save me-2"></i>Update Status
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Timestamps -->
                <div class="admin-card mb-4">
                    <div class="admin-card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-clock me-2"></i>Timestamps
                        </h5>
                    </div>
                    <div class="admin-card-body">
                        <div class="mb-3">
                            <label class="text-muted small text-uppercase mb-1">Submitted</label>
                            <p class="mb-0 fw-semibold">
                                {{ $inquiry->created_at->format('M d, Y') }}<br>
                                <small class="text-muted">{{ $inquiry->created_at->format('H:i:s') }}</small>
                            </p>
                        </div>
                        <div>
                            <label class="text-muted small text-uppercase mb-1">Last Updated</label>
                            <p class="mb-0 fw-semibold">
                                {{ $inquiry->updated_at->format('M d, Y') }}<br>
                                <small class="text-muted">{{ $inquiry->updated_at->format('H:i:s') }}</small>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="admin-card">
                    <div class="admin-card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-paper-plane me-2"></i>Quick Actions
                        </h5>
                    </div>
                    <div class="admin-card-body">
                        <div class="d-grid gap-2">
                            <a href="mailto:{{ $inquiry->email }}" class="btn btn-success">
                                <i class="fas fa-envelope me-2"></i>Send Email
                            </a>
                            @if ($inquiry->phone)
                                <a href="https://wa.me/{{ str_replace([' ', '-', '+'], '', $inquiry->phone) }}?text=Hi%20{{ urlencode($inquiry->name) }},%20Saya%20mengikuti%20up%20inquiry%20Anda%20tentang%20layanan%20ACV%20Management."
                                    class="btn btn-info" target="_blank">
                                    <i class="fab fa-whatsapp me-2"></i>WhatsApp
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
