<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | ACV Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .admin-login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%);
            padding: 2rem 1rem;
        }

        .admin-login-card {
            background: var(--white);
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 3rem;
            max-width: 450px;
            width: 100%;
        }

        .admin-login-logo {
            text-align: center;
            margin-bottom: 2rem;
        }

        .admin-login-logo img {
            max-width: 120px;
            height: auto;
        }

        .admin-login-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .admin-login-subtitle {
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 2rem;
        }

        .admin-login-form .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .admin-login-form .form-control {
            padding: 0.875rem 1rem;
            border-radius: 12px;
            border: 2px solid var(--border-color);
            font-size: 1rem;
        }

        .admin-login-form .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        .admin-login-btn {
            width: 100%;
            padding: 0.875rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 12px;
            background: var(--primary-gradient);
            border: none;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .admin-login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(99, 102, 241, 0.4);
        }

        .admin-login-back {
            text-align: center;
            margin-top: 1.5rem;
        }

        .admin-login-back a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9375rem;
        }

        .admin-login-back a:hover {
            color: var(--primary-color);
        }

        @media (max-width: 575.98px) {
            .admin-login-card {
                padding: 2rem 1.5rem;
                border-radius: 20px;
            }

            .admin-login-title {
                font-size: 1.5rem;
            }

            .admin-login-subtitle {
                font-size: 0.875rem;
            }
        }
    </style>
</head>

<body>
    <div class="admin-login-container">
        <div class="admin-login-card">
            <div class="admin-login-logo">
                <img src="{{ asset('/images/LOGO.png') }}" alt="ACV Management" onerror="this.style.display='none'">
            </div>
            <h1 class="admin-login-title">Admin Login</h1>
            <p class="admin-login-subtitle">Masuk ke dashboard admin ACV Management</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST" class="admin-login-form">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope me-2"></i>Email
                    </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock me-2"></i>Password
                    </label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn admin-login-btn">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </button>
            </form>

            <div class="admin-login-back">
                <a href="{{ route('home') }}">
                    <i class="fas fa-arrow-left me-2"></i>Back to Website
                </a>
            </div>
        </div>
    </div>
</body>

</html>

