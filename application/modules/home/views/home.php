<!-- TechElevatr Homepage -->

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- Left Content -->
            <div class="col-lg-6 slide-in-left">
                <span class="badge badge-custom badge-primary mb-3">
                    <i class="bi bi-award me-2"></i> Trusted by 500+ Businesses
                </span>
                <h1 class="display-4 fw-bold mb-4">
                    Grow Your Business <span class="highlight">Digitally</span>
                </h1>
                <p class="lead mb-4">
                    Transform your business with cutting-edge web development, mobile apps, SEO, and CRM solutions.
                    We build technology that drives growth and delivers results.
                </p>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="<?= site_url('free-quote') ?>" class="btn btn-primary btn-lg">
                        <i class="bi bi-rocket-takeoff me-2"></i> Get Free Quote
                    </a>
                    <a href="<?= site_url('portfolio') ?>" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-briefcase me-2"></i> View Portfolio
                    </a>
                </div>
                <div class="d-flex align-items-center gap-4 flex-wrap">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span>100% Client Satisfaction</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-shield-check text-primary-custom me-2"></i>
                        <span>Secure & Scalable</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-headset text-primary-custom me-2"></i>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 text-center slide-in-right">
                <img src="<?= base_url('assets/images/hero/digital-solutions.svg') ?>"
                    alt="Digital Solutions"
                    class="img-fluid hero-image"
                    loading="lazy">
            </div>

        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">

        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="section-title section-title-center">Our Services</h2>
            <p class="section-subtitle">Comprehensive IT solutions tailored to your business needs</p>
        </div>

        <!-- Services Grid -->
        <div class="row g-4">

            <!-- Website Development -->
            <div class="col-lg-4 col-md-6">
                <div class="tech-card text-center">
                    <div class="service-icon-box">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h5>Website Development</h5>
                    <p>Modern, responsive, and SEO-optimized websites that convert visitors into customers.</p>
                    <a href="<?= site_url('services/web-development') ?>" class="btn btn-sm btn-outline-primary mt-2">
                        Learn More <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- App Development -->
            <div class="col-lg-4 col-md-6">
                <div class="tech-card text-center">
                    <div class="service-icon-box">
                        <i class="bi bi-phone"></i>
                    </div>
                    <h5>App Development</h5>
                    <p>Native and cross-platform mobile apps for iOS and Android with seamless UX.</p>
                    <a href="<?= site_url('services/app-development') ?>" class="btn btn-sm btn-outline-primary mt-2">
                        Learn More <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- SEO Services -->
            <div class="col-lg-4 col-md-6">
                <div class="tech-card text-center">
                    <div class="service-icon-box">
                        <i class="bi bi-search"></i>
                    </div>
                    <h5>SEO Services</h5>
                    <p>Boost your online visibility and rank higher on Google with proven SEO strategies.</p>
                    <a href="<?= site_url('services/seo-services') ?>" class="btn btn-sm btn-outline-primary mt-2">
                        Learn More <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- CRM / ERP -->
            <div class="col-lg-4 col-md-6">
                <div class="tech-card text-center">
                    <div class="service-icon-box">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                    <h5>CRM / ERP Solutions</h5>
                    <p>Streamline operations with custom CRM and ERP systems built for your workflow.</p>
                    <a href="<?= site_url('services/crm-erp') ?>" class="btn btn-sm btn-outline-primary mt-2">
                        Learn More <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Lead Generation -->
            <div class="col-lg-4 col-md-6">
                <div class="tech-card text-center">
                    <div class="service-icon-box">
                        <i class="bi bi-megaphone"></i>
                    </div>
                    <h5>Lead Generation</h5>
                    <p>Drive quality leads and grow your sales pipeline with targeted digital marketing.</p>
                    <a href="<?= site_url('services/lead-generation') ?>" class="btn btn-sm btn-outline-primary mt-2">
                        Learn More <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Hosting & Domain -->
            <div class="col-lg-4 col-md-6">
                <div class="tech-card text-center">
                    <div class="service-icon-box">
                        <i class="bi bi-server"></i>
                    </div>
                    <h5>Hosting & Domain</h5>
                    <p>Reliable hosting solutions with 99.9% uptime and free SSL certificates.</p>
                    <a href="<?= site_url('services/hosting-domain') ?>" class="btn btn-sm btn-outline-primary mt-2">
                        Learn More <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- Left Image -->
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/why-choose-us.svg') ?>"
                    alt="Why Choose TechElevatr"
                    class="img-fluid rounded-custom shadow-custom"
                    loading="lazy">
            </div>

            <!-- Right Content -->
            <div class="col-lg-6">
                <h2 class="section-title mb-4">Why Choose TechElevatr?</h2>
                <p class="mb-4">We combine technical expertise with business understanding to deliver solutions that actually work for your goals.</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">Expert Team</h6>
                                <small class="text-muted">Certified developers with 10+ years experience</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">On-Time Delivery</h6>
                                <small class="text-muted">98% projects delivered before deadline</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">Affordable Pricing</h6>
                                <small class="text-muted">Transparent pricing with no hidden costs</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">24/7 Support</h6>
                                <small class="text-muted">Round-the-clock technical assistance</small>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="<?= site_url('about') ?>" class="btn btn-primary mt-4">
                    Learn More About Us <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-lg-3 col-md-6">
                <h2 class="display-4 fw-bold mb-2">500+</h2>
                <p class="mb-0">Happy Clients</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h2 class="display-4 fw-bold mb-2">1200+</h2>
                <p class="mb-0">Projects Completed</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h2 class="display-4 fw-bold mb-2">50+</h2>
                <p class="mb-0">Expert Team Members</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h2 class="display-4 fw-bold mb-2">10+</h2>
                <p class="mb-0">Years Experience</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title section-title-center">Our Recent Work</h2>
            <p class="section-subtitle">Check out some of our latest projects</p>
        </div>

        <div class="row g-4">
            <!-- Portfolio Item 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="<?= base_url('assets/images/portfolio/project-1.jpg') ?>"
                        alt="E-commerce Website"
                        class="img-fluid"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="text-white text-center">
                            <h5>E-commerce Platform</h5>
                            <p class="mb-3">Website Development</p>
                            <a href="<?= site_url('portfolio') ?>" class="btn btn-light btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="<?= base_url('assets/images/portfolio/project-2.jpg') ?>"
                        alt="Mobile App"
                        class="img-fluid"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="text-white text-center">
                            <h5>Food Delivery App</h5>
                            <p class="mb-3">Mobile App Development</p>
                            <a href="<?= site_url('portfolio') ?>" class="btn btn-light btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="<?= base_url('assets/images/portfolio/project-3.jpg') ?>"
                        alt="CRM System"
                        class="img-fluid"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="text-white text-center">
                            <h5>Custom CRM System</h5>
                            <p class="mb-3">CRM Development</p>
                            <a href="<?= site_url('portfolio') ?>" class="btn btn-light btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= site_url('portfolio') ?>" class="btn btn-primary btn-lg">
                View All Projects <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title section-title-center">What Our Clients Say</h2>
            <p class="section-subtitle">Real feedback from real businesses</p>
        </div>

        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="testimonial-text">
                        "TechElevatr transformed our online presence completely. The website they built is fast, beautiful, and generates leads daily!"
                    </p>
                    <div class="testimonial-author">
                        <img src="<?= base_url('assets/images/testimonials/client-1.jpg') ?>"
                            alt="Rajesh Kumar"
                            class="testimonial-avatar"
                            loading="lazy">
                        <div class="testimonial-info">
                            <h6>Rajesh Kumar</h6>
                            <small>CEO, TechStart Solutions</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="testimonial-text">
                        "Professional team, excellent communication, and delivered ahead of schedule. Highly recommend for app development!"
                    </p>
                    <div class="testimonial-author">
                        <img src="<?= base_url('assets/images/testimonials/client-2.jpg') ?>"
                            alt="Priya Sharma"
                            class="testimonial-avatar"
                            loading="lazy">
                        <div class="testimonial-info">
                            <h6>Priya Sharma</h6>
                            <small>Founder, FitLife App</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="testimonial-text">
                        "Their SEO services doubled our organic traffic in 6 months. Best investment we made for our business growth!"
                    </p>
                    <div class="testimonial-author">
                        <img src="<?= base_url('assets/images/testimonials/client-3.jpg') ?>"
                            alt="Amit Patel"
                            class="testimonial-avatar"
                            loading="lazy">
                        <div class="testimonial-info">
                            <h6>Amit Patel</h6>
                            <small>Director, GreenLeaf Organics</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= site_url('testimonials') ?>" class="btn btn-outline-primary">
                Read More Reviews <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">Ready to Elevate Your Digital Presence?</h2>
                <p class="mb-0 fs-5">Get a free consultation and project quote today. Let's build something amazing together!</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="<?= site_url('free-quote') ?>" class="btn btn-light btn-lg">
                    <i class="bi bi-rocket-takeoff me-2"></i> Get Free Quote
                </a>
            </div>
        </div>
    </div>
</section>