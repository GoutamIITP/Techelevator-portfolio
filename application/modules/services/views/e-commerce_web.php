 
    <style>
 
        /* ======= E-Commerce Hero Section ======= */
        .ecommerce-hero {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            padding: 140px 0 100px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .ecommerce-hero::before {
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

        .ecommerce-hero h1 {
            font-size: clamp(2.5rem, 4vw, 4rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .ecommerce-hero .lead {
            font-size: clamp(1.1rem, 2vw, 1.4rem);
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto 2.5rem;
        }

        .hero-badge {
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

        /* ======= E-Commerce Stats ======= */
        .ecommerce-stats {
            background: white;
            padding: 80px 0;
            position: relative;
        }

        .ecommerce-stats::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--border-color), transparent);
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            transition: var(--transition);
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-orange));
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

        /* ======= E-Commerce Features ======= */
        .ecommerce-features {
            padding: 100px 0;
            background: var(--bg-light);
        }

        .feature-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 2rem;
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

        .feature-list {
            list-style: none;
            padding: 0;
            margin-top: 1.5rem;
        }

        .feature-list li {
            padding: 0.5rem 0;
            display: flex;
            align-items: center;
            color: var(--dark-text);
            font-size: 0.95rem;
        }

        .feature-list li i {
            color: var(--primary-blue);
            margin-right: 0.75rem;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        /* ======= E-Commerce Platform Comparison ======= */
        .platform-section {
            padding: 100px 0;
            background: white;
        }

        .platform-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            border: 2px solid var(--border-color);
            transition: var(--transition);
            text-align: center;
            height: 100%;
        }

        .platform-card:hover {
            border-color: var(--primary-blue);
            box-shadow: var(--shadow-lg);
            transform: translateY(-5px);
        }

        .platform-card.featured {
            border-color: var(--primary-blue);
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            position: relative;
            overflow: hidden;
        }

        .platform-card.featured::before {
            content: 'Recommended';
            position: absolute;
            top: 15px;
            right: -30px;
            background: var(--accent-orange);
            color: white;
            padding: 5px 40px;
            font-size: 0.85rem;
            font-weight: 600;
            transform: rotate(45deg);
        }

        .platform-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            border: 3px solid var(--border-color);
        }

        .platform-card.featured .platform-icon {
            border-color: var(--primary-blue);
            background: var(--primary-blue);
            color: white;
        }

        /* ======= E-Commerce CTA ======= */
        .ecommerce-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            position: relative;
            overflow: hidden;
        }

        .ecommerce-cta::before {
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
            font-size: clamp(2rem, 3vw, 3rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        .cta-content p {
            font-size: clamp(1.1rem, 1.5vw, 1.3rem);
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto 2.5rem;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-button {
            padding: clamp(0.75rem, 2vw, 1rem) clamp(1.5rem, 3vw, 2.5rem);
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1rem, 1.2vw, 1.1rem);
        }

        .cta-button.primary {
            background: white;
            color: var(--primary-blue);
        }

        .cta-button.secondary {
            background: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .cta-button.primary:hover {
            background: #f8fafc;
        }

        .cta-button.secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: white;
        }

        /* ======= Responsive Design ======= */
        @media (max-width: 991.98px) {
            .ecommerce-hero {
                padding: 120px 0 80px;
            }
            
            .feature-card {
                padding: 1.75rem;
            }
            
            .platform-card {
                padding: 2rem;
            }
        }

        @media (max-width: 768px) {
            .ecommerce-hero {
                padding: 100px 0 60px;
            }
            
            .feature-card {
                padding: 1.5rem;
            }
            
            .platform-card {
                padding: 1.75rem;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .platform-icon {
                width: 70px;
                height: 70px;
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .ecommerce-hero {
                padding: 80px 0 50px;
            }
            
            .ecommerce-hero h1 {
                font-size: 2rem;
            }
            
            .ecommerce-hero .lead {
                font-size: 1.1rem;
            }
            
            .feature-card {
                padding: 1.25rem;
            }
            
            .platform-card {
                padding: 1.5rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .cta-button {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 375px) {
            .ecommerce-hero h1 {
                font-size: 1.75rem;
            }
            
            .feature-card h3 {
                font-size: 1.25rem;
            }
            
            .stat-number {
                font-size: 2rem;
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

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
    </style>
 
    <!-- E-Commerce Hero Section -->
    <section class="ecommerce-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="hero-badge animate-fade-in">
                        <i class="bi bi-cart-check me-2"></i> Premium E-Commerce Solutions
                    </span>
                    <h1 class="animate-fade-in">
                        High-Performance E-Commerce Website Development
                    </h1>
                    <p class="lead animate-fade-in">
                        We build secure, scalable, and conversion-optimized online stores that help you 
                        increase sales, streamline operations, and grow your business faster.
                    </p>
                    <div class="cta-buttons mt-4">
                        <a href="<?= site_url('free-quote') ?>" class="cta-button primary animate-fade-in">
                            <i class="bi bi-cart-check me-2"></i> Get Free E-Commerce Consultation
                        </a>
                        <a href="#features" class="cta-button secondary animate-fade-in">
                            <i class="bi bi-play-circle me-2"></i> View Features
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- E-Commerce Stats -->
    <section class="ecommerce-stats">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stat-item animate-fade-in">
                        <div class="stat-number">300+</div>
                        <div class="stat-label">Online Stores</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stat-item animate-fade-in">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item animate-fade-in">
                        <div class="stat-number">₹50Cr+</div>
                        <div class="stat-label">Sales Generated</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item animate-fade-in">
                        <div class="stat-number">4.9/5</div>
                        <div class="stat-label">Customer Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- E-Commerce Features -->
    <section class="ecommerce-features" id="features">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 800;">
                    Complete E-Commerce Solutions
                </h2>
                <p class="section-subtitle animate-fade-in" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    Everything you need to launch, manage, and grow your online store
                </p>
            </div>

            <div class="row g-4">
                <!-- Custom E-Commerce Website -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h3>Custom Online Store Development</h3>
                        <p>Fully customized e-commerce websites designed to match your brand and optimize customer journeys.</p>
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle"></i> Custom UI/UX Design</li>
                            <li><i class="bi bi-check-circle"></i> Mobile-First Responsive</li>
                            <li><i class="bi bi-check-circle"></i> High-Speed Performance</li>
                            <li><i class="bi bi-check-circle"></i> SEO-Optimized Structure</li>
                            <li><i class="bi bi-check-circle"></i> Brand Integration</li>
                        </ul>
                    </div>
                </div>

                <!-- Payment Gateway Integration -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <h3>Secure Payment Integration</h3>
                        <p>Multiple payment gateway options with PCI-DSS compliance for secure transactions.</p>
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle"></i> Razorpay & Stripe</li>
                            <li><i class="bi bi-check-circle"></i> UPI & Net Banking</li>
                            <li><i class="bi bi-check-circle"></i> Secure SSL Checkout</li>
                            <li><i class="bi bi-check-circle"></i> Multi-Currency Support</li>
                            <li><i class="bi bi-check-circle"></i> Fraud Detection</li>
                        </ul>
                    </div>
                </div>

                <!-- Inventory Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <h3>Advanced Inventory Management</h3>
                        <p>Comprehensive dashboards to manage products, stock, pricing, and orders efficiently.</p>
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle"></i> Product Variants</li>
                            <li><i class="bi bi-check-circle"></i> Stock Alerts</li>
                            <li><i class="bi bi-check-circle"></i> Order Tracking</li>
                            <li><i class="bi bi-check-circle"></i> Bulk Upload</li>
                            <li><i class="bi bi-check-circle"></i> Supplier Management</li>
                        </ul>
                    </div>
                </div>

                <!-- Admin Dashboard -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h3>Admin Dashboard & Analytics</h3>
                        <p>Powerful admin panel with real-time analytics and business insights.</p>
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle"></i> Sales Analytics</li>
                            <li><i class="bi bi-check-circle"></i> Customer Reports</li>
                            <li><i class="bi bi-check-circle"></i> Inventory Reports</li>
                            <li><i class="bi bi-check-circle"></i> Revenue Tracking</li>
                            <li><i class="bi bi-check-circle"></i> Export Capabilities</li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile App -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h3>Mobile App Development</h3>
                        <p>Native mobile apps for iOS and Android to reach customers on-the-go.</p>
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle"></i> iOS & Android Apps</li>
                            <li><i class="bi bi-check-circle"></i> Push Notifications</li>
                            <li><i class="bi bi-check-circle"></i> Mobile Payments</li>
                            <li><i class="bi bi-check-circle"></i> App Store Optimization</li>
                            <li><i class="bi bi-check-circle"></i> Cross-Platform</li>
                        </ul>
                    </div>
                </div>

                <!-- Security & Hosting -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate-fade-in">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>Security & Hosting</h3>
                        <p>Enterprise-grade security and reliable hosting for your e-commerce store.</p>
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle"></i> SSL Certificates</li>
                            <li><i class="bi bi-check-circle"></i> Daily Backups</li>
                            <li><i class="bi bi-check-circle"></i> DDoS Protection</li>
                            <li><i class="bi bi-check-circle"></i> 99.9% Uptime</li>
                            <li><i class="bi bi-check-circle"></i> 24/7 Monitoring</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Options -->
    <section class="platform-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 800;">
                    Choose Your Platform
                </h2>
                <p class="section-subtitle animate-fade-in" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    We develop on all major e-commerce platforms
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="platform-card animate-fade-in">
                        <div class="platform-icon">
                            <i class="bi bi-bag"></i>
                        </div>
                        <h4>Custom PHP</h4>
                        <p>Fully customized solutions built from scratch for complete control and flexibility.</p>
                        <div class="mt-4">
                            <span class="badge bg-light text-dark me-2">Complete Customization</span>
                            <span class="badge bg-light text-dark">High Performance</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="platform-card featured animate-fade-in">
                        <div class="platform-icon">
                            <i class="bi bi-wordpress"></i>
                        </div>
                        <h4>WooCommerce</h4>
                        <p>Powerful WordPress e-commerce solution with extensive plugins and themes.</p>
                        <div class="mt-4">
                            <span class="badge bg-primary me-2">Most Popular</span>
                            <span class="badge bg-light text-dark">Easy to Manage</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="platform-card animate-fade-in">
                        <div class="platform-icon">
                            <i class="bi bi-cart3"></i>
                        </div>
                        <h4>Shopify</h4>
                        <p>Cloud-based e-commerce platform with easy setup and robust features.</p>
                        <div class="mt-4">
                            <span class="badge bg-light text-dark me-2">Quick Setup</span>
                            <span class="badge bg-light text-dark">Scalable</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="ecommerce-cta">
        <div class="container">
            <div class="cta-content animate-fade-in">
                <h2>Ready to Launch Your Online Store?</h2>
                <p>Get a powerful e-commerce website that attracts customers, increases sales, and grows your business.</p>
                <div class="cta-buttons mt-4">
                    <a href="<?= site_url('free-quote') ?>" class="cta-button primary">
                        <i class="bi bi-cart-plus me-2"></i> Get Free Quote
                    </a>
                    <a href="tel:+919999999999" class="cta-button secondary">
                        <i class="bi bi-telephone me-2"></i> Call Now
                    </a>
                    <a href="<?= site_url('portfolio') ?>" class="cta-button secondary">
                        <i class="bi bi-briefcase me-2"></i> View Portfolio
                    </a>
                </div>
                <p class="mt-4 opacity-75">
                    <i class="bi bi-clock me-1"></i> Free 30-minute consultation • No obligation • Expert advice
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
            document.querySelectorAll('.feature-card, .platform-card, .stat-item').forEach(el => {
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
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Mobile menu enhancement
            const navbarToggler = document.querySelector('.navbar-toggler');
            if (navbarToggler) {
                navbarToggler.addEventListener('click', function() {
                    document.body.classList.toggle('menu-open');
                });
            }
        });
    </script>
 