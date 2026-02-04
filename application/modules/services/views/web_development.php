 
    <style>
 

        /* ======= Hero Section ======= */
        .service-hero {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            padding: 140px 0 100px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .service-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.05) 0%, transparent 50%);
        }

        .service-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.15);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .service-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .service-subtitle {
            font-size: 1.3rem;
            opacity: 0.95;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .hero-image {
            animation: float 6s ease-in-out infinite;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.2));
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* ======= Service Cards ======= */
        .service-feature-section {
            padding: 100px 0;
            background: var(--bg-light);
        }

        .feature-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            height: 100%;
            transition: var(--transition);
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, var(--primary-blue), var(--accent-orange));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-blue);
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            color: white;
            transition: var(--transition);
        }

        .feature-card:hover .feature-icon {
            transform: rotate(5deg) scale(1.1);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        /* ======= Process Section ======= */
        .process-section {
            padding: 100px 0;
            background: white;
            position: relative;
        }

        .process-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--border-color), transparent);
        }

        .process-timeline {
            position: relative;
            max-width: 900px;
            margin: 3rem auto 0;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary-blue), var(--accent-orange));
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
            background: white;
            border: 3px solid var(--primary-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--primary-blue);
            position: absolute;
            top: 0;
            transition: var(--transition);
        }

        .process-step:nth-child(odd) .step-number {
            left: -80px;
        }

        .process-step:nth-child(even) .step-number {
            right: -80px;
        }

        .process-step:hover .step-number {
            background: var(--primary-blue);
            color: white;
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }

        .step-content {
            background: white;
            padding: 2rem;
            border-radius: var(--radius);
            border: 1px solid var(--border-color);
            transition: var(--transition);
        }

        .process-step:hover .step-content {
            border-color: var(--primary-blue);
            box-shadow: var(--shadow-md);
        }

        /* ======= Technologies Grid ======= */
        .tech-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .tech-item {
            background: white;
            padding: 2rem;
            border-radius: var(--radius);
            text-align: center;
            transition: var(--transition);
            border: 1px solid var(--border-color);
        }

        .tech-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-blue);
        }

        .tech-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .tech-item:hover .tech-icon {
            transform: scale(1.1);
        }

        .tech-item.html .tech-icon { color: #e34c26; }
        .tech-item.css .tech-icon { color: #264de4; }
        .tech-item.js .tech-icon { color: #f0db4f; }
        .tech-item.php .tech-icon { color: #777bb4; }
        .tech-item.bootstrap .tech-icon { color: #7952b3; }
        .tech-item.wordpress .tech-icon { color: #21759b; }

        /* ======= FAQ Section ======= */
        .faq-section {
            padding: 100px 0;
            background: white;
        }

        .accordion-custom .accordion-item {
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .accordion-custom .accordion-button {
            background: white;
            color: var(--dark-text);
            font-weight: 600;
            padding: 1.5rem;
            border: none;
            box-shadow: none;
        }

        .accordion-custom .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            color: var(--primary-blue);
            border-bottom: 1px solid var(--border-color);
        }

        .accordion-custom .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%232563eb'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-custom .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%232563eb'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-custom .accordion-body {
            padding: 1.5rem;
            background: white;
        }

        /* ======= CTA Section ======= */
        .service-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            position: relative;
            overflow: hidden;
        }

        .service-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 10% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(255,255,255,0.05) 0%, transparent 50%);
        }

        .cta-content {
            text-align: center;
            color: white;
            position: relative;
            z-index: 1;
        }

        .cta-content h2 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        .cta-content p {
            font-size: 1.3rem;
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto 2.5rem;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            background: white;
            color: var(--primary-blue);
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: var(--transition);
            font-size: 1.1rem;
            box-shadow: var(--shadow-lg);
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: var(--shadow-xl);
            color: var(--secondary-blue);
        }

        /* ======= Responsive Design ======= */
        @media (max-width: 991.98px) {
            .service-title {
                font-size: 2.8rem;
            }
            
            .feature-card {
                padding: 2rem;
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
            
            .tech-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .service-hero {
                padding: 120px 0 80px;
            }
            
            .service-title {
                font-size: 2.3rem;
            }
            
            .service-subtitle {
                font-size: 1.1rem;
            }
            
            .feature-card {
                padding: 1.75rem;
            }
            
            .cta-content h2 {
                font-size: 2.5rem;
            }
            
            .cta-content p {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 576px) {
            .service-hero {
                padding: 100px 0 60px;
            }
            
            .service-title {
                font-size: 2rem;
            }
            
            .service-badge {
                font-size: 0.85rem;
                padding: 6px 16px;
            }
            
            .feature-card {
                padding: 1.5rem;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .tech-item {
                padding: 1.5rem;
            }
            
            .cta-content h2 {
                font-size: 2rem;
            }
            
            .cta-button {
                padding: 12px 30px;
                font-size: 1rem;
            }
        }

        /* ======= Animation ======= */
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
 
    <!-- Hero Section -->
    <section class="service-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-badge animate-fade-in">
                        <i class="bi bi-globe me-2"></i> Premium Web Development
                    </div>
                    <h1 class="service-title animate-fade-in">
                        Professional Website Development Services
                    </h1>
                    <p class="service-subtitle animate-fade-in">
                        Build modern, responsive, and high-performance websites that drive business growth. 
                        Custom designs tailored to your brand and optimized for results.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-5 mb-lg-0">
                        <a href="#quote-form" class="btn btn-light btn-lg animate-fade-in">
                            <i class="bi bi-rocket-takeoff me-2"></i> Get Free Quote
                        </a>
                        <a href="<?= site_url('portfolio') ?>" class="btn btn-outline-light btn-lg animate-fade-in">
                            <i class="bi bi-briefcase me-2"></i> View Portfolio
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Website Development" 
                         class="img-fluid hero-image animate-fade-in">
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer -->
    <section class="service-feature-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">
                    Comprehensive Web Solutions
                </h2>
                <p class="section-subtitle animate-fade-in" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    End-to-end web development services tailored to your business needs
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h3>Custom Website Design</h3>
                        <p>Unique, professional designs that reflect your brand identity and engage your target audience with compelling visuals.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-check text-primary me-2"></i> Brand Identity Integration</li>
                            <li><i class="bi bi-check text-primary me-2"></i> User-Centric Design</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Modern UI/UX Principles</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h3>Responsive Development</h3>
                        <p>Mobile-first websites that deliver perfect experiences across all devices - phones, tablets, and desktops.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-check text-primary me-2"></i> Mobile-First Approach</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Cross-Browser Compatibility</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Touch-Optimized Interfaces</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-cart"></i>
                        </div>
                        <h3>E-commerce Solutions</h3>
                        <p>Full-featured online stores with secure payment gateways, inventory management, and advanced order tracking.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-check text-primary me-2"></i> Payment Gateway Integration</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Inventory Management</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Customer Analytics</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <h3>CMS Integration</h3>
                        <p>Easy-to-use content management systems (WordPress, custom CMS) for effortless content updates and management.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-check text-primary me-2"></i> WordPress Development</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Custom CMS Solutions</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Admin Panel Development</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h3>Performance Optimization</h3>
                        <p>Lightning-fast loading speeds with optimized code, images, and advanced caching strategies for better SEO.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-check text-primary me-2"></i> Page Speed Optimization</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Image & Code Optimization</li>
                            <li><i class="bi bi-check text-primary me-2"></i> SEO Best Practices</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>Security & Maintenance</h3>
                        <p>Enterprise-grade security with SSL certificates, regular updates, automated backups, and ongoing monitoring.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-check text-primary me-2"></i> SSL Certificates</li>
                            <li><i class="bi bi-check text-primary me-2"></i> Regular Security Updates</li>
                            <li><i class="bi bi-check text-primary me-2"></i> 24/7 Monitoring</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section class="process-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">
                    Our Development Process
                </h2>
                <p class="section-subtitle animate-fade-in" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    A proven methodology that ensures quality, efficiency, and success
                </p>
            </div>

            <div class="process-timeline">
                <div class="process-step animate-fade-in">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Discovery & Planning</h4>
                        <p>We analyze your business goals, target audience, and project requirements to create a detailed roadmap.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Design & Prototype</h4>
                        <p>Create wireframes, mockups, and interactive prototypes for your approval before development begins.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Development</h4>
                        <p>Build your website with clean, efficient code using modern technologies and best practices.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Testing & Quality Assurance</h4>
                        <p>Rigorous testing across all devices, browsers, and scenarios to ensure flawless performance.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h4>Launch & Deployment</h4>
                        <p>Smooth deployment with zero downtime, followed by thorough post-launch monitoring.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h4>Support & Maintenance</h4>
                        <p>Ongoing support, updates, and optimization to ensure your website continues to perform at its best.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies We Use -->
    <section class="tech-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">
                    Modern Technology Stack
                </h2>
                <p class="section-subtitle animate-fade-in" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    Leveraging cutting-edge technologies for powerful, scalable solutions
                </p>
            </div>

            <div class="tech-grid">
                <div class="tech-item html animate-fade-in">
                    <i class="bi bi-filetype-html tech-icon"></i>
                    <h6>HTML5</h6>
                </div>

                <div class="tech-item css animate-fade-in">
                    <i class="bi bi-filetype-css tech-icon"></i>
                    <h6>CSS3</h6>
                </div>

                <div class="tech-item js animate-fade-in">
                    <i class="bi bi-filetype-js tech-icon"></i>
                    <h6>JavaScript</h6>
                </div>

                <div class="tech-item php animate-fade-in">
                    <i class="bi bi-filetype-php tech-icon"></i>
                    <h6>PHP</h6>
                </div>

                <div class="tech-item bootstrap animate-fade-in">
                    <i class="bi bi-bootstrap tech-icon"></i>
                    <h6>Bootstrap 5</h6>
                </div>

                <div class="tech-item wordpress animate-fade-in">
                    <i class="bi bi-wordpress tech-icon"></i>
                    <h6>WordPress</h6>
                </div>

                <div class="tech-item animate-fade-in">
                    <i class="bi bi-braces tech-icon" style="color: #61dafb;"></i>
                    <h6>React.js</h6>
                </div>

                <div class="tech-item animate-fade-in">
                    <i class="bi bi-filetype-json tech-icon" style="color: #339933;"></i>
                    <h6>Node.js</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">
                    Frequently Asked Questions
                </h2>
                <p class="section-subtitle animate-fade-in" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    Get answers to common questions about our web development services
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-custom" id="faqAccordion">
                        <div class="accordion-item animate-fade-in">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How long does it take to build a website?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Typically, a basic website takes 2-3 weeks, a business website takes 4-6 weeks, and an e-commerce website takes 8-12 weeks. The timeline depends on complexity, features, and content readiness.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item animate-fade-in">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Will my website be mobile-friendly and responsive?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! All our websites are built with a mobile-first approach, ensuring they look and function perfectly on all devices including phones, tablets, and desktops. We follow responsive design principles for optimal user experience.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item animate-fade-in">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Can I update the website content myself?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! We integrate user-friendly Content Management Systems (CMS) like WordPress or custom admin panels that allow you to easily update text, images, pages, and blog posts without any technical knowledge.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item animate-fade-in">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Do you provide hosting and domain services?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we offer reliable hosting services with 99.9% uptime guarantee and can help you register your domain. We also provide free SSL certificates for security and maintain regular backups for data protection.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item animate-fade-in">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    What happens after the website is launched?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We provide ongoing support and maintenance packages that include security updates, regular backups, technical support, performance monitoring, and content updates as per your chosen package. We're with you every step of the way.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="service-cta">
        <div class="container">
            <div class="cta-content animate-fade-in">
                <h2>Ready to Build Your Professional Website?</h2>
                <p>Get a free consultation and detailed project quote. Let's create a website that drives real results for your business.</p>
                <a href="<?= site_url('free-quote') ?>" class="cta-button">
                    <i class="bi bi-rocket-takeoff me-2"></i> Start Your Project
                </a>
                <p class="mt-4 opacity-75">
                    <i class="bi bi-clock me-1"></i> 30-minute free consultation • No obligation • Expert advice
                </p>
            </div>
        </div>
    </section>

 
    <script>
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
            document.querySelectorAll('.feature-card, .process-step, .tech-item, .accordion-item').forEach(el => {
                observer.observe(el);
            });
            
            // FAQ accordion enhancement
            const faqButtons = document.querySelectorAll('.accordion-button');
            faqButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const icon = this.querySelector('.bi');
                    if (icon) {
                        if (this.classList.contains('collapsed')) {
                            icon.classList.remove('bi-plus');
                            icon.classList.add('bi-dash');
                        } else {
                            icon.classList.remove('bi-dash');
                            icon.classList.add('bi-plus');
                        }
                    }
                });
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
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
 