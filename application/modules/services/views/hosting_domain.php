 <style>
     /* ======= Hero Section ======= */
     .hosting-hero {
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         padding: 140px 0 100px;
         color: white;
         position: relative;
         overflow: hidden;
     }

     .hosting-hero::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
             radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
     }

     .service-badge {
         display: inline-flex;
         align-items: center;
         background: rgba(255, 255, 255, 0.2);
         color: white;
         padding: 0.6rem 1.2rem;
         border-radius: 50px;
         font-weight: 600;
         font-size: 0.95rem;
         margin-bottom: 1.5rem;
         backdrop-filter: blur(10px);
         border: 1px solid rgba(255, 255, 255, 0.1);
     }

     .hosting-hero h1 {
         font-size: 3.5rem;
         font-weight: 800;
         margin-bottom: 1.5rem;
         line-height: 1.2;
     }

     .hosting-hero .lead {
         font-size: 1.3rem;
         opacity: 0.95;
         margin-bottom: 2.5rem;
         max-width: 600px;
     }

     .hero-stats {
         display: flex;
         gap: 2rem;
         margin-top: 2rem;
         flex-wrap: wrap;
     }

     .stat-box {
         display: flex;
         align-items: center;
         gap: 0.75rem;
     }

     .stat-icon {
         width: 50px;
         height: 50px;
         background: rgba(255, 255, 255, 0.2);
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 1.5rem;
     }

     .stat-text {
         line-height: 1.3;
     }

     .stat-number {
         font-size: 1.5rem;
         font-weight: 700;
         display: block;
     }

     .stat-label {
         font-size: 0.9rem;
         opacity: 0.9;
     }

     /* ======= Services Grid ======= */
     .hosting-services {
         padding: 100px 0;
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
         color: white;
         font-size: 2rem;
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
         margin-bottom: 1.5rem;
         font-size: 1rem;
         line-height: 1.6;
     }

     /* ======= Hosting Plans ======= */
     .hosting-plans {
         padding: 100px 0;
         background: white;
         position: relative;
     }

     .hosting-plans::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         height: 1px;
         background: linear-gradient(to right, transparent, var(--border-color), transparent);
     }

     .plan-card {
         background: white;
         border-radius: var(--radius-lg);
         padding: 2.5rem;
         border: 2px solid var(--border-color);
         transition: var(--transition);
         position: relative;
         height: 100%;
         text-align: center;
     }

     .plan-card.popular {
         border-color: var(--primary-blue);
         transform: translateY(-10px);
         box-shadow: var(--shadow-lg);
     }

     .plan-card.popular::before {
         content: 'Most Popular';
         position: absolute;
         top: -12px;
         left: 50%;
         transform: translateX(-50%);
         background: var(--primary-blue);
         color: white;
         padding: 0.5rem 1.5rem;
         border-radius: 20px;
         font-weight: 600;
         font-size: 0.9rem;
     }

     .plan-header {
         margin-bottom: 2rem;
     }

     .plan-name {
         font-size: 1.5rem;
         font-weight: 700;
         color: var(--dark-text);
         margin-bottom: 0.5rem;
     }

     .plan-price {
         font-size: 3rem;
         font-weight: 800;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-orange));
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         line-height: 1;
         margin-bottom: 0.5rem;
     }

     .plan-period {
         color: var(--light-text);
         font-size: 0.9rem;
     }

     .plan-features {
         list-style: none;
         padding: 0;
         margin: 2rem 0;
     }

     .plan-features li {
         padding: 0.75rem 0;
         border-bottom: 1px solid var(--border-color);
         display: flex;
         align-items: center;
         justify-content: space-between;
     }

     .plan-features li:last-child {
         border-bottom: none;
     }

     .plan-features .feature-name {
         color: var(--dark-text);
     }

     .plan-features .feature-value {
         color: var(--primary-blue);
         font-weight: 600;
     }

     .plan-cta {
         display: inline-block;
         width: 100%;
         padding: 1rem;
         background: var(--primary-blue);
         color: white;
         border: none;
         border-radius: 8px;
         font-weight: 600;
         text-decoration: none;
         transition: var(--transition);
         text-align: center;
     }

     .plan-cta:hover {
         background: var(--secondary-blue);
         transform: translateY(-2px);
         box-shadow: var(--shadow-md);
         color: white;
     }

     .plan-card.popular .plan-cta {
         background: var(--accent-orange);
     }

     .plan-card.popular .plan-cta:hover {
         background: #ea580c;
     }

     /* ======= Domain Pricing ======= */
     .domain-pricing {
         padding: 100px 0;
         background: linear-gradient(135deg, #f8fafc, #f1f5f9);
     }

     .domain-card {
         background: white;
         border-radius: var(--radius);
         padding: 2rem;
         text-align: center;
         transition: var(--transition);
         border: 1px solid var(--border-color);
         position: relative;
         overflow: hidden;
     }

     .domain-card::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         height: 4px;
         background: var(--primary-blue);
         opacity: 0;
         transition: opacity 0.3s ease;
     }

     .domain-card:hover {
         transform: translateY(-5px);
         box-shadow: var(--shadow-lg);
         border-color: var(--primary-blue);
     }

     .domain-card:hover::before {
         opacity: 1;
     }

     .domain-extension {
         font-size: 2.5rem;
         font-weight: 800;
         color: var(--primary-blue);
         margin-bottom: 1rem;
         line-height: 1;
     }

     .domain-price {
         font-size: 2.5rem;
         font-weight: 800;
         color: var(--dark-text);
         margin-bottom: 0.5rem;
         line-height: 1;
     }

     .domain-period {
         color: var(--light-text);
         margin-bottom: 1.5rem;
     }

     .domain-features {
         list-style: none;
         padding: 0;
         margin: 1.5rem 0 0;
     }

     .domain-features li {
         padding: 0.5rem 0;
         color: var(--light-text);
         font-size: 0.9rem;
     }

     .domain-search {
         background: white;
         border-radius: var(--radius-lg);
         padding: 3rem;
         box-shadow: var(--shadow-lg);
         margin-top: 3rem;
     }

     .search-input-group {
         display: flex;
         gap: 1rem;
     }

     .domain-input {
         flex: 1;
         padding: 1rem 1.5rem;
         border: 2px solid var(--border-color);
         border-radius: 8px;
         font-size: 1.1rem;
         transition: var(--transition);
     }

     .domain-input:focus {
         border-color: var(--primary-blue);
         box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
         outline: none;
     }

     .domain-extension-select {
         width: 120px;
         padding: 1rem;
         border: 2px solid var(--border-color);
         border-radius: 8px;
         font-size: 1.1rem;
         background: white;
         cursor: pointer;
     }

     /* ======= Why Choose Us ======= */
     .hosting-benefits {
         padding: 100px 0;
         background: white;
     }

     .benefit-card {
         text-align: center;
         padding: 2rem;
     }

     .benefit-icon {
         width: 70px;
         height: 70px;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
         border-radius: 16px;
         display: flex;
         align-items: center;
         justify-content: center;
         color: white;
         font-size: 1.8rem;
         margin: 0 auto 1.5rem;
         transition: var(--transition);
     }

     .benefit-card:hover .benefit-icon {
         transform: rotate(5deg) scale(1.1);
     }

     .benefit-card h4 {
         font-weight: 700;
         margin-bottom: 1rem;
         color: var(--dark-text);
     }

     .benefit-card p {
         color: var(--light-text);
         font-size: 0.95rem;
     }

     /* ======= CTA Section ======= */
     .hosting-cta {
         padding: 100px 0;
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         position: relative;
         overflow: hidden;
     }

     .hosting-cta::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
             radial-gradient(circle at 90% 80%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
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
     }

     .cta-button.secondary:hover {
         background: rgba(255, 255, 255, 0.1);
         border-color: white;
     }

     /* ======= Responsive Design ======= */
     @media (max-width: 991.98px) {
         .hosting-hero h1 {
             font-size: 2.8rem;
         }

         .service-card {
             padding: 2rem;
         }

         .plan-card {
             padding: 2rem;
         }

         .cta-content h2 {
             font-size: 2.5rem;
         }

         .search-input-group {
             flex-direction: column;
         }

         .domain-extension-select {
             width: 100%;
         }
     }

     @media (max-width: 768px) {
         .hosting-hero {
             padding: 120px 0 80px;
         }

         .hosting-hero h1 {
             font-size: 2.3rem;
         }

         .hosting-hero .lead {
             font-size: 1.1rem;
         }

         .hero-stats {
             gap: 1rem;
         }

         .stat-box {
             flex: 1 1 calc(50% - 1rem);
         }

         .service-card {
             padding: 1.75rem;
         }

         .plan-card.popular {
             transform: none;
         }

         .cta-content h2 {
             font-size: 2rem;
         }

         .cta-content p {
             font-size: 1.1rem;
         }
     }

     @media (max-width: 576px) {
         .hosting-hero {
             padding: 100px 0 60px;
             text-align: center;
         }

         .hosting-hero h1 {
             font-size: 2rem;
         }

         .hero-stats {
             justify-content: center;
         }

         .stat-box {
             flex: 1 1 100%;
             justify-content: center;
         }

         .service-card {
             padding: 1.5rem;
         }

         .service-icon {
             width: 70px;
             height: 70px;
             margin-bottom: 1.5rem;
         }

         .plan-card {
             padding: 1.5rem;
         }

         .plan-price {
             font-size: 2.5rem;
         }

         .domain-pricing {
             padding: 60px 0;
         }

         .domain-card {
             padding: 1.5rem;
         }

         .domain-search {
             padding: 2rem;
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
     @keyframes float {

         0%,
         100% {
             transform: translateY(0);
         }

         50% {
             transform: translateY(-10px);
         }
     }

     .float-animation {
         animation: float 6s ease-in-out infinite;
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

     .animate-fade-in {
         animation: fadeInUp 0.6s ease forwards;
     }
 </style>

 <!-- Hero Section -->
 <section class="hosting-hero">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6">
                 <span class="service-badge animate-fade-in">
                     <i class="bi bi-server me-2"></i> Premium Hosting Solutions
                 </span>
                 <h1 class="animate-fade-in">Enterprise-Grade Hosting & Domain Services</h1>
                 <p class="lead animate-fade-in">
                     Get lightning-fast, secure, and reliable web hosting with 99.9% uptime guarantee.
                     Register your perfect domain and launch your online presence with confidence.
                 </p>
                 <div class="hero-stats">
                     <div class="stat-box animate-fade-in">
                         <div class="stat-icon">
                             <i class="bi bi-speedometer2"></i>
                         </div>
                         <div class="stat-text">
                             <span class="stat-number">99.9%</span>
                             <span class="stat-label">Uptime Guarantee</span>
                         </div>
                     </div>
                     <div class="stat-box animate-fade-in">
                         <div class="stat-icon">
                             <i class="bi bi-shield-check"></i>
                         </div>
                         <div class="stat-text">
                             <span class="stat-number">Free SSL</span>
                             <span class="stat-label">All Plans</span>
                         </div>
                     </div>
                     <div class="stat-box animate-fade-in">
                         <div class="stat-icon">
                             <i class="bi bi-headset"></i>
                         </div>
                         <div class="stat-text">
                             <span class="stat-number">24/7</span>
                             <span class="stat-label">Expert Support</span>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                     alt="Server Infrastructure"
                     class="img-fluid float-animation rounded-3 shadow-lg">
             </div>
         </div>
     </div>
 </section>

 <!-- Services Grid -->
 <section class="hosting-services">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Complete Hosting Solutions</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">Everything you need to power your online presence</p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon">
                         <i class="bi bi-server"></i>
                     </div>
                     <h3>Web Hosting</h3>
                     <p>High-performance SSD hosting with 99.9% uptime, free SSL certificates, and 24/7 technical support.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon">
                         <i class="bi bi-globe"></i>
                     </div>
                     <h3>Domain Registration</h3>
                     <p>Register your perfect domain name with all popular extensions (.com, .in, .org, .net, etc.)</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon">
                         <i class="bi bi-shield-check"></i>
                     </div>
                     <h3>SSL Certificates</h3>
                     <p>Free SSL certificates included with all hosting plans for secure data transmission and SEO benefits.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon">
                         <i class="bi bi-envelope"></i>
                     </div>
                     <h3>Email Hosting</h3>
                     <p>Professional email addresses with your domain name and advanced spam protection.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon">
                         <i class="bi bi-arrow-clockwise"></i>
                     </div>
                     <h3>Daily Backups</h3>
                     <p>Automatic daily backups to keep your website data safe and easily recoverable.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon">
                         <i class="bi bi-headset"></i>
                     </div>
                     <h3>24/7 Support</h3>
                     <p>Round-the-clock technical support via phone, email, and live chat for all your hosting needs.</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Hosting Plans -->
 <section class="hosting-plans">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Choose Your Perfect Plan</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">Scalable hosting solutions for every need</p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4">
                 <div class="plan-card animate-fade-in">
                     <div class="plan-header">
                         <div class="plan-name">Starter</div>
                         <div class="plan-price">₹499</div>
                         <div class="plan-period">per month</div>
                     </div>
                     <ul class="plan-features">
                         <li>
                             <span class="feature-name">Storage</span>
                             <span class="feature-value">10 GB SSD</span>
                         </li>
                         <li>
                             <span class="feature-name">Bandwidth</span>
                             <span class="feature-value">Unlimited</span>
                         </li>
                         <li>
                             <span class="feature-name">Websites</span>
                             <span class="feature-value">1 Website</span>
                         </li>
                         <li>
                             <span class="feature-name">Free SSL</span>
                             <span class="feature-value">Yes</span>
                         </li>
                         <li>
                             <span class="feature-name">Email Accounts</span>
                             <span class="feature-value">5</span>
                         </li>
                         <li>
                             <span class="feature-name">Support</span>
                             <span class="feature-value">Basic</span>
                         </li>
                     </ul>
                     <a href="<?= site_url('free-quote') ?>" class="plan-cta">Get Started</a>
                 </div>
             </div>

             <div class="col-lg-4">
                 <div class="plan-card popular animate-fade-in">
                     <div class="plan-header">
                         <div class="plan-name">Business</div>
                         <div class="plan-price">₹999</div>
                         <div class="plan-period">per month</div>
                     </div>
                     <ul class="plan-features">
                         <li>
                             <span class="feature-name">Storage</span>
                             <span class="feature-value">50 GB SSD</span>
                         </li>
                         <li>
                             <span class="feature-name">Bandwidth</span>
                             <span class="feature-value">Unlimited</span>
                         </li>
                         <li>
                             <span class="feature-name">Websites</span>
                             <span class="feature-value">10 Websites</span>
                         </li>
                         <li>
                             <span class="feature-name">Free SSL</span>
                             <span class="feature-value">Yes</span>
                         </li>
                         <li>
                             <span class="feature-name">Email Accounts</span>
                             <span class="feature-value">50</span>
                         </li>
                         <li>
                             <span class="feature-name">Support</span>
                             <span class="feature-value">Priority</span>
                         </li>
                         <li>
                             <span class="feature-name">Daily Backups</span>
                             <span class="feature-value">Yes</span>
                         </li>
                     </ul>
                     <a href="<?= site_url('free-quote') ?>" class="plan-cta">Get Started</a>
                 </div>
             </div>

             <div class="col-lg-4">
                 <div class="plan-card animate-fade-in">
                     <div class="plan-header">
                         <div class="plan-name">Enterprise</div>
                         <div class="plan-price">₹1,999</div>
                         <div class="plan-period">per month</div>
                     </div>
                     <ul class="plan-features">
                         <li>
                             <span class="feature-name">Storage</span>
                             <span class="feature-value">100 GB SSD</span>
                         </li>
                         <li>
                             <span class="feature-name">Bandwidth</span>
                             <span class="feature-value">Unlimited</span>
                         </li>
                         <li>
                             <span class="feature-name">Websites</span>
                             <span class="feature-value">Unlimited</span>
                         </li>
                         <li>
                             <span class="feature-name">Free SSL</span>
                             <span class="feature-value">Yes</span>
                         </li>
                         <li>
                             <span class="feature-name">Email Accounts</span>
                             <span class="feature-value">Unlimited</span>
                         </li>
                         <li>
                             <span class="feature-name">Support</span>
                             <span class="feature-value">24/7 Priority</span>
                         </li>
                         <li>
                             <span class="feature-name">Daily Backups</span>
                             <span class="feature-value">Yes</span>
                         </li>
                         <li>
                             <span class="feature-name">Dedicated IP</span>
                             <span class="feature-value">Yes</span>
                         </li>
                     </ul>
                     <a href="<?= site_url('free-quote') ?>" class="plan-cta">Get Started</a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Domain Pricing -->
 <section class="domain-pricing">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Domain Registration</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">Find and register your perfect domain name</p>
         </div>

         <div class="row g-4">
             <div class="col-lg-3 col-md-6">
                 <div class="domain-card animate-fade-in">
                     <div class="domain-extension">.com</div>
                     <div class="domain-price">₹800</div>
                     <div class="domain-period">per year</div>
                     <ul class="domain-features">
                         <li>Most Popular</li>
                         <li>Global Recognition</li>
                         <li>Best for Business</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="domain-card animate-fade-in">
                     <div class="domain-extension">.in</div>
                     <div class="domain-price">₹600</div>
                     <div class="domain-period">per year</div>
                     <ul class="domain-features">
                         <li>Indian Business</li>
                         <li>Local SEO Boost</li>
                         <li>Trust Factor</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="domain-card animate-fade-in">
                     <div class="domain-extension">.org</div>
                     <div class="domain-price">₹900</div>
                     <div class="domain-period">per year</div>
                     <ul class="domain-features">
                         <li>Non-Profit</li>
                         <li>Community Trust</li>
                         <li>Professional Image</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="domain-card animate-fade-in">
                     <div class="domain-extension">.net</div>
                     <div class="domain-price">₹1,000</div>
                     <div class="domain-period">per year</div>
                     <ul class="domain-features">
                         <li>Technology Focus</li>
                         <li>Network Services</li>
                         <li>Global Reach</li>
                     </ul>
                 </div>
             </div>
         </div>

         <!-- Domain Search -->
         <div class="domain-search animate-fade-in">
             <h3 class="text-center mb-4">Find Your Perfect Domain</h3>
             <div class="search-input-group">
                 <input type="text" class="domain-input" placeholder="Enter your domain name..." aria-label="Domain search">
                 <select class="domain-extension-select" aria-label="Domain extension">
                     <option value=".com">.com</option>
                     <option value=".in">.in</option>
                     <option value=".org">.org</option>
                     <option value=".net">.net</option>
                     <option value=".co.in">.co.in</option>
                     <option value=".biz">.biz</option>
                 </select>
                 <button class="btn btn-primary btn-lg" style="padding: 1rem 2rem;">Search</button>
             </div>
         </div>
     </div>
 </section>

 <!-- Why Choose Us -->
 <section class="hosting-benefits">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Why Choose Our Hosting?</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">Enterprise-grade features for every plan</p>
         </div>

         <div class="row g-4">
             <div class="col-lg-3 col-md-6">
                 <div class="benefit-card animate-fade-in">
                     <div class="benefit-icon">
                         <i class="bi bi-speedometer2"></i>
                     </div>
                     <h4>Lightning Fast</h4>
                     <p>SSD storage and optimized servers deliver blazing-fast website loading speeds.</p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="benefit-card animate-fade-in">
                     <div class="benefit-icon">
                         <i class="bi bi-shield-check"></i>
                     </div>
                     <h4>Maximum Security</h4>
                     <p>Free SSL certificates, DDoS protection, and daily backups keep your data safe.</p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="benefit-card animate-fade-in">
                     <div class="benefit-icon">
                         <i class="bi bi-phone"></i>
                     </div>
                     <h4>24/7 Support</h4>
                     <p>Expert technical support available round-the-clock via multiple channels.</p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="benefit-card animate-fade-in">
                     <div class="benefit-icon">
                         <i class="bi bi-arrow-clockwise"></i>
                     </div>
                     <h4>99.9% Uptime</h4>
                     <p>Enterprise-grade infrastructure ensures maximum reliability and uptime.</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- CTA Section -->
 <section class="hosting-cta">
     <div class="container">
         <div class="cta-content animate-fade-in">
             <h2>Ready to Launch Your Online Presence?</h2>
             <p>Get started with our premium hosting and domain services today. Join thousands of satisfied customers who trust us with their online success.</p>
             <div class="cta-buttons">
                 <a href="<?= site_url('free-quote') ?>" class="cta-button primary">
                     <i class="bi bi-rocket-takeoff me-2"></i> Get Started Now
                 </a>
                 <a href="tel:+1234567890" class="cta-button secondary">
                     <i class="bi bi-telephone me-2"></i> Call Us Now
                 </a>
             </div>
             <p class="mt-4 opacity-75">
                 <i class="bi bi-clock me-1"></i> 24/7 Support • 30-day money-back guarantee • No hidden fees
             </p>
         </div>
     </div>
 </section>


 <script>
     // Domain search functionality
     document.addEventListener('DOMContentLoaded', function() {
         const domainSearchBtn = document.querySelector('.btn-primary');
         const domainInput = document.querySelector('.domain-input');
         const domainSelect = document.querySelector('.domain-extension-select');

         if (domainSearchBtn && domainInput) {
             domainSearchBtn.addEventListener('click', function() {
                 const domain = domainInput.value.trim();
                 const extension = domainSelect.value;

                 if (domain) {
                     // Simulate domain search
                     const fullDomain = domain + extension;
                     alert(`Searching for domain: ${fullDomain}\n\n(Note: This is a demo. In production, this would check domain availability.)`);
                 } else {
                     alert('Please enter a domain name to search.');
                 }
             });

             // Allow Enter key to trigger search
             domainInput.addEventListener('keypress', function(e) {
                 if (e.key === 'Enter') {
                     domainSearchBtn.click();
                 }
             });
         }

         // Scroll animations
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
         document.querySelectorAll('.service-card, .plan-card, .domain-card, .benefit-card').forEach(el => {
             observer.observe(el);
         });
     });
 </script>