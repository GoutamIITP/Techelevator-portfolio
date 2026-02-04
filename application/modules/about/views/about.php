 
    <style>
        :root {
            --primary-blue: #2563eb;
            --secondary-blue: #1e40af;
            --accent-blue: #3b82f6;
            --dark-text: #111827;
            --light-text: #6b7280;
            --bg-light: #f9fafb;
            --border-color: #e5e7eb;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.12);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.15);
            --radius: 12px;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--dark-text);
            line-height: 1.6;
        }

        /* ======= Modern Breadcrumb ======= */
        .modern-breadcrumb {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            padding: 100px 0 60px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .modern-breadcrumb::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" fill="white" opacity="0.1"/></svg>') no-repeat;
            background-size: 100% 100px;
            background-position: bottom;
        }

        .breadcrumb-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .breadcrumb-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: white;
            border-radius: 2px;
        }

        .breadcrumb-nav {
            display: flex;
            gap: 10px;
            list-style: none;
            padding: 0;
            margin: 20px 0 0;
            font-size: 1.1rem;
        }

        .breadcrumb-nav li {
            display: flex;
            align-items: center;
        }

        .breadcrumb-nav li:not(:last-child)::after {
            content: '›';
            margin-left: 10px;
            opacity: 0.7;
        }

        .breadcrumb-nav a {
            color: white;
            text-decoration: none;
            opacity: 0.9;
            transition: var(--transition);
        }

        .breadcrumb-nav a:hover {
            opacity: 1;
            transform: translateY(-1px);
        }

        .breadcrumb-nav .active {
            color: #ffd700;
            font-weight: 600;
        }

        /* ======= Enhanced About Section ======= */
        .about-hero-section {
            padding: 100px 0;
            background: white;
            position: relative;
        }

        .about-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--border-color), transparent);
        }

        .company-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 20px;
            box-shadow: var(--shadow-sm);
        }

        .company-name {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .mission-statement {
            font-size: 1.4rem;
            color: var(--light-text);
            font-weight: 400;
            margin-bottom: 2rem;
            line-height: 1.8;
            position: relative;
            padding-left: 30px;
        }

        .mission-statement::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--primary-blue);
            border-radius: 2px;
        }

        /* Enhanced Cards */
        .enhanced-card {
            background: white;
            border-radius: var(--radius);
            padding: 2.5rem;
            height: 100%;
            transition: var(--transition);
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .enhanced-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, var(--primary-blue), var(--accent-blue));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .enhanced-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-blue);
        }

        .enhanced-card:hover::before {
            transform: scaleX(1);
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--dark-text);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            padding: 80px 0;
            position: relative;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--light-text);
            font-size: 1.1rem;
            font-weight: 600;
        }

        /* Process Timeline */
        .process-timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 3rem 0;
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

        .step-marker {
            width: 40px;
            height: 40px;
            background: white;
            border: 3px solid var(--primary-blue);
            border-radius: 50%;
            position: absolute;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--primary-blue);
            font-size: 1.1rem;
        }

        .process-step:nth-child(odd) .step-marker {
            left: -50px;
        }

        .process-step:nth-child(even) .step-marker {
            right: -50px;
        }

        /* Values Section */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .value-card {
            background: white;
            padding: 2rem;
            border-radius: var(--radius);
            text-align: center;
            transition: var(--transition);
            border: 1px solid var(--border-color);
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: var(--primary-blue);
        }

        .value-icon {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
        }

        /* Team Section */
        .team-section {
            background: var(--bg-light);
            padding: 100px 0;
        }

        .team-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            transition: var(--transition);
            height: 100%;
            border: 1px solid var(--border-color);
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .team-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .team-info {
            padding: 1.5rem;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .breadcrumb-title {
                font-size: 2.8rem;
            }
            
            .company-name {
                font-size: 2.3rem;
            }
            
            .mission-statement {
                font-size: 1.2rem;
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
            
            .step-marker {
                left: 0 !important;
                right: auto !important;
            }
        }

        @media (max-width: 768px) {
            .breadcrumb-title {
                font-size: 2.3rem;
            }
            
            .company-name {
                font-size: 2rem;
            }
            
            .enhanced-card {
                padding: 2rem;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            .modern-breadcrumb {
                padding: 80px 0 40px;
            }
            
            .breadcrumb-title {
                font-size: 2rem;
            }
            
            .company-name {
                font-size: 1.8rem;
            }
            
            .mission-statement {
                font-size: 1.1rem;
                padding-left: 20px;
            }
            
            .mission-statement::before {
                width: 3px;
            }
            
            .enhanced-card {
                padding: 1.5rem;
            }
        }

        /* Animation */
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
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
 
    <!-- Modern Breadcrumb -->
    <section class="modern-breadcrumb">
        <div class="container">
            <h1 class="breadcrumb-title">About Us</h1>
            <p class="text-white fs-5 opacity-90 mb-4">Discover the story behind our success and the values that drive us</p>
            <ul class="breadcrumb-nav">
                <li><a href="<?= site_url() ?>">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </section>

    <!-- Company Hero Section -->
    <section class="about-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <span class="company-badge">SINCE 2015</span>
                    <h2 class="company-name">TechElevatr Digital Solutions</h2>
                    <p class="mission-statement">
                        We transform businesses through innovative digital solutions, combining cutting-edge technology 
                        with strategic thinking to deliver exceptional results.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            <span>10+ Years Experience</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            <span>500+ Happy Clients</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            <span>50+ Expert Team</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="enhanced-card animate-fade-in">
                        <div class="card-icon">
                            <i class="bi bi-chat-quote"></i>
                        </div>
                        <h3 class="card-title">Get Your Free Strategy Session</h3>
                        <p class="text-muted mb-4">Ready to transform your business? Let's discuss your project needs.</p>
                        
                        <!-- Quote Form -->
                        <form id="quoteForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="col-12">
                                    <input type="tel" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-12">
                                    <select class="form-control" required>
                                        <option value="" selected disabled>Select Service</option>
                                        <option>Web Development</option>
                                        <option>Mobile App Development</option>
                                        <option>Digital Marketing</option>
                                        <option>UI/UX Design</option>
                                        <option>Custom Software</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="3" placeholder="Tell us about your project..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="bi bi-calendar-check me-2"></i>Get Free Consultation
                                    </button>
                                    <p class="text-center text-muted mt-2 small">
                                        <i class="bi bi-shield-check me-1"></i>No obligation. No spam.
                                    </p>
                                </div>
                            </div>
                        </form>
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
                    <div class="stat-card">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">1200+</div>
                        <div class="stat-label">Projects Delivered</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Client Retention</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">10+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="enhanced-card animate-fade-in">
                        <h2 class="card-title text-center mb-4">Our Story & Mission</h2>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <h4 class="mb-3">Our Journey</h4>
                                <p class="text-muted">
                                    Founded in 2015, TechElevatr started with a simple mission: to help businesses 
                                    thrive in the digital age. What began as a small team of passionate developers 
                                    has grown into a full-service digital agency trusted by companies worldwide.
                                </p>
                                <p class="text-muted">
                                    We've evolved alongside technology, constantly adapting and learning to stay 
                                    at the forefront of digital innovation. Our journey has been marked by 
                                    meaningful partnerships and transformative projects.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-3">Our Mission</h4>
                                <p class="text-muted">
                                    To empower businesses with technology that drives growth, enhances efficiency, 
                                    and creates lasting value. We believe in building solutions that not only meet 
                                    today's needs but also anticipate tomorrow's challenges.
                                </p>
                                <p class="text-muted">
                                    Our approach combines technical excellence with deep business understanding, 
                                    ensuring every solution we deliver contributes to our clients' success.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="display: inline-block;">Why Choose TechElevatr?</h2>
                <p class="section-subtitle">What sets us apart in the digital solutions space</p>
            </div>
            
            <div class="values-grid">
                <div class="value-card animate-fade-in">
                    <i class="bi bi-award value-icon"></i>
                    <h5>Expert Team</h5>
                    <p class="text-muted mb-0">Certified professionals with 10+ years of industry experience</p>
                </div>
                <div class="value-card animate-fade-in">
                    <i class="bi bi-lightning-charge value-icon"></i>
                    <h5>Fast Delivery</h5>
                    <p class="text-muted mb-0">98% of projects delivered ahead of schedule</p>
                </div>
                <div class="value-card animate-fade-in">
                    <i class="bi bi-shield-check value-icon"></i>
                    <h5>Quality Assurance</h5>
                    <p class="text-muted mb-0">Rigorous testing ensures flawless performance</p>
                </div>
                <div class="value-card animate-fade-in">
                    <i class="bi bi-headset value-icon"></i>
                    <h5>24/7 Support</h5>
                    <p class="text-muted mb-0">Round-the-clock technical assistance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="display: inline-block;">Our Work Process</h2>
                <p class="section-subtitle">A systematic approach to delivering exceptional results</p>
            </div>
            
            <div class="process-timeline">
                <div class="process-step animate-fade-in">
                    <div class="step-marker">1</div>
                    <div class="enhanced-card">
                        <h5>Discovery</h5>
                        <p class="text-muted mb-0">Understanding your business goals and requirements</p>
                    </div>
                </div>
                <div class="process-step animate-fade-in">
                    <div class="step-marker">2</div>
                    <div class="enhanced-card">
                        <h5>Planning</h5>
                        <p class="text-muted mb-0">Creating detailed project roadmap and architecture</p>
                    </div>
                </div>
                <div class="process-step animate-fade-in">
                    <div class="step-marker">3</div>
                    <div class="enhanced-card">
                        <h5>Design</h5>
                        <p class="text-muted mb-0">Creating wireframes, mockups, and UI/UX designs</p>
                    </div>
                </div>
                <div class="process-step animate-fade-in">
                    <div class="step-marker">4</div>
                    <div class="enhanced-card">
                        <h5>Development</h5>
                        <p class="text-muted mb-0">Building the solution with modern technologies</p>
                    </div>
                </div>
                <div class="process-step animate-fade-in">
                    <div class="step-marker">5</div>
                    <div class="enhanced-card">
                        <h5>Testing</h5>
                        <p class="text-muted mb-0">Quality assurance and performance testing</p>
                    </div>
                </div>
                <div class="process-step animate-fade-in">
                    <div class="step-marker">6</div>
                    <div class="enhanced-card">
                        <h5>Deployment</h5>
                        <p class="text-muted mb-0">Launch and ongoing support & maintenance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 py-lg-6" style="background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-3">Ready to Start Your Digital Transformation Journey?</h2>
                    <p class="text-white opacity-90 mb-0">Let's discuss how we can help your business grow with cutting-edge digital solutions.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#quoteForm" class="btn btn-light btn-lg px-4">
                        <i class="bi bi-calendar-check me-2"></i>Start Project
                    </a>
                </div>
            </div>
        </div>
    </section>
 
    <script>
        // Form submission
        document.getElementById('quoteForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Processing...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                alert('Thank you! Your consultation request has been received. We will contact you within 24 hours.');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });
        
        // Scroll animations
        document.addEventListener('DOMContentLoaded', function() {
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
            document.querySelectorAll('.enhanced-card, .value-card, .process-step, .stat-card').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
  