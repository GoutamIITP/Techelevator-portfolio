<!-- ================= HERO SECTION ================= -->
<section class="hero-slider" aria-label="Hero carousel">
    <div class="hero-track">

        <!-- Slide 1 -->
        <div class="hero-slide active" aria-hidden="false">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Trusted by Growing Businesses</span>
                    <h1>Transform Your Business with Digital Solutions</h1>
                    <p>
                        We design and develop high-performance websites and applications
                        that generate leads, improve conversions, and scale your business.
                    </p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary btn-lg">
                            Get Free Consultation
                        </a>
                        <a href="#portfolio" class="btn btn-outline-light btn-lg">
                            View Our Work
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide" aria-hidden="true">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Mobile-First & SEO Ready</span>
                    <h1>Web & App Development That Works Everywhere</h1>
                    <p>
                        Mobile-first, responsive, and SEO-optimized digital products
                        built for speed, security, and scalability.
                    </p>
                    <div class="hero-actions">
                        <a href="#services" class="btn btn-primary btn-lg">
                            Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide" aria-hidden="true">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Lead-Focused Strategy</span>
                    <h1>Turn Visitors into Customers</h1>
                    <p>
                        Conversion-driven design and smart digital strategy
                        that delivers measurable business growth.
                    </p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary btn-lg">
                            Start Your Project
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Navigation -->
    <button class="hero-nav prev" aria-label="Previous slide">
        <i class="bi bi-chevron-left"></i>
    </button>
    <button class="hero-nav next" aria-label="Next slide">
        <i class="bi bi-chevron-right"></i>
    </button>

    <!-- Indicators -->
    <div class="hero-indicators">
        <button class="active" aria-label="Go to slide 1"></button>
        <button aria-label="Go to slide 2"></button>
        <button aria-label="Go to slide 3"></button>
    </div>
</section>

<style>
    /* ================= HERO SECTION ================= */

    .hero-slider {
        position: relative;
        height: 90vh;
        min-height: 600px;
        overflow: hidden;
        background: #000;
    }

    /* Slides */
    .hero-track {
        height: 100%;
    }

    .hero-slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 1s ease;
        display: flex;
        align-items: center;
        background-size: cover;
        background-position: center;
    }

    .hero-slide.active {
        opacity: 1;
        z-index: 1;
    }

    /* Background images */
    .hero-slide:nth-child(1) {
        background-image:
            linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
            url("https://images.unsplash.com/photo-1451187580459-43490279c0fa");
    }

    .hero-slide:nth-child(2) {
        background-image:
            linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
            url("https://images.unsplash.com/photo-1551288049-bebda4e38f71");
    }

    .hero-slide:nth-child(3) {
        background-image:
            linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
            url("https://images.unsplash.com/photo-1460925895917-afdab827c52f");
    }

    /* Content */
    .hero-content {
        max-width: 720px;
        color: #fff;
    }

    .hero-badge {
        display: inline-block;
        padding: 6px 14px;
        background: rgba(255, 255, 255, .15);
        border-radius: 30px;
        font-size: 0.9rem;
        margin-bottom: 16px;
    }

    .hero-content h1 {
        font-size: 3.2rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1rem;
        color: #fff;
    }

    .hero-content p {
        font-size: 1.15rem;
        opacity: 0.9;
        margin-bottom: 2rem;
        color: whitesmoke;
    }

    .hero-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    /* Navigation */
    .hero-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, .15);
        border: none;
        color: #fff;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        cursor: pointer;
        transition: 0.3s;
        z-index: 5;
    }

    .hero-nav:hover {
        background: #2563eb;
    }

    .hero-nav.prev {
        left: 20px;
    }

    .hero-nav.next {
        right: 20px;
    }

    /* Indicators */
    .hero-indicators {
        position: absolute;
        bottom: 24px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 5;
    }

    .hero-indicators button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .5);
        border: none;
        cursor: pointer;
    }

    .hero-indicators button.active {
        background: #fff;
        transform: scale(1.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-slider {
            height: 75vh;
        }

        .hero-content h1 {
            font-size: 2.2rem;
        }

        .hero-content p {
            font-size: 1rem;
        }
    }
</style>

<script>
    const slides = document.querySelectorAll(".hero-slide");
    const indicators = document.querySelectorAll(".hero-indicators button");
    const prevBtn = document.querySelector(".hero-nav.prev");
    const nextBtn = document.querySelector(".hero-nav.next");

    let currentIndex = 0;
    let interval;

    /* Show slide */
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
            slide.setAttribute("aria-hidden", i !== index);
            indicators[i].classList.toggle("active", i === index);
        });
        currentIndex = index;
    }

    /* Navigation */
    function nextSlide() {
        showSlide((currentIndex + 1) % slides.length);
    }

    function prevSlide() {
        showSlide((currentIndex - 1 + slides.length) % slides.length);
    }

    /* Auto play */
    function startAuto() {
        interval = setInterval(nextSlide, 5000);
    }

    function stopAuto() {
        clearInterval(interval);
    }

    /* Events */
    nextBtn.addEventListener("click", () => {
        nextSlide();
        stopAuto();
        startAuto();
    });

    prevBtn.addEventListener("click", () => {
        prevSlide();
        stopAuto();
        startAuto();
    });

    indicators.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            showSlide(i);
            stopAuto();
            startAuto();
        });
    });

    /* Pause on hover */
    const hero = document.querySelector(".hero-slider");
    hero.addEventListener("mouseenter", stopAuto);
    hero.addEventListener("mouseleave", startAuto);

    /* Init */
    showSlide(0);
    startAuto();
</script>