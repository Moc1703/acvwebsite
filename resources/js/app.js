import "bootstrap/dist/js/bootstrap.bundle.min.js";

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    });
});

// Navbar scroll effect
window.addEventListener("scroll", function () {
    const navbar = document.getElementById("mainNavbar");
    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    }
});

// Form submission handling - handle any form with name/email/message fields
document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll('form[action*="contact"]');
    forms.forEach((form) => {
        form.addEventListener("submit", function (e) {
            const name = form.querySelector('[name="name"]');
            const email = form.querySelector('[name="email"]');
            const message = form.querySelector('[name="message"]');
            const submitBtn = form.querySelector('button[type="submit"]');

            if (name && email && message) {
                if (
                    !name.value.trim() ||
                    !email.value.trim() ||
                    !message.value.trim()
                ) {
                    e.preventDefault();
                    alert("Please fill in all required fields");
                    return;
                }

                // Show loading state
                if (submitBtn) {
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML =
                        '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
                    submitBtn.disabled = true;
                }
            }
        });
    });

    // Handle broken images - show text fallback
    const portfolioItemsAll = document.querySelectorAll(".portfolio-item");
    portfolioItemsAll.forEach((item) => {
        const img = item.querySelector(".portfolio-logo");
        if (img) {
            // Create fallback element if it doesn't exist
            let fallback = item.querySelector(".portfolio-logo-fallback");
            if (!fallback) {
                fallback = document.createElement("div");
                fallback.className = "portfolio-logo-fallback";
                // Get brand name from alt text or data-brand
                const brandName =
                    img.getAttribute("alt") ||
                    item.getAttribute("data-brand") ||
                    "Brand";
                // Clean up brand name - remove special chars, keep only letters, numbers, spaces
                const cleanName = brandName
                    .toUpperCase()
                    .replace(/[^A-Z0-9\s&]/g, "")
                    .replace(/\s+/g, " ")
                    .trim();
                fallback.textContent = cleanName || "BRAND";
                fallback.style.display = "none";
                img.parentNode.insertBefore(fallback, img.nextSibling);
            }

            // Handle image error
            const handleError = function () {
                this.style.display = "none";
                const fallbackEl = this.parentNode.querySelector(
                    ".portfolio-logo-fallback"
                );
                if (fallbackEl) {
                    fallbackEl.style.display = "flex";
                }
            };

            img.addEventListener("error", handleError);

            // Check if image is already broken (after a short delay to allow loading)
            setTimeout(() => {
                if (
                    img.complete &&
                    (img.naturalHeight === 0 || img.naturalWidth === 0)
                ) {
                    handleError.call(img);
                }
            }, 100);
        }
    });

    // Brand Category Filtering
    const categoryBadges = document.querySelectorAll(".brand-category-badge");
    const portfolioItems = document.querySelectorAll(
        ".portfolio-item[data-category]"
    );

    categoryBadges.forEach((badge) => {
        badge.addEventListener("click", function () {
            const category = this.getAttribute("data-category");

            // Update active badge
            categoryBadges.forEach((b) => b.classList.remove("active"));
            this.classList.add("active");

            // Filter portfolio items
            portfolioItems.forEach((item) => {
                const itemCategory = item.getAttribute("data-category");
                if (category === "all" || itemCategory === category) {
                    item.classList.remove("hidden");
                } else {
                    item.classList.add("hidden");
                }
            });
        });
    });

    // Auto-scroll portfolio grid
    const portfolioGrid = document.getElementById("portfolioGrid");
    if (portfolioGrid) {
        let scrollPosition = 0;
        const scrollSpeed = 0.5; // pixels per frame
        let isPaused = false;

        // Pause on hover
        portfolioGrid.addEventListener("mouseenter", () => {
            isPaused = true;
        });

        portfolioGrid.addEventListener("mouseleave", () => {
            isPaused = false;
        });

        // Auto scroll function
        function autoScroll() {
            if (!isPaused) {
                scrollPosition += scrollSpeed;
                const maxScroll = portfolioGrid.scrollWidth / 2; // Since we duplicated items

                if (scrollPosition >= maxScroll) {
                    scrollPosition = 0;
                }

                portfolioGrid.scrollLeft = scrollPosition;
            }

            requestAnimationFrame(autoScroll);
        }

        // Start auto scroll
        autoScroll();
    }

    // Roadmap Slideshow (Desktop only)
    const slides = document.querySelectorAll(
        ".journey-slideshow-container:not(.journey-modal-slideshow) .journey-slide"
    );
    const dots = document.querySelectorAll(
        ".journey-slideshow-container:not(.journey-modal-slideshow) .journey-slide-dot"
    );
    const prevBtn = document.getElementById("prevSlide");
    const nextBtn = document.getElementById("nextSlide");
    const currentSlideSpan = document.getElementById("currentSlide");
    const totalSlidesSpan = document.getElementById("totalSlides");

    let currentSlideIndex = 0;
    const totalSlides = slides.length;

    if (totalSlidesSpan) {
        totalSlidesSpan.textContent = totalSlides;
    }

    function showSlide(index) {
        // Hide all slides
        slides.forEach((slide) => slide.classList.remove("active"));
        dots.forEach((dot) => dot.classList.remove("active"));

        // Show current slide
        if (slides[index]) {
            slides[index].classList.add("active");
        }
        if (dots[index]) {
            dots[index].classList.add("active");
        }

        // Update counter
        if (currentSlideSpan) {
            currentSlideSpan.textContent = index + 1;
        }

        // Update navigation buttons
        if (prevBtn) {
            prevBtn.style.opacity = index === 0 ? "0.5" : "1";
            prevBtn.style.pointerEvents = index === 0 ? "none" : "auto";
        }
        if (nextBtn) {
            nextBtn.style.opacity = index === totalSlides - 1 ? "0.5" : "1";
            nextBtn.style.pointerEvents =
                index === totalSlides - 1 ? "none" : "auto";
        }
    }

    function nextSlide() {
        currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
        showSlide(currentSlideIndex);
    }

    function prevSlide() {
        currentSlideIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
        showSlide(currentSlideIndex);
    }

    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener("click", nextSlide);
    }

    if (prevBtn) {
        prevBtn.addEventListener("click", prevSlide);
    }

    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentSlideIndex = index;
            showSlide(currentSlideIndex);
        });
    });

    // Keyboard navigation
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") {
            prevSlide();
        } else if (e.key === "ArrowRight") {
            nextSlide();
        }
    });

    // Auto-play (optional - can be disabled)
    // let autoPlayInterval = setInterval(nextSlide, 5000);

    // Pause auto-play on hover
    const slideshowContainer = document.querySelector(
        ".journey-slideshow-container"
    );
    if (slideshowContainer) {
        // slideshowContainer.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
        // slideshowContainer.addEventListener('mouseleave', () => {
        //     autoPlayInterval = setInterval(nextSlide, 5000);
        // });
    }

    // Initialize
    showSlide(0);

    // Modal Slideshow Controls
    const modalSlides = document.querySelectorAll(
        "#journeyModal .journey-slide"
    );
    const modalDots = document.querySelectorAll(
        "#journeyModal .journey-slide-dot"
    );
    const modalPrevBtn = document.getElementById("modalPrevSlide");
    const modalNextBtn = document.getElementById("modalNextSlide");
    const modalCurrentSlideSpan = document.getElementById("modalCurrentSlide");
    let modalCurrentSlideIndex = 0;
    const modalTotalSlides = modalSlides.length;

    function showModalSlide(index) {
        modalSlides.forEach((slide, i) => {
            slide.classList.remove("active");
            slide.style.display = "none";
            slide.style.opacity = "0";
            slide.style.visibility = "hidden";

            if (i === index) {
                slide.classList.add("active");
                slide.style.display = "block";
                slide.style.opacity = "1";
                slide.style.visibility = "visible";
            }
        });

        modalDots.forEach((dot, i) => {
            dot.classList.remove("active");
            if (i === index) {
                dot.classList.add("active");
            }
        });

        if (modalCurrentSlideSpan) {
            modalCurrentSlideSpan.textContent = index + 1;
        }

        if (modalPrevBtn) {
            modalPrevBtn.style.opacity = index === 0 ? "0.5" : "1";
            modalPrevBtn.style.pointerEvents = index === 0 ? "none" : "auto";
        }
        if (modalNextBtn) {
            modalNextBtn.style.opacity =
                index === modalTotalSlides - 1 ? "0.5" : "1";
            modalNextBtn.style.pointerEvents =
                index === modalTotalSlides - 1 ? "none" : "auto";
        }
    }

    function nextModalSlide() {
        modalCurrentSlideIndex =
            (modalCurrentSlideIndex + 1) % modalTotalSlides;
        showModalSlide(modalCurrentSlideIndex);
    }

    function prevModalSlide() {
        modalCurrentSlideIndex =
            (modalCurrentSlideIndex - 1 + modalTotalSlides) % modalTotalSlides;
        showModalSlide(modalCurrentSlideIndex);
    }

    if (modalNextBtn) {
        modalNextBtn.addEventListener("click", nextModalSlide);
    }

    if (modalPrevBtn) {
        modalPrevBtn.addEventListener("click", prevModalSlide);
    }

    modalDots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            modalCurrentSlideIndex = index;
            showModalSlide(modalCurrentSlideIndex);
        });
    });

    // Reset modal slideshow when modal is opened
    const journeyModal = document.getElementById("journeyModal");
    if (journeyModal) {
        journeyModal.addEventListener("show.bs.modal", function () {
            modalCurrentSlideIndex = 0;
            // Ensure first slide is active
            modalSlides.forEach((slide, index) => {
                slide.classList.remove("active");
                slide.style.display = "none";
                slide.style.opacity = "0";
                slide.style.visibility = "hidden";

                if (index === 0) {
                    slide.classList.add("active");
                    slide.style.display = "block";
                    slide.style.opacity = "1";
                    slide.style.visibility = "visible";
                }
            });
            modalDots.forEach((dot, index) => {
                dot.classList.remove("active");
                if (index === 0) {
                    dot.classList.add("active");
                }
            });
            if (modalCurrentSlideSpan) {
                modalCurrentSlideSpan.textContent = "1";
            }
            if (modalPrevBtn) {
                modalPrevBtn.style.opacity = "0.5";
                modalPrevBtn.style.pointerEvents = "none";
            }
            if (modalNextBtn) {
                modalNextBtn.style.opacity = "1";
                modalNextBtn.style.pointerEvents = "auto";
            }
        });
    }

    // Initialize modal slideshow on page load
    if (modalSlides.length > 0) {
        modalSlides.forEach((slide, index) => {
            slide.classList.remove("active");
            slide.style.display = "none";
            slide.style.opacity = "0";
            slide.style.visibility = "hidden";

            if (index === 0) {
                slide.classList.add("active");
                slide.style.display = "block";
                slide.style.opacity = "1";
                slide.style.visibility = "visible";
            }
        });
    }

    // Form Tab Handling - Show correct tab based on old input or URL param
    const urlParams = new URLSearchParams(window.location.search);
    const errorTab = urlParams.get("tab");
    const oldUserType = document
        .querySelector('input[name="user_type"][value="kol"]')
        ?.closest(".tab-pane")
        ?.classList.contains("show")
        ? "kol"
        : null;

    if (errorTab || oldUserType) {
        const tabToShow = errorTab || oldUserType;
        const tabElement = document.getElementById(tabToShow + "-tab");
        if (tabElement) {
            const tab = new bootstrap.Tab(tabElement);
            tab.show();
        }
    }

    // Contact Reveal - Click to reveal contact info (Modern Version)
    const revealButtons = document.querySelectorAll(".btn-reveal-modern");
    revealButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const wrapper = this.closest(".contact-reveal-wrapper-modern");
            const revealed = wrapper.querySelector(".contact-revealed-modern");
            const buttonWrapper = wrapper.querySelector(".btn-reveal-modern");
            const card = this.closest(".contact-card-modern");

            if (revealed && buttonWrapper) {
                // Add reveal animation
                buttonWrapper.style.opacity = "0";
                buttonWrapper.style.transform = "scale(0.8)";

                setTimeout(() => {
                    buttonWrapper.style.display = "none";
                    revealed.classList.remove("d-none");

                    // Add pulse effect to card
                    if (card) {
                        card.style.animation = "cardReveal 0.5s ease-out";
                        setTimeout(() => {
                            card.style.animation = "";
                        }, 500);
                    }
                }, 200);
            }
        });
    });

    // Add card reveal animation
    const style = document.createElement("style");
    style.textContent = `
        @keyframes cardReveal {
            0% { transform: translateY(-8px) scale(1); }
            50% { transform: translateY(-12px) scale(1.02); }
            100% { transform: translateY(-8px) scale(1); }
        }
    `;
    document.head.appendChild(style);

    // Mobile Hero Section - Ensure rocket appears first
    function reorderHeroForMobile() {
        const heroRow = document.querySelector(".hero-section .row");
        const heroContent = document.querySelector(".hero-section .col-lg-7");
        const heroVisual = document.querySelector(".hero-section .col-lg-5");

        if (heroRow && heroContent && heroVisual && window.innerWidth <= 991) {
            // Ensure flex column layout
            heroRow.style.display = "flex";
            heroRow.style.flexDirection = "column";

            // Set order explicitly
            heroVisual.style.order = "1";
            heroContent.style.order = "2";
        }
    }

    // Run on load and resize
    reorderHeroForMobile();
    window.addEventListener("resize", reorderHeroForMobile);
});
