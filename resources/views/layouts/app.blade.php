<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'ACV Management | Solusi Influencer Marketing Terpercaya di Indonesia')</title>
    <meta name="title" content="@yield('meta_title', 'ACV Management | Solusi Influencer Marketing Terpercaya di Indonesia')">
    <meta name="description" content="@yield('description', 'ACV Management - Solusi influencer marketing yang efektif, terukur, dan efisien. Menghubungkan brand dengan influencer yang tepat menggunakan data dan analisis mendalam untuk hasil optimal.')">
    <meta name="keywords"
        content="ACV Management, Ayatha Creative Ventures, jasa influencer marketing, influencer Indonesia, brand partnership, social media marketing, KOL matching, influencer campaign, digital marketing agency Indonesia, brand collaboration, content creator Indonesia, influencer marketing Jakarta">
    <meta name="author" content="ACV Management - Ayatha Creative Ventures">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    <meta name="theme-color" content="#6366f1">
    <meta name="geo.region" content="ID">
    <meta name="geo.placename" content="Indonesia">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og:title', 'ACV Management - Solusi Influencer Marketing Profesional')">
    <meta property="og:description" content="@yield('og:description', 'Solusi influencer marketing yang efektif, terukur, dan efisien. Menghubungkan brand dengan influencer yang tepat menggunakan data dan analisis mendalam.')">
    <meta property="og:image" content="@yield('og:image', asset('/images/LOGO.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="ACV Management - Influencer Marketing Agency">
    <meta property="og:site_name" content="ACV Management - Ayatha Creative Ventures">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('twitter:title', 'ACV Management - Solusi Influencer Marketing')">
    <meta name="twitter:description" content="@yield('twitter:description', 'Solusi influencer marketing yang efektif, terukur, dan efisien untuk brand Anda')">
    <meta name="twitter:image" content="@yield('og:image', asset('/images/LOGO.png'))">
    <meta name="twitter:image:alt" content="ACV Management - Influencer Marketing Agency">
    <meta name="twitter:site" content="@acvmanagement">
    <meta name="twitter:creator" content="@acvmanagement">

    <!-- Additional SEO -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=yes">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s;
        }

        .whatsapp-float:hover {
            background-color: #20ba5a;
            color: #FFF;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="navbar-logo">
                    <img src="{{ asset('/images/LOGO.png') }}" alt="ACV Management Logo">
                </div>
                <div class="navbar-brand-text">
                    <span class="navbar-brand-main">ACV</span>
                    <span class="navbar-brand-sub">Management</span>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#why-acv">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="https://wa.me/6285939459783?text=Hi%20ACV%20Management,%20Saya%20tertarik%20dengan%20layanan%20Anda"
                            class="btn btn-whatsapp-nav" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-modern">
        <div class="container">
            <div class="row g-4 mb-4">
                <!-- Brand Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <h5 class="footer-brand-title">ACV Management</h5>
                        <p class="footer-brand-description">Your trusted partner for professional influencer marketing
                            campaigns and brand collaborations.</p>
                    </div>
                </div>

                <!-- Services -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-section-title">Layanan</h6>
                    <ul class="footer-links">
                        <li><a href="#why-acv">KOL Matching</a></li>
                        <li><a href="#why-acv">Strategi Kampanye</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-section-title">Contact</h6>
                    <ul class="footer-contact">
                        <li>
                            <a href="mailto:ayuthiacv@gmail.com">
                                <i class="fas fa-envelope me-2"></i>
                                <span>ayuthiacv@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:085939459783">
                                <i class="fas fa-phone me-2"></i>
                                <span>+62 859-3945-9783</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/acv.management" target="_blank">
                                <i class="fab fa-instagram me-2"></i>
                                <span>@acv.management</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-section-title">Follow Us</h6>
                    <div class="footer-social">
                        <a href="https://instagram.com/acv.management" target="_blank" class="social-link"
                            aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/6285939459783" target="_blank" class="social-link"
                            aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-bottom">
                <hr class="footer-divider">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="footer-copyright mb-0">&copy; {{ date('Y') }} ACV Management - Ayatha Creative
                            Ventures. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="footer-tagline mb-0">Empowering Brands Through Influencer Marketing</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/6285939459783?text=Hi%20ACV%20Management,%20Saya%20tertarik%20dengan%20layanan%20Anda"
        class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    @if (session('success'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3" style="z-index: 9999;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3" style="z-index: 9999;">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif

    <!-- Structured Data (JSON-LD) -->
    @php
        $organizationSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'ACV Management - Ayatha Creative Ventures',
            'alternateName' => 'ACV Management',
            'url' => url('/'),
            'logo' => asset('/images/LOGO.png'),
            'description' =>
                'Solusi influencer marketing yang efektif, terukur, dan efisien. Menghubungkan brand dengan influencer yang tepat menggunakan data dan analisis mendalam.',
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'ID',
                'addressLocality' => 'Indonesia',
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+62-859-3945-9783',
                'contactType' => 'Customer Service',
                'email' => 'ayuthiacv@gmail.com',
                'availableLanguage' => ['Indonesian', 'English'],
            ],
            'sameAs' => ['https://instagram.com/acv.management', 'https://wa.me/6285939459783'],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Indonesia',
            ],
            'knowsAbout' => [
                'Influencer Marketing',
                'Digital Marketing',
                'Brand Partnership',
                'Social Media Marketing',
                'KOL Matching',
                'Content Creator Management',
            ],
        ];

        $serviceSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Influencer Marketing Agency',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'ACV Management',
                'url' => url('/'),
            ],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Indonesia',
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Influencer Marketing Services',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'KOL Matching',
                            'description' =>
                                'Mencocokkan brand dengan influencer yang tepat berdasarkan data dan analisis mendalam',
                        ],
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Strategi Kampanye',
                            'description' =>
                                'Mengembangkan strategi kampanye influencer marketing yang efektif dan terukur',
                        ],
                    ],
                ],
            ],
        ];
    @endphp

    <script type="application/ld+json">
    {!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <script type="application/ld+json">
    {!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

</body>

</html>
