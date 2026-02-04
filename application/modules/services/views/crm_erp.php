 <style>
     /* ======= Hero Section ======= */
     .crm-hero {
         background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
         padding: 120px 0 100px;
         position: relative;
         overflow: hidden;
     }

     .crm-hero::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background:
             radial-gradient(circle at 10% 20%, rgba(37, 99, 235, 0.05) 0%, transparent 50%),
             radial-gradient(circle at 90% 80%, rgba(37, 99, 235, 0.05) 0%, transparent 50%);
     }

     .crm-badge {
         display: inline-flex;
         align-items: center;
         background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
         color: white;
         padding: 0.5rem 1.5rem;
         border-radius: 50px;
         font-weight: 600;
         font-size: 0.9rem;
         margin-bottom: 1.5rem;
         box-shadow: var(--shadow-sm);
         animation: float 6s ease-in-out infinite;
     }

     .hero-title {
         font-size: 3.5rem;
         font-weight: 800;
         line-height: 1.2;
         margin-bottom: 1.5rem;
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
     }

     .hero-subtitle {
         font-size: 1.25rem;
         color: var(--light-text);
         max-width: 600px;
         margin-bottom: 2rem;
         line-height: 1.8;
     }

     .hero-image {
         animation: float 4s ease-in-out infinite;
         filter: drop-shadow(0 20px 40px rgba(37, 99, 235, 0.15));
     }

     @keyframes float {

         0%,
         100% {
             transform: translateY(0);
         }

         50% {
             transform: translateY(-15px);
         }
     }

     /* ======= Features Section ======= */
     .crm-features {
         padding: 100px 0;
         background: white;
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
         background: linear-gradient(to right, var(--primary-blue), var(--accent-green));
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
         color: white;
         font-size: 1.8rem;
         transition: var(--transition);
     }

     .feature-card:hover .feature-icon {
         transform: rotate(10deg) scale(1.1);
     }

     .feature-card h3 {
         font-size: 1.5rem;
         font-weight: 700;
         margin-bottom: 1rem;
         color: var(--dark-text);
     }

     .feature-card p {
         color: var(--light-text);
         margin-bottom: 0;
         line-height: 1.7;
     }

     /* ======= Benefits Section ======= */
     .crm-benefits {
         padding: 100px 0;
         background: linear-gradient(135deg, #f8fafc, #f1f5f9);
     }

     .benefit-item {
         display: flex;
         align-items: flex-start;
         gap: 1.5rem;
         margin-bottom: 2rem;
         padding: 1.5rem;
         background: white;
         border-radius: var(--radius);
         border: 1px solid var(--border-color);
         transition: var(--transition);
     }

     .benefit-item:hover {
         transform: translateX(10px);
         box-shadow: var(--shadow-md);
         border-color: var(--primary-blue);
     }

     .benefit-icon {
         width: 50px;
         height: 50px;
         background: linear-gradient(135deg, var(--accent-green), #34d399);
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
         color: white;
         font-size: 1.3rem;
         flex-shrink: 0;
     }

     .benefit-content h5 {
         font-weight: 600;
         margin-bottom: 0.5rem;
         color: var(--dark-text);
     }

     .benefit-content p {
         color: var(--light-text);
         margin-bottom: 0;
     }

     /* ======= Process Section ======= */
     .crm-process {
         padding: 100px 0;
         background: white;
     }

     .process-timeline {
         position: relative;
         max-width: 1000px;
         margin: 3rem auto 0;
     }

     .process-timeline::before {
         content: '';
         position: absolute;
         left: 50%;
         top: 0;
         bottom: 0;
         width: 2px;
         background: linear-gradient(to bottom, var(--primary-blue), var(--accent-green));
         transform: translateX(-50%);
     }

     .process-step {
         position: relative;
         margin-bottom: 4rem;
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
         width: 60px;
         height: 60px;
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
         font-size: 1.3rem;
         box-shadow: var(--shadow-md);
     }

     .process-step:nth-child(odd) .step-marker {
         left: -75px;
     }

     .process-step:nth-child(even) .step-marker {
         right: -75px;
     }

     .step-content {
         background: white;
         padding: 2rem;
         border-radius: var(--radius);
         box-shadow: var(--shadow-sm);
         border: 1px solid var(--border-color);
     }

     /* ======= Integration Section ======= */
     .crm-integration {
         padding: 100px 0;
         background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
     }

     .integration-grid {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
         gap: 1.5rem;
         margin-top: 3rem;
     }

     .integration-card {
         background: white;
         padding: 2rem;
         border-radius: var(--radius);
         text-align: center;
         transition: var(--transition);
         border: 1px solid var(--border-color);
     }

     .integration-card:hover {
         transform: translateY(-5px);
         box-shadow: var(--shadow-md);
         border-color: var(--primary-blue);
     }

     .integration-icon {
         font-size: 2.5rem;
         color: var(--primary-blue);
         margin-bottom: 1rem;
     }

     /* ======= CTA Section ======= */
     .crm-cta {
         padding: 100px 0;
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         position: relative;
         overflow: hidden;
     }

     .crm-cta::before {
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
         padding: 1rem 3rem;
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
         .hero-title {
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

         .step-marker {
             left: 0 !important;
             right: auto !important;
         }
     }

     @media (max-width: 768px) {
         .crm-hero {
             padding: 100px 0 60px;
         }

         .hero-title {
             font-size: 2.3rem;
         }

         .hero-subtitle {
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
         .crm-hero {
             padding: 80px 0 40px;
         }

         .hero-title {
             font-size: 2rem;
         }

         .crm-badge {
             padding: 0.4rem 1rem;
             font-size: 0.8rem;
         }

         .feature-card {
             padding: 1.5rem;
         }

         .feature-icon {
             width: 60px;
             height: 60px;
             font-size: 1.5rem;
         }

         .benefit-item {
             flex-direction: column;
             align-items: center;
             text-align: center;
         }

         .cta-content h2 {
             font-size: 2rem;
         }

         .integration-grid {
             grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
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
 <section class="crm-hero">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6">
                 <div class="crm-badge animate-fade-in">
                     <i class="bi bi-diagram-3 me-2"></i> Enterprise Solutions
                 </div>
                 <h1 class="hero-title animate-fade-in">
                     Transform Your Business Operations with Custom CRM & ERP Solutions
                 </h1>
                 <p class="hero-subtitle animate-fade-in">
                     Streamline workflows, enhance productivity, and drive growth with tailored business management systems designed for your specific needs.
                 </p>
                 <div class="d-flex flex-wrap gap-3 animate-fade-in">
                     <a href="#consultation" class="btn btn-primary btn-lg">
                         <i class="bi bi-rocket-takeoff me-2"></i> Get Free Consultation
                     </a>
                     <a href="#features" class="btn btn-outline-primary btn-lg">
                         <i class="bi bi-play-circle me-2"></i> Watch Demo
                     </a>
                 </div>
             </div>
             <div class="col-lg-6">
                 <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                     alt="CRM ERP Dashboard"
                     class="img-fluid hero-image"
                     loading="lazy">
             </div>
         </div>
     </div>
 </section>

 <!-- Key Features -->
 <section class="crm-features" id="features">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Comprehensive Business Management Solutions</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 700px; margin: 1rem auto 0;">Everything you need to streamline operations and drive growth</p>
         </div>

         <div class="row g-4">
             <div class="col-lg-4 col-md-6">
                 <div class="feature-card animate-fade-in">
                     <div class="feature-icon">
                         <i class="bi bi-people"></i>
                     </div>
                     <h3>Customer Relationship Management</h3>
                     <p>Centralize customer data, manage leads, track sales pipelines, and enhance customer interactions with intelligent CRM solutions.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="feature-card animate-fade-in">
                     <div class="feature-icon">
                         <i class="bi bi-building"></i>
                     </div>
                     <h3>Enterprise Resource Planning</h3>
                     <p>Integrate all business processes including inventory, accounting, HR, manufacturing, and supply chain management in one platform.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="feature-card animate-fade-in">
                     <div class="feature-icon">
                         <i class="bi bi-graph-up"></i>
                     </div>
                     <h3>Real-Time Analytics & Reporting</h3>
                     <p>Gain actionable insights with customizable dashboards, predictive analytics, and detailed business intelligence reports.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="feature-card animate-fade-in">
                     <div class="feature-icon">
                         <i class="bi bi-gear"></i>
                     </div>
                     <h3>Workflow Automation</h3>
                     <p>Automate repetitive tasks, streamline approval processes, and eliminate manual errors with intelligent workflow automation.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="feature-card animate-fade-in">
                     <div class="feature-icon">
                         <i class="bi bi-cloud"></i>
                     </div>
                     <h3>Cloud & Mobile Access</h3>
                     <p>Access your business data anywhere, anytime with secure cloud hosting and responsive mobile applications.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="feature-card animate-fade-in">
                     <div class="feature-icon">
                         <i class="bi bi-shield-check"></i>
                     </div>
                     <h3>Enterprise Security</h3>
                     <p>Protect sensitive data with role-based access control, end-to-end encryption, and compliance with industry standards.</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Benefits Section -->
 <section class="crm-benefits">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <h2 class="section-title" style="font-size: 2.5rem; font-weight: 800;">Business Benefits</h2>
                 <p class="text-muted mb-5">See how our CRM/ERP solutions transform your business operations and drive measurable results.</p>

                 <div class="benefit-item animate-fade-in">
                     <div class="benefit-icon">
                         <i class="bi bi-arrow-up-right"></i>
                     </div>
                     <div class="benefit-content">
                         <h5>Increase Productivity by 40%</h5>
                         <p>Automate manual processes and streamline workflows to boost team productivity.</p>
                     </div>
                 </div>

                 <div class="benefit-item animate-fade-in">
                     <div class="benefit-icon">
                         <i class="bi bi-graph-up-arrow"></i>
                     </div>
                     <div class="benefit-content">
                         <h5>Reduce Operational Costs by 30%</h5>
                         <p>Eliminate inefficiencies and optimize resource allocation across departments.</p>
                     </div>
                 </div>

                 <div class="benefit-item animate-fade-in">
                     <div class="benefit-icon">
                         <i class="bi bi-currency-dollar"></i>
                     </div>
                     <div class="benefit-content">
                         <h5>Improve Sales Conversion by 25%</h5>
                         <p>Track leads effectively and follow up with automated sales pipelines.</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-6">
                 <div class="mt-5 mt-lg-0">
                     <div class="benefit-item animate-fade-in">
                         <div class="benefit-icon">
                             <i class="bi bi-bar-chart"></i>
                         </div>
                         <div class="benefit-content">
                             <h5>Real-Time Decision Making</h5>
                             <p>Access up-to-date business insights and make data-driven decisions instantly.</p>
                         </div>
                     </div>

                     <div class="benefit-item animate-fade-in">
                         <div class="benefit-icon">
                             <i class="bi bi-shield-check"></i>
                         </div>
                         <div class="benefit-content">
                             <h5>Enhanced Data Security</h5>
                             <p>Protect sensitive business information with enterprise-grade security protocols.</p>
                         </div>
                     </div>

                     <div class="benefit-item animate-fade-in">
                         <div class="benefit-icon">
                             <i class="bi bi-people"></i>
                         </div>
                         <div class="benefit-content">
                             <h5>Improved Customer Satisfaction</h5>
                             <p>Provide better customer service with quick access to complete customer histories.</p>
                         </div>
                     </div>

                     <div class="benefit-item animate-fade-in">
                         <div class="benefit-icon">
                             <i class="bi bi-lightning-charge"></i>
                         </div>
                         <div class="benefit-content">
                             <h5>Scalable Solutions</h5>
                             <p>Grow your system as your business expands without major overhauls.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Implementation Process -->
 <section class="crm-process">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Our Implementation Process</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 700px; margin: 1rem auto 0;">A structured approach to ensure successful deployment</p>
         </div>

         <div class="process-timeline">
             <div class="process-step animate-fade-in">
                 <div class="step-marker">01</div>
                 <div class="step-content">
                     <h5>Requirement Analysis</h5>
                     <p>Deep dive into your business processes and define system requirements</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-marker">02</div>
                 <div class="step-content">
                     <h5>System Design</h5>
                     <p>Create architecture, workflows, and database design for your solution</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-marker">03</div>
                 <div class="step-content">
                     <h5>Development & Customization</h5>
                     <p>Build the solution with your specific business logic and requirements</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-marker">04</div>
                 <div class="step-content">
                     <h5>Testing & Quality Assurance</h5>
                     <p>Rigorous testing to ensure system reliability and performance</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-marker">05</div>
                 <div class="step-content">
                     <h5>Deployment & Training</h5>
                     <p>Launch the system and train your team for effective usage</p>
                 </div>
             </div>

             <div class="process-step animate-fade-in">
                 <div class="step-marker">06</div>
                 <div class="step-content">
                     <h5>Support & Maintenance</h5>
                     <p>Ongoing support, updates, and optimization services</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Integration Capabilities -->
 <section class="crm-integration">
     <div class="container">
         <div class="text-center mb-5">
             <h2 class="section-title" style="display: inline-block; font-size: 2.5rem; font-weight: 800;">Seamless Integrations</h2>
             <p class="section-subtitle" style="color: var(--light-text); max-width: 700px; margin: 1rem auto 0;">Connect with your existing tools and platforms</p>
         </div>

         <div class="integration-grid">
             <div class="integration-card animate-fade-in">
                 <i class="bi bi-whatsapp integration-icon"></i>
                 <h6>WhatsApp Business</h6>
             </div>

             <div class="integration-card animate-fade-in">
                 <i class="bi bi-google integration-icon"></i>
                 <h6>Google Workspace</h6>
             </div>

             <div class="integration-card animate-fade-in">
                 <i class="bi bi-microsoft integration-icon"></i>
                 <h6>Microsoft Office 365</h6>
             </div>

             <div class="integration-card animate-fade-in">
                 <i class="bi bi-currency-dollar integration-icon"></i>
                 <h6>Payment Gateways</h6>
             </div>

             <div class="integration-card animate-fade-in">
                 <i class="bi bi-truck integration-icon"></i>
                 <h6>Shipping Providers</h6>
             </div>

             <div class="integration-card animate-fade-in">
                 <i class="bi bi-database integration-icon"></i>
                 <h6>Legacy Systems</h6>
             </div>
         </div>
     </div>
 </section>

 <!-- CTA Section -->
 <section class="crm-cta" id="consultation">
     <div class="container">
         <div class="cta-content animate-fade-in">
             <h2>Ready to Transform Your Business Operations?</h2>
             <p>Get a free consultation and system analysis. Let's build a custom CRM/ERP solution that drives efficiency and growth for your business.</p>
             <a href="<?= site_url('free-quote') ?>" class="cta-button">
                 <i class="bi bi-calendar-check me-2"></i> Schedule Free Consultation
             </a>
             <p class="mt-4 opacity-90">
                 <i class="bi bi-clock me-1"></i> 45-minute deep dive • Custom roadmap • No obligation
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
         document.querySelectorAll('.feature-card, .benefit-item, .process-step, .integration-card').forEach(el => {
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
                         top: targetElement.offsetTop - 80,
                         behavior: 'smooth'
                     });
                 }
             });
         });
     });
 </script>