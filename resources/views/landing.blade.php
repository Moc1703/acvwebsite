@extends('layouts.app')

@section('title', 'ACV Management | Solusi Influencer Marketing Terpercaya')

@section('content')

<!-- Hero Section -->
<section class="hero-section" id="home">
    <!-- Animated Background Elements -->
    <div class="hero-bg-elements">
        <div class="hero-blob blob-1"></div>
        <div class="hero-blob blob-2"></div>
        <div class="hero-blob blob-3"></div>
        <div class="hero-particles">
            <span class="particle"></span>
            <span class="particle"></span>
            <span class="particle"></span>
            <span class="particle"></span>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-7 hero-content-wrapper">
                <h1 class="hero-title">
                    <span class="hero-title-line">Your Digital Partner</span>
                    <span class="hero-title-line">For your campaigns</span>
                </h1>
                
                <p class="hero-subtitle">
                    100% Disesuaikan dengan Kebutuhan Brand Anda. Kami menghubungkan brand dengan influencer yang tepat menggunakan data dan analisis mendalam untuk memastikan setiap kampanye mencapai hasil optimal.
                </p>

                <!-- CTA Buttons -->
                <div class="hero-cta">
                    <a href="#contact" class="btn btn-modern btn-primary-modern btn-hero-primary">
                        <i class="fas fa-comments me-2"></i>
                        <span>Hubungi Specialist Kami</span>
                        <span class="badge-free">GRATIS!</span>
                    </a>
                    <a href="https://wa.me/6285939459783?text=Hi%20ACV%20Management,%20Saya%20tertarik%20dengan%20layanan%20Anda" 
                       class="btn btn-modern btn-outline-modern btn-hero-outline" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>
                        <span>Chat WhatsApp</span>
                    </a>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="col-lg-5 hero-visual-wrapper">
                <div class="hero-visual">
                    <div class="rocket-container">
                        <div class="rocket">
                            <i class="fas fa-rocket"></i>
                    </div>
                        <div class="rocket-trail">
                            <div class="trail-particle"></div>
                            <div class="trail-particle"></div>
                            <div class="trail-particle"></div>
                            <div class="trail-particle"></div>
                            <div class="trail-particle"></div>
                    </div>
                        <div class="rocket-stars">
                            <div class="star star-1">✨</div>
                            <div class="star star-2">⭐</div>
                            <div class="star star-3">✨</div>
                            <div class="star star-4">⭐</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="hero-scroll-indicator">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
        <span class="scroll-text">Scroll untuk explore</span>
    </div>
</section>

