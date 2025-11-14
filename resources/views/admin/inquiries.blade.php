@extends('layouts.admin')

@section('title', 'Inquiry Management')

@section('content')
    <div class="mb-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
            <div class="mb-3 mb-md-0">
                <h1 class="h3 mb-2">
                    <i class="fas fa-envelope me-2"></i>Inquiry Management
                </h1>
                <p class="text-muted mb-0">Kelola semua inquiry dari landing page</p>
            </div>
            <div class="d-flex gap-2 flex-wrap">
                <a href="{{ route('home') }}" class="btn btn-outline-secondary admin-btn-sm" target="_blank">
                    <i class="fas fa-external-link-alt me-2"></i>View Website
                </a>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="row g-3 mb-4">
            <div class="col-6 col-md-3">
                <div class="admin-stats-card">
                    <div class="admin-stats-number">{{ $stats['total'] ?? 0 }}</div>
                    <div class="admin-stats-label">Total</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="admin-stats-card">
                    <div class="admin-stats-number" style="color: #3b82f6;">{{ $stats['new'] ?? 0 }}</div>
                    <div class="admin-stats-label">New</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="admin-stats-card">
                    <div class="admin-stats-number" style="color: #f59e0b;">{{ $stats['contacted'] ?? 0 }}</div>
                    <div class="admin-stats-label">Contacted</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="admin-stats-card">
                    <div class="admin-stats-number" style="color: #10b981;">{{ $stats['qualified'] ?? 0 }}</div>
                    <div class="admin-stats-label">Qualified</div>
                </div>
            </div>
        </div>

        <!-- Filter Bar -->
        <form method="GET" action="{{ route('admin.inquiries') }}" class="admin-filter-bar">
            <div class="d-flex flex-column flex-md-row gap-2 w-100">
                <select name="status" class="admin-filter-select">
                    <option value="all" {{ request('status') == 'all' || !request('status') ? 'selected' : '' }}>All
                        Status</option>
                    <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                    <option value="contacted" {{ request('status') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                    <option value="qualified" {{ request('status') == 'qualified' ? 'selected' : '' }}>Qualified</option>
                    <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                </select>
                <select name="type" class="admin-filter-select">
                    <option value="all" {{ request('type') == 'all' || !request('type') ? 'selected' : '' }}>All Types
                    </option>
                    <option value="brand" {{ request('type') == 'brand' ? 'selected' : '' }}>Brand</option>
                    <option value="kol" {{ request('type') == 'kol' ? 'selected' : '' }}>KOL</option>
                </select>
                <button type="submit" class="btn btn-primary admin-btn-sm">
                    <i class="fas fa-filter me-2"></i>Filter
                </button>
                @if (request('status') || request('type'))
                    <a href="{{ route('admin.inquiries') }}" class="btn btn-outline-secondary admin-btn-sm">
                        <i class="fas fa-times me-2"></i>Clear
                    </a>
                @endif
            </div>
        </form>

        <!-- Inquiries Table -->
        <div class="admin-card">
            <div class="admin-card-header">
                <h5 class="mb-0">
                    <i class="fas fa-list me-2"></i>Inquiries ({{ $inquiries->count() }})
                </h5>
            </div>
            <div class="admin-card-body">
                <div class="admin-table-wrapper">
                    <table class="table admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($inquiries as $inquiry)
                                <tr>
                                    <td><strong>#{{ $inquiry->id }}</strong></td>
                                    <td>
                                        <a href="{{ route('admin.inquiries.show', $inquiry->id) }}"
                                            class="text-decoration-none fw-semibold">
                                            {{ \Illuminate\Support\Str::limit($inquiry->name, 20) }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="mailto:{{ $inquiry->email }}" class="text-decoration-none">
                                            {{ \Illuminate\Support\Str::limit($inquiry->email, 25) }}
                                        </a>
                                    </td>
                                    <td>
                                        @if ($inquiry->phone)
                                            <a href="https://wa.me/{{ str_replace([' ', '-', '+'], '', $inquiry->phone) }}"
                                                target="_blank" class="text-decoration-none">
                                                {{ \Illuminate\Support\Str::limit($inquiry->phone, 15) }}
                                            </a>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($inquiry->user_type)
                                            @if ($inquiry->user_type == 'brand')
                                                <span class="badge bg-primary admin-badge">Brand</span>
                                            @else
                                                <span class="badge bg-info admin-badge">KOL</span>
                                            @endif
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.inquiries.update-status', $inquiry->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" class="form-select form-select-sm"
                                                onchange="this.form.submit()" style="min-width: 120px;">
                                                <option value="new" {{ $inquiry->status == 'new' ? 'selected' : '' }}>
                                                    New</option>
                                                <option value="contacted"
                                                    {{ $inquiry->status == 'contacted' ? 'selected' : '' }}>Contacted
                                                </option>
                                                <option value="qualified"
                                                    {{ $inquiry->status == 'qualified' ? 'selected' : '' }}>Qualified
                                                </option>
                                                <option value="closed"
                                                    {{ $inquiry->status == 'closed' ? 'selected' : '' }}>Closed</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td>
                                        <small class="text-muted">
                                            {{ $inquiry->created_at->format('M d, Y') }}<br>
                                            <span class="d-md-none">{{ $inquiry->created_at->format('H:i') }}</span>
                                        </small>
                                    </td>
                                    <td>
                                        <div class="admin-btn-group">
                                            <a href="{{ route('admin.inquiries.show', $inquiry->id) }}"
                                                class="btn btn-primary admin-btn-sm" title="View Details">
                                                <i class="fas fa-eye"></i>
                                                <span class="d-none d-md-inline ms-1">View</span>
                                            </a>
                                            <a href="mailto:{{ $inquiry->email }}" class="btn btn-success admin-btn-sm"
                                                title="Send Email">
                                                <i class="fas fa-envelope"></i>
                                            </a>
                                            @if ($inquiry->phone)
                                                <a href="https://wa.me/{{ str_replace([' ', '-', '+'], '', $inquiry->phone) }}"
                                                    class="btn btn-info admin-btn-sm" target="_blank" title="WhatsApp">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-5">
                                        <i class="fas fa-inbox fa-3x mb-3 d-block"></i>
                                        <p class="mb-0">No inquiries found.</p>
                                        @if (request('status') || request('type'))
                                            <a href="{{ route('admin.inquiries') }}"
                                                class="btn btn-outline-primary btn-sm mt-2">
                                                Clear Filters
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

