 <style>
     /* ======= Hero Section ======= */
     .services-hero {
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         padding: 140px 0 100px;
         color: white;
         position: relative;
         overflow: hidden;
     }

     .services-hero::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
             radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
     }

     .services-hero h1 {
         font-size: 3.5rem;
         font-weight: 800;
         margin-bottom: 1.5rem;
         line-height: 1.2;
     }

     .services-hero .lead {
         font-size: 1.3rem;
         opacity: 0.95;
         max-width: 700px;
         margin: 0 auto 2.5rem;
     }

     .hero-cta {
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

     .hero-cta:hover {
         transform: translateY(-3px) scale(1.05);
         box-shadow: var(--shadow-xl);
         color: var(--secondary-blue);
     }

     /* ======= Services Grid ======= */
     .services-grid-section {
         padding: 100px 0;
         background: var(--bg-light);
         position: relative;
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
         z-index: 1;
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
         z-index: 2;
     }

     .service-card:hover {
         transform: translateY(-10px);
         box-shadow: var(--shadow-xl);
         border-color: var(--primary-blue);
     }

     .service-card:hover::before {
         transform: scaleX(1);
     }

     .service-icon-wrapper {
         width: 90px;
         height: 90px;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
         border-radius: 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin-bottom: 2rem;
         position: relative;
         transition: var(--transition);
     }

     .service-card:hover .service-icon-wrapper {
         transform: rotate(5deg) scale(1.1);
         box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
     }

     .service-icon {
         font-size: 2.5rem;
         color: white;
     }

     .service-card h3 {
         font-size: 1.75rem;
         font-weight: 700;
         margin-bottom: 1rem;
         color: var(--dark-text);
     }

     .service-card p {
         color: var(--light-text);
         margin-bottom: 1.5rem;
         font-size: 1.05rem;
         line-height: 1.7;
     }

     .service-features {
         list-style: none;
         padding: 0;
         margin-bottom: 2rem;
     }

     .service-features li {
         padding: 0.5rem 0;
         display: flex;
         align-items: center;
         color: var(--dark-text);
     }

     .service-features li i {
         color: var(--primary-blue);
         margin-right: 0.75rem;
         font-size: 1.1rem;
     }

     .service-cta {
         display: inline-flex;
         align-items: center;
         color: var(--primary-blue);
         text-decoration: none;
         font-weight: 600;
         padding: 0.75rem 1.5rem;
         border-radius: 50px;
         border: 2px solid var(--primary-blue);
         transition: var(--transition);
         position: relative;
         overflow: hidden;
     }

     .service-cta::before {
         content: '';
         position: absolute;
         top: 0;
         left: -100%;
         width: 100%;
         height: 100%;
         background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.1), transparent);
         transition: left 0.5s ease;
     }

     .service-cta:hover {
         background: var(--primary-blue);
         color: white;
         transform: translateX(5px);
     }

     .service-cta:hover::before {
         left: 100%;
     }

     /* ======= Stats Section ======= */
     .services-stats {
         background: white;
         padding: 80px 0;
         position: relative;
     }

     .services-stats::before {
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
         padding: 2rem;
         transition: var(--transition);
     }

     .stat-item:hover {
         transform: translateY(-5px);
     }

     .stat-number {
         font-size: 3.5rem;
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
         text-transform: uppercase;
         letter-spacing: 1px;
     }

     /* ======= Process Section ======= */
     .services-process {
         padding: 100px 0;
         background: linear-gradient(135deg, #f8fafc, #f1f5f9);
     }

     .process-step {
         text-align: center;
         padding: 2rem;
         position: relative;
     }

     .process-step::before {
         content: '';
         position: absolute;
         top: 40px;
         left: 50%;
         width: 100%;
         height: 2px;
         background: var(--border-color);
         z-index: 1;
     }

     .process-step:last-child::before {
         display: none;
     }

     .step-circle {
         width: 80px;
         height: 80px;
         background: white;
         border: 3px solid var(--primary-blue);
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: 700;
         font-size: 1.5rem;
         color: var(--primary-blue);
         margin: 0 auto 1.5rem;
         position: relative;
         z-index: 2;
         transition: var(--transition);
     }

     .process-step:hover .step-circle {
         background: var(--primary-blue);
         color: white;
         transform: scale(1.1);
         box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
     }

     .step-content h5 {
         font-weight: 600;
         margin-bottom: 0.75rem;
         color: var(--dark-text);
     }

     .step-content p {
         color: var(--light-text);
         font-size: 0.95rem;
     }

     /* ======= Testimonials ======= */
     .services-testimonials {
         padding: 100px 0;
         background: white;
     }

     .testimonial-card {
         background: white;
         border-radius: var(--radius-lg);
         padding: 2.5rem;
         border: 1px solid var(--border-color);
         transition: var(--transition);
         height: 100%;
         position: relative;
     }

     .testimonial-card:hover {
         transform: translateY(-5px);
         box-shadow: var(--shadow-lg);
         border-color: var(--primary-blue);
     }

     .testimonial-quote {
         font-size: 1.2rem;
         color: var(--dark-text);
         margin-bottom: 1.5rem;
         position: relative;
         padding-left: 1.5rem;
     }

     .testimonial-quote::before {
         content: '"';
         position: absolute;
         left: 0;
         top: -10px;
         font-size: 3rem;
         color: var(--primary-blue);
         opacity: 0.2;
         font-family: serif;
     }

     .testimonial-author {
         display: flex;
         align-items: center;
         gap: 1rem;
     }

     .author-avatar {
         width: 60px;
         height: 60px;
         border-radius: 50%;
         object-fit: cover;
         border: 3px solid var(--primary-blue);
     }

     .author-info h6 {
         font-weight: 600;
         margin-bottom: 0.25rem;
     }

     .author-info small {
         color: var(--light-text);
     }

     /* ======= CTA Section ======= */
     .services-cta {
         padding: 100px 0;
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         position: relative;
         overflow: hidden;
     }

     .services-cta::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
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
         .services-hero h1 {
             font-size: 2.8rem;
         }

         .service-card {
             padding: 2rem;
         }

         .service-icon-wrapper {
             width: 80px;
             height: 80px;
         }

         .process-step::before {
             display: none;
         }

         .cta-content h2 {
             font-size: 2.5rem;
         }
     }

     @media (max-width: 768px) {
         .services-hero {
             padding: 120px 0 80px;
         }

         .services-hero h1 {
             font-size: 2.3rem;
         }

         .services-hero .lead {
             font-size: 1.1rem;
         }

         .service-card {
             padding: 1.75rem;
         }

         .stat-number {
             font-size: 2.8rem;
         }

         .cta-content h2 {
             font-size: 2rem;
         }

         .cta-content p {
             font-size: 1.1rem;
         }
     }

     @media (max-width: 576px) {
         .services-hero {
             padding: 100px 0 60px;
         }

         .services-hero h1 {
             font-size: 2rem;
         }

         .service-card {
             padding: 1.5rem;
         }

         .service-icon-wrapper {
             width: 70px;
             height: 70px;
             margin-bottom: 1.5rem;
         }

         .service-icon {
             font-size: 2rem;
         }

         .service-card h3 {
             font-size: 1.5rem;
         }

         .stat-item {
             padding: 1.5rem;
         }

         .stat-number {
             font-size: 2.5rem;
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
 <section class="services-hero">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-10 text-center">
                 <h1 class="animate-fade-in">Transform Your Business with Our Digital Solutions</h1>
                 <p class="lead animate-fade-in text-white">
                     From cutting-edge web development to strategic digital marketing, we provide comprehensive
                     technology solutions that drive growth and deliver measurable results for your business.
                 </p>
                 <a href="#quote-form" class="hero-cta animate-fade-in">
                     <i class="bi bi-rocket-takeoff me-2"></i> Get Your Free Strategy Session
                 </a>
             </div>
         </div>
     </div>
 </section>

 <!-- Services Grid -->
 <section class="services-grid-section">
     <div class="container">
         <div class="row g-4">
             <!-- Website Development -->
             <div class="col-xl-4 col-lg-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper float-animation">
                         <i class="bi bi-globe service-icon"></i>
                     </div>
                     <h3>Website Development</h3>
                     <p>Modern, responsive websites that convert visitors into customers. Custom designs tailored to your brand identity and business goals.</p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Responsive & Mobile-First Design</li>
                         <li><i class="bi bi-check-circle"></i> SEO-Optimized Architecture</li>
                         <li><i class="bi bi-check-circle"></i> Lightning-Fast Performance</li>
                         <li><i class="bi bi-check-circle"></i> CMS Integration (WordPress, Custom)</li>
                     </ul>
                     <a href="<?= site_url('services/web-development') ?>" class="service-cta">
                         Explore Service <i class="bi bi-arrow-right ms-2"></i>
                     </a>
                 </div>
             </div>

             <!-- Mobile App Development -->
             <div class="col-xl-4 col-lg-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper float-animation">
                         <i class="bi bi-phone service-icon"></i>
                     </div>
                     <h3>Mobile App Development</h3>
                     <p>Native and cross-platform mobile applications that deliver exceptional user experiences and drive engagement.</p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> iOS & Android Native Apps</li>
                         <li><i class="bi bi-check-circle"></i> React Native & Flutter</li>
                         <li><i class="bi bi-check-circle"></i> API & Backend Integration</li>
                         <li><i class="bi bi-check-circle"></i> App Store Optimization</li>
                     </ul>
                     <a href="<?= site_url('services/app-development') ?>" class="service-cta">
                         Explore Service <i class="bi bi-arrow-right ms-2"></i>
                     </a>
                 </div>
             </div>

             <!-- SEO & Digital Marketing -->
             <div class="col-xl-4 col-lg-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper float-animation">
                         <i class="bi bi-search service-icon"></i>
                     </div>
                     <h3>SEO & Digital Marketing</h3>
                     <p>Boost your online visibility, drive qualified traffic, and generate leads with our data-driven marketing strategies.</p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Comprehensive SEO Audits</li>
                         <li><i class="bi bi-check-circle"></i> Content Marketing Strategy</li>
                         <li><i class="bi bi-check-circle"></i> PPC & Social Media Advertising</li>
                         <li><i class="bi bi-check-circle"></i> Conversion Rate Optimization</li>
                     </ul>
                     <a href="<?= site_url('services/seo-services') ?>" class="service-cta">
                         Explore Service <i class="bi bi-arrow-right ms-2"></i>
                     </a>
                 </div>
             </div>

             <!-- CRM & ERP Solutions -->
             <div class="col-xl-4 col-lg-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper float-animation">
                         <i class="bi bi-diagram-3 service-icon"></i>
                     </div>
                     <h3>CRM & ERP Solutions</h3>
                     <p>Streamline operations and enhance productivity with custom business management systems.</p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Custom CRM Development</li>
                         <li><i class="bi bi-check-circle"></i> Inventory & Supply Chain</li>
                         <li><i class="bi bi-check-circle"></i> Sales & Pipeline Management</li>
                         <li><i class="bi bi-check-circle"></i> Advanced Analytics & Reporting</li>
                     </ul>
                     <a href="<?= site_url('services/crm-erp') ?>" class="service-cta">
                         Explore Service <i class="bi bi-arrow-right ms-2"></i>
                     </a>
                 </div>
             </div>

             <!-- Lead Generation -->
             <div class="col-xl-4 col-lg-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper float-animation">
                         <i class="bi bi-megaphone service-icon"></i>
                     </div>
                     <h3>Lead Generation</h3>
                     <p>Consistent pipeline of qualified leads through targeted digital campaigns and optimization.</p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Targeted PPC Campaigns</li>
                         <li><i class="bi bi-check-circle"></i> Social Media Lead Gen</li>
                         <li><i class="bi bi-check-circle"></i> Email Marketing Automation</li>
                         <li><i class="bi bi-check-circle"></i> High-Converting Landing Pages</li>
                     </ul>
                     <a href="<?= site_url('services/lead-generation') ?>" class="service-cta">
                         Explore Service <i class="bi bi-arrow-right ms-2"></i>
                     </a>
                 </div>
             </div>

             <!-- Hosting & Infrastructure -->
             <div class="col-xl-4 col-lg-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon-wrapper float-animation">
                         <i class="bi bi-server service-icon"></i>
                     </div>
                     <h3>Hosting & Infrastructure</h3>
                     <p>Reliable, secure, and scalable hosting solutions with 24/7 monitoring and support.</p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> 99.9% Uptime Guarantee</li>
                         <li><i class="bi bi-check-circle"></i> Free SSL Certificates</li>
                         <li><i class="bi bi-check-circle"></i> Automated Daily Backups</li>
                         <li><i class="bi bi-check-circle"></i> 24/7 Technical Support</li>
                     </ul>
                     <a href="<?= site_url('services/hosting-domain') ?>" class="service-cta">
                         Explore Service <i class="bi bi-arrow-right ms-2"></i>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Stats Section -->
 <section class="services-stats">
     <div class="container">
         <div class="row text-center">
             <div class="col-lg-3 col-md-6">
                 <div class="stat-item animate-fade-in">
                     <div class="stat-number">500+</div>
                     <div class="stat-label">Happy Clients</div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="stat-item animate-fade-in">
                     <div class="stat-number">1200+</div>
                     <div class="stat-label">Projects Delivered</div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="stat-item animate-fade-in">
                     <div class="stat-number">98%</div>
                     <div class="stat-label">Client Retention</div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="stat-item animate-fade-in">
                     <div class="stat-number">10+</div>
                     <div class="stat-label">Years Experience</div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Our Process -->
 <section class="services-process">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Our Proven Process</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">A systematic approach to delivering exceptional results</p>
         </div>

         <div class="row">
             <div class="col-lg-4 col-md-6">
                 <div class="process-step animate-fade-in">
                     <div class="step-circle">01</div>
                     <div class="step-content">
                         <h5>Discovery & Planning</h5>
                         <p>We analyze your business goals and create a detailed project roadmap</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="process-step animate-fade-in">
                     <div class="step-circle">02</div>
                     <div class="step-content">
                         <h5>Design & Prototyping</h5>
                         <p>Create wireframes, mockups, and interactive prototypes</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="process-step animate-fade-in">
                     <div class="step-circle">03</div>
                     <div class="step-content">
                         <h5>Development</h5>
                         <p>Build the solution using modern technologies and best practices</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="process-step animate-fade-in">
                     <div class="step-circle">04</div>
                     <div class="step-content">
                         <h5>Testing & QA</h5>
                         <p>Rigorous testing ensures flawless performance across all devices</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="process-step animate-fade-in">
                     <div class="step-circle">05</div>
                     <div class="step-content">
                         <h5>Deployment</h5>
                         <p>Launch your solution with zero downtime and maximum impact</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="process-step animate-fade-in">
                     <div class="step-circle">06</div>
                     <div class="step-content">
                         <h5>Support & Growth</h5>
                         <p>Ongoing maintenance and optimization for continuous improvement</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Testimonials -->
 <section class="services-testimonials">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Client Success Stories</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 600px; margin: 1rem auto 0;">See what our clients say about working with us</p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4">
                 <div class="testimonial-card animate-fade-in">
                     <div class="testimonial-quote">
                         "TechElevatr transformed our online presence completely. Their team delivered exactly what we needed, on time and within budget. Highly recommended!"
                     </div>
                     <div class="testimonial-author">
                         <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rajesh Kumar" class="author-avatar">
                         <div class="author-info">
                             <h6>Rajesh Kumar</h6>
                             <small>CEO, TechStart Solutions</small>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="testimonial-card animate-fade-in">
                     <div class="testimonial-quote">
                         "The mobile app they developed for us exceeded all expectations. User engagement increased by 300% in the first quarter after launch."
                     </div>
                     <div class="testimonial-author">
                         <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Priya Sharma" class="author-avatar">
                         <div class="author-info">
                             <h6>Priya Sharma</h6>
                             <small>Founder, FitLife App</small>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="testimonial-card animate-fade-in">
                     <div class="testimonial-quote">
                         "Their digital marketing strategy doubled our lead generation in just 6 months. The ROI has been incredible. Truly partners in our success."
                     </div>
                     <div class="testimonial-author">
                         <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Amit Patel" class="author-avatar">
                         <div class="author-info">
                             <h6>Amit Patel</h6>
                             <small>Director, GreenLeaf Organics</small>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- CTA Section -->
 <section class="services-cta">
     <div class="container">
         <div class="cta-content animate-fade-in">
             <h2>Ready to Transform Your Business?</h2>
             <p class="text-white">Get a free consultation and project quote. Let's discuss how we can help your business grow with our digital solutions.</p>
             <div class="cta-buttons">
                 <a href="<?= site_url('free-quote') ?>" class="cta-button primary">
                     <i class="bi bi-rocket-takeoff me-2"></i> Get Free Quote
                 </a>
                 <a href="tel:+1234567890" class="cta-button secondary">
                     <i class="bi bi-telephone me-2"></i> Call Us Now
                 </a>
             </div>
             <p class="mt-4 opacity-75">
                 <i class="bi bi-clock me-1"></i> 30-minute consultation • No obligation • Expert advice
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
         document.querySelectorAll('.service-card, .stat-item, .process-step, .testimonial-card').forEach(el => {
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
     });
 </script>