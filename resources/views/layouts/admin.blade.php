<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | ACV Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .admin-navbar {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .admin-navbar .navbar-brand {
            font-weight: 700;
            font-size: 1.125rem;
        }

        .admin-navbar .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }

        .admin-navbar .nav-link:hover {
            color: var(--white) !important;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }

        .admin-container {
            padding: 2rem 0;
            min-height: calc(100vh - 70px);
        }

        .admin-card {
            border-radius: 16px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
        }

        .admin-card-header {
            background: var(--light-color);
            border-bottom: 1px solid var(--border-color);
            padding: 1.25rem 1.5rem;
            border-radius: 16px 16px 0 0;
        }

        .admin-card-body {
            padding: 1.5rem;
        }

        .admin-table {
            margin-bottom: 0;
        }

        .admin-table thead th {
            background: var(--light-color);
            font-weight: 600;
            color: var(--dark-color);
            border-bottom: 2px solid var(--border-color);
            padding: 1rem;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .admin-table tbody td {
            padding: 1rem;
            vertical-align: middle;
            font-size: 0.9375rem;
        }

        .admin-badge {
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8125rem;
            font-weight: 600;
        }

        .admin-btn-group {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .admin-btn-sm {
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            border-radius: 8px;
        }

        .admin-stats-card {
            background: var(--white);
            border-radius: 16px;
            padding: 1.5rem;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s ease;
        }

        .admin-stats-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .admin-stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .admin-stats-label {
            font-size: 0.875rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .admin-filter-bar {
            background: var(--white);
            border-radius: 12px;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            border: 1px solid var(--border-color);
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .admin-filter-select {
            padding: 0.625rem 1rem;
            border-radius: 8px;
            border: 2px solid var(--border-color);
            font-size: 0.9375rem;
            min-width: 150px;
        }

        .admin-filter-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        @media (max-width: 991.98px) {
            .admin-table {
                font-size: 0.875rem;
            }

            .admin-table thead th,
            .admin-table tbody td {
                padding: 0.75rem 0.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .admin-container {
                padding: 1rem 0;
            }

            .admin-card-body {
                padding: 1rem;
            }

            .admin-table-wrapper {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                margin: 0 -1rem;
                padding: 0 1rem;
            }

            .admin-table-wrapper::-webkit-scrollbar {
                display: none;
            }

            .admin-table {
                min-width: 900px;
                font-size: 0.875rem;
            }

            .admin-table thead th,
            .admin-table tbody td {
                padding: 0.75rem 0.5rem;
            }

            .admin-filter-bar {
                flex-direction: column;
                align-items: stretch;
                padding: 1rem;
            }

            .admin-filter-select {
                width: 100%;
            }

            .admin-btn-group {
                flex-direction: row;
                flex-wrap: wrap;
            }

            .admin-btn-group .btn {
                flex: 1 1 auto;
                min-width: 80px;
            }

            .admin-navbar .navbar-nav {
                margin-top: 1rem;
            }

            .admin-navbar .nav-link {
                padding: 0.75rem 1rem;
                border-radius: 8px;
            }
        }

        @media (max-width: 575.98px) {
            .admin-container {
                padding: 0.75rem 0;
            }

            .admin-card-header {
                padding: 1rem;
            }

            .admin-card-body {
                padding: 0.75rem;
            }

            .admin-stats-card {
                padding: 1rem;
            }

            .admin-stats-number {
                font-size: 1.5rem;
            }

            .admin-table {
                min-width: 800px;
                font-size: 0.8125rem;
            }

            .admin-table thead th {
                font-size: 0.75rem;
                padding: 0.625rem 0.375rem;
            }

            .admin-table tbody td {
                padding: 0.625rem 0.375rem;
            }

            .admin-btn-sm {
                padding: 0.375rem 0.5rem;
                font-size: 0.8125rem;
            }

            h1.h3 {
                font-size: 1.375rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark admin-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.inquiries') }}">
                <i class="fas fa-shield-alt me-2"></i>ACV Admin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.inquiries') }}">
                            <i class="fas fa-envelope me-2"></i>Inquiries
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" target="_blank">
                            <i class="fas fa-external-link-alt me-2"></i>View Website
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link border-0 bg-transparent text-start w-100">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="admin-container">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>

</html>
