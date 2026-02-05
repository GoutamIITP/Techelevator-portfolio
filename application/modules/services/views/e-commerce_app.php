 <style>
     /* ======= Hero Section ======= */
     .ecommerce-hero {
         background: linear-gradient(135deg, #7c3aed, #2563eb);
         padding: 10px 0 100px;
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
             radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
             radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
     }

     .hero-badge {
         display: inline-flex;
         align-items: center;
         background: linear-gradient(135deg, #fbbf24, #f59e0b);
         color: var(--dark-text);
         padding: 10px 24px;
         border-radius: 50px;
         font-weight: 700;
         font-size: 0.95rem;
         margin-bottom: 2rem;
         box-shadow: var(--shadow-md);
         backdrop-filter: blur(10px);
         border: 2px solid rgba(255, 255, 255, 0.3);
     }

     .hero-title {
         font-size: 3.5rem;
         font-weight: 800;
         line-height: 1.2;
         margin-bottom: 1.5rem;
     }

     .hero-subtitle {
         font-size: 1.3rem;
         opacity: 0.95;
         margin-bottom: 2.5rem;
         max-width: 700px;
         margin-left: auto;
         margin-right: auto;
     }

     .hero-cta {
         display: inline-flex;
         align-items: center;
         background: white;
         color: #7c3aed;
         padding: 15px 40px;
         border-radius: 50px;
         font-weight: 700;
         text-decoration: none;
         transition: var(--transition);
         font-size: 1.1rem;
         box-shadow: var(--shadow-lg);
     }

     .hero-cta:hover {
         transform: translateY(-3px) scale(1.05);
         box-shadow: var(--shadow-xl);
         color: #2563eb;
     }

     /* Floating Device Animation */
     .device-mockup {
         position: relative;
         margin-top: 2rem;
         animation: float 6s ease-in-out infinite;
     }

     @keyframes float {

         0%,
         100% {
             transform: translateY(0);
         }

         50% {
             transform: translateY(-20px);
         }
     }

     /* ======= Services Grid ======= */
     .services-grid-section {
         padding: 10px 0;
         background: var(--bg-light);
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
     }

     .service-card::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         height: 4px;
         background: linear-gradient(to right, #7c3aed, #2563eb);
         transform: scaleX(0);
         transition: transform 0.4s ease;
     }

     .service-card:hover {
         transform: translateY(-10px);
         box-shadow: var(--shadow-xl);
         border-color: #7c3aed;
     }

     .service-card:hover::before {
         transform: scaleX(1);
     }

     .service-icon-wrapper {
         width: 80px;
         height: 80px;
         background: linear-gradient(135deg, #7c3aed, #2563eb);
         border-radius: 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin: 0 auto 1.5rem;
         font-size: 2rem;
         color: white;
         transition: var(--transition);
     }

     .service-card:hover .service-icon-wrapper {
         transform: rotate(5deg) scale(1.1);
         box-shadow: 0 10px 20px rgba(124, 58, 237, 0.2);
     }

     /* ======= Features Section ======= */
     .features-section {
         padding: 5px 0;
         background: white;
     }

     .features-grid {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
         gap: 1.5rem;
         margin-top: 3rem;
     }

     .feature-item {
         display: flex;
         align-items: flex-start;
         gap: 1rem;
         padding: 1.5rem;
         background: var(--bg-light);
         border-radius: var(--radius);
         transition: var(--transition);
     }

     .feature-item:hover {
         transform: translateY(-5px);
         background: white;
         box-shadow: var(--shadow-lg);
     }

     .feature-icon {
         width: 50px;
         height: 50px;
         background: linear-gradient(135deg, #10b981, #059669);
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
         color: white;
         font-size: 1.3rem;
         flex-shrink: 0;
     }

     /* ======= Tech Stack Section ======= */
     .tech-stack-section {
         padding: 100px 0;
         background: linear-gradient(135deg, #f8fafc, #f1f5f9);
     }

     .tech-card {
         background: white;
         border-radius: var(--radius-lg);
         padding: 2.5rem;
         height: 100%;
         border: 1px solid var(--border-color);
         box-shadow: var(--shadow-sm);
     }

     .tech-grid {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
         gap: 1.5rem;
         margin-top: 2rem;
     }

     .tech-item {
         text-align: center;
         padding: 1.5rem;
         background: white;
         border-radius: var(--radius);
         border: 1px solid var(--border-color);
         transition: var(--transition);
     }

     .tech-item:hover {
         transform: translateY(-5px);
         box-shadow: var(--shadow-md);
         border-color: #7c3aed;
     }

     .tech-icon {
         font-size: 2.5rem;
         margin-bottom: 1rem;
     }

     .tech-item:nth-child(1) .tech-icon {
         color: #61dafb;
     }

     /* React Native */
     .tech-item:nth-child(2) .tech-icon {
         color: #02569b;
     }

     /* Flutter */
     .tech-item:nth-child(3) .tech-icon {
         color: #ff2d20;
     }

     /* Laravel */
     .tech-item:nth-child(4) .tech-icon {
         color: #339933;
     }

     /* Node.js */
     .tech-item:nth-child(5) .tech-icon {
         color: #4479a1;
     }

     /* PostgreSQL */
     .tech-item:nth-child(6) .tech-icon {
         color: #232f3e;
     }

     /* AWS */

     /* ======= Process Section ======= */
     .process-section {
         padding: 10px 0;
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
         margin-top: 3rem;
     }

     .process-timeline::before {
         content: '';
         position: absolute;
         left: 0;
         top: 40px;
         bottom: 40px;
         width: 2px;
         background: linear-gradient(to bottom, #7c3aed, #2563eb);
     }

     .process-step {
         position: relative;
         padding-left: 40px;
         margin-bottom: 3rem;
     }

     .process-step:last-child {
         margin-bottom: 0;
     }

     .step-number {
         position: absolute;
         left: -20px;
         top: 0;
         width: 40px;
         height: 40px;
         background: white;
         border: 3px solid #7c3aed;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: 700;
         color: #7c3aed;
         font-size: 1.1rem;
         z-index: 1;
         transition: var(--transition);
     }

     .process-step:hover .step-number {
         background: #7c3aed;
         color: white;
         transform: scale(1.1);
         box-shadow: 0 5px 15px rgba(124, 58, 237, 0.3);
     }

     .step-content {
         background: white;
         padding: 1.5rem;
         border-radius: var(--radius);
         border: 1px solid var(--border-color);
         transition: var(--transition);
     }

     .process-step:hover .step-content {
         border-color: #7c3aed;
         box-shadow: var(--shadow-md);
     }

     /* ======= CTA Section ======= */
     .cta-section {
         padding: 0px 0;
         background: linear-gradient(135deg, #7c3aed, #2563eb);
         position: relative;
         overflow: hidden;
     }

     .cta-section::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
             radial-gradient(circle at 90% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
     }

     .cta-content {
         text-align: center;
         color: white;
         position: relative;
         z-index: 1;
     }

     .cta-title {
         font-size: 3rem;
         font-weight: 800;
         margin-bottom: 1.5rem;
     }

     .cta-subtitle {
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
         padding: 15px 40px;
         border-radius: 50px;
         font-weight: 700;
         text-decoration: none;
         transition: var(--transition);
         display: inline-flex;
         align-items: center;
         justify-content: center;
         font-size: 1.1rem;
     }

     .cta-button.primary {
         background: white;
         color: #7c3aed;
         box-shadow: var(--shadow-lg);
     }

     .cta-button.secondary {
         background: transparent;
         color: white;
         border: 2px solid rgba(255, 255, 255, 0.3);
     }

     .cta-button:hover {
         transform: translateY(-3px);
         box-shadow: var(--shadow-xl);
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
         .hero-title {
             font-size: 2.8rem;
         }

         .service-card {
             padding: 2rem;
         }

         .process-timeline::before {
             display: none;
         }

         .process-step {
             padding-left: 0;
             padding-top: 60px;
         }

         .step-number {
             left: 50%;
             top: 0;
             transform: translateX(-50%);
         }

         .cta-title {
             font-size: 2.5rem;
         }
     }

     @media (max-width: 768px) {
         .ecommerce-hero {
             padding: 120px 0 80px;
         }

         .hero-title {
             font-size: 2.3rem;
         }

         .hero-subtitle {
             font-size: 1.1rem;
         }

         .service-card {
             padding: 1.75rem;
         }

         .features-grid {
             grid-template-columns: 1fr;
         }

         .tech-grid {
             grid-template-columns: repeat(2, 1fr);
         }

         .cta-title {
             font-size: 2rem;
         }

         .cta-subtitle {
             font-size: 1.1rem;
         }
     }

     @media (max-width: 576px) {
         .ecommerce-hero {
             padding: 100px 0 60px;
         }

         .hero-title {
             font-size: 2rem;
         }

         .hero-badge {
             font-size: 0.85rem;
             padding: 8px 20px;
         }

         .service-card {
             padding: 1.5rem;
         }

         .service-icon-wrapper {
             width: 70px;
             height: 70px;
             font-size: 1.8rem;
         }

         .tech-grid {
             grid-template-columns: 1fr;
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
 <section class="ecommerce-hero">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-10 text-center">
                 <div class="hero-badge animate-fade-in">
                     <i class="bi bi-cart-check me-2"></i> Premium E-commerce Solutions
                 </div>
                 <h1 class="hero-title animate-fade-in">
                     Transform Your Business with Mobile Commerce
                 </h1>
                 <p class="hero-subtitle animate-fade-in text-white">
                     Build powerful, scalable e-commerce mobile apps that increase sales,
                     improve customer experience, and drive business growth across
                     Android & iOS platforms.
                 </p>
                 <a href="#quote-form" class="hero-cta animate-fade-in">
                     <i class="bi bi-cart-check me-2"></i> Get Free App Consultation
                 </a>

                 <!-- Device Mockup -->
                 <div class="device-mockup mt-5 animate-fade-in">
                     <div class="row justify-content-center">
                         <div class="col-md-4">
                             <div class="text-center mb-4 mb-md-0">
                                 <i class="bi bi-phone text-white fs-1 mb-2"></i>
                                 <p class="text-white mb-0">Android Apps</p>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="text-center">
                                 <i class="bi bi-tablet text-white fs-1 mb-2"></i>
                                 <p class="text-white mb-0">iOS Apps</p>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="text-center mt-4 mt-md-0">
                                 <i class="bi bi-laptop text-white fs-1 mb-2"></i>
                                 <p class="text-white mb-0">Admin Dashboard</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- What We Build -->
 <section class="services-grid-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">
                 Complete E-commerce Solutions
             </h2>
             <p class="section-subtitle animate-fade-in" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                 End-to-end mobile commerce applications tailored to your business needs
             </p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper">
                         <i class="bi bi-phone"></i>
                     </div>
                     <h3>Customer Shopping App</h3>
                     <p>Seamless product browsing, smart cart management, and friction-free checkout experiences that convert visitors into customers.</p>
                     <ul class="list-unstyled mt-3">
                         <li><i class="bi bi-check-circle text-success me-2"></i> Product Catalog</li>
                         <li><i class="bi bi-check-circle text-success me-2"></i> Smart Search & Filters</li>
                         <li><i class="bi bi-check-circle text-success me-2"></i> Wishlist Management</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper">
                         <i class="bi bi-credit-card"></i>
                     </div>
                     <h3>Secure Payment Systems</h3>
                     <p>Multiple payment options including UPI, Cards, Digital Wallets, COD, and international payment gateways with bank-level security.</p>
                     <ul class="list-unstyled mt-3">
                         <li><i class="bi bi-check-circle text-success me-2"></i> Multiple Payment Methods</li>
                         <li><i class="bi bi-check-circle text-success me-2"></i> PCI DSS Compliance</li>
                         <li><i class="bi bi-check-circle text-success me-2"></i> Fraud Detection</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper">
                         <i class="bi bi-speedometer2"></i>
                     </div>
                     <h3>Admin Dashboard</h3>
                     <p>Complete control panel to manage products, orders, users, inventory, offers, and analyze sales performance in real-time.</p>
                     <ul class="list-unstyled mt-3">
                         <li><i class="bi bi-check-circle text-success me-2"></i> Order Management</li>
                         <li><i class="bi bi-check-circle text-success me-2"></i> Inventory Control</li>
                         <li><i class="bi bi-check-circle text-success me-2"></i> Analytics Dashboard</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Key Features -->
 <section class="features-section">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6">
                 <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">
                     Advanced App Features
                 </h2>
                 <p class="section-subtitle animate-fade-in" style="color: var(--light-text); margin: 1rem 0 0;">
                     Everything you need for a successful e-commerce mobile app
                 </p>

                 <div class="features-grid animate-fade-in">
                     <div class="feature-item">
                         <div class="feature-icon">
                             <i class="bi bi-phone"></i>
                         </div>
                         <div>
                             <h6 class="fw-bold mb-1">Cross-Platform Support</h6>
                             <p class="small mb-0">Native Android & iOS apps with single codebase</p>
                         </div>
                     </div>

                     <div class="feature-item">
                         <div class="feature-icon">
                             <i class="bi bi-search"></i>
                         </div>
                         <div>
                             <h6 class="fw-bold mb-1">Smart Search & Filters</h6>
                             <p class="small mb-0">Advanced product search with filters & sorting</p>
                         </div>
                     </div>

                     <div class="feature-item">
                         <div class="feature-icon">
                             <i class="bi bi-cart"></i>
                         </div>
                         <div>
                             <h6 class="fw-bold mb-1">Cart & Wishlist</h6>
                             <p class="small mb-0">Save items for later & manage shopping cart</p>
                         </div>
                     </div>

                     <div class="feature-item">
                         <div class="feature-icon">
                             <i class="bi bi-shield-check"></i>
                         </div>
                         <div>
                             <h6 class="fw-bold mb-1">Secure Payments</h6>
                             <p class="small mb-0">Multiple payment options with SSL encryption</p>
                         </div>
                     </div>

                     <div class="feature-item">
                         <div class="feature-icon">
                             <i class="bi bi-truck"></i>
                         </div>
                         <div>
                             <h6 class="fw-bold mb-1">Order Tracking</h6>
                             <p class="small mb-0">Real-time order status & delivery tracking</p>
                         </div>
                     </div>

                     <div class="feature-item">
                         <div class="feature-icon">
                             <i class="bi bi-bell"></i>
                         </div>
                         <div>
                             <h6 class="fw-bold mb-1">Push Notifications</h6>
                             <p class="small mb-0">Engage users with personalized notifications</p>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-6">
                 <div class="tech-card animate-fade-in">
                     <h3 class="mb-4">Modern Technology Stack</h3>
                     <p class="text-muted mb-4">We use cutting-edge technologies for performance, scalability, and security</p>

                     <div class="tech-grid">
                         <div class="tech-item">
                             <i class="bi bi-code-slash tech-icon"></i>
                             <h6 class="fw-bold">React Native</h6>
                         </div>

                         <div class="tech-item">
                             <i class="bi bi-braces tech-icon"></i>
                             <h6 class="fw-bold">Flutter</h6>
                         </div>

                         <div class="tech-item">
                             <i class="bi bi-server tech-icon"></i>
                             <h6 class="fw-bold">Laravel / Node.js</h6>
                         </div>

                         <div class="tech-item">
                             <i class="bi bi-database tech-icon"></i>
                             <h6 class="fw-bold">PostgreSQL</h6>
                         </div>

                         <div class="tech-item">
                             <i class="bi bi-cloud tech-icon"></i>
                             <h6 class="fw-bold">AWS Cloud</h6>
                         </div>

                         <div class="tech-item">
                             <i class="bi bi-shield-lock tech-icon"></i>
                             <h6 class="fw-bold">SSL Security</h6>
                         </div>
                     </div>

                     <div class="mt-4">
                         <h6 class="fw-bold">Additional Capabilities:</h6>
                         <ul class="list-unstyled text-muted">
                             <li><i class="bi bi-check text-success me-2"></i> API Integration (Payment, Shipping)</li>
                             <li><i class="bi bi-check text-success me-2"></i> Real-time Analytics</li>
                             <li><i class="bi bi-check text-success me-2"></i> Cloud Storage & CDN</li>
                             <li><i class="bi bi-check text-success me-2"></i> App Store Optimization</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Development Process -->
 <section class="process-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">
                 Our Development Process
             </h2>
             <p class="section-subtitle animate-fade-in" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">
                 Structured approach to deliver high-quality e-commerce applications
             </p>
         </div>

         <div class="process-timeline">
             <div class="process-step animate-fade-in">
                 <div class="step-number">01</div>
                 <div class="step-content">
                     <h5>Requirement Analysis</h5>
                     <p class="text-muted mb-0">Understanding your business goals, target audience, and feature requirements</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">02</div>
                 <div class="step-content">
                     <h5>UI/UX Design</h5>
                     <p class="text-muted mb-0">Creating wireframes, mockups, and interactive prototypes</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">03</div>
                 <div class="step-content">
                     <h5>Development</h5>
                     <p class="text-muted mb-0">Building the app with clean code and modern technologies</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">04</div>
                 <div class="step-content">
                     <h5>Testing & QA</h5>
                     <p class="text-muted mb-0">Rigorous testing across devices and scenarios</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">05</div>
                 <div class="step-content">
                     <h5>Deployment</h5>
                     <p class="text-muted mb-0">App Store submission and launch management</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">06</div>
                 <div class="step-content">
                     <h5>Support & Maintenance</h5>
                     <p class="text-muted mb-0">Ongoing updates, improvements, and technical support</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- CTA Section -->
 <section class="cta-section">
     <div class="container">
         <div class="cta-content animate-fade-in">
             <h2 class="cta-title">Ready to Launch Your E-commerce App?</h2>
             <p class="cta-subtitle text-white">Get a free consultation and detailed project roadmap. No obligation, just expert advice.</p>
             <div class="cta-buttons">
                 <a href="<?= site_url('free-quote') ?>" class="cta-button primary">
                     <i class="bi bi-cart-check me-2"></i> Get Free Quote
                 </a>
                 <a href="tel:+1234567890" class="cta-button secondary">
                     <i class="bi bi-telephone me-2"></i> Talk to Expert
                 </a>
             </div>
             <p class="mt-4 opacity-75 text-white">
                 <i class="bi bi-clock me-1"></i> 45-minute consultation • App Store strategy • No hidden costs
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
         document.querySelectorAll('.service-card, .feature-item, .tech-item, .process-step').forEach(el => {
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

         // Add animation to hero elements with delay
         const heroElements = document.querySelectorAll('.animate-fade-in');
         heroElements.forEach((el, index) => {
             el.style.animationDelay = `${index * 0.2}s`;
         });
     });
 </script>