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

                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-primary btn-lg px-4 py-3">
                                <i class="bi bi-rocket-takeoff me-2"></i>
                                Start Your Project
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg px-4 py-3">
                                <i class="bi bi-play-circle me-2"></i>
                                Watch Demo
                            </a>
                        </div>

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

    <!-- Services Section -->
    <!-- Features Section -->
    <section class="home-features-section" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="feature-section-title">Software and Website Applications</h2>
                <p class="feature-section-subtitle">We build future-ready digital solutions that transform businesses and drive innovation.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-section-feature-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4>Fully Responsive</h4>
                        <p>Your applications work seamlessly across all devices - desktop, tablet, and mobile.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-section-feature-icon">
                            <i class="bi bi-cloud-arrow-down"></i>
                        </div>
                        <h4>Portable</h4>
                        <p>Access your applications from anywhere, anytime with cloud-based solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-section-feature-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h4>Easy to Customize</h4>
                        <p>Flexible solutions that can be easily modified to meet your evolving needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-section-feature-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <h4>Self Modification</h4>
                        <p>User-friendly admin panels for easy content and feature management.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-section-feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Secure</h4>
                        <p>Enterprise-grade security with 100% data protection and compliance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-section-feature-icon">
                            <i class="bi bi-brush"></i>
                        </div>
                        <h4>Clean Design</h4>
                        <p>Modern, intuitive interfaces with scope for future innovation and updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Features Section */
        .home-features-section {
            padding: 100px 0;
            background: white;
        }

        .feature-section-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }


        .feature-section-subtitle {
            color: var(--text-gray);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 3rem;
        }

        .feature-card {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: var(--radius);
            text-align: center;
            transition: var(--transition);
            border: 1px solid var(--border-color);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-medium);
            border-color: var(--primary-blue);
        }

        .feature-section-feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
        }
    </style>
    <!-- Why Choose Us -->
    <section class="why-choose-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Why Choose Us"
                        class="img-fluid rounded-3 shadow">
                </div>

                <div class="col-lg-6">
                    <h2 class="section-title text-start">Why Partner With Us</h2>
                    <p class="text-muted mb-4">We combine technical expertise with business acumen to deliver solutions that drive real results.</p>

                    <div class="feature-grid">
                        <div class="feature-item">
                            <i class="bi bi-award feature-icon fs-3"></i>
                            <h5>Expert Team</h5>
                            <p class="mb-0">Certified professionals with 10+ years of industry experience.</p>
                        </div>

                        <div class="feature-item">
                            <i class="bi bi-clock-history feature-icon fs-3"></i>
                            <h5>On-Time Delivery</h5>
                            <p class="mb-0">98% of projects delivered ahead of schedule.</p>
                        </div>

                        <div class="feature-item">
                            <i class="bi bi-shield-check feature-icon fs-3"></i>
                            <h5>Quality Assurance</h5>
                            <p class="mb-0">Rigorous testing ensures flawless performance.</p>
                        </div>

                        <div class="feature-item">
                            <i class="bi bi-headset feature-icon fs-3"></i>
                            <h5>24/7 Support</h5>
                            <p class="mb-0">Round-the-clock technical assistance and maintenance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-number">500+</div>
                    <p class="mb-0 text-white">Happy Clients</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-number">1200+</div>
                    <p class="mb-0 text-white">Projects Delivered</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-number">50+</div>
                    <p class="mb-0 text-white">Team Experts</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-number">10+</div>
                    <p class="mb-0 text-white">Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <!-- Portfolio Section -->
    <section class="home-portfolio-section" id="portfolio">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-subtitle">See how we've helped businesses transform digitally</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="<?= base_url('assets\images\portfolio\appliances.jpeg') ?> " alt="Appliances E-commerce">
                    <div class="portfolio-overlay">
                        <h4>Appliances E-commerce</h4>
                        <p>Complete online store with inventory management</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="<?= base_url('assets\images\portfolio\carrental.png') ?>" alt="Car Rental Platform">
                    <div class="portfolio-overlay">
                        <h4>Car Rental Platform</h4>
                        <p>Booking system with fleet management</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="<?= base_url('assets\images\portfolio\tawaniya.png" alt="Tawaniya Solutions') ?>">
                    <div class="portfolio-overlay">
                        <h4>Tawaniya Solutions</h4>
                        <p>Custom business management platform</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="<?= base_url('assets\images\portfolio\travel.jpeg" alt="Travel Booking System') ?>">
                    <div class="portfolio-overlay">
                        <h4>Travel Booking System</h4>
                        <p>Multi-vendor travel platform</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Portfolio Section */
        .home-portfolio-section {
            padding: 100px 0;
            background: var(--light-color);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .portfolio-item {
            position: relative;
            border-radius: var(--radius);
            overflow: hidden;
            height: 300px;
            transition: var(--transition);
        }

        .portfolio-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2rem;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
    </style>


    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Client Success Stories</h2>
                <p class="section-subtitle">What our clients say about working with us</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-0">"TechElevatr transformed our online presence completely. Their team delivered exactly what we needed, on time and within budget. Highly recommended!"</p>

                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                alt="Rajesh Kumar"
                                class="author-avatar">
                            <div>
                                <h6 class="mb-1">Rajesh Kumar</h6>
                                <small class="text-muted">CEO, TechStart Solutions</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-0">"The mobile app they developed for us exceeded all expectations. User engagement increased by 300% in the first quarter after launch."</p>

                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                alt="Priya Sharma"
                                class="author-avatar">
                            <div>
                                <h6 class="mb-1">Priya Sharma</h6>
                                <small class="text-muted">Founder, FitLife App</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-0">"Their digital marketing strategy doubled our lead generation in just 6 months. The ROI has been incredible. Truly partners in our success."</p>

                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/67.jpg"
                                alt="Amit Patel"
                                class="author-avatar">
                            <div>
                                <h6 class="mb-1">Amit Patel</h6>
                                <small class="text-muted">Director, GreenLeaf Organics</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="industries-section" id="industries">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Industries We Serve</h2>
                <p class="section-subtitle">Custom solutions for diverse business domains</p>
            </div>
            <div class="industry-grid">
                <div class="industry-card">
                    <i class="bi bi-shop industry-icon"></i>
                    <h5>Retail & eCommerce</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-heart-pulse industry-icon"></i>
                    <h5>Healthcare</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-mortarboard industry-icon"></i>
                    <h5>Education & eLearning</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-airplane industry-icon"></i>
                    <h5>Travel & Tourism</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-bank industry-icon"></i>
                    <h5>Finance & Banking</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-laptop industry-icon"></i>
                    <h5>Technology & Consultancy</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-truck industry-icon"></i>
                    <h5>Logistics & Transportation</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-cup-hot industry-icon"></i>
                    <h5>Hospitality & Entertainment</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-car-front industry-icon"></i>
                    <h5>Automotive</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-trophy industry-icon"></i>
                    <h5>Sports</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-house industry-icon"></i>
                    <h5>Real Estate</h5>
                </div>
                <div class="industry-card">
                    <i class="bi bi-cart industry-icon"></i>
                    <h5>Food & Beverage</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section" id="process">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Work Process</h2>
                <p class="section-subtitle">A systematic approach to delivering exceptional results</p>
            </div>
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h5>Discovery</h5>
                        <p>Understanding your business goals and requirements</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h5>Planning</h5>
                        <p>Creating detailed project roadmap and architecture</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h5>Design</h5>
                        <p>Creating wireframes, mockups, and UI/UX designs</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h5>Development</h5>
                        <p>Building the solution with modern technologies</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h5>Testing</h5>
                        <p>Quality assurance and performance testing</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h5>Deployment & Support</h5>
                        <p>Launch and ongoing maintenance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Transform Your Business?</h2>
                <p class="fs-5 opacity-90 text-white">Let's discuss your project and create a custom solution that drives growth and delivers results.</p>

                <a href="#" class="cta-button">
                    <i class="bi bi-calendar-check me-2"></i>
                    Schedule Free Consultation
                </a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".slider-item");
            const indicators = document.querySelectorAll(".indicator");
            const prevBtn = document.querySelector(".slider-nav-btn.prev");
            const nextBtn = document.querySelector(".slider-nav-btn.next");

            let currentSlide = 0;
            const totalSlides = slides.length;

            function showSlide(index) {
                slides.forEach(slide => slide.classList.remove("active"));
                indicators.forEach(dot => dot.classList.remove("active"));

                slides[index].classList.add("active");
                indicators[index].classList.add("active");

                currentSlide = index;
            }

            // Indicator click
            indicators.forEach((indicator, index) => {
                indicator.addEventListener("click", () => {
                    showSlide(index);
                });
            });

            // Next button
            nextBtn.addEventListener("click", () => {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            });

            // Previous button
            prevBtn.addEventListener("click", () => {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            });
        });


        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card, .feature-item, .portfolio-item, .testimonial-card, .industry-card, .process-step').forEach(el => {
            observer.observe(el);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

    <style>
        /* ========================================
   11.9 HOME PAGE RESPONSIVE STYLES
   ======================================== */

        /* Large Desktop (1200px - 1399px) */
        @media (max-width: 1399.98px) and (min-width: 1200px) {
            .hero-content h1 {
                font-size: 3rem;
            }

            .hero-slider-container,
            .slider-item {
                height: 450px;
            }
        }

        /* Desktop (992px - 1199px) */
        @media (max-width: 1199.98px) and (min-width: 992px) {
            .hero-content h1 {
                font-size: 2.75rem;
            }

            .hero-slider-container,
            .slider-item {
                height: 450px;
            }

            .services-section,
            .why-choose-section,
            .home-portfolio-section,
            .testimonials-section,
            .cta-section {
                padding: 80px 0;
            }

            .stat-number {
                font-size: 3rem;
            }

            .cta-title {
                font-size: 2.25rem;
            }
        }

        /* Tablet Landscape (768px - 991px) */
        @media (max-width: 991.98px) and (min-width: 768px) {
            .hero-section {
                min-height: 80vh;
                padding: 60px 0;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-slider-container,
            .slider-item {
                height: 400px;
                margin-top: 2rem;
            }

            .services-section,
            .why-choose-section,
            .home-portfolio-section,
            .testimonials-section,
            .cta-section {
                padding: 80px 0;
            }

            .portfolio-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 1.5rem;
            }

            .stat-number {
                font-size: 3rem;
            }

            .cta-title {
                font-size: 2.25rem;
            }
        }

        /* Tablet Portrait (576px - 767px) */
        @media (max-width: 767.98px) and (min-width: 576px) {
            .hero-section {
                min-height: 70vh;
                padding: 50px 0;
            }

            .hero-content h1 {
                font-size: 2.25rem;
            }

            .hero-stats {
                gap: 1.5rem;
                margin-top: 2rem;
            }

            .hero-slider-container,
            .slider-item {
                height: 350px;
                margin-top: 2rem;
            }

            .slider-overlay {
                padding: 1.5rem;
            }

            .services-section,
            .why-choose-section,
            .home-portfolio-section,
            .testimonials-section,
            .cta-section {
                padding: 60px 0;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }

            .feature-grid {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: 1.25rem;
            }

            .stat-number {
                font-size: 2.75rem;
            }

            .cta-title {
                font-size: 2rem;
            }
        }

        /* Mobile Landscape (400px - 575px) */
        @media (max-width: 575.98px) and (min-width: 400px) {
            .hero-section {
                min-height: 60vh;
                padding: 40px 0;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 1rem;
                margin-top: 1.5rem;
            }

            .hero-slider-container,
            .slider-item {
                height: 300px;
                margin-top: 1.5rem;
            }

            .slider-overlay {
                padding: 1rem;
            }

            .services-section,
            .why-choose-section,
            .home-portfolio-section,
            .testimonials-section,
            .cta-section {
                padding: 50px 0;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .feature-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .cta-title {
                font-size: 1.75rem;
            }
        }

        /* Mobile Portrait (<400px) */
        @media (max-width: 399.98px) {
            .hero-section {
                min-height: 50vh;
                padding: 30px 0;
            }

            .hero-content h1 {
                font-size: 1.75rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 0.75rem;
                margin-top: 1rem;
            }

            .hero-slider-container,
            .slider-item {
                height: 250px;
                margin-top: 1rem;
            }

            .slider-overlay {
                padding: 0.75rem;
            }

            .services-section,
            .why-choose-section,
            .home-portfolio-section,
            .testimonials-section,
            .cta-section {
                padding: 40px 0;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }

            .feature-grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }

            .stat-number {
                font-size: 2.25rem;
            }

            .cta-title {
                font-size: 1.5rem;
            }
        }

        /* ========================================
   10. GENERAL RESPONSIVE DESIGN
   ======================================== */

        /* Desktop First Approach - Standard Bootstrap Breakpoints */
        /* XXL: ≥1400px, XL: 1200-1399px, LG: 992-1199px, MD: 768-991px, SM: 576-767px, XS: <576px */

        /* Large Desktop (1200px - 1399px) */
        @media (max-width: 1399.98px) and (min-width: 1200px) {
            h1 {
                font-size: 2.25rem;
            }

            h2 {
                font-size: 1.875rem;
            }

            .tech-card {
                padding: 1.75rem;
            }
        }

        /* Desktop (992px - 1199px) */
        @media (max-width: 1199.98px) and (min-width: 992px) {
            .navbar-collapse {
                background: var(--white);
                padding: 1rem;
                border-radius: var(--radius);
                margin-top: 1rem;
                box-shadow: var(--shadow-soft);
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.75rem;
            }
        }

        /* Tablet Landscape (768px - 991px) */
        @media (max-width: 991.98px) and (min-width: 768px) {
            h1 {
                font-size: 1.875rem;
            }

            h2 {
                font-size: 1.625rem;
            }

            h3 {
                font-size: 1.5rem;
            }

            .tech-card {
                padding: 1.5rem;
            }

            .section-title {
                font-size: 1.75rem;
            }
        }

        /* Tablet Portrait (576px - 767px) */
        @media (max-width: 767.98px) and (min-width: 576px) {
            h1 {
                font-size: 1.75rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            h3 {
                font-size: 1.375rem;
            }

            .tech-card {
                padding: 1.25rem;
            }

            .whatsapp-float {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
                bottom: 20px;
                right: 20px;
            }

            .section-title {
                font-size: 1.625rem;
            }
        }

        /* Mobile Landscape (400px - 575px) */
        @media (max-width: 575.98px) and (min-width: 400px) {
            h1 {
                font-size: 1.625rem;
            }

            h2 {
                font-size: 1.375rem;
            }

            h3 {
                font-size: 1.25rem;
            }

            .tech-card {
                padding: 1rem;
            }

            .whatsapp-float {
                width: 45px;
                height: 45px;
                font-size: 1.25rem;
                bottom: 15px;
                right: 15px;
            }

            .section-title {
                font-size: 1.5rem;
            }
        }

        /* Mobile Portrait (<400px) */
        @media (max-width: 399.98px) {
            h1 {
                font-size: 1.5rem;
            }

            h2 {
                font-size: 1.25rem;
            }

            h3 {
                font-size: 1.125rem;
            }

            .tech-card {
                padding: 0.875rem;
            }

            .whatsapp-float {
                width: 40px;
                height: 40px;
                font-size: 1.125rem;
                bottom: 10px;
                right: 10px;
            }

            .section-title {
                font-size: 1.375rem;
            }
        }

        /* ========================================
   11. UTILITY CLASSES
   ======================================== */
        .text-primary-custom {
            color: var(--primary-blue) !important;
        }

        .text-orange {
            color: var(--accent-orange) !important;
        }

        .bg-light-custom {
            background: var(--bg-light) !important;
        }

        .shadow-custom {
            box-shadow: var(--shadow-soft) !important;
        }

        .rounded-custom {
            border-radius: var(--radius) !important;
        }

        /* ========================================
   12. ANIMATIONS
   ======================================== */
        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in-left {
            animation: slideInLeft 0.6s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .slide-in-right {
            animation: slideInRight 0.6s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ========================================
   11. HOME PAGE SPECIFIC STYLES
   ======================================== */

        /* ========================================
   11.1 HERO SECTION
   ======================================== */
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
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 80% 20%,
                    rgba(59, 130, 246, 0.1) 0%,
                    transparent 50%);
        }

        /* Hero Content */
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

        /* Trust Badge */
        .trust-badge {
            display: inline-flex;
            align-items: center;
            background: var(--white);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            box-shadow: var(--box-shadow);
            margin-bottom: 2rem;
            border: 1px solid var(--border-color);
        }

        .trust-badge i {
            color: var(--primary-color);
            margin-right: 0.5rem;
        }

        /* Hero Stats */
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

        /* Hero Slider */
        .hero-slider-container {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            height: 500px;
        }

        .slider-item {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .slider-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .slider-item {
            display: none;
        }

        .slider-item.active {
            display: block;
        }


        .slider-item:hover img {
            transform: scale(1.05);
        }

        .slider-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            padding: 2rem;
            color: var(--white);
        }

        /* Slider Navigation */
        .slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 1rem;
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
        }

        .slider-nav-btn:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: scale(1.1);
        }

        /* Slider Indicators */
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
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid var(--white);
        }

        .indicator.active,
        .indicator:hover {
            background: var(--white);
            transform: scale(1.2);
        }

        /* ========================================
   11.2 SERVICES SECTION
   ======================================== */
        .services-section {
            padding: 2px 0;
            background: var(--white);
        }

        .service-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            height: 100%;
            transition: var(--transition);
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-color);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg,
                    var(--primary-color),
                    var(--secondary-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--white);
            font-size: 1.8rem;
        }

        /* ========================================
   11.3 WHY CHOOSE US SECTION
   ======================================== */
        .why-choose-section {
            padding: 5px 0;
            background: var(--bg-light);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .feature-item {
            background: var(--white);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        /* ========================================
   11.4 STATS SECTION
   ======================================== */
        .stats-section {
            padding: 80px 0;
            background: linear-gradient(135deg,
                    var(--primary-color),
                    var(--secondary-color));
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        /* ========================================
   11.5 PORTFOLIO SECTION
   ======================================== */
        .home-portfolio-section {
            padding: 10px 0;
            background: var(--white);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .portfolio-item {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            height: 300px;
            transition: var(--transition);
        }

        .portfolio-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2rem;
            color: var(--white);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        /* ========================================
   11.6 TESTIMONIALS SECTION
   ======================================== */
        .testimonials-section {
            padding: 10px 0;
            background: var(--bg-light);
        }

        .testimonial-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--shadow-soft);
            height: 100%;
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 4rem;
            color: var(--primary-color);
            opacity: 0.2;
            font-family: Georgia, serif;
        }

        .testimonial-rating {
            color: #fbbf24;
            margin-bottom: 1rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            margin-top: 1.5rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
        }

        /* ========================================
   11.7 CTA SECTION
   ======================================== */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg,
                    var(--primary-color),
                    var(--secondary-color));
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .cta-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .cta-button {
            background: var(--white);
            color: var(--primary-color);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
            margin-top: 2rem;
            border: 2px solid var(--white);
        }

        .cta-button:hover {
            background: transparent;
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* ========================================
   11.8 HOME PAGE ANIMATIONS
   ======================================== */
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

        .animate-fade-in {
            animation: fadeInUp 0.6s ease-out;
        }

        /* ========================================
           INDUSTRIES SECTION
           ======================================== */
        .industries-section {
            padding: 100px 0;
            background: white;
        }

        .industry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .industry-card {
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius);
            text-align: center;
            transition: var(--transition);
            border: 1px solid var(--border-color);
        }

        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-soft);
            border-color: var(--primary-blue);
        }

        .industry-icon {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
        }

        /* ========================================
           PROCESS SECTION
           ======================================== */
        .process-section {
            padding: 100px 0;
            background: var(--light-color);
        }

        .process-timeline {
            position: relative;
            max-width: 800px;
            margin: 3rem auto 0;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--border-color);
            transform: translateX(-50%);
        }

        .process-step {
            position: relative;
            margin-bottom: 3rem;
            width: 45%;
        }

        .process-step:nth-child(odd) {
            margin-left: auto;
            text-align: right;
        }

        .process-step:nth-child(even) {
            margin-right: auto;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: var(--primary-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            position: absolute;
            top: 0;
        }

        .process-step:nth-child(odd) .step-number {
            left: -75px;
        }

        .process-step:nth-child(even) .step-number {
            right: -75px;
        }

        .step-content {
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow-soft);
        }

        /* Responsive Design for New Sections */
        @media (max-width: 991.98px) {

            .industries-section,
            .process-section {
                padding: 80px 0;
            }

            .industry-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.25rem;
            }

            .process-timeline::before {
                left: 30px;
            }

            .process-step {
                width: 100%;
                margin-left: 0;
                text-align: left;
                padding-left: 80px;
            }

            .process-step:nth-child(odd) {
                margin-left: 0;
                text-align: left;
            }

            .step-number {
                left: 0 !important;
                right: auto !important;
            }
        }

        @media (max-width: 767.98px) {

            .industries-section,
            .process-section {
                padding: 60px 0;
            }

            .industry-grid {
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                gap: 1rem;
            }

            .industry-card {
                padding: 1.25rem;
            }

            .industry-icon {
                font-size: 2rem;
            }

            .step-content {
                padding: 1.25rem;
            }
        }

        @media (max-width: 575.98px) {

            .industries-section,
            .process-section {
                padding: 50px 0;
            }

            .industry-grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }

            .process-step {
                padding-left: 60px;
            }

            .step-number {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
        }
    </style>