<!-- Why ACV Section -->
<section class="services-section" id="why-acv">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Kenapa ACV ada?</h2>
            <p class="section-subtitle">ACV Management menghubungkan brand dengan influencer yang tepat</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-info-item">
                    <i class="fas fa-search service-info-icon"></i>
                    <h4 class="service-info-title">KOL Matching yang Terukur</h4>
                    <p class="service-info-text">
                        Kami menggunakan data dan analisis mendalam untuk mencocokkan brand Anda dengan KOL yang paling relevan—berdasarkan audiens, engagement, dan citra personal.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-info-item">
                    <i class="fas fa-chart-area service-info-icon"></i>
                    <h4 class="service-info-title">Strategi Kampanye yang Berdampak</h4>
                    <p class="service-info-text">
                        Kami tidak hanya mengirim brief. Kami menyusun konsep kreatif, mengarahkan narasi konten, dan memastikan setiap postingan punya nilai strategis dan emosional.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-info-item">
                    <i class="fas fa-handshake service-info-icon"></i>
                    <h4 class="service-info-title">Manajemen End-to-End</h4>
                    <p class="service-info-text">
                        Dari seleksi, komunikasi, hingga pelaporan—semua diurus oleh tim kami. Klien cukup duduk tenang dan menunggu hasil.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio-section" id="portfolio">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Trusted by Leading Brands</h2>
            <p class="section-subtitle">Brand-brand terpercaya telah mempercayai ACV Management untuk kampanye influencer marketing mereka</p>
        </div>
        
        <!-- Brand Categories -->
        <div class="brand-categories mb-4">
            <div class="row g-3 justify-content-center">
                <div class="col-auto">
                    <span class="brand-category-badge active" data-category="all">Semua</span>
        </div>
                <div class="col-auto">
                    <span class="brand-category-badge" data-category="beauty">Beauty & Skincare</span>
                    </div>
                <div class="col-auto">
                    <span class="brand-category-badge" data-category="personal-care">Personal Care</span>
                </div>
                <div class="col-auto">
                    <span class="brand-category-badge" data-category="food">Food & Beverage</span>
                    </div>
                <div class="col-auto">
                    <span class="brand-category-badge" data-category="health">Health & Wellness</span>
                </div>
                <div class="col-auto">
                    <span class="brand-category-badge" data-category="fashion">Fashion & Lifestyle</span>
                    </div>
                <div class="col-auto">
                    <span class="brand-category-badge" data-category="tech">Technology & Finance</span>
                </div>
            </div>
        </div>

        <div class="portfolio-scroll-wrapper">
            <div class="portfolio-grid" id="portfolioGrid">
            <!-- Beauty & Skincare Brands -->
            <div class="portfolio-item" data-brand="somethinc" data-category="beauty">
                <img src="{{ asset('/images/somethinc.png') }}" alt="Somethinc" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=SOMETHINC';">
            </div>
            <div class="portfolio-item" data-brand="ms-glow" data-category="beauty">
                <img src="{{ asset('/images/msglow.png') }}" alt="MS Glow" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=MS+GLOW';">
            </div>
            <div class="portfolio-item" data-brand="azarine" data-category="beauty">
                <img src="{{ asset('/images/azarine.png') }}" alt="Azarine" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=AZARINE';">
            </div>
            <div class="portfolio-item" data-brand="wardah" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=WARDAH" alt="Wardah" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="pixy" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=PIXY" alt="Pixy" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="oh-my-glam" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=OH+MY+GLAM" alt="Oh My Glam" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="dazzle-me" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=DAZZLE+ME" alt="Dazzle Me" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="nurilab" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=NURILAB" alt="Nurilab" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="gizzi" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=GIZZI" alt="Gizzi" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="gedea" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=GEDEA" alt="Gedea" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="npure" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=NPURE" alt="NPure" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="raiku" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=RAIKU" alt="Raiku" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="ulthyme" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=ULTHYME" alt="Ulthyme" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="langfit" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=LANGFIT" alt="Langfit" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="carl-claire" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=CARL+%26+CLAIRE" alt="Carl & Claire" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="studio-tropic" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=STUDIO+TROPIC" alt="Studio Tropic" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="greenmom" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=GREENMOM" alt="Greenmom" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="plossa" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=PLOSSA" alt="Plossa" class="portfolio-logo" loading="lazy">
            </div>
            
            <!-- Personal Care Brands -->
            <div class="portfolio-item" data-brand="sunsilk" data-category="personal-care">
                <img src="{{ asset('/images/sunsilk.png') }}" alt="Sunsilk" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=SUNSILK';">
            </div>
            <div class="portfolio-item" data-brand="tresemme" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=TRESemme" alt="TRESemme" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="garnier" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=GARNIER" alt="Garnier" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="loreal" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=L'OREAL" alt="L'Oreal" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="maybelline" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=MAYBELLINE" alt="Maybelline" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="biore" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=BIORE" alt="Biore" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="downy" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=DOWNY" alt="Downy" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="mama-lemon" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=MAMA+LEMON" alt="Mama Lemon" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="pepsodent" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=PEPSODENT" alt="Pepsodent" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="sumber-ayu" data-category="personal-care">
                <img src="https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=SUMBER+AYU" alt="Sumber Ayu" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="anget-sari" data-category="personal-care">
                <img src="{{ asset('/images/angetsari.png') }}" alt="Anget Sari" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=ANGET+SARI';">
            </div>
            
            <!-- Food & Beverage Brands -->
            <div class="portfolio-item" data-brand="bango" data-category="food">
                <img src="https://via.placeholder.com/200x100/F59E0B/FFFFFF?text=BANGO" alt="Bango" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="bintang" data-category="food">
                <img src="https://via.placeholder.com/200x100/F59E0B/FFFFFF?text=BINTANG" alt="Bintang" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="yummysbaby" data-category="food">
                <img src="https://via.placeholder.com/200x100/F59E0B/FFFFFF?text=YUMMYSBABY" alt="Yummysbaby" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="daneen" data-category="food">
                <img src="{{ asset('/images/daneen.png') }}" alt="Daneen" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/F59E0B/FFFFFF?text=DANEEN';">
            </div>
            <div class="portfolio-item" data-brand="flimty" data-category="food">
                <img src="{{ asset('/images/flimty.png') }}" alt="Flimty" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/F59E0B/FFFFFF?text=FLIMTY';">
            </div>
            
            <!-- Health & Wellness Brands -->
            <div class="portfolio-item" data-brand="sangobion" data-category="health">
                <img src="https://via.placeholder.com/200x100/10B981/FFFFFF?text=SANGOBION" alt="Sangobion" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="amunizer" data-category="health">
                <img src="{{ asset('/images/amunizer.png') }}" alt="Amunizer" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/10B981/FFFFFF?text=AMUNIZER';">
            </div>
            <div class="portfolio-item" data-brand="y-o-u" data-category="health">
                <img src="{{ asset('/images/you.png') }}" alt="Y.O.U" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/10B981/FFFFFF?text=Y.O.U';">
            </div>
            
            <!-- Fashion & Lifestyle Brands -->
            <div class="portfolio-item" data-brand="edot" data-category="fashion">
                <img src="{{ asset('/images/edot.png') }}" alt="Edot" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/8B5CF6/FFFFFF?text=EDOT';">
            </div>
            <div class="portfolio-item" data-brand="rivera" data-category="fashion">
                <img src="{{ asset('/images/rivera.png') }}" alt="Rivera" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/8B5CF6/FFFFFF?text=RIVERA';">
            </div>
            
            <!-- Retail & E-commerce Brands -->
            <div class="portfolio-item" data-brand="watsons" data-category="fashion">
                <img src="https://via.placeholder.com/200x100/EF4444/FFFFFF?text=WATSONS" alt="Watsons" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="yup" data-category="fashion">
                <img src="https://via.placeholder.com/200x100/EF4444/FFFFFF?text=YUP" alt="Yup" class="portfolio-logo" loading="lazy">
            </div>
            
            <!-- Technology & Finance Brands -->
            <div class="portfolio-item" data-brand="gopay" data-category="tech">
                <img src="https://via.placeholder.com/200x100/00D9FF/FFFFFF?text=GOPAY" alt="GoPay" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="smartfren" data-category="tech">
                <img src="https://via.placeholder.com/200x100/00D9FF/FFFFFF?text=SMARTFREN" alt="Smartfren" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="xl" data-category="tech">
                <img src="{{ asset('/images/xl.png') }}" alt="XL" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/00D9FF/FFFFFF?text=XL';">
            </div>
            <div class="portfolio-item" data-brand="axis" data-category="tech">
                <img src="https://via.placeholder.com/200x100/00D9FF/FFFFFF?text=AXIS" alt="Axis" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="bybit" data-category="tech">
                <img src="https://via.placeholder.com/200x100/00D9FF/FFFFFF?text=BYBIT" alt="Bybit" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="ocbc" data-category="tech">
                <img src="https://via.placeholder.com/200x100/00D9FF/FFFFFF?text=OCBC" alt="OCBC" class="portfolio-logo" loading="lazy">
            </div>
            
            <!-- Automotive Brands -->
            <div class="portfolio-item" data-brand="wuling" data-category="tech">
                <img src="https://via.placeholder.com/200x100/1F2937/FFFFFF?text=WULING" alt="Wuling" class="portfolio-logo" loading="lazy">
            </div>
            <!-- Duplicate items for seamless scroll -->
            <!-- Beauty & Skincare Brands -->
            <div class="portfolio-item" data-brand="somethinc" data-category="beauty">
                <img src="{{ asset('/images/somethinc.png') }}" alt="Somethinc" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=SOMETHINC';">
            </div>
            <div class="portfolio-item" data-brand="ms-glow" data-category="beauty">
                <img src="{{ asset('/images/msglow.png') }}" alt="MS Glow" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=MS+GLOW';">
            </div>
            <div class="portfolio-item" data-brand="azarine" data-category="beauty">
                <img src="{{ asset('/images/azarine.png') }}" alt="Azarine" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=AZARINE';">
            </div>
            <div class="portfolio-item" data-brand="wardah" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=WARDAH" alt="Wardah" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="pixy" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=PIXY" alt="Pixy" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="oh-my-glam" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=OH+MY+GLAM" alt="Oh My Glam" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="dazzle-me" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=DAZZLE+ME" alt="Dazzle Me" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="nurilab" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=NURILAB" alt="Nurilab" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="gizzi" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=GIZZI" alt="Gizzi" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="gedea" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=GEDEA" alt="Gedea" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="npure" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=NPURE" alt="NPure" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="raiku" data-category="beauty">
                <img src="{{ asset('/images/raiku.png') }}" alt="Raiku" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=RAIKU';">
            </div>
            <div class="portfolio-item" data-brand="ulthyme" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=ULTHYME" alt="Ulthyme" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="langfit" data-category="beauty">
                <img src="{{ asset('/images/langfit.png') }}" alt="Langfit" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=LANGFIT';">
            </div>
            <div class="portfolio-item" data-brand="carl-claire" data-category="beauty">
                <img src="{{ asset('/images/carlclaire.png') }}" alt="Carl & Claire" class="portfolio-logo" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=CARL+%26+CLAIRE';">
            </div>
            <div class="portfolio-item" data-brand="studio-tropic" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=STUDIO+TROPIC" alt="Studio Tropic" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="greenmom" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=GREENMOM" alt="Greenmom" class="portfolio-logo" loading="lazy">
            </div>
            <div class="portfolio-item" data-brand="plossa" data-category="beauty">
                <img src="https://via.placeholder.com/200x100/FF6B9D/FFFFFF?text=PLOSSA" alt="Plossa" class="portfolio-logo" loading="lazy">
            </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Journey Section -->
