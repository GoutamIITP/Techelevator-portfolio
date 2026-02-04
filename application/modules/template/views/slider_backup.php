<!-- TechElevatr - Slider/Banner Section (Homepage Only) -->
<!-- This file is loaded only in layout1 (homepage with slider) -->
<!-- Other pages use layout2 which excludes this slider -->
<!-- Hero Section -->
 
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 animate-fade-in">
                <div class="trust-badge">
                    <i class="bi bi-award-fill"></i>
                    <span>Trusted by 500+ Businesses Worldwide</span>
                </div>

                <div class="hero-content">
                    <h1>
                        Transform Your Business with
                        <span class="hero-highlight">Digital Excellence</span>
                    </h1>

                    <p class="hero-subtitle">
                        We deliver cutting-edge web development, mobile applications, and digital marketing solutions that drive growth and maximize your ROI.
                    </p>

                     

                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">100% Satisfaction</h6>
                                <small>Guaranteed Quality</small>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">24/7 Support</h6>
                                <small>Always Available</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-slider-container">
                    <!-- Slide 1: Web Development -->
                    <div class="slider-item active">
                        <img src="<?= base_url('assets/images/logo/Instagram-files/hero-section.jpg') ?>"
                            alt="Web Development">

                    </div>

                    <!-- Slide 2: Mobile App Development -->
                    <div class="slider-item">
                        <img src="<?= base_url('assets/images/logo/Instagram-files/techelevator-service.jpg') ?>"
                            alt="Mobile App Development">

                    </div>

                    <!-- Slide 3: Digital Marketing -->
                    <div class="slider-item">
                        <img src="<?= base_url('assets/images/career/638f21d96afc7616661c225f_Why Hire Software Developers in India in 2023.jpg') ?>"
                            alt="Digital Marketing">

                    </div>

                    <!-- Slide 4: Cloud Solutions -->
                    <div class="slider-item">
                        <img src="<?= base_url('assets/images/career/e64b6bbf1120dd06b453ca7bb0223fd7.jpg') ?>"
                            alt="Cloud Solutions">

                    </div>

                    <!-- Navigation Buttons -->
                    <div class="slider-nav">
                        <div class="slider-nav-btn prev">
                            <i class="bi bi-chevron-left"></i>
                        </div>
                        <div class="slider-nav-btn next">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </div>

                    <!-- Slider Indicators -->
                    <div class="slider-indicators">
                        <span class="indicator active" data-slide="0"></span>
                        <span class="indicator" data-slide="1"></span>
                        <span class="indicator" data-slide="2"></span>
                        <span class="indicator" data-slide="3"></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* ===============================
   HERO SECTION (Used Classes Only)
   =============================== */

    .hero-section {
        background: linear-gradient(135deg, var(--bg-light) 0%, #e0f2fe 100%);
        min-height: 90vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 12px 0;
    }

    .hero-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 80% 20%,
                rgba(59, 130, 246, 0.1) 0%,
                transparent 50%);
    }

    /* ===============================
   HERO CONTENT
   =============================== */

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        color: var(--dark-color);
    }

    .hero-highlight {
        color: var(--primary-color);
        position: relative;
    }

    .hero-highlight::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 8px;
        background: linear-gradient(90deg,
                transparent 0%,
                rgba(59, 130, 246, 0.3) 50%,
                transparent 100%);
        z-index: -1;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: #4b5563;
        margin-bottom: 2rem;
        max-width: 600px;
    }

    /* ===============================
   TRUST BADGE
   =============================== */

    .trust-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: var(--white);
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        box-shadow: var(--shadow-soft);
        margin-bottom: 2rem;
        border: 1px solid var(--border-color);
    }

    .trust-badge i {
        color: var(--primary-color);
    }

    /* ===============================
   HERO STATS
   =============================== */

    .hero-stats {
        display: flex;
        gap: 2rem;
        margin-top: 3rem;
        flex-wrap: wrap;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .stat-icon {
        width: 40px;
        height: 40px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
    }

    /* ===============================
   HERO SLIDER
   =============================== */

    .hero-slider-container {
        position: relative;
        height: 500px;
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .slider-item {
        position: relative;
        height: 100%;
        display: none;
        overflow: hidden;
    }

    .slider-item.active {
        display: block;
    }

    .slider-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .slider-item:hover img {
        transform: scale(1.05);
    }

    /* ===============================
   SLIDER NAVIGATION
   =============================== */

    .slider-nav {
        position: absolute;
        inset: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1rem;
        pointer-events: none;
        z-index: 10;
    }

    .slider-nav-btn {
        width: 50px;
        height: 50px;
        background: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
        pointer-events: all;
    }

    .slider-nav-btn:hover {
        background: var(--primary-color);
        color: var(--white);
        transform: scale(1.1);
    }

    /* ===============================
   SLIDER INDICATORS
   =============================== */

    .slider-indicators {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 10;
    }

    .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        border: 2px solid var(--white);
        cursor: pointer;
        transition: var(--transition);
    }

    .indicator.active,
    .indicator:hover {
        background: var(--white);
        transform: scale(1.2);
    }

    /* ===============================
   ANIMATION
   =============================== */

    .animate-fade-in {
        animation: fadeInUp 0.6s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===============================
   RESPONSIVE
   =============================== */

    @media (max-width: 991.98px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero-slider-container {
            height: 400px;
            margin-top: 2rem;
        }
    }

    @media (max-width: 767.98px) {
        .hero-content h1 {
            font-size: 2.25rem;
        }

        .hero-stats {
            gap: 1.5rem;
        }

        .hero-slider-container {
            height: 350px;
        }
    }

    @media (max-width: 575.98px) {
        .hero-content h1 {
            font-size: 2rem;
        }

        .hero-stats {
            flex-direction: column;
            gap: 1rem;
        }

        .hero-slider-container {
            height: 300px;
        }
    }

    @media (max-width: 399.98px) {
        .hero-content h1 {
            font-size: 1.75rem;
        }

        .hero-slider-container {
            height: 250px;
        }
    }
</style>
