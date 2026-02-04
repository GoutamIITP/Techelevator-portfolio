 
    <style>
 
        /* ======= Hero Section ======= */
        .app-hero {
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
            padding: 140px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .app-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 80%;
            height: 200%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .service-badge {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(59, 130, 246, 0.1));
            color: var(--primary-blue);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(37, 99, 235, 0.2);
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-lead {
            font-size: 1.25rem;
            color: var(--light-text);
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .hero-image {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.1));
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* ======= Service Cards ======= */
        .service-cards-section {
            padding: 100px 0;
            background: white;
        }

        .service-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            height: 100%;
            transition: var(--transition);
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .service-card::before {
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

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-blue);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            color: white;
            transition: var(--transition);
        }

        .service-card:hover .service-icon {
            transform: rotate(5deg) scale(1.1);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }

        .service-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--dark-text);
        }

        .service-card p {
            color: var(--light-text);
            font-size: 1rem;
            line-height: 1.7;
        }

        /* ======= Process Section ======= */
        .process-section {
            padding: 100px 0;
            background: var(--bg-light);
            position: relative;
        }

        .process-timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 0;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary-blue), var(--accent-orange));
            transform: translateX(-50%);
        }

        @media (min-width: 768px) {
            .process-timeline::before {
                left: 50%;
            }
        }

        .process-step {
            position: relative;
            margin-bottom: 3rem;
            width: 100%;
        }

        @media (min-width: 768px) {
            .process-step {
                width: 45%;
            }
            
            .process-step:nth-child(odd) {
                margin-left: auto;
                text-align: right;
            }
            
            .process-step:nth-child(even) {
                margin-right: auto;
            }
        }

        .step-marker {
            width: 60px;
            height: 60px;
            background: white;
            border: 3px solid var(--primary-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--primary-blue);
            font-size: 1.5rem;
            position: absolute;
            top: 0;
            left: -30px;
            transition: var(--transition);
        }

        @media (min-width: 768px) {
            .process-step:nth-child(odd) .step-marker {
                left: auto;
                right: -30px;
            }
            
            .process-step:nth-child(even) .step-marker {
                left: -30px;
            }
        }

        .process-step:hover .step-marker {
            background: var(--primary-blue);
            color: white;
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }

        .step-content {
            background: white;
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .process-step:hover .step-content {
            transform: translateX(5px);
            box-shadow: var(--shadow-lg);
        }

        /* ======= Technologies Grid ======= */
        .tech-grid-section {
            padding: 100px 0;
            background: white;
        }

        .tech-icon-box {
            background: white;
            padding: 2rem;
            border-radius: var(--radius);
            text-align: center;
            transition: var(--transition);
            border: 1px solid var(--border-color);
            height: 100%;
        }

        .tech-icon-box:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-blue);
        }

        .tech-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }

        .tech-icon.swift { color: #f05138; }
        .tech-icon.kotlin { color: #7f52ff; }
        .tech-icon.react { color: #61dafb; }
        .tech-icon.flutter { color: #02569b; }
        .tech-icon.firebase { color: #ffca28; }
        .tech-icon.mongodb { color: #47a248; }
        .tech-icon.java { color: #007396; }
        .tech-icon.typescript { color: #3178c6; }
        .tech-icon.docker { color: #2496ed; }
        .tech-icon.aws { color: #ff9900; }
        .tech-icon.nodejs { color: #339933; }
        .tech-icon.graphql { color: #e10098; }

        /* ======= FAQ Section ======= */
        .faq-section {
            padding: 100px 0;
            background: var(--bg-light);
        }

        .faq-card {
            background: white;
            border-radius: var(--radius);
            border: 1px solid var(--border-color);
            overflow: hidden;
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .faq-card:hover {
            border-color: var(--primary-blue);
            box-shadow: var(--shadow-sm);
        }

        .faq-question {
            padding: 1.5rem;
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--dark-text);
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .faq-question:hover {
            color: var(--primary-blue);
        }

        .faq-question[aria-expanded="true"] {
            color: var(--primary-blue);
            background: rgba(37, 99, 235, 0.05);
        }

        .faq-icon {
            transition: transform 0.3s ease;
        }

        .faq-question[aria-expanded="true"] .faq-icon {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-answer.show {
            padding: 0 1.5rem 1.5rem;
            max-height: 1000px;
        }

        /* ======= CTA Section ======= */
        .app-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            position: relative;
            overflow: hidden;
        }

        .app-cta::before {
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

        .cta-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .cta-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        .cta-text {
            font-size: 1.3rem;
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
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
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
            color: var(--secondary-blue);
        }

        .cta-button.secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: white;
        }

        /* ======= Responsive Design ======= */
        @media (max-width: 991.98px) {
            .app-hero {
                padding: 120px 0 80px;
            }
            
            .hero-title {
                font-size: clamp(2rem, 4vw, 2.8rem);
            }
            
            .service-card {
                padding: 2rem;
            }
            
            .cta-title {
                font-size: 2.3rem;
            }
        }

        @media (max-width: 768px) {
            .app-hero {
                padding: 100px 0 60px;
                text-align: center;
            }
            
            .hero-title {
                font-size: 2.3rem;
            }
            
            .hero-lead {
                font-size: 1.1rem;
            }
            
            .service-card {
                padding: 1.75rem;
            }
            
            .process-timeline::before {
                display: none;
            }
            
            .step-marker {
                position: relative;
                left: auto;
                right: auto;
                margin: 0 auto 1rem;
            }
            
            .step-content {
                text-align: center;
            }
            
            .cta-title {
                font-size: 2rem;
            }
            
            .cta-text {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 576px) {
            .app-hero {
                padding: 80px 0 40px;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .service-card {
                padding: 1.5rem;
            }
            
            .service-icon {
                width: 70px;
                height: 70px;
                font-size: 2rem;
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
    <section class="app-hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="service-badge animate-fade-in">
                        <i class="bi bi-phone me-2"></i> Premium App Development
                    </span>
                    <h1 class="hero-title animate-fade-in">Transform Your Vision into Exceptional Mobile Experiences</h1>
                    <p class="hero-lead animate-fade-in">
                        We build high-performance, scalable mobile applications that engage users, drive growth, 
                        and deliver measurable business results across iOS, Android, and cross-platform ecosystems.
                    </p>
                    <div class="d-flex flex-wrap gap-3 animate-fade-in">
                        <a href="#consultation" class="cta-button primary">
                            <i class="bi bi-rocket-takeoff me-2"></i> Start Your Project
                        </a>
                        <a href="#portfolio" class="cta-button secondary" style="background: white; color: var(--primary-blue); border: 2px solid var(--primary-blue);">
                            <i class="bi bi-play-circle me-2"></i> View Demo
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                         alt="Mobile App Development"
                         class="hero-image img-fluid rounded-3 shadow-lg"
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer -->
    <section class="service-cards-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Comprehensive App Solutions</h2>
                <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    End-to-end mobile application development services for every platform and business need
                </p>
            </div>

            <div class="row g-4">
                <div class="col-xl-4 col-md-6">
                    <div class="service-card animate-fade-in">
                        <div class="service-icon">
                            <i class="bi bi-apple"></i>
                        </div>
                        <h3>iOS App Development</h3>
                        <p>Native iOS applications built with Swift and Objective-C, optimized for iPhone and iPad performance, leveraging the latest Apple technologies and frameworks.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-card animate-fade-in">
                        <div class="service-icon">
                            <i class="bi bi-android2"></i>
                        </div>
                        <h3>Android App Development</h3>
                        <p>High-performance Android apps using Kotlin and Java, designed for seamless operation across all Android devices with Material Design principles.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-card animate-fade-in">
                        <div class="service-icon">
                            <i class="bi bi-phone-flip"></i>
                        </div>
                        <h3>Cross-Platform Apps</h3>
                        <p>Single codebase solutions with React Native and Flutter that deliver native-like performance on both iOS and Android, reducing development time and cost.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-card animate-fade-in">
                        <div class="service-icon">
                            <i class="bi bi-ui-checks"></i>
                        </div>
                        <h3>UI/UX Design</h3>
                        <p>Intuitive, engaging interfaces designed for optimal user experience, higher retention rates, and brand consistency across all touchpoints.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-card animate-fade-in">
                        <div class="service-icon">
                            <i class="bi bi-cloud-arrow-up"></i>
                        </div>
                        <h3>Backend Integration</h3>
                        <p>Scalable backend systems, RESTful APIs, real-time databases, and third-party service integrations to power your application's functionality.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-card animate-fade-in">
                        <div class="service-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h3>App Maintenance & Support</h3>
                        <p>Continuous monitoring, performance optimization, security updates, and feature enhancements to keep your app competitive and reliable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section class="process-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Our Proven Development Methodology</h2>
                <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    A structured approach that ensures quality, transparency, and successful project delivery
                </p>
            </div>

            <div class="process-timeline">
                <div class="process-step animate-fade-in">
                    <div class="step-marker">01</div>
                    <div class="step-content">
                        <h4>Strategy & Discovery</h4>
                        <p class="text-muted mb-0">We analyze your business goals, target audience, market research, and technical requirements to define the perfect app strategy.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-marker">02</div>
                    <div class="step-content">
                        <h4>Design & Prototyping</h4>
                        <p class="text-muted mb-0">Wireframing, interactive prototypes, and pixel-perfect UI designs that provide the blueprint for your application's user experience.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-marker">03</div>
                    <div class="step-content">
                        <h4>Development Sprint</h4>
                        <p class="text-muted mb-0">Agile development with continuous testing, code reviews, and regular demos to ensure quality and alignment with project goals.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-marker">04</div>
                    <div class="step-content">
                        <h4>Testing & Quality Assurance</h4>
                        <p class="text-muted mb-0">Comprehensive testing across devices, performance optimization, security audits, and user acceptance testing.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-marker">05</div>
                    <div class="step-content">
                        <h4>Deployment & Launch</h4>
                        <p class="text-muted mb-0">App store submission, server configuration, analytics setup, and launch strategy execution for maximum impact.</p>
                    </div>
                </div>

                <div class="process-step animate-fade-in">
                    <div class="step-marker">06</div>
                    <div class="step-content">
                        <h4>Growth & Optimization</h4>
                        <p class="text-muted mb-0">Post-launch monitoring, user feedback analysis, feature updates, and performance optimization for continuous improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies We Use -->
    <section class="tech-grid-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Modern Tech Stack</h2>
                <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    Cutting-edge frameworks and tools for building powerful, scalable mobile applications
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tech-icon-box animate-fade-in">
                        <i class="bi bi-apple tech-icon swift"></i>
                        <h5>Swift</h5>
                        <p class="text-muted mb-0 small">Modern iOS development</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tech-icon-box animate-fade-in">
                        <i class="bi bi-android2 tech-icon kotlin"></i>
                        <h5>Kotlin</h5>
                        <p class="text-muted mb-0 small">Android first-class language</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tech-icon-box animate-fade-in">
                        <i class="bi bi-react tech-icon react"></i>
                        <h5>React Native</h5>
                        <p class="text-muted mb-0 small">Cross-platform framework</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tech-icon-box animate-fade-in">
                        <i class="bi bi-phone tech-icon flutter"></i>
                        <h5>Flutter</h5>
                        <p class="text-muted mb-0 small">Google's UI toolkit</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tech-icon-box animate-fade-in">
                        <i class="bi bi-cloud tech-icon firebase"></i>
                        <h5>Firebase</h5>
                        <p class="text-muted mb-0 small">Backend as a service</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tech-icon-box animate-fade-in">
                        <i class="bi bi-database tech-icon mongodb"></i>
                        <h5>MongoDB</h5>
                        <p class="text-muted mb-0 small">NoSQL database</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tech-icon-box animate-fade-in">
                        <i class="bi bi-code-slash tech-icon java"></i>
                        <h5>Java</h5>
                        <p class="text-muted mb-0 small">Enterprise Android</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tech-icon-box animate-fade-in">
                        <i class="bi bi-filetype-ts tech-icon typescript"></i>
                        <h5>TypeScript</h5>
                        <p class="text-muted mb-0 small">Type-safe JavaScript</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Frequently Asked Questions</h2>
                <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                    Get answers to common questions about our mobile app development process
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="faq-card animate-fade-in">
                        <button class="faq-question" aria-expanded="false">
                            How long does it take to develop a mobile app?
                            <i class="bi bi-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>A basic app with core features takes 2-3 months, medium complexity apps take 4-6 months, and enterprise-level applications with advanced features can take 6-12+ months. The timeline depends on features, platform requirements, design complexity, and integration needs. We provide detailed project timelines after the initial consultation.</p>
                        </div>
                    </div>

                    <div class="faq-card animate-fade-in">
                        <button class="faq-question" aria-expanded="false">
                            Should I choose native or cross-platform development?
                            <i class="bi bi-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p><strong>Cross-platform</strong> (React Native/Flutter) is ideal for MVP launches, budget constraints, and simpler apps needing both platforms quickly. <strong>Native development</strong> (Swift/Kotlin) is better for complex apps requiring maximum performance, platform-specific features, or advanced graphics. We'll conduct a technical assessment to recommend the best approach for your specific requirements and business goals.</p>
                        </div>
                    </div>

                    <div class="faq-card animate-fade-in">
                        <button class="faq-question" aria-expanded="false">
                            Do you help with app store submission and approval?
                            <i class="bi bi-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes! We handle the complete app store submission process including:</p>
                            <ul>
                                <li>App Store Connect setup for iOS</li>
                                <li>Google Play Console configuration</li>
                                <li>App store optimization (ASO)</li>
                                <li>Screenshots and promotional content</li>
                                <li>Compliance with Apple/Google guidelines</li>
                                <li>Review process management and resubmission if needed</li>
                            </ul>
                            <p>We ensure your app meets all requirements for successful approval.</p>
                        </div>
                    </div>

                    <div class="faq-card animate-fade-in">
                        <button class="faq-question" aria-expanded="false">
                            Can you integrate with our existing systems?
                            <i class="bi bi-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Absolutely! We have extensive experience integrating mobile apps with:</p>
                            <ul>
                                <li>CRM systems (Salesforce, HubSpot, Zoho)</li>
                                <li>ERP solutions (SAP, Oracle, Microsoft Dynamics)</li>
                                <li>Payment gateways (Stripe, PayPal, Razorpay)</li>
                                <li>Social media platforms (Facebook, Instagram, Twitter APIs)</li>
                                <li>Cloud services (AWS, Azure, Google Cloud)</li>
                                <li>Custom APIs and legacy systems</li>
                            </ul>
                            <p>We ensure secure, efficient data synchronization between your app and existing infrastructure.</p>
                        </div>
                    </div>

                    <div class="faq-card animate-fade-in">
                        <button class="faq-question" aria-expanded="false">
                            What happens after the app is launched?
                            <i class="bi bi-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Our partnership continues post-launch with comprehensive support services:</p>
                            <ul>
                                <li><strong>24/7 Monitoring:</strong> Performance tracking and crash reporting</li>
                                <li><strong>Regular Updates:</strong> OS compatibility and security patches</li>
                                <li><strong>Bug Fixes:</strong> Priority issue resolution</li>
                                <li><strong>Feature Enhancements:</strong> Based on user feedback and analytics</li>
                                <li><strong>Analytics & Reporting:</strong> User behavior insights and performance metrics</li>
                                <li><strong>Scalability Management:</strong> Infrastructure optimization as user base grows</li>
                            </ul>
                            <p>We offer flexible maintenance packages tailored to your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="app-cta" id="consultation">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title animate-fade-in">Ready to Build Your Mobile App?</h2>
                <p class="cta-text animate-fade-in">
                    Schedule a free consultation with our app development experts. Let's discuss your project, 
                    explore possibilities, and create a roadmap for your mobile success.
                </p>
                <div class="cta-buttons animate-fade-in">
                    <a href="<?= site_url('free-quote') ?>" class="cta-button primary">
                        <i class="bi bi-calendar-check me-2"></i> Book Free Consultation
                    </a>
                    <a href="tel:+1234567890" class="cta-button secondary">
                        <i class="bi bi-telephone me-2"></i> Call Us Now
                    </a>
                </div>
                <p class="mt-4 opacity-75 animate-fade-in">
                    <i class="bi bi-clock me-1"></i> 45-minute strategy session • No obligation • Expert advice
                </p>
            </div>
        </div>
    </section>
 
    <script>
        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                
                // Close all other FAQs
                document.querySelectorAll('.faq-question').forEach(otherButton => {
                    if (otherButton !== button) {
                        otherButton.setAttribute('aria-expanded', 'false');
                        otherButton.nextElementSibling.classList.remove('show');
                    }
                });
                
                // Toggle current FAQ
                button.setAttribute('aria-expanded', !isExpanded);
                if (!isExpanded) {
                    answer.classList.add('show');
                } else {
                    answer.classList.remove('show');
                }
            });
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
            document.querySelectorAll('.service-card, .process-step, .tech-icon-box, .faq-card').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
 