<section class="customer-journey-section" id="journey">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Roadmap Kerja Sama</h2>
            <p class="section-subtitle">Alur proses kerja sama dari inisiasi hingga penyelesaian</p>
        </div>
        
        <!-- Mobile: Button to open modal -->
        <div class="text-center mb-4 d-md-none">
            <button type="button" class="btn btn-modern btn-primary-modern" data-bs-toggle="modal" data-bs-target="#journeyModal">
                <i class="fas fa-route me-2"></i>
                Lihat Roadmap Kerja Sama
            </button>
        </div>
        
        <!-- Desktop: Slideshow Container -->
        <div class="journey-slideshow-container d-none d-md-block">
            <div class="journey-slideshow-wrapper">
                <!-- Slide 1 -->
                <div class="journey-slide active">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">1</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-search journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Pencarian KOL oleh Calon Klien</h3>
                        <div class="journey-slide-description">
                            <p>Pada tahap awal, Brand melakukan pencarian dan identifikasi influencer yang sesuai dengan kebutuhan kampanye mereka. Proses ini meliputi:</p>
                            <ul>
                                <li>Analisis target audiens dan karakteristik produk/jasa yang akan dipromosikan</li>
                                <li>Pencarian KOL yang memiliki audiens relevan dengan target market Brand</li>
                                <li>Evaluasi profil, engagement rate, dan konten yang dihasilkan oleh calon KOL</li>
                                <li>Pertimbangan budget dan scope kampanye yang diinginkan</li>
                            </ul>
                            <p>Setelah melakukan riset awal, Brand kemudian mencari partner yang dapat membantu proses seleksi dan manajemen KOL secara profesional.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="journey-slide">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">2</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-handshake journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Kontak dengan ACV Management</h3>
                        <div class="journey-slide-description">
                            <p>Brand menghubungi ACV Management sebagai penyedia solusi influencer marketing yang terpercaya. Proses ini mencakup:</p>
                            <ul>
                                <li>Inisiasi komunikasi melalui berbagai channel (email, WhatsApp, telepon, atau media sosial)</li>
                                <li>Penyampaian kebutuhan dan tujuan kampanye yang ingin dicapai</li>
                                <li>Diskusi awal mengenai timeline, budget, dan ekspektasi hasil kampanye</li>
                                <li>Pertukaran informasi mengenai profil Brand dan produk/jasa yang akan dipromosikan</li>
                            </ul>
                            <p>ACV Management akan melakukan initial assessment untuk memahami kebutuhan Brand secara menyeluruh sebelum memberikan proposal yang sesuai.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="journey-slide">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">3</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-file-contract journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Negosiasi dan Perjanjian</h3>
                        <div class="journey-slide-description">
                            <p>Proses diskusi mendalam dilakukan untuk mencapai kesepakatan yang saling menguntungkan antara Brand dan ACV Management. Tahap ini meliputi:</p>
                            <ul>
                                <li>Pembahasan detail scope of work (SOW) yang mencakup jumlah KOL, jenis konten, platform yang digunakan, dan durasi kampanye</li>
                                <li>Negosiasi harga dan struktur pembayaran yang sesuai dengan budget Brand</li>
                                <li>Kesepakatan mengenai timeline pelaksanaan dan milestone yang harus dicapai</li>
                                <li>Pembahasan mengenai hak dan kewajiban masing-masing pihak</li>
                                <li>Penyusunan kontrak kerja yang mencakup semua aspek kesepakatan</li>
                            </ul>
                            <p>Setelah semua pihak menyetujui syarat dan ketentuan, kontrak kerja resmi ditandatangani sebagai dasar hukum kerja sama.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="journey-slide">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">4</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-users journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Seleksi dan Matching KOL</h3>
                        <div class="journey-slide-description">
                            <p>ACV Management melakukan proses seleksi dan penyesuaian KOL yang relevan dengan kebutuhan kampanye Brand. Proses ini mencakup:</p>
                            <ul>
                                <li>Analisis mendalam terhadap database KOL yang dimiliki ACV Management</li>
                                <li>Pencocokan profil KOL dengan target audiens dan karakteristik produk Brand</li>
                                <li>Evaluasi kualitas konten, engagement rate, dan reputasi KOL</li>
                                <li>Verifikasi ketersediaan KOL pada periode kampanye yang direncanakan</li>
                                <li>Penyusunan shortlist KOL yang sesuai untuk disampaikan kepada Brand</li>
                                <li>Diskusi dengan Brand untuk finalisasi pilihan KOL yang akan terlibat</li>
                            </ul>
                            <p>Proses matching ini memastikan bahwa setiap KOL yang dipilih memiliki relevansi tinggi dengan Brand dan dapat memberikan dampak optimal terhadap kampanye.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="journey-slide">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">5</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-chart-line journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Pelaksanaan dan Monitoring Kampanye</h3>
                        <div class="journey-slide-description">
                            <p>ACV Management mengelola pelaksanaan kampanye secara menyeluruh dan menyampaikan laporan berkala kepada Klien. Tahap ini meliputi:</p>
                            <ul>
                                <li>Koordinasi dengan KOL terkait brief konten, timeline posting, dan creative guidelines</li>
                                <li>Review dan approval konten sebelum dipublikasikan untuk memastikan sesuai dengan brand guidelines</li>
                                <li>Monitoring real-time terhadap performa konten yang dipublikasikan (likes, comments, shares, reach, impressions)</li>
                                <li>Manajemen komunikasi antara Brand dan KOL selama periode kampanye</li>
                                <li>Penyusunan laporan berkala (mingguan/bulanan) yang mencakup analisis performa dan insights</li>
                                <li>Optimasi kampanye berdasarkan data dan feedback yang diterima</li>
                            </ul>
                            <p>Selama proses ini, Brand dapat fokus pada bisnis inti mereka sementara ACV Management menangani semua aspek operasional kampanye.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="journey-slide">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">6</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-check-circle journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Penyelesaian Kampanye</h3>
                        <div class="journey-slide-description">
                            <p>Kampanye influencer marketing telah selesai dilaksanakan sesuai dengan kesepakatan yang telah ditetapkan. Tahap penyelesaian mencakup:</p>
                            <ul>
                                <li>Verifikasi bahwa semua konten telah dipublikasikan sesuai dengan timeline yang disepakati</li>
                                <li>Penyusunan laporan akhir kampanye yang komprehensif</li>
                                <li>Analisis hasil kampanye meliputi pencapaian KPI, ROI, dan dampak terhadap brand awareness</li>
                                <li>Penyampaian insights dan rekomendasi untuk kampanye selanjutnya</li>
                                <li>Arsip dokumentasi konten dan data kampanye untuk referensi Brand</li>
                                <li>Evaluasi bersama antara Brand dan ACV Management mengenai keberhasilan kampanye</li>
                            </ul>
                            <p>Laporan akhir ini memberikan gambaran menyeluruh mengenai performa kampanye dan dapat digunakan sebagai bahan evaluasi untuk strategi marketing selanjutnya.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 7 -->
                <div class="journey-slide">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">7</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-money-bill-wave journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Pelunasan oleh Klien</h3>
                        <div class="journey-slide-description">
                            <p>Klien melakukan pelunasan pembayaran kepada ACV Management sesuai dengan perjanjian yang telah disepakati dalam kontrak. Proses ini meliputi:</p>
                            <ul>
                                <li>Penerbitan invoice oleh ACV Management setelah kampanye selesai atau sesuai dengan milestone yang disepakati</li>
                                <li>Review invoice oleh Brand untuk memastikan semua item sesuai dengan kesepakatan</li>
                                <li>Proses approval pembayaran melalui departemen keuangan Brand</li>
                                <li>Transfer pembayaran melalui metode yang telah disepakati (transfer bank, virtual account, atau metode lainnya)</li>
                                <li>Konfirmasi penerimaan pembayaran oleh ACV Management</li>
                                <li>Penerbitan bukti pembayaran dan dokumen pendukung lainnya</li>
                            </ul>
                            <p>Pembayaran yang tepat waktu memastikan kelancaran proses distribusi fee kepada KOL dan menjaga hubungan baik antara semua pihak yang terlibat.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 8 -->
                <div class="journey-slide">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">8</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-share-alt journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Distribusi Pembayaran ke KOL</h3>
                        <div class="journey-slide-description">
                            <p>ACV Management mendistribusikan pembayaran kepada KOL yang terlibat dalam kampanye sesuai dengan kesepakatan yang telah dibuat. Proses ini mencakup:</p>
                            <ul>
                                <li>Verifikasi bahwa semua konten telah dipublikasikan sesuai dengan standar kualitas yang disepakati</li>
                                <li>Review performa konten untuk memastikan KOL telah memenuhi kewajibannya</li>
                                <li>Perhitungan fee masing-masing KOL berdasarkan kontrak yang telah disepakati</li>
                                <li>Penerbitan invoice atau dokumen pembayaran untuk setiap KOL</li>
                                <li>Proses transfer pembayaran kepada KOL melalui metode yang telah disepakati</li>
                                <li>Konfirmasi penerimaan pembayaran dari masing-masing KOL</li>
                            </ul>
                            <p>Distribusi pembayaran yang tepat waktu dan transparan menjaga kepercayaan KOL terhadap ACV Management dan memastikan ketersediaan mereka untuk kampanye selanjutnya.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 9 -->
                <div class="journey-slide">
                    <div class="journey-slide-content">
                        <div class="journey-slide-number">9</div>
                        <div class="journey-slide-icon-wrapper">
                            <i class="fas fa-flag-checkered journey-slide-icon"></i>
                        </div>
                        <h3 class="journey-slide-title">Penyelesaian Proses</h3>
                        <div class="journey-slide-description">
                            <p>Seluruh proses kerja sama telah diselesaikan dengan hasil yang memuaskan bagi semua pihak yang terlibat. Tahap akhir ini meliputi:</p>
                            <ul>
                                <li>Konfirmasi bahwa semua kewajiban kontraktual telah dipenuhi oleh semua pihak</li>
                                <li>Penyelesaian administrasi dan dokumentasi terkait kampanye</li>
                                <li>Evaluasi keseluruhan proses kerja sama untuk identifikasi area perbaikan</li>
                                <li>Gathering feedback dari Brand dan KOL mengenai pengalaman kerja sama</li>
                                <li>Penyusunan rekomendasi untuk kerja sama lanjutan atau kampanye berikutnya</li>
                                <li>Maintenance hubungan baik dengan Brand dan KOL untuk peluang kerja sama di masa depan</li>
                            </ul>
                            <p>Proses yang telah diselesaikan dengan baik menjadi fondasi untuk membangun hubungan jangka panjang dan kerja sama yang lebih sukses di masa depan. ACV Management berkomitmen untuk terus memberikan layanan terbaik dan mendukung kesuksesan kampanye marketing Brand.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="journey-slide-nav journey-slide-prev" id="prevSlide">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="journey-slide-nav journey-slide-next" id="nextSlide">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Slide Indicators -->
            <div class="journey-slide-indicators">
                <span class="journey-slide-dot active" data-slide="0"></span>
                <span class="journey-slide-dot" data-slide="1"></span>
                <span class="journey-slide-dot" data-slide="2"></span>
                <span class="journey-slide-dot" data-slide="3"></span>
                <span class="journey-slide-dot" data-slide="4"></span>
                <span class="journey-slide-dot" data-slide="5"></span>
                <span class="journey-slide-dot" data-slide="6"></span>
                <span class="journey-slide-dot" data-slide="7"></span>
                <span class="journey-slide-dot" data-slide="8"></span>
            </div>

            <!-- Slide Counter -->
            <div class="journey-slide-counter">
                <span id="currentSlide">1</span> / <span id="totalSlides">9</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <h2 class="section-title">Contact Us</h2>
                    <p class="section-subtitle">Mari kita mulai bekerja sama</p>
                </div>
                
                <!-- Contact Info -->
                <div class="row g-4 mb-5 justify-content-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-card-modern" data-type="email">
                            <div class="contact-card-icon-wrapper">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5 class="contact-card-title">Email</h5>
                            <div class="contact-reveal-wrapper-modern">
                                <button type="button" class="btn-reveal-modern" data-type="email" data-value="ayuthiacv@gmail.com">
                                    <span class="reveal-text">Reveal</span>
                                    <i class="fas fa-lock reveal-icon"></i>
                                </button>
                                <div class="contact-revealed-modern d-none">
                                    <a href="mailto:ayuthiacv@gmail.com" class="contact-link-modern">
                                        <span>ayuthiacv@gmail.com</span>
                                        <i class="fas fa-external-link-alt ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-card-modern" data-type="phone">
                            <div class="contact-card-icon-wrapper">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h5 class="contact-card-title">Phone</h5>
                            <div class="contact-reveal-wrapper-modern">
                                <button type="button" class="btn-reveal-modern" data-type="phone" data-value="085939459783">
                                    <span class="reveal-text">Reveal</span>
                                    <i class="fas fa-lock reveal-icon"></i>
                                </button>
                                <div class="contact-revealed-modern d-none">
                                    <a href="tel:085939459783" class="contact-link-modern">
                                        <span>0859 3945 9783</span>
                                        <i class="fas fa-phone ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-card-modern" data-type="instagram">
                            <div class="contact-card-icon-wrapper">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <h5 class="contact-card-title">Instagram</h5>
                            <div class="contact-reveal-wrapper-modern">
                                <button type="button" class="btn-reveal-modern" data-type="instagram" data-value="acv.management">
                                    <span class="reveal-text">Reveal</span>
                                    <i class="fas fa-lock reveal-icon"></i>
                                </button>
                                <div class="contact-revealed-modern d-none">
                                    <a href="https://instagram.com/acv.management" target="_blank" class="contact-link-modern">
                                        <span>@acv.management</span>
                                        <i class="fas fa-external-link-alt ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form with Tabs -->
                <div class="contact-form">
                    <!-- Tab Navigation -->
                    <ul class="nav nav-tabs form-tabs mb-4" id="contactTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ old('user_type') == 'kol' ? '' : 'active' }}" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand-form" type="button" role="tab" aria-controls="brand-form" aria-selected="{{ old('user_type') == 'kol' ? 'false' : 'true' }}">
                                <i class="fas fa-building me-2"></i>Saya Brand
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ old('user_type') == 'kol' ? 'active' : '' }}" id="kol-tab" data-bs-toggle="tab" data-bs-target="#kol-form" type="button" role="tab" aria-controls="kol-form" aria-selected="{{ old('user_type') == 'kol' ? 'true' : 'false' }}">
                                <i class="fas fa-user-circle me-2"></i>Saya KOL
                            </button>
                        </li>
                    </ul>
                    
                    @if(old('user_type'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const userType = '{{ old("user_type") }}';
                            if (userType) {
                                const tabElement = document.getElementById(userType + '-tab');
                                if (tabElement && typeof bootstrap !== 'undefined') {
                                    const tab = new bootstrap.Tab(tabElement);
                                    tab.show();
                                }
                            }
                        });
                    </script>
                    @endif

                    <!-- Tab Content -->
                    <div class="tab-content" id="contactTabsContent">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Brand Form Tab -->
                        <div class="tab-pane fade {{ old('user_type') == 'kol' ? '' : 'show active' }}" id="brand-form" role="tabpanel" aria-labelledby="brand-tab">
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_type" value="brand">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                        <label for="brand_name" class="form-label">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                               id="brand_name" name="name" value="{{ old('name', old('user_type') == 'brand' ? old('name') : '') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                        <label for="brand_email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                               id="brand_email" name="email" value="{{ old('email', old('user_type') == 'brand' ? old('email') : '') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                        <label for="brand_phone" class="form-label">Telepon</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                               id="brand_phone" name="phone" value="{{ old('phone', old('user_type') == 'brand' ? old('phone') : '') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                        <label for="brand_company" class="form-label">Nama Perusahaan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('company') is-invalid @enderror" 
                                               id="brand_company" name="company" value="{{ old('company', old('user_type') == 'brand' ? old('company') : '') }}" required>
                                @error('company')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                                    <label for="brand_message" class="form-label">Pesan / Kebutuhan Kampanye <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                              id="brand_message" name="message" rows="5" required>{{ old('message', old('user_type') == 'brand' ? old('message') : '') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-modern btn-primary-modern">
                                <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>

                        <!-- KOL Form Tab -->
                        <div class="tab-pane fade {{ old('user_type') == 'kol' ? 'show active' : '' }}" id="kol-form" role="tabpanel" aria-labelledby="kol-tab">
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_type" value="kol">
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="kol_name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                               id="kol_name" name="name" value="{{ old('name', old('user_type') == 'kol' ? old('name') : '') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="kol_email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                               id="kol_email" name="email" value="{{ old('email', old('user_type') == 'kol' ? old('email') : '') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="kol_phone" class="form-label">Telepon / WhatsApp <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                               id="kol_phone" name="phone" value="{{ old('phone', old('user_type') == 'kol' ? old('phone') : '') }}" required>
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="kol_instagram" class="form-label">Instagram Handle</label>
                                        <input type="text" class="form-control @error('company') is-invalid @enderror" 
                                               id="kol_instagram" name="company" value="{{ old('company', old('user_type') == 'kol' ? old('company') : '') }}" placeholder="@username">
                                        @error('company')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="kol_message" class="form-label">Tentang Saya / Portfolio <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" 
                                              id="kol_message" name="message" rows="5" required placeholder="Ceritakan tentang diri Anda, niche konten, follower count, engagement rate, dll.">{{ old('message', old('user_type') == 'kol' ? old('message') : '') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-modern btn-primary-modern">
                                        <i class="fas fa-paper-plane me-2"></i>Daftar sebagai KOL
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Journey Modal for Mobile -->
<div class="modal fade" id="journeyModal" tabindex="-1" aria-labelledby="journeyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
        <div class="modal-content journey-modal-content">
            <div class="modal-header journey-modal-header">
                <h5 class="modal-title" id="journeyModalLabel">
                    <i class="fas fa-route me-2"></i>Roadmap Kerja Sama
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body journey-modal-body">
                <!-- Slideshow Container for Modal -->
                <div class="journey-slideshow-container journey-modal-slideshow">
                    <div class="journey-slideshow-wrapper">
                        <!-- Slide 1 -->
                        <div class="journey-slide active">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">1</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-search journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Pencarian KOL oleh Calon Klien</h3>
                                <div class="journey-slide-description">
                                    <p>Pada tahap awal, Brand melakukan pencarian dan identifikasi influencer yang sesuai dengan kebutuhan kampanye mereka. Proses ini meliputi:</p>
                                    <ul>
                                        <li>Analisis target audiens dan karakteristik produk/jasa yang akan dipromosikan</li>
                                        <li>Pencarian KOL yang memiliki audiens relevan dengan target market Brand</li>
                                        <li>Evaluasi profil, engagement rate, dan konten yang dihasilkan oleh calon KOL</li>
                                        <li>Pertimbangan budget dan scope kampanye yang diinginkan</li>
                                    </ul>
                                    <p>Setelah melakukan riset awal, Brand kemudian mencari partner yang dapat membantu proses seleksi dan manajemen KOL secara profesional.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="journey-slide">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">2</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-handshake journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Kontak dengan ACV Management</h3>
                                <div class="journey-slide-description">
                                    <p>Brand menghubungi ACV Management sebagai penyedia solusi influencer marketing yang terpercaya. Proses ini mencakup:</p>
                                    <ul>
                                        <li>Inisiasi komunikasi melalui berbagai channel (email, WhatsApp, telepon, atau media sosial)</li>
                                        <li>Penyampaian kebutuhan dan tujuan kampanye yang ingin dicapai</li>
                                        <li>Diskusi awal mengenai timeline, budget, dan ekspektasi hasil kampanye</li>
                                        <li>Pertukaran informasi mengenai profil Brand dan produk/jasa yang akan dipromosikan</li>
                                    </ul>
                                    <p>ACV Management akan melakukan initial assessment untuk memahami kebutuhan Brand secara menyeluruh sebelum memberikan proposal yang sesuai.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="journey-slide">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">3</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-file-contract journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Negosiasi dan Perjanjian</h3>
                                <div class="journey-slide-description">
                                    <p>Proses diskusi mendalam dilakukan untuk mencapai kesepakatan yang saling menguntungkan antara Brand dan ACV Management. Tahap ini meliputi:</p>
                                    <ul>
                                        <li>Pembahasan detail scope of work (SOW) yang mencakup jumlah KOL, jenis konten, platform yang digunakan, dan durasi kampanye</li>
                                        <li>Negosiasi harga dan struktur pembayaran yang sesuai dengan budget Brand</li>
                                        <li>Kesepakatan mengenai timeline pelaksanaan dan milestone yang harus dicapai</li>
                                        <li>Pembahasan mengenai hak dan kewajiban masing-masing pihak</li>
                                        <li>Penyusunan kontrak kerja yang mencakup semua aspek kesepakatan</li>
                                    </ul>
                                    <p>Setelah semua pihak menyetujui syarat dan ketentuan, kontrak kerja resmi ditandatangani sebagai dasar hukum kerja sama.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="journey-slide">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">4</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-users journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Seleksi dan Matching KOL</h3>
                                <div class="journey-slide-description">
                                    <p>ACV Management melakukan proses seleksi dan penyesuaian KOL yang relevan dengan kebutuhan kampanye Brand. Proses ini mencakup:</p>
                                    <ul>
                                        <li>Analisis mendalam terhadap database KOL yang dimiliki ACV Management</li>
                                        <li>Pencocokan profil KOL dengan target audiens dan karakteristik produk Brand</li>
                                        <li>Evaluasi kualitas konten, engagement rate, dan reputasi KOL</li>
                                        <li>Verifikasi ketersediaan KOL pada periode kampanye yang direncanakan</li>
                                        <li>Penyusunan shortlist KOL yang sesuai untuk disampaikan kepada Brand</li>
                                        <li>Diskusi dengan Brand untuk finalisasi pilihan KOL yang akan terlibat</li>
                                    </ul>
                                    <p>Proses matching ini memastikan bahwa setiap KOL yang dipilih memiliki relevansi tinggi dengan Brand dan dapat memberikan dampak optimal terhadap kampanye.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="journey-slide">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">5</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-chart-line journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Pelaksanaan dan Monitoring Kampanye</h3>
                                <div class="journey-slide-description">
                                    <p>ACV Management mengelola pelaksanaan kampanye secara menyeluruh dan menyampaikan laporan berkala kepada Klien. Tahap ini meliputi:</p>
                                    <ul>
                                        <li>Koordinasi dengan KOL terkait brief konten, timeline posting, dan creative guidelines</li>
                                        <li>Review dan approval konten sebelum dipublikasikan untuk memastikan sesuai dengan brand guidelines</li>
                                        <li>Monitoring real-time terhadap performa konten yang dipublikasikan (likes, comments, shares, reach, impressions)</li>
                                        <li>Manajemen komunikasi antara Brand dan KOL selama periode kampanye</li>
                                        <li>Penyusunan laporan berkala (mingguan/bulanan) yang mencakup analisis performa dan insights</li>
                                        <li>Optimasi kampanye berdasarkan data dan feedback yang diterima</li>
                                    </ul>
                                    <p>Selama proses ini, Brand dapat fokus pada bisnis inti mereka sementara ACV Management menangani semua aspek operasional kampanye.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="journey-slide">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">6</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-check-circle journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Penyelesaian Kampanye</h3>
                                <div class="journey-slide-description">
                                    <p>Kampanye influencer marketing telah selesai dilaksanakan sesuai dengan kesepakatan yang telah ditetapkan. Tahap penyelesaian mencakup:</p>
                                    <ul>
                                        <li>Verifikasi bahwa semua konten telah dipublikasikan sesuai dengan timeline yang disepakati</li>
                                        <li>Penyusunan laporan akhir kampanye yang komprehensif</li>
                                        <li>Analisis hasil kampanye meliputi pencapaian KPI, ROI, dan dampak terhadap brand awareness</li>
                                        <li>Penyampaian insights dan rekomendasi untuk kampanye selanjutnya</li>
                                        <li>Arsip dokumentasi konten dan data kampanye untuk referensi Brand</li>
                                        <li>Evaluasi bersama antara Brand dan ACV Management mengenai keberhasilan kampanye</li>
                                    </ul>
                                    <p>Laporan akhir ini memberikan gambaran menyeluruh mengenai performa kampanye dan dapat digunakan sebagai bahan evaluasi untuk strategi marketing selanjutnya.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 7 -->
                        <div class="journey-slide">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">7</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-money-bill-wave journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Pelunasan oleh Klien</h3>
                                <div class="journey-slide-description">
                                    <p>Klien melakukan pelunasan pembayaran kepada ACV Management sesuai dengan perjanjian yang telah disepakati dalam kontrak. Proses ini meliputi:</p>
                                    <ul>
                                        <li>Penerbitan invoice oleh ACV Management setelah kampanye selesai atau sesuai dengan milestone yang disepakati</li>
                                        <li>Review invoice oleh Brand untuk memastikan semua item sesuai dengan kesepakatan</li>
                                        <li>Proses approval pembayaran melalui departemen keuangan Brand</li>
                                        <li>Transfer pembayaran melalui metode yang telah disepakati (transfer bank, virtual account, atau metode lainnya)</li>
                                        <li>Konfirmasi penerimaan pembayaran oleh ACV Management</li>
                                        <li>Penerbitan bukti pembayaran dan dokumen pendukung lainnya</li>
                                    </ul>
                                    <p>Pembayaran yang tepat waktu memastikan kelancaran proses distribusi fee kepada KOL dan menjaga hubungan baik antara semua pihak yang terlibat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 8 -->
                        <div class="journey-slide">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">8</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-share-alt journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Distribusi Pembayaran ke KOL</h3>
                                <div class="journey-slide-description">
                                    <p>ACV Management mendistribusikan pembayaran kepada KOL yang terlibat dalam kampanye sesuai dengan kesepakatan yang telah dibuat. Proses ini mencakup:</p>
                                    <ul>
                                        <li>Verifikasi bahwa semua konten telah dipublikasikan sesuai dengan standar kualitas yang disepakati</li>
                                        <li>Review performa konten untuk memastikan KOL telah memenuhi kewajibannya</li>
                                        <li>Perhitungan fee masing-masing KOL berdasarkan kontrak yang telah disepakati</li>
                                        <li>Penerbitan invoice atau dokumen pembayaran untuk setiap KOL</li>
                                        <li>Proses transfer pembayaran kepada KOL melalui metode yang telah disepakati</li>
                                        <li>Konfirmasi penerimaan pembayaran dari masing-masing KOL</li>
                                    </ul>
                                    <p>Distribusi pembayaran yang tepat waktu dan transparan menjaga kepercayaan KOL terhadap ACV Management dan memastikan ketersediaan mereka untuk kampanye selanjutnya.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 9 -->
                        <div class="journey-slide">
                            <div class="journey-slide-content">
                                <div class="journey-slide-number">9</div>
                                <div class="journey-slide-icon-wrapper">
                                    <i class="fas fa-flag-checkered journey-slide-icon"></i>
                                </div>
                                <h3 class="journey-slide-title">Penyelesaian Proses</h3>
                                <div class="journey-slide-description">
                                    <p>Semua proses telah selesai dan kampanye telah ditutup dengan baik. Tahap akhir ini mencakup:</p>
                                    <ul>
                                        <li>Penyelesaian semua administrasi dan dokumentasi kampanye</li>
                                        <li>Arsip semua dokumen penting untuk referensi di masa depan</li>
                                        <li>Evaluasi keseluruhan proses kerja sama antara Brand dan ACV Management</li>
                                        <li>Diskusi mengenai potensi kerja sama lanjutan atau kampanye follow-up</li>
                                        <li>Penyampaian testimoni atau feedback dari Brand mengenai layanan ACV Management</li>
                                        <li>Maintenance hubungan baik untuk kemungkinan kerja sama di masa depan</li>
                                    </ul>
                                    <p>Proses yang baik di tahap akhir ini memastikan kepuasan semua pihak dan membuka peluang untuk kerja sama berkelanjutan.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <button class="journey-slide-nav journey-slide-prev" id="modalPrevSlide">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="journey-slide-nav journey-slide-next" id="modalNextSlide">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- Slide Indicators -->
                    <div class="journey-slide-indicators">
                        <span class="journey-slide-dot active" data-slide="0"></span>
                        <span class="journey-slide-dot" data-slide="1"></span>
                        <span class="journey-slide-dot" data-slide="2"></span>
                        <span class="journey-slide-dot" data-slide="3"></span>
                        <span class="journey-slide-dot" data-slide="4"></span>
                        <span class="journey-slide-dot" data-slide="5"></span>
                        <span class="journey-slide-dot" data-slide="6"></span>
                        <span class="journey-slide-dot" data-slide="7"></span>
                        <span class="journey-slide-dot" data-slide="8"></span>
                    </div>

                    <!-- Slide Counter -->
                    <div class="journey-slide-counter">
                        <span id="modalCurrentSlide">1</span> / <span id="modalTotalSlides">9</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2 class="cta-title">Siap Meningkatkan Brand Anda?</h2>
        <p class="cta-subtitle">Mulai kampanye influencer marketing Anda hari ini dan raih hasil maksimal</p>
        <div class="d-flex flex-column flex-sm-row flex-wrap justify-content-center gap-3" style="position: relative; z-index: 1;">
            <a href="#contact" class="btn btn-modern btn-primary-modern">
                <i class="fas fa-rocket me-2"></i>Mulai Kampanye
            </a>
            <a href="https://wa.me/6285939459783?text=Hi%20ACV%20Management,%20Saya%20tertarik%20dengan%20layanan%20Anda" 
               class="btn btn-modern btn-outline-modern" target="_blank">
                <i class="fab fa-whatsapp me-2"></i>Chat di WhatsApp
            </a>
        </div>
</div>
</section>

@endsection
