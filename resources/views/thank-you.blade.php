@extends('layouts.app')

@section('title', 'Thank You - KOL Specialist')

@section('content')
<section class="py-5" style="min-height: 80vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-4">
                    <i class="fas fa-check-circle text-success" style="font-size: 80px;"></i>
                </div>
                <h1 class="display-4 fw-bold mb-4">Thank You!</h1>
                <p class="lead mb-4">
                    Your inquiry has been successfully submitted. Our team will review your message and get back to you within 24 hours.
                </p>

                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">What happens next?</h5>
                        <div class="row text-start">
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">1</div>
                                    <div>
                                        <h6 class="mb-0">Review</h6>
                                        <small class="text-muted">We'll review your inquiry</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">2</div>
                                    <div>
                                        <h6 class="mb-0">Response</h6>
                                        <small class="text-muted">We'll contact you within 24 hours</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">3</div>
                                    <div>
                                        <h6 class="mb-0">Consultation</h6>
                                        <small class="text-muted">Free strategy consultation</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-home me-2"></i>Back to Home
                    </a>
                    <a href="https://wa.me/6285939459783?text=Hi%20ACV%20Management,%20Saya%20baru%20mengirim%20inquiry%20dan%20punya%20pertanyaan%20cepat"
                       class="btn btn-success btn-lg" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp
                    </a>
                </div>

                <div class="mt-5">
                    <h5 class="mb-3">Need immediate assistance?</h5>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2" style="font-size: 24px;"></i>
                                    <h6 class="card-title">Email</h6>
                                    <a href="mailto:ayuthiacv@gmail.com" class="text-decoration-none">
                                        ayuthiacv@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <i class="fab fa-whatsapp text-success mb-2" style="font-size: 24px;"></i>
                                    <h6 class="card-title">WhatsApp</h6>
                                    <a href="https://wa.me/6285939459783" class="text-decoration-none">
                                        +62 859-3945-9783
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection