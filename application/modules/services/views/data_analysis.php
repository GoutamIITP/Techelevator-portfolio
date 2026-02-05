 <style>
     /* ======= Enhanced Hero Section ======= */
     .data-hero {
         background: linear-gradient(135deg,
                 rgba(37, 99, 235, 0.95),
                 rgba(139, 92, 246, 0.95)),
             url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');
         background-size: cover;
         background-position: center;
         background-attachment: fixed;
         padding: 140px 0 100px;
         color: white;
         position: relative;
         overflow: hidden;
     }

     @media (max-width: 768px) {
         .data-hero {
             background-attachment: scroll;
         }
     }

     .data-hero::before {
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
         background: rgba(255, 255, 255, 0.2);
         backdrop-filter: blur(10px);
         border: 1px solid rgba(255, 255, 255, 0.3);
         color: white;
         padding: 8px 20px;
         border-radius: 50px;
         font-weight: 600;
         font-size: 0.95rem;
         margin-bottom: 1.5rem;
     }

     .hero-title {
         font-size: clamp(2rem, 5vw, 3.5rem);
         font-weight: 800;
         line-height: 1.2;
         margin-bottom: 1.5rem;
         text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
     }

     .hero-subtitle {
         font-size: clamp(1rem, 2vw, 1.3rem);
         opacity: 0.95;
         max-width: 600px;
         margin: 0 auto 2rem;
     }

     .hero-cta {
         display: inline-flex;
         align-items: center;
         background: white;
         color: var(--primary-blue);
         padding: 14px 35px;
         border-radius: 50px;
         font-weight: 700;
         text-decoration: none;
         transition: var(--transition);
         font-size: 1.1rem;
         box-shadow: var(--shadow-lg);
         border: 2px solid transparent;
     }

     .hero-cta:hover {
         transform: translateY(-3px) scale(1.05);
         box-shadow: var(--shadow-xl);
         color: var(--secondary-blue);
         border-color: rgba(37, 99, 235, 0.1);
     }

     /* ======= Enhanced Services Section ======= */
     .data-services {
         padding: 5px 0;
         background: white;
         position: relative;
     }

     .data-services::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         height: 1px;
         background: linear-gradient(to right, transparent, var(--border-color), transparent);
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
         background: linear-gradient(to right, var(--primary-blue), var(--accent-purple));
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
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
         border-radius: 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin-bottom: 1.5rem;
         font-size: 2rem;
         color: white;
         transition: var(--transition);
     }

     .service-card:hover .service-icon {
         transform: rotate(5deg) scale(1.1);
         box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
     }

     .service-features {
         list-style: none;
         padding: 0;
         margin: 1.5rem 0 0;
     }

     .service-features li {
         padding: 0.5rem 0;
         display: flex;
         align-items: flex-start;
         font-size: 0.95rem;
     }

     .service-features i {
         color: var(--primary-blue);
         margin-right: 0.75rem;
         flex-shrink: 0;
         margin-top: 0.2rem;
     }

     /* ======= Data Types Section ======= */
     .data-types-section {
         padding: 10px 0;
         background: linear-gradient(135deg, #f8fafc, #f1f5f9);
     }

     .data-type-card {
         background: white;
         border-radius: var(--radius);
         padding: 2rem;
         text-align: center;
         transition: var(--transition);
         border: 1px solid var(--border-color);
         height: 100%;
     }

     .data-type-card:hover {
         transform: translateY(-5px);
         box-shadow: var(--shadow-lg);
         border-color: var(--primary-blue);
     }

     .data-type-icon {
         width: 70px;
         height: 70px;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
         border-radius: 16px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin: 0 auto 1.5rem;
         font-size: 1.8rem;
         color: white;
         transition: var(--transition);
     }

     .data-type-card:hover .data-type-icon {
         transform: rotate(5deg) scale(1.1);
         box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
     }

     /* ======= Technologies Grid ======= */
     .tech-grid-section {
         padding: 10px 0;
         background: white;
     }

     .tech-card {
         background: white;
         border-radius: var(--radius);
         padding: 2rem;
         text-align: center;
         transition: var(--transition);
         border: 1px solid var(--border-color);
         height: 100%;
         position: relative;
         overflow: hidden;
     }

     .tech-card::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background: linear-gradient(135deg,
                 rgba(37, 99, 235, 0.05),
                 rgba(139, 92, 246, 0.05));
         opacity: 0;
         transition: opacity 0.3s ease;
     }

     .tech-card:hover {
         transform: translateY(-8px);
         box-shadow: var(--shadow-lg);
         border-color: var(--primary-blue);
     }

     .tech-card:hover::before {
         opacity: 1;
     }

     .tech-icon {
         font-size: 3rem;
         margin-bottom: 1rem;
         height: 70px;
         display: flex;
         align-items: center;
         justify-content: center;
         transition: var(--transition);
     }

     .tech-card:hover .tech-icon {
         transform: scale(1.1);
     }

     /* ======= Client Grid ======= */
     .client-grid-section {
         padding: 10px 0;
         background: linear-gradient(135deg, #f8fafc, #f1f5f9);
     }

     .client-card {
         background: white;
         border-radius: var(--radius);
         padding: 2.5rem;
         text-align: center;
         transition: var(--transition);
         border: 1px solid var(--border-color);
         height: 100%;
     }

     .client-card:hover {
         transform: translateY(-8px);
         box-shadow: var(--shadow-lg);
         border-color: var(--primary-blue);
     }

     .client-icon {
         width: 80px;
         height: 80px;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
         border-radius: 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin: 0 auto 1.5rem;
         font-size: 2rem;
         color: white;
         transition: var(--transition);
     }

     .client-card:hover .client-icon {
         transform: rotate(5deg) scale(1.1);
         box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
     }

     /* ======= Modern Process Timeline ======= */
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

     .process-container {
         position: relative;
         max-width: 900px;
         margin: 3rem auto 0;
     }

     .process-line {
         position: absolute;
         left: 50%;
         top: 0;
         bottom: 0;
         width: 3px;
         background: linear-gradient(to bottom, var(--primary-blue), var(--accent-purple));
         transform: translateX(-50%);
         z-index: 1;
     }

     .process-step {
         position: relative;
         margin-bottom: 3rem;
         width: 48%;
         z-index: 2;
     }

     .process-step:nth-child(odd) {
         margin-left: auto;
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
         font-weight: 700;
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

     /* ======= Trust Section ======= */
     .trust-section {
         padding: 8px 0;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
         color: white;
         text-align: center;
         position: relative;
         overflow: hidden;
     }

     .trust-section::before {
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

     .trust-icon {
         font-size: 3rem;
         margin-bottom: 1.5rem;
         color: white;
     }

     /* ======= CTA Section ======= */
     .data-cta {
         padding: 10px 0;
         background: white;
         position: relative;
     }

     .cta-content {
         text-align: center;
         max-width: 800px;
         margin: 0 auto;
     }

     .cta-buttons {
         display: flex;
         gap: 1rem;
         justify-content: center;
         flex-wrap: wrap;
         margin-top: 2rem;
     }

     .cta-button {
         padding: 14px 35px;
         border-radius: 50px;
         font-weight: 600;
         text-decoration: none;
         display: inline-flex;
         align-items: center;
         justify-content: center;
         transition: var(--transition);
         min-width: 200px;
         font-size: 1.1rem;
         position: relative;
         overflow: hidden;
     }

     .cta-button::before {
         content: '';
         position: absolute;
         top: 0;
         left: -100%;
         width: 100%;
         height: 100%;
         background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
         transition: left 0.5s ease;
     }

     .cta-button:hover::before {
         left: 100%;
     }

     .cta-button.primary {
         background: var(--primary-blue);
         color: white;
         border: 2px solid var(--primary-blue);
     }

     .cta-button.secondary {
         background: transparent;
         color: var(--primary-blue);
         border: 2px solid var(--primary-blue);
     }

     .cta-button:hover {
         transform: translateY(-3px);
         box-shadow: var(--shadow-lg);
     }

     .cta-button.primary:hover {
         background: var(--secondary-blue);
         border-color: var(--secondary-blue);
     }

     .cta-button.secondary:hover {
         background: rgba(37, 99, 235, 0.1);
     }

     /* ======= Responsive Design ======= */
     @media (max-width: 992px) {
         .process-line {
             left: 30px;
         }

         .process-step {
             width: 100%;
             margin: 0 0 3rem 0;
             padding-left: 80px;
         }

         .process-step:nth-child(odd),
         .process-step:nth-child(even) {
             margin: 0 0 3rem 0;
         }

         .step-number {
             left: 0 !important;
             right: auto !important;
         }

         .hero-title {
             font-size: 2.5rem;
         }

         .service-card,
         .tech-card,
         .client-card {
             padding: 2rem;
         }
     }

     @media (max-width: 768px) {
         .data-hero {
             padding: 120px 0 80px;
         }

         .hero-title {
             font-size: 2.2rem;
         }

         .service-icon {
             width: 70px;
             height: 70px;
             font-size: 1.8rem;
         }

         .tech-icon {
             font-size: 2.5rem;
             height: 60px;
         }

         .cta-buttons {
             flex-direction: column;
             align-items: center;
         }

         .cta-button {
             width: 100%;
             max-width: 300px;
         }

         .step-content {
             padding: 1.5rem;
         }
     }

     @media (max-width: 576px) {
         .data-hero {
             padding: 100px 0 60px;
         }

         .hero-title {
             font-size: 2rem;
         }

         .hero-badge {
             font-size: 0.85rem;
             padding: 6px 16px;
         }

         .service-card,
         .tech-card,
         .client-card,
         .data-type-card {
             padding: 1.75rem;
         }

         .service-icon,
         .client-icon,
         .data-type-icon {
             width: 60px;
             height: 60px;
             margin-bottom: 1.25rem;
             font-size: 1.5rem;
         }

         .process-step {
             padding-left: 70px;
         }

         .step-number {
             width: 50px;
             height: 50px;
             font-size: 1.2rem;
         }
     }

     /* ======= Animations ======= */
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

     /* ======= Section Headings ======= */
     .section-title {
         font-size: clamp(1.8rem, 4vw, 2.5rem);
         font-weight: 800;
         margin-bottom: 1rem;
         position: relative;
         display: inline-block;
     }

     .section-title::after {
         content: '';
         position: absolute;
         bottom: -10px;
         left: 50%;
         transform: translateX(-50%);
         width: 60px;
         height: 4px;
         background: linear-gradient(to right, var(--primary-blue), var(--accent-purple));
         border-radius: 2px;
     }

     .section-subtitle {
         font-size: clamp(1rem, 2vw, 1.1rem);
         color: var(--light-text);
         max-width: 600px;
         margin: 0 auto;
     }
 </style>

 <!-- Hero Section -->
 <section class="data-hero text-center">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-8 col-lg-10">
                 <div class="hero-badge animate-fade-in">
                     <i class="bi bi-bar-chart-line me-2"></i> Advanced Analytics
                 </div>
                 <h1 class="hero-title animate-fade-in">
                     Transform Data Into Strategic Business Intelligence
                 </h1>
                 <p class="hero-subtitle animate-fade-in text-white">
                     Unlock the power of your data with advanced analytics, actionable insights,
                     and strategic reporting that drive smarter decisions and accelerate growth.
                 </p>
                 <a href="#quote-form" class="hero-cta animate-fade-in">
                     <i class="bi bi-graph-up-arrow me-2"></i>
                     Get Free Data Consultation
                 </a>
             </div>
         </div>
     </div>
 </section>

 <!-- Services Section -->
 <section class="data-services">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in">Advanced Analytics Solutions</h2>
             <p class="section-subtitle animate-fade-in">
                 Comprehensive data services that transform raw information into strategic assets
             </p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon float-animation">
                         <i class="bi bi-graph-up-arrow"></i>
                     </div>
                     <h4 class="fw-bold mb-3">Business Data Analysis</h4>
                     <p class="text-muted mb-3">
                         Deep dive into your business data to uncover hidden patterns, opportunities, and insights.
                     </p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Sales & Revenue Analysis</li>
                         <li><i class="bi bi-check-circle"></i> Customer Behavior Insights</li>
                         <li><i class="bi bi-check-circle"></i> Market Trend Analysis</li>
                         <li><i class="bi bi-check-circle"></i> Performance Benchmarking</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon float-animation">
                         <i class="bi bi-speedometer2"></i>
                     </div>
                     <h4 class="fw-bold mb-3">Interactive Dashboards</h4>
                     <p class="text-muted mb-3">
                         Real-time dashboards that provide instant visibility into key business metrics.
                     </p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Live KPI Tracking</li>
                         <li><i class="bi bi-check-circle"></i> Custom Data Visualizations</li>
                         <li><i class="bi bi-check-circle"></i> Executive Dashboards</li>
                         <li><i class="bi bi-check-circle"></i> Mobile Access</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon float-animation">
                         <i class="bi bi-lightning-charge"></i>
                     </div>
                     <h4 class="fw-bold mb-3">Trend Forecasting & Business Projections</h4>
                     <p class="text-muted mb-3">
                         Forecast business trends and future outcomes using historical data analysis and statistical methods.
                     </p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Sales Forecasting</li>
                         <li><i class="bi bi-check-circle"></i> Customer Churn Prediction</li>
                         <li><i class="bi bi-check-circle"></i> Demand Planning</li>
                         <li><i class="bi bi-check-circle"></i> Risk Assessment</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon float-animation">
                         <i class="bi bi-pie-chart"></i>
                     </div>
                     <h4 class="fw-bold mb-3">Data Visualization</h4>
                     <p class="text-muted mb-3">
                         Transform complex data into clear, compelling visual stories that drive action.
                     </p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Interactive Charts</li>
                         <li><i class="bi bi-check-circle"></i> Infographic Design</li>
                         <li><i class="bi bi-check-circle"></i> Geographic Mapping</li>
                         <li><i class="bi bi-check-circle"></i> Timeline Visualizations</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon float-animation">
                         <i class="bi bi-funnel"></i>
                     </div>
                     <h4 class="fw-bold mb-3">Data Preparation</h4>
                     <p class="text-muted mb-3">
                         Clean, structure, and prepare your data for accurate analysis and reporting.
                     </p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Data Cleaning & Validation</li>
                         <li><i class="bi bi-check-circle"></i> Data Transformation</li>
                         <li><i class="bi bi-check-circle"></i> Multi-source Integration</li>
                         <li><i class="bi bi-check-circle"></i> Quality Assurance</li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="service-card animate-fade-in">
                     <div class="service-icon float-animation">
                         <i class="bi bi-bullseye"></i>
                     </div>
                     <h4 class="fw-bold mb-3">Strategic Insights</h4>
                     <p class="text-muted mb-3">
                         Actionable recommendations and strategic guidance based on data analysis.
                     </p>
                     <ul class="service-features">
                         <li><i class="bi bi-check-circle"></i> Competitive Analysis</li>
                         <li><i class="bi bi-check-circle"></i> ROI Optimization</li>
                         <li><i class="bi bi-check-circle"></i> Strategic Planning</li>
                         <li><i class="bi bi-check-circle"></i> Performance Optimization</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Data Types Section -->
 <section class="data-types-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in">Data We Work With</h2>
             <p class="section-subtitle animate-fade-in">
                 We analyze data from multiple sources to provide comprehensive insights
             </p>
         </div>

         <div class="row g-4">
             <div class="col-lg-3 col-md-6">
                 <div class="data-type-card animate-fade-in">
                     <div class="data-type-icon">
                         <i class="bi bi-file-earmark-excel"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Excel & CSV Files</h5>
                     <p class="text-muted small mb-0">
                         Analyze data from spreadsheets, CSV exports, and Excel workbooks
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="data-type-card animate-fade-in">
                     <div class="data-type-icon">
                         <i class="bi bi-google"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Google Sheets</h5>
                     <p class="text-muted small mb-0">
                         Real-time analysis of Google Sheets with live data connections
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="data-type-card animate-fade-in">
                     <div class="data-type-icon">
                         <i class="bi bi-person-badge"></i>
                     </div>
                     <h5 class="fw-bold mb-2">CRM Exports</h5>
                     <p class="text-muted small mb-0">
                         Salesforce, HubSpot, Zoho, and other CRM system data
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="data-type-card animate-fade-in">
                     <div class="data-type-icon">
                         <i class="bi bi-cart"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Sales & Marketing Data</h5>
                     <p class="text-muted small mb-0">
                         E-commerce, advertising, social media, and campaign performance data
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="data-type-card animate-fade-in">
                     <div class="data-type-icon">
                         <i class="bi bi-globe"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Website Analytics</h5>
                     <p class="text-muted small mb-0">
                         Google Analytics, Adobe Analytics, and custom tracking data
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="data-type-card animate-fade-in">
                     <div class="data-type-icon">
                         <i class="bi bi-database"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Database Extracts</h5>
                     <p class="text-muted small mb-0">
                         SQL databases, NoSQL, data warehouses, and cloud storage
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="data-type-card animate-fade-in">
                     <div class="data-type-icon">
                         <i class="bi bi-currency-dollar"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Financial Data</h5>
                     <p class="text-muted small mb-0">
                         Accounting software, bank statements, and financial reports
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="data-type-card animate-fade-in">
                     <div class="data-type-icon">
                         <i class="bi bi-people"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Customer Feedback</h5>
                     <p class="text-muted small mb-0">
                         Surveys, reviews, support tickets, and customer interactions
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Technologies Section -->
 <section class="tech-grid-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in">Our Technology Stack</h2>
             <p class="section-subtitle animate-fade-in">
                 Industry-leading tools for accurate, scalable, and powerful data analysis
             </p>
         </div>

         <div class="row g-4">
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-card animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-filetype-py" style="color: #3776ab;"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Python</h5>
                     <p class="text-muted small mb-0">Pandas, NumPy, Scikit-learn</p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-card animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-database" style="color: #336791;"></i>
                     </div>
                     <h5 class="fw-bold mb-2">SQL</h5>
                     <p class="text-muted small mb-0">MySQL, PostgreSQL, BigQuery</p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-card animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-bar-chart" style="color: #f2c811;"></i>
                     </div>
                     <h5 class="fw-bold mb-2">BI Tools</h5>
                     <p class="text-muted small mb-0">Tableau, Looker, Qlik</p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-card animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-file-earmark-excel" style="color: #217346;"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Excel</h5>
                     <p class="text-muted small mb-0">Advanced Analytics & Automation</p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-card animate-fade-in">
                     <div class="tech-icon">
                         <i class="fa-solid fa-r" style="color: #276dc3;"></i>
                     </div>
                     <h5 class="fw-bold mb-2">R Programming</h5>
                     <p class="text-muted small mb-0">Statistical Analysis & Modeling</p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-card animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-graph-up" style="color: #f2c811;"></i>
                     </div>
                     <h5 class="fw-bold mb-2">Power BI</h5>
                     <p class="text-muted small mb-0">Interactive Dashboards</p>
                 </div>
             </div>

             <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-card animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-cloud-arrow-up" style="color: #ff9900;"></i>
                     </div>
                     <h5 class="fw-bold mb-2">AWS/Azure</h5>
                     <p class="text-muted small mb-0">Cloud Analytics Platform</p>
                 </div>
             </div> -->

             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="tech-card animate-fade-in">
                     <div class="tech-icon">
                         <i class="bi bi-code-slash" style="color: #61dafb;"></i>
                     </div>
                     <h5 class="fw-bold mb-2">TensorFlow</h5>
                     <p class="text-muted small mb-0">Machine Learning Models</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Client Grid Section -->
 <section class="client-grid-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in">Perfect for Data-Driven Organizations</h2>
             <p class="section-subtitle animate-fade-in">
                 Our services help businesses of all sizes make smarter, data-backed decisions
             </p>
         </div>

         <div class="row g-4">
             <div class="col-lg-3 col-md-6">
                 <div class="client-card animate-fade-in">
                     <div class="client-icon float-animation">
                         <i class="bi bi-building"></i>
                     </div>
                     <h5 class="fw-bold mb-3">Small & Medium Businesses</h5>
                     <p class="text-muted small mb-0">
                         Affordable analytics solutions for growth-focused businesses
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="client-card animate-fade-in">
                     <div class="client-icon float-animation">
                         <i class="bi bi-rocket-takeoff"></i>
                     </div>
                     <h5 class="fw-bold mb-3">Startups & Scale-ups</h5>
                     <p class="text-muted small mb-0">
                         Data-driven insights for rapid growth and investor readiness
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="client-card animate-fade-in">
                     <div class="client-icon float-animation">
                         <i class="bi bi-cart"></i>
                     </div>
                     <h5 class="fw-bold mb-3">E-commerce & Retail</h5>
                     <p class="text-muted small mb-0">
                         Customer analytics, inventory optimization, and sales forecasting
                     </p>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="client-card animate-fade-in">
                     <div class="client-icon float-animation">
                         <i class="bi bi-bank"></i>
                     </div>
                     <h5 class="fw-bold mb-3">Finance & Banking</h5>
                     <p class="text-muted small mb-0">
                         Risk analysis, fraud detection, and portfolio optimization
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Process Section -->
 <section class="process-section">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title animate-fade-in">Our Data Analysis Process</h2>
             <p class="section-subtitle animate-fade-in">
                 A systematic approach to delivering actionable insights
             </p>
         </div>

         <div class="process-container">
             <div class="process-line"></div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">1</div>
                 <div class="step-content">
                     <h5 class="fw-bold mb-2">Discovery & Goal Setting</h5>
                     <p class="text-muted mb-0">Understand business objectives and define key metrics for success.</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">2</div>
                 <div class="step-content">
                     <h5 class="fw-bold mb-2">Data Collection & Preparation</h5>
                     <p class="text-muted mb-0">Gather and clean data from multiple sources for accurate analysis.</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">3</div>
                 <div class="step-content">
                     <h5 class="fw-bold mb-2">Analysis & Modeling</h5>
                     <p class="text-muted mb-0">Apply statistical analysis and data modeling techniques to extract insights.</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">4</div>
                 <div class="step-content">
                     <h5 class="fw-bold mb-2">Visualization & Reporting</h5>
                     <p class="text-muted mb-0">Create clear dashboards and reports that communicate findings effectively.</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">5</div>
                 <div class="step-content">
                     <h5 class="fw-bold mb-2">Insights & Recommendations</h5>
                     <p class="text-muted mb-0">Provide actionable recommendations based on data-driven insights.</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-number">6</div>
                 <div class="step-content">
                     <h5 class="fw-bold mb-2">Implementation & Support</h5>
                     <p class="text-muted mb-0">Help implement changes and provide ongoing support for continuous improvement.</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Trust Section -->
 <section class="trust-section">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-8">
                 <div class="trust-icon animate-fade-in">
                     <i class="bi bi-shield-check"></i>
                 </div>
                 <h3 class="mb-3 animate-fade-in">Your Data Security is Our Priority</h3>
                 <p class="mb-4 fs-5 animate-fade-in text-white">
                     No data sharing with third parties. All client data is handled with strict confidentiality.
                     NDA available on request for complete peace of mind.
                 </p>
                 <div class="row g-3 justify-content-center">
                     <div class="col-md-4 text-center animate-fade-in">
                         <i class="bi bi-lock fs-4 mb-2 d-block"></i>
                         <p class="mb-0 text-white">End-to-End Encryption</p>
                     </div>
                     <div class="col-md-4 text-center animate-fade-in">
                         <i class="bi bi-shield-lock fs-4 mb-2 d-block"></i>
                         <p class="mb-0 text-white">GDPR Compliant</p>
                     </div>
                     <div class="col-md-4 text-center animate-fade-in">
                         <i class="bi bi-file-earmark-lock fs-4 mb-2 d-block"></i>
                         <p class="mb-0 text-white">NDA Protection</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- CTA Section -->
 <section class="data-cta">
     <div class="container">
         <div class="cta-content">
             <h2 class="section-title animate-fade-in" style="border-bottom: none;">
                 Ready to Transform Your Data Into Actionable Insights?
             </h2>
             <p class="section-subtitle animate-fade-in">
                 Get a free data audit and consultation. Discover how data analytics can drive your business growth.
             </p>

             <div class="cta-buttons">
                 <a href="<?= site_url('free-quote') ?>" class="cta-button primary animate-fade-in">
                     <i class="bi bi-graph-up me-2"></i> Free Data Audit
                 </a>
                 <a href="tel:+1234567890" class="cta-button secondary animate-fade-in">
                     <i class="bi bi-telephone me-2"></i> Talk to Expert
                 </a>
             </div>

             <p class="mt-4 text-muted animate-fade-in">
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

         // Observe all cards and sections
         document.querySelectorAll('.service-card, .data-type-card, .tech-card, .client-card, .process-step').forEach(el => {
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