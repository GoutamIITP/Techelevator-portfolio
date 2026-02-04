 <style>
     /* ======= Hero Section ======= */
     .lead-hero {
         background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
         padding: 140px 0 100px;
         position: relative;
         overflow: hidden;
     }

     .lead-hero::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 10% 20%, rgba(37, 99, 235, 0.1) 0%, transparent 50%),
             radial-gradient(circle at 90% 80%, rgba(249, 115, 22, 0.05) 0%, transparent 50%);
     }

     .lead-badge {
         display: inline-flex;
         align-items: center;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
         color: white;
         padding: 8px 20px;
         border-radius: 50px;
         font-weight: 600;
         font-size: 0.9rem;
         margin-bottom: 2rem;
         box-shadow: var(--shadow-sm);
     }

     .lead-hero h1 {
         font-size: 3.5rem;
         font-weight: 800;
         margin-bottom: 1.5rem;
         line-height: 1.2;
         background: linear-gradient(135deg, var(--dark-text), var(--primary-blue));
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
     }

     .lead-hero .lead-text {
         font-size: 1.3rem;
         color: var(--light-text);
         margin-bottom: 2.5rem;
         max-width: 600px;
     }

     .hero-stats {
         display: flex;
         gap: 2rem;
         margin-top: 3rem;
         flex-wrap: wrap;
     }

     .stat-box {
         text-align: center;
         padding: 1rem;
         min-width: 120px;
     }

     .stat-number {
         font-size: 2.5rem;
         font-weight: 800;
         color: var(--primary-blue);
         line-height: 1;
         margin-bottom: 0.5rem;
     }

     .stat-label {
         font-size: 0.9rem;
         color: var(--light-text);
         font-weight: 600;
     }

     .hero-image-container {
         position: relative;
         padding: 2rem;
     }

     .hero-image {
         max-width: 100%;
         height: auto;
         filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.1));
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
     .lead-services-section {
         padding: 100px 0;
         background: white;
     }

     .lead-service-card {
         background: white;
         border-radius: var(--radius-lg);
         padding: 2.5rem;
         height: 100%;
         transition: var(--transition);
         border: 1px solid var(--border-color);
         position: relative;
         overflow: hidden;
     }

     .lead-service-card::before {
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

     .lead-service-card:hover {
         transform: translateY(-10px);
         box-shadow: var(--shadow-xl);
         border-color: var(--primary-blue);
     }

     .lead-service-card:hover::before {
         transform: scaleX(1);
     }

     .service-icon-container {
         width: 80px;
         height: 80px;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
         border-radius: 16px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin-bottom: 1.5rem;
         transition: var(--transition);
     }

     .lead-service-card:hover .service-icon-container {
         transform: rotate(5deg) scale(1.1);
         box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
     }

     .service-icon {
         font-size: 2.5rem;
         color: white;
     }

     .lead-service-card h3 {
         font-size: 1.5rem;
         font-weight: 700;
         margin-bottom: 1rem;
         color: var(--dark-text);
     }

     .lead-service-card p {
         color: var(--light-text);
         margin-bottom: 1.5rem;
         line-height: 1.7;
     }

     /* ======= Process Section ======= */
     .lead-process-section {
         padding: 100px 0;
         background: linear-gradient(135deg, #f8fafc, #f1f5f9);
     }

     .process-container {
         position: relative;
         max-width: 1200px;
         margin: 0 auto;
     }

     .process-line {
         position: absolute;
         top: 40px;
         left: 0;
         right: 0;
         height: 2px;
         background: linear-gradient(to right, var(--primary-blue), var(--accent-orange));
         z-index: 1;
     }

     .process-step {
         position: relative;
         z-index: 2;
         text-align: center;
         padding: 0 1rem;
     }

     .step-number {
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
         transition: var(--transition);
     }

     .process-step:hover .step-number {
         background: var(--primary-blue);
         color: white;
         transform: scale(1.1);
         box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
     }

     .step-content {
         background: white;
         padding: 1.5rem;
         border-radius: var(--radius);
         box-shadow: var(--shadow-sm);
     }

     .step-content h5 {
         font-weight: 600;
         margin-bottom: 0.5rem;
         color: var(--dark-text);
     }

     .step-content p {
         color: var(--light-text);
         font-size: 0.95rem;
     }

     /* ======= Case Studies ======= */
     .case-studies-section {
         padding: 100px 0;
         background: white;
     }

     .case-study-card {
         background: white;
         border-radius: var(--radius-lg);
         overflow: hidden;
         transition: var(--transition);
         border: 1px solid var(--border-color);
         height: 100%;
     }

     .case-study-card:hover {
         transform: translateY(-5px);
         box-shadow: var(--shadow-lg);
         border-color: var(--primary-blue);
     }

     .case-study-header {
         padding: 2rem 2rem 0;
     }

     .case-study-icon {
         width: 60px;
         height: 60px;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin-bottom: 1rem;
     }

     .case-study-icon i {
         font-size: 1.8rem;
         color: white;
     }

     .case-study-body {
         padding: 0 2rem 2rem;
     }

     .case-study-metrics {
         background: var(--bg-light);
         padding: 1.5rem;
         border-radius: var(--radius);
         margin-top: 1rem;
     }

     .metric-item {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 0.5rem 0;
         border-bottom: 1px solid var(--border-color);
     }

     .metric-item:last-child {
         border-bottom: none;
     }

     .metric-label {
         color: var(--light-text);
         font-size: 0.9rem;
     }

     .metric-value {
         font-weight: 600;
         color: var(--primary-blue);
     }

     /* ======= Technology Stack ======= */
     .tech-stack-section {
         padding: 100px 0;
         background: linear-gradient(135deg, #f8fafc, #f1f5f9);
     }

     .tech-icon-box {
         background: white;
         border-radius: var(--radius);
         padding: 2rem;
         text-align: center;
         transition: var(--transition);
         border: 1px solid var(--border-color);
         height: 100%;
     }

     .tech-icon-box:hover {
         transform: translateY(-5px);
         box-shadow: var(--shadow-md);
         border-color: var(--primary-blue);
     }

     .tech-icon {
         font-size: 2.5rem;
         color: var(--primary-blue);
         margin-bottom: 1rem;
         height: 60px;
         display: flex;
         align-items: center;
         justify-content: center;
     }

     /* ======= FAQ Section ======= */
     .faq-section {
         padding: 100px 0;
         background: white;
     }

     .accordion-button {
         font-weight: 600;
         padding: 1.5rem;
         border: 1px solid var(--border-color);
         margin-bottom: 0.5rem;
         border-radius: var(--radius) !important;
     }

     .accordion-button:not(.collapsed) {
         background: linear-gradient(135deg, #eff6ff, #dbeafe);
         color: var(--primary-blue);
         border-color: var(--primary-blue);
         box-shadow: none;
     }

     .accordion-button:focus {
         box-shadow: none;
         border-color: var(--primary-blue);
     }

     .accordion-body {
         padding: 1.5rem;
         border: 1px solid var(--border-color);
         border-top: none;
         border-radius: 0 0 var(--radius) var(--radius);
     }

     /* ======= CTA Section ======= */
     .lead-cta-section {
         padding: 100px 0;
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         position: relative;
         overflow: hidden;
     }

     .lead-cta-section::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
             radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
     }

     .lead-cta-card {
         background: white;
         border-radius: var(--radius-lg);
         padding: 3rem;
         box-shadow: var(--shadow-xl);
         position: relative;
         z-index: 1;
     }

     .lead-cta-card h2 {
         font-size: 2.5rem;
         font-weight: 800;
         margin-bottom: 1rem;
         color: var(--dark-text);
     }

     .lead-cta-card p {
         color: var(--light-text);
         margin-bottom: 2rem;
         font-size: 1.1rem;
     }

     .form-control {
         padding: 0.75rem 1rem;
         border: 1px solid var(--border-color);
         border-radius: 8px;
         transition: var(--transition);
     }

     .form-control:focus {
         border-color: var(--primary-blue);
         box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
     }

     .form-check-input:checked {
         background-color: var(--primary-blue);
         border-color: var(--primary-blue);
     }

     /* ======= Responsive Design ======= */
     @media (max-width: 991.98px) {
         .lead-hero h1 {
             font-size: 2.8rem;
         }

         .process-line {
             display: none;
         }

         .process-step {
             margin-bottom: 2rem;
         }
     }

     @media (max-width: 768px) {
         .lead-hero {
             padding: 120px 0 80px;
         }

         .lead-hero h1 {
             font-size: 2.3rem;
         }

         .lead-hero .lead-text {
             font-size: 1.1rem;
         }

         .hero-stats {
             justify-content: center;
         }

         .lead-service-card {
             padding: 2rem;
         }

         .lead-cta-card {
             padding: 2rem;
         }

         .lead-cta-card h2 {
             font-size: 2rem;
         }
     }

     @media (max-width: 576px) {
         .lead-hero {
             padding: 100px 0 60px;
         }

         .lead-hero h1 {
             font-size: 2rem;
         }

         .lead-badge {
             font-size: 0.8rem;
             padding: 6px 16px;
         }

         .lead-service-card {
             padding: 1.5rem;
         }

         .service-icon-container {
             width: 70px;
             height: 70px;
             margin-bottom: 1.25rem;
         }

         .service-icon {
             font-size: 2rem;
         }

         .lead-cta-card {
             padding: 1.5rem;
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
 <section class="lead-hero">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6 mb-5 mb-lg-0">
                 <span class="lead-badge animate-fade-in">
                     <i class="bi bi-megaphone me-2"></i> Premium Lead Generation
                 </span>
                 <h1 class="animate-fade-in">Transform Prospects into Paying Customers</h1>
                 <p class="lead-text animate-fade-in">
                     Drive consistent, high-quality leads with our data-driven strategies.
                     We combine cutting-edge technology with proven marketing tactics to deliver
                     measurable ROI for your business.
                 </p>

                 <div class="d-flex flex-wrap gap-3 mb-4 animate-fade-in">
                     <a href="#lead-form" class="btn btn-primary btn-lg">
                         <i class="bi bi-rocket-takeoff me-2"></i> Get Free Strategy Session
                     </a>
                     <a href="<?= site_url('portfolio') ?>" class="btn btn-outline-primary btn-lg">
                         <i class="bi bi-bar-chart me-2"></i> View Case Studies
                     </a>
                 </div>

                 <div class="hero-stats animate-fade-in">
                     <div class="stat-box">
                         <div class="stat-number">300%</div>
                         <div class="stat-label">Avg. ROI Increase</div>
                     </div>
                     <div class="stat-box">
                         <div class="stat-number">40%</div>
                         <div class="stat-label">Lower Cost Per Lead</div>
                     </div>
                     <div class="stat-box">
                         <div class="stat-number">90%</div>
                         <div class="stat-label">Client Satisfaction</div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-6">
                 <div class="hero-image-container">
                     <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                         alt="Lead Generation Analytics Dashboard"
                         class="hero-image rounded-3 shadow-lg animate-fade-in">
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Services Grid -->
 <section class="lead-services-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Our Lead Generation Services</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 700px; margin: 1rem auto 0;">
                 Comprehensive strategies that deliver qualified leads and measurable results
             </p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4 col-md-6">
                 <div class="lead-service-card animate-fade-in">
                     <div class="service-icon-container">
                         <i class="bi bi-google service-icon"></i>
                     </div>
                     <h3>Google Ads Management</h3>
                     <p>Targeted PPC campaigns that capture high-intent prospects actively searching for your services.</p>
                     <ul class="list-unstyled">
                         <li><i class="bi bi-check text-success me-2"></i> Keyword research & optimization</li>
                         <li><i class="bi bi-check text-success me-2"></i> Conversion tracking setup</li>
                         <li><i class="bi bi-check text-success me-2"></i> A/B testing & optimization</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="lead-service-card animate-fade-in">
                     <div class="service-icon-container">
                         <i class="bi bi-facebook service-icon"></i>
                     </div>
                     <h3>Social Media Advertising</h3>
                     <p>Precision-targeted ads on Facebook, Instagram, LinkedIn, and Twitter to reach your ideal customers.</p>
                     <ul class="list-unstyled">
                         <li><i class="bi bi-check text-success me-2"></i> Audience targeting & segmentation</li>
                         <li><i class="bi bi-check text-success me-2"></i> Retargeting campaigns</li>
                         <li><i class="bi bi-check text-success me-2"></i> Lead form optimization</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="lead-service-card animate-fade-in">
                     <div class="service-icon-container">
                         <i class="bi bi-envelope service-icon"></i>
                     </div>
                     <h3>Email Marketing Automation</h3>
                     <p>Nurture leads with automated email sequences that convert prospects into loyal customers.</p>
                     <ul class="list-unstyled">
                         <li><i class="bi bi-check text-success me-2"></i> Drip campaign setup</li>
                         <li><i class="bi bi-check text-success me-2"></i> Personalization & segmentation</li>
                         <li><i class="bi bi-check text-success me-2"></i> Performance analytics</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="lead-service-card animate-fade-in">
                     <div class="service-icon-container">
                         <i class="bi bi-file-earmark-text service-icon"></i>
                     </div>
                     <h3>Content Marketing</h3>
                     <p>Attract qualified leads with valuable content that establishes your authority and builds trust.</p>
                     <ul class="list-unstyled">
                         <li><i class="bi bi-check text-success me-2"></i> SEO-optimized blog content</li>
                         <li><i class="bi bi-check text-success me-2"></i> Whitepapers & case studies</li>
                         <li><i class="bi bi-check text-success me-2"></i> Content distribution strategy</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="lead-service-card animate-fade-in">
                     <div class="service-icon-container">
                         <i class="bi bi-funnel service-icon"></i>
                     </div>
                     <h3>Landing Page Optimization</h3>
                     <p>High-converting landing pages designed to capture leads and maximize conversion rates.</p>
                     <ul class="list-unstyled">
                         <li><i class="bi bi-check text-success me-2"></i> A/B testing implementation</li>
                         <li><i class="bi bi-check text-success me-2"></i> Form optimization</li>
                         <li><i class="bi bi-check text-success me-2"></i> Mobile-responsive design</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="lead-service-card animate-fade-in">
                     <div class="service-icon-container">
                         <i class="bi bi-graph-up service-icon"></i>
                     </div>
                     <h3>Analytics & Reporting</h3>
                     <p>Comprehensive tracking and reporting to measure ROI and optimize campaign performance.</p>
                     <ul class="list-unstyled">
                         <li><i class="bi bi-check text-success me-2"></i> Google Analytics setup</li>
                         <li><i class="bi bi-check text-success me-2"></i> Conversion tracking</li>
                         <li><i class="bi bi-check text-success me-2"></i> Monthly performance reports</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Process Section -->
 <section class="lead-process-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Our 6-Step Process</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 700px; margin: 1rem auto 0;">
                 A systematic approach to driving qualified leads and maximizing conversions
             </p>
         </div>

         <div class="process-container">
             <div class="process-line d-none d-lg-block"></div>
             <div class="row">
                 <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="process-step animate-fade-in">
                         <div class="step-number">1</div>
                         <div class="step-content">
                             <h5>Discovery</h5>
                             <p>Understand your business goals and target audience</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="process-step animate-fade-in">
                         <div class="step-number">2</div>
                         <div class="step-content">
                             <h5>Strategy</h5>
                             <p>Develop customized lead generation strategy</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="process-step animate-fade-in">
                         <div class="step-number">3</div>
                         <div class="step-content">
                             <h5>Setup</h5>
                             <p>Implement tracking and campaign infrastructure</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="process-step animate-fade-in">
                         <div class="step-number">4</div>
                         <div class="step-content">
                             <h5>Launch</h5>
                             <p>Execute campaigns across selected channels</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="process-step animate-fade-in">
                         <div class="step-number">5</div>
                         <div class="step-content">
                             <h5>Optimize</h5>
                             <p>Monitor performance and optimize for results</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="process-step animate-fade-in">
                         <div class="step-number">6</div>
                         <div class="step-content">
                             <h5>Scale</h5>
                             <p>Expand successful campaigns and scale growth</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Case Studies -->
 <section class="case-studies-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Proven Results</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 700px; margin: 1rem auto 0;">
                 Real results we've achieved for our clients through strategic lead generation
             </p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4">
                 <div class="case-study-card animate-fade-in">
                     <div class="case-study-header">
                         <div class="case-study-icon">
                             <i class="bi bi-briefcase"></i>
                         </div>
                         <h4>B2B Software Company</h4>
                         <p class="text-muted">Generated qualified leads for enterprise software solutions</p>
                     </div>
                     <div class="case-study-body">
                         <div class="case-study-metrics">
                             <div class="metric-item">
                                 <span class="metric-label">Lead Increase</span>
                                 <span class="metric-value">+240%</span>
                             </div>
                             <div class="metric-item">
                                 <span class="metric-label">Cost Per Lead</span>
                                 <span class="metric-value">-35%</span>
                             </div>
                             <div class="metric-item">
                                 <span class="metric-label">Conversion Rate</span>
                                 <span class="metric-value">18.5%</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4">
                 <div class="case-study-card animate-fade-in">
                     <div class="case-study-header">
                         <div class="case-study-icon">
                             <i class="bi bi-shop"></i>
                         </div>
                         <h4>E-commerce Brand</h4>
                         <p class="text-muted">Drove sales-ready leads for online retail business</p>
                     </div>
                     <div class="case-study-body">
                         <div class="case-study-metrics">
                             <div class="metric-item">
                                 <span class="metric-label">ROI Increase</span>
                                 <span class="metric-value">+320%</span>
                             </div>
                             <div class="metric-item">
                                 <span class="metric-label">Monthly Leads</span>
                                 <span class="metric-value">1,200+</span>
                             </div>
                             <div class="metric-item">
                                 <span class="metric-label">Sales Conversion</span>
                                 <span class="metric-value">12.8%</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4">
                 <div class="case-study-card animate-fade-in">
                     <div class="case-study-header">
                         <div class="case-study-icon">
                             <i class="bi bi-heart-pulse"></i>
                         </div>
                         <h4>Healthcare Provider</h4>
                         <p class="text-muted">Patient acquisition for medical practice</p>
                     </div>
                     <div class="case-study-body">
                         <div class="case-study-metrics">
                             <div class="metric-item">
                                 <span class="metric-label">Patient Leads</span>
                                 <span class="metric-value">+180%</span>
                             </div>
                             <div class="metric-item">
                                 <span class="metric-label">Cost Per Patient</span>
                                 <span class="metric-value">-42%</span>
                             </div>
                             <div class="metric-item">
                                 <span class="metric-label">Appointment Rate</span>
                                 <span class="metric-value">65%</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Technology Stack -->
 <section class="tech-stack-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Technology We Use</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 700px; margin: 1rem auto 0;">
                 Cutting-edge tools and platforms to maximize your lead generation results
             </p>
         </div>

         <div class="row g-4">
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-icon-box animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-google"></i>
                     </div>
                     <h6>Google Ads</h6>
                     <p class="text-muted mb-0">PPC Campaign Management</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-icon-box animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-facebook"></i>
                     </div>
                     <h6>Facebook Ads</h6>
                     <p class="text-muted mb-0">Social Media Advertising</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-icon-box animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-linkedin"></i>
                     </div>
                     <h6>LinkedIn Ads</h6>
                     <p class="text-muted mb-0">B2B Lead Generation</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-icon-box animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-mailbox"></i>
                     </div>
                     <h6>Mailchimp</h6>
                     <p class="text-muted mb-0">Email Marketing Automation</p>
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
             <p class="section-subtitle" style="color: var(--light-text); max-width: 700px; margin: 1rem auto 0;">
                 Common questions about our lead generation services
             </p>
         </div>

         <div class="row justify-content-center">
             <div class="col-lg-8">
                 <div class="accordion" id="leadFaq">
                     <div class="accordion-item border-0 mb-3">
                         <h3 class="accordion-header">
                             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                 How quickly will I see results from lead generation campaigns?
                             </button>
                         </h3>
                         <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#leadFaq">
                             <div class="accordion-body">
                                 Most clients see initial results within 2-4 weeks as campaigns are optimized. However, peak performance typically occurs after 3-6 months of continuous optimization and scaling.
                             </div>
                         </div>
                     </div>

                     <div class="accordion-item border-0 mb-3">
                         <h3 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                 What's the average cost per lead you achieve?
                             </button>
                         </h3>
                         <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#leadFaq">
                             <div class="accordion-body">
                                 Cost per lead varies by industry and competition. We typically achieve 30-50% lower costs than industry averages through our optimization strategies. We provide detailed projections during your free consultation.
                             </div>
                         </div>
                     </div>

                     <div class="accordion-item border-0 mb-3">
                         <h3 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                 Do you work with businesses in specific industries?
                             </button>
                         </h3>
                         <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#leadFaq">
                             <div class="accordion-body">
                                 We work with businesses across all industries including B2B, B2C, healthcare, e-commerce, technology, and professional services. Our strategies are customized to your specific industry and target audience.
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- CTA Section with Form -->
 <section class="lead-cta-section" id="lead-form">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-8">
                 <div class="lead-cta-card animate-fade-in">
                     <h2 class="text-center">Get Your Free Lead Generation Strategy</h2>
                     <p class="text-center">Fill out the form below to receive a customized lead generation plan for your business</p>

                     <form id="leadStrategyForm">
                         <div class="row g-3">
                             <div class="col-md-6">
                                 <input type="text" class="form-control" placeholder="Your Name" required>
                             </div>
                             <div class="col-md-6">
                                 <input type="email" class="form-control" placeholder="Email Address" required>
                             </div>
                             <div class="col-md-6">
                                 <input type="tel" class="form-control" placeholder="Phone Number">
                             </div>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" placeholder="Company Name">
                             </div>
                             <div class="col-12">
                                 <select class="form-control" required>
                                     <option value="" disabled selected>What's your monthly lead generation budget?</option>
                                     <option>$1,000 - $3,000</option>
                                     <option>$3,000 - $5,000</option>
                                     <option>$5,000 - $10,000</option>
                                     <option>$10,000+</option>
                                 </select>
                             </div>
                             <div class="col-12">
                                 <textarea class="form-control" rows="4" placeholder="Tell us about your current lead generation challenges..."></textarea>
                             </div>
                             <div class="col-12">
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="consent" required>
                                     <label class="form-check-label" for="consent">
                                         I agree to receive marketing communications from TechElevatr about lead generation strategies.
                                     </label>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <button type="submit" class="btn btn-primary w-100 py-3">
                                     <i class="bi bi-rocket-takeoff me-2"></i> Get Free Strategy Session
                                 </button>
                                 <p class="text-center text-muted mt-3 small">
                                     <i class="bi bi-shield-check me-1"></i> No spam. No obligation. 100% confidential.
                                 </p>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <script>
     // Form submission
     document.getElementById('leadStrategyForm').addEventListener('submit', function(e) {
         e.preventDefault();
         const submitBtn = this.querySelector('button[type="submit"]');
         const originalText = submitBtn.innerHTML;

         submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Processing...';
         submitBtn.disabled = true;

         // Simulate form submission
         setTimeout(() => {
             alert('Thank you! Your lead generation strategy request has been received. We will contact you within 24 hours with your customized plan.');
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
         document.querySelectorAll('.lead-service-card, .process-step, .case-study-card, .tech-icon-box').forEach(el => {
             observer.observe(el);
         });
     });
 </script>