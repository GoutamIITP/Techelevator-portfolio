 <style>
     /* ======= Hero Section ======= */
     .seo-hero {
         background: linear-gradient(135deg, #f8fafc, #e0f2fe);
         padding: clamp(4rem, 10vw, 8rem) 0 clamp(3rem, 8vw, 6rem);
         position: relative;
         overflow: hidden;
     }

     .seo-hero::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 10% 20%, rgba(37, 99, 235, 0.05) 0%, transparent 50%),
             radial-gradient(circle at 90% 80%, rgba(16, 185, 129, 0.05) 0%, transparent 50%);
     }

     .seo-badge {
         display: inline-flex;
         align-items: center;
         background: rgba(37, 99, 235, 0.1);
         color: var(--primary-blue);
         padding: 0.6rem 1.2rem;
         border-radius: 50px;
         font-weight: 600;
         font-size: 0.9rem;
         margin-bottom: 1.5rem;
         transition: var(--transition);
     }

     .seo-badge:hover {
         background: rgba(37, 99, 235, 0.15);
         transform: translateY(-2px);
     }

     .hero-title {
         font-size: clamp(2.5rem, 5vw, 3.5rem);
         font-weight: 800;
         line-height: 1.2;
         margin-bottom: 1.5rem;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-green));
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
     }

     .hero-lead {
         font-size: clamp(1.1rem, 2vw, 1.3rem);
         color: var(--light-text);
         max-width: 600px;
         margin-bottom: 2.5rem;
         line-height: 1.8;
     }

     .hero-image {
         animation: float 6s ease-in-out infinite;
         filter: drop-shadow(0 20px 40px rgba(37, 99, 235, 0.15));
     }

     @keyframes float {

         0%,
         100% {
             transform: translateY(0) rotate(0deg);
         }

         33% {
             transform: translateY(-15px) rotate(1deg);
         }

         66% {
             transform: translateY(10px) rotate(-1deg);
         }
     }

     /* ======= Services Grid ======= */
     .seo-services-section {
         padding: clamp(4rem, 8vw, 6rem) 0;
         background: white;
     }

     .seo-card {
         background: white;
         border-radius: var(--radius-lg);
         padding: 2.5rem;
         height: 100%;
         transition: var(--transition);
         border: 1px solid var(--border-color);
         position: relative;
         overflow: hidden;
     }

     .seo-card::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         height: 4px;
         background: linear-gradient(to right, var(--accent-green), var(--primary-blue));
         transform: scaleX(0);
         transition: transform 0.4s ease;
     }

     .seo-card:hover {
         transform: translateY(-10px);
         box-shadow: var(--shadow-xl);
         border-color: var(--accent-green);
     }

     .seo-card:hover::before {
         transform: scaleX(1);
     }

     .seo-icon-wrapper {
         width: 80px;
         height: 80px;
         background: linear-gradient(135deg, var(--accent-green), var(--primary-blue));
         border-radius: 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin-bottom: 1.5rem;
         transition: var(--transition);
     }

     .seo-card:hover .seo-icon-wrapper {
         transform: rotate(5deg) scale(1.1);
         box-shadow: 0 10px 20px rgba(16, 185, 129, 0.2);
     }

     .seo-icon {
         font-size: 2rem;
         color: white;
     }

     .seo-card h3 {
         font-size: 1.5rem;
         font-weight: 700;
         margin-bottom: 1rem;
         color: var(--dark-text);
     }

     .seo-card p {
         color: var(--light-text);
         font-size: 1.05rem;
         line-height: 1.7;
         margin-bottom: 0;
     }

     /* ======= Process Section ======= */
     .seo-process-section {
         padding: clamp(4rem, 8vw, 6rem) 0;
         background: linear-gradient(135deg, #f8fafc, #f0f9ff);
         position: relative;
     }

     .process-step {
         display: flex;
         gap: 2rem;
         align-items: flex-start;
         margin-bottom: 3rem;
         position: relative;
     }

     .process-step::before {
         content: '';
         position: absolute;
         left: 35px;
         top: 60px;
         bottom: -40px;
         width: 2px;
         background: var(--border-color);
     }

     .process-step:last-child::before {
         display: none;
     }

     .step-number {
         width: 70px;
         height: 70px;
         background: white;
         border: 3px solid var(--primary-blue);
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: 700;
         font-size: 1.5rem;
         color: var(--primary-blue);
         flex-shrink: 0;
         position: relative;
         z-index: 2;
         transition: var(--transition);
     }

     .process-step:hover .step-number {
         background: var(--primary-blue);
         color: white;
         transform: scale(1.1);
         box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
     }

     .step-content h4 {
         font-weight: 700;
         margin-bottom: 0.75rem;
         color: var(--dark-text);
     }

     .step-content p {
         color: var(--light-text);
         margin-bottom: 0;
     }

     /* ======= Results Section ======= */
     .seo-results-section {
         padding: clamp(4rem, 8vw, 6rem) 0;
         background: white;
     }

     .result-card {
         text-align: center;
         padding: 2rem;
         border-radius: var(--radius-lg);
         background: white;
         border: 1px solid var(--border-color);
         transition: var(--transition);
         height: 100%;
     }

     .result-card:hover {
         transform: translateY(-5px);
         box-shadow: var(--shadow-lg);
         border-color: var(--accent-green);
     }

     .result-number {
         font-size: 3rem;
         font-weight: 800;
         background: linear-gradient(135deg, var(--accent-green), var(--primary-blue));
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         line-height: 1;
         margin-bottom: 0.5rem;
     }

     .result-label {
         color: var(--light-text);
         font-size: 1.1rem;
         font-weight: 600;
     }

     /* ======= Packages Section ======= */
     .seo-packages-section {
         padding: clamp(4rem, 8vw, 6rem) 0;
         background: linear-gradient(135deg, #f8fafc, #f0f9ff);
     }

     .package-card {
         background: white;
         border-radius: var(--radius-lg);
         padding: 2.5rem;
         text-align: center;
         transition: var(--transition);
         border: 2px solid var(--border-color);
         height: 100%;
         position: relative;
         overflow: hidden;
     }

     .package-card.featured {
         border-color: var(--accent-green);
         transform: scale(1.05);
         box-shadow: var(--shadow-xl);
     }

     .package-card.featured::before {
         content: 'Most Popular';
         position: absolute;
         top: 20px;
         right: -40px;
         background: var(--accent-green);
         color: white;
         padding: 0.5rem 3rem;
         font-weight: 600;
         transform: rotate(45deg);
         font-size: 0.85rem;
     }

     .package-card:hover {
         transform: translateY(-10px);
         box-shadow: var(--shadow-xl);
         border-color: var(--primary-blue);
     }

     .package-card.featured:hover {
         transform: translateY(-10px) scale(1.05);
     }

     .package-name {
         font-size: 1.75rem;
         font-weight: 800;
         margin-bottom: 1rem;
         color: var(--dark-text);
     }

     .package-price {
         font-size: 3rem;
         font-weight: 800;
         color: var(--primary-blue);
         margin-bottom: 0.5rem;
         line-height: 1;
     }

     .package-period {
         color: var(--light-text);
         margin-bottom: 2rem;
     }

     .package-features {
         list-style: none;
         padding: 0;
         margin: 0 0 2rem;
         text-align: left;
     }

     .package-features li {
         padding: 0.5rem 0;
         color: var(--dark-text);
     }

     .package-features li i {
         color: var(--accent-green);
         margin-right: 0.75rem;
     }

     .package-button {
         width: 100%;
         padding: 1rem;
         border-radius: 50px;
         font-weight: 600;
         border: 2px solid var(--primary-blue);
         background: var(--primary-blue);
         color: white;
         transition: var(--transition);
     }

     .package-button:hover {
         background: var(--secondary-blue);
         transform: translateY(-2px);
         box-shadow: var(--shadow-md);
     }

     .package-card.featured .package-button {
         background: var(--accent-green);
         border-color: var(--accent-green);
     }

     .package-card.featured .package-button:hover {
         background: #0da271;
     }

     /* ======= CTA Section ======= */
     .seo-cta-section {
         padding: clamp(4rem, 8vw, 6rem) 0;
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         color: white;
         position: relative;
         overflow: hidden;
     }

     .seo-cta-section::before {
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

     .cta-title {
         font-size: clamp(2rem, 4vw, 2.8rem);
         font-weight: 800;
         margin-bottom: 1.5rem;
     }

     .cta-description {
         font-size: 1.2rem;
         opacity: 0.95;
         max-width: 600px;
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

     /* ======= FAQ Section ======= */
     .seo-faq-section {
         /* padding: clamp(4rem, 8vw, 6rem) 0; */
         background: white;
     }

     .faq-accordion .accordion-item {
         border: 1px solid var(--border-color);
         border-radius: var(--radius) !important;
         margin-bottom: 1rem;
         overflow: hidden;
     }

     .faq-accordion .accordion-button {
         font-weight: 600;
         padding: 1.5rem;
         background: white;
         color: var(--dark-text);
         box-shadow: none;
     }

     .faq-accordion .accordion-button:not(.collapsed) {
         background: linear-gradient(135deg, rgba(37, 99, 235, 0.05), rgba(16, 185, 129, 0.05));
         color: var(--primary-blue);
         border-bottom: 2px solid var(--primary-blue);
     }

     .faq-accordion .accordion-body {
         padding: 1.5rem;
         color: var(--light-text);
         line-height: 1.7;
     }

     /* ======= Responsive Design ======= */
     @media (max-width: 991.98px) {
         .process-step::before {
             display: none;
         }

         .process-step {
             flex-direction: column;
             text-align: center;
             gap: 1rem;
         }

         .step-number {
             margin: 0 auto;
         }

         .package-card.featured {
             transform: none;
         }

         .package-card.featured:hover {
             transform: translateY(-10px);
         }
     }

     @media (max-width: 768px) {
         .seo-card {
             padding: 2rem;
         }

         .package-card {
             padding: 2rem;
         }

         .package-card.featured::before {
             right: -35px;
             font-size: 0.8rem;
             padding: 0.4rem 2.5rem;
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

     @media (max-width: 576px) {
         .seo-hero {
             text-align: center;
         }

         .seo-badge {
             margin: 0 auto 1.5rem;
             display: inline-flex;
         }

         .hero-buttons {
             flex-direction: column;
             gap: 1rem;
         }

         .hero-buttons .btn {
             width: 100%;
             max-width: 300px;
             margin: 0 auto;
         }

         .seo-card {
             padding: 1.75rem;
         }

         .seo-icon-wrapper {
             width: 70px;
             height: 70px;
             margin: 0 auto 1.5rem;
         }

         .seo-icon {
             font-size: 1.8rem;
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
 <section class="seo-hero">
     <div class="container">
         <div class="row align-items-center g-5">
             <div class="col-lg-6">
                 <div class="seo-badge animate-fade-in">
                     <i class="bi bi-search me-2"></i> SEO Services
                 </div>
                 <h1 class="hero-title animate-fade-in">Dominate Search Rankings with Professional SEO</h1>
                 <p class="hero-lead animate-fade-in">
                     Drive sustainable organic growth with our data-driven SEO strategies.
                     We combine technical expertise with creative content to boost your rankings,
                     increase visibility, and generate qualified leads for your business.
                 </p>
                 <div class="hero-buttons d-flex flex-wrap gap-3 animate-fade-in">
                     <a href="#free-audit" class="btn btn-primary btn-lg px-4">
                         <i class="bi bi-rocket-takeoff me-2"></i> Get Free SEO Audit
                     </a>
                     <a href="#packages" class="btn btn-outline-primary btn-lg px-4">
                         <i class="bi bi-graph-up me-2"></i> View Packages
                     </a>
                 </div>
             </div>
             <div class="col-lg-6">
                 <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                     alt="SEO Analytics Dashboard"
                     class="img-fluid hero-image animate-fade-in"
                     loading="lazy">
             </div>
         </div>
     </div>
 </section>

 <!-- Services Grid -->
 <section class="seo-services-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in" style="display: inline-block;">Comprehensive SEO Solutions</h2>
             <p class="section-subtitle animate-fade-in">We provide end-to-end SEO services to maximize your online visibility</p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4 col-md-6">
                 <div class="seo-card animate-fade-in">
                     <div class="seo-icon-wrapper">
                         <i class="bi bi-search seo-icon"></i>
                     </div>
                     <h3>Keyword Research</h3>
                     <p>In-depth keyword analysis to identify high-value search terms with commercial intent and low competition.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="seo-card animate-fade-in">
                     <div class="seo-icon-wrapper">
                         <i class="bi bi-file-earmark-text seo-icon"></i>
                     </div>
                     <h3>On-Page Optimization</h3>
                     <p>Optimize meta tags, headers, content structure, and internal linking for better search engine visibility.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="seo-card animate-fade-in">
                     <div class="seo-icon-wrapper">
                         <i class="bi bi-link-45deg seo-icon"></i>
                     </div>
                     <h3>Link Building</h3>
                     <p>Strategic acquisition of high-authority backlinks to boost domain authority and search rankings.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="seo-card animate-fade-in">
                     <div class="seo-icon-wrapper">
                         <i class="bi bi-speedometer2 seo-icon"></i>
                     </div>
                     <h3>Technical SEO</h3>
                     <p>Improve site speed, mobile responsiveness, crawlability, and fix technical issues affecting rankings.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="seo-card animate-fade-in">
                     <div class="seo-icon-wrapper">
                         <i class="bi bi-geo-alt seo-icon"></i>
                     </div>
                     <h3>Local SEO</h3>
                     <p>Optimize Google Business Profile, local citations, and location-based strategies for local visibility.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="seo-card animate-fade-in">
                     <div class="seo-icon-wrapper">
                         <i class="bi bi-graph-up seo-icon"></i>
                     </div>
                     <h3>SEO Analytics</h3>
                     <p>Comprehensive tracking, reporting, and analysis to measure performance and identify opportunities.</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- SEO Process -->
 <section class="seo-process-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in" style="display: inline-block;">Our SEO Process</h2>
             <p class="section-subtitle animate-fade-in">A systematic approach to achieving sustainable SEO success</p>
         </div>

         <div class="row">
             <div class="col-lg-10 mx-auto">
                 <div class="process-step animate-fade-in">
                     <div class="step-number">01</div>
                     <div class="step-content">
                         <h4>Discovery & Audit</h4>
                         <p>Comprehensive analysis of your current SEO performance, competitor landscape, and technical health audit.</p>
                     </div>
                 </div>

                 <div class="process-step animate-fade-in">
                     <div class="step-number">02</div>
                     <div class="step-content">
                         <h4>Strategy Development</h4>
                         <p>Custom SEO strategy with targeted keywords, content plan, and technical optimization roadmap.</p>
                     </div>
                 </div>

                 <div class="process-step animate-fade-in">
                     <div class="step-number">03</div>
                     <div class="step-content">
                         <h4>Implementation</h4>
                         <p>On-page optimization, technical fixes, content creation, and initial link building campaigns.</p>
                     </div>
                 </div>

                 <div class="process-step animate-fade-in">
                     <div class="step-number">04</div>
                     <div class="step-content">
                         <h4>Monitoring & Reporting</h4>
                         <p>Continuous tracking of rankings, traffic, and conversions with detailed monthly performance reports.</p>
                     </div>
                 </div>

                 <div class="process-step animate-fade-in">
                     <div class="step-number">05</div>
                     <div class="step-content">
                         <h4>Optimization</h4>
                         <p>Data-driven adjustments and ongoing optimization to improve results and adapt to algorithm changes.</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Results Section -->
 <section class="seo-results-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in" style="display: inline-block;">Proven SEO Results</h2>
             <p class="section-subtitle animate-fade-in">Average results achieved for our clients within 6 months</p>
         </div>

         <div class="row g-4">
             <div class="col-lg-3 col-md-6">
                 <div class="result-card animate-fade-in">
                     <div class="result-number">300%</div>
                     <div class="result-label">Organic Traffic Increase</div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="result-card animate-fade-in">
                     <div class="result-number">85%</div>
                     <div class="result-label">Keyword Ranking Improvement</div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="result-card animate-fade-in">
                     <div class="result-number">200%</div>
                     <div class="result-label">Lead Generation Growth</div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="result-card animate-fade-in">
                     <div class="result-number">40%</div>
                     <div class="result-label">Conversion Rate Increase</div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- FAQ Section -->
 <section class="seo-faq-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in" style="display: inline-block;">Frequently Asked Questions</h2>
             <p class="section-subtitle animate-fade-in">Get answers to common questions about our SEO services</p>
         </div>

         <div class="row justify-content-center">
             <div class="col-lg-10">
                 <div class="accordion faq-accordion" id="seoFAQ">
                     <div class="accordion-item animate-fade-in">
                         <h2 class="accordion-header">
                             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                 How long does it take to see SEO results?
                             </button>
                         </h2>
                         <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#seoFAQ">
                             <div class="accordion-body">
                                 SEO is a long-term strategy. Initial improvements may be seen within 1-3 months, but significant results typically take 4-6 months. The timeline depends on your current website status, competition, and the SEO strategies implemented.
                             </div>
                         </div>
                     </div>

                     <div class="accordion-item animate-fade-in">
                         <h2 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                 Do you offer a free SEO audit?
                             </button>
                         </h2>
                         <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#seoFAQ">
                             <div class="accordion-body">
                                 Yes! We provide a comprehensive free SEO audit that includes technical analysis, keyword gap analysis, backlink profile review, and competitor analysis. Contact us to schedule your free audit.
                             </div>
                         </div>
                     </div>

                     <div class="accordion-item animate-fade-in">
                         <h2 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                 What's included in your monthly SEO reports?
                             </button>
                         </h2>
                         <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#seoFAQ">
                             <div class="accordion-body">
                                 Our monthly reports include keyword ranking progress, organic traffic analysis, backlink acquisition, technical SEO improvements, conversion tracking, and actionable recommendations for the next month.
                             </div>
                         </div>
                     </div>

                     <div class="accordion-item animate-fade-in">
                         <h2 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                 Do you work with businesses in competitive industries?
                             </button>
                         </h2>
                         <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#seoFAQ">
                             <div class="accordion-body">
                                 Absolutely. We have extensive experience working with businesses in competitive niches like finance, healthcare, legal services, and e-commerce. Our strategies are tailored to overcome industry-specific challenges.
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- CTA Section -->
 <section class="seo-cta-section" id="free-audit">
     <div class="container">
         <div class="text-center">
             <h2 class="cta-title animate-fade-in">Ready to Dominate Search Rankings?</h2>
             <p class="cta-description animate-fade-in">
                 Get a free comprehensive SEO audit and consultation. Let's analyze your website and create a custom strategy to boost your rankings and drive organic growth.
             </p>

             <div class="cta-buttons animate-fade-in">
                 <a href="<?= site_url('free-quote') ?>" class="cta-button primary">
                     <i class="bi bi-rocket-takeoff me-2"></i> Get Free SEO Audit
                 </a>
                 <a href="tel:+1234567890" class="cta-button secondary">
                     <i class="bi bi-telephone me-2"></i> Schedule a Call
                 </a>
             </div>

             <p class="text-white opacity-75 mt-4 animate-fade-in">
                 <i class="bi bi-clock me-1"></i> Free 30-minute consultation • No obligation • Expert analysis
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
         document.querySelectorAll('.seo-card, .process-step, .result-card, .package-card, .accordion-item').forEach(el => {
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

         // Package selection
         document.querySelectorAll('.package-button').forEach(button => {
             button.addEventListener('click', function() {
                 const packageName = this.closest('.package-card').querySelector('.package-name').textContent;
                 alert(`Thank you for selecting the ${packageName} package! We'll contact you shortly to discuss your SEO strategy.`);
             });
         });
     });
 </script>