 <style>
  
     /* Hero Section */
     .careers-hero {
         background: linear-gradient(135deg, rgba(30, 64, 175, 0.95) 0%, rgba(56, 189, 248, 0.95) 100%),
             url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
         background-size: cover;
         background-position: center;
         min-height: 85vh;
         display: flex;
         align-items: center;
         color: var(--white);
         position: relative;
         overflow: hidden;
         padding: 100px 0;
     }

     .careers-hero::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: radial-gradient(circle at 30% 80%, rgba(249, 115, 22, 0.2) 0%, transparent 50%);
     }

     .carrer-hero-content {
         position: relative;
         z-index: 2;
     }

     .carrer-hero-title {
         font-size: 3.5rem;
         font-weight: 900;
         margin-bottom: 1.5rem;
         line-height: 1.1;
         text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
         color: white;
     }

     .carrer-hero-subtitle {
         font-size: 1.3rem;
         margin-bottom: 1.5rem;
         opacity: 0.95;
         max-width: 700px;
         color: white;
     }

     .hero-description {
         font-size: 1.1rem;
         margin-bottom: 2.5rem;
         opacity: 0.9;
         max-width: 600px;
         color: white;
     }

     .btn-hero-primary {
         background: var(--accent-orange);
         border: none;
         padding: 14px 32px;
         font-weight: 600;
         font-size: 1.1rem;
         border-radius: 8px;
         transition: var(--transition);
         color: var(--white);
         text-decoration: none;
         display: inline-flex;
         align-items: center;
         gap: 10px;
         box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
     }

     .btn-hero-primary:hover {
         background: #ea580c;
         transform: translateY(-3px);
         box-shadow: 0 8px 25px rgba(249, 115, 22, 0.4);
         color: var(--white);
     }

     .btn-hero-secondary {
         background: transparent;
         border: 2px solid var(--white);
         color: var(--white);
         padding: 12px 28px;
         font-weight: 600;
         border-radius: 8px;
         transition: var(--transition);
         text-decoration: none;
         display: inline-flex;
         align-items: center;
         gap: 10px;
     }

     .btn-hero-secondary:hover {
         background: var(--white);
         color: var(--primary-blue);
         transform: translateY(-3px);
         box-shadow: 0 8px 20px rgba(255, 255, 255, 0.2);
     }

     /* Why Work With Us Section */
     .section-title {
         font-size: 2.8rem;
         font-weight: 800;
         color: var(--primary-blue);
         margin-bottom: 1rem;
         position: relative;
         display: inline-block;
     }

   
     .carrier-section-subtitle {
         font-size: 1.2rem;
         color: var(--light-text);
         margin-bottom: 0rem;
         /* max-width: 700px; */
     }

     .carrer-why-work-section {
         padding: 4px 0;
         background: var(--light-bg);
     }

     .why-work-card {
         background: var(--white);
         border-radius: 16px;
         padding: 2.5rem;
         box-shadow: var(--card-shadow);
         transition: var(--transition);
         height: 100%;
         border-top: 5px solid var(--primary-blue);
     }

     .why-work-card:hover {
         transform: translateY(-10px);
         box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
     }

     .why-work-icon {
         width: 70px;
         height: 70px;
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         border-radius: 16px;
         display: flex;
         align-items: center;
         justify-content: center;
         color: var(--white);
         font-size: 1.8rem;
         margin-bottom: 1.5rem;
     }

     .benefits-list {
         list-style: none;
         padding: 0;
         margin-top: 1.5rem;
     }

     .benefits-list li {
         display: flex;
         align-items: center;
         margin-bottom: 0.75rem;
         font-size: 1.05rem;
         padding: 8px 0;
     }

     .benefits-list li i {
         color: #10b981;
         margin-right: 0.75rem;
         font-size: 1.1rem;
         background: rgba(16, 185, 129, 0.1);
         padding: 8px;
         border-radius: 50%;
     }

     .perfect-for-card {
         background: linear-gradient(135deg, var(--accent-orange), #fb923c);
         color: var(--white);
         padding: 2.5rem;
         border-radius: 16px;
         height: 100%;
         box-shadow: var(--card-shadow);
     }

     .perfect-for-tags {
         display: flex;
         flex-wrap: wrap;
         gap: 0.75rem;
         margin-top: 1.5rem;
     }

     .perfect-for-tag {
         background: rgba(255, 255, 255, 0.2);
         padding: 0.5rem 1.2rem;
         border-radius: 50px;
         font-size: 0.95rem;
         font-weight: 500;
         backdrop-filter: blur(10px);
     }

     /* Job Openings Section */
     .job-openings-section {
         padding: 4px 0;
         background: var(--white);
     }

     .job-card {
         background: var(--white);
         border: 1px solid #e5e7eb;
         border-radius: 16px;
         padding: 2.5rem;
         margin-bottom: 2rem;
         transition: var(--transition);
         position: relative;
         overflow: hidden;
         box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
     }

     .job-card::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 5px;
         height: 100%;
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
     }

     .job-card:hover {
         transform: translateY(-8px);
         box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
         border-color: var(--primary-blue);
     }

     .job-header {
         display: flex;
         justify-content: space-between;
         align-items: flex-start;
         margin-bottom: 1.5rem;
         flex-wrap: wrap;
         gap: 1rem;
     }

     .job-title {
         font-size: 1.6rem;
         font-weight: 700;
         color: var(--primary-blue);
         margin-bottom: 0.5rem;
     }

     .job-meta {
         display: flex;
         gap: 1.5rem;
         flex-wrap: wrap;
         margin-bottom: 1rem;
     }

     .job-meta-item {
         display: flex;
         align-items: center;
         gap: 0.5rem;
         font-size: 0.95rem;
         color: var(--light-text);
     }

     .job-meta-item i {
         color: var(--accent-orange);
     }

     .skills-required {
         margin-bottom: 1.5rem;
     }

     .skills-tags {
         display: flex;
         flex-wrap: wrap;
         gap: 0.75rem;
         margin-top: 0.75rem;
     }

     .skill-tag {
         background: #eff6ff;
         color: var(--primary-blue);
         padding: 0.5rem 1rem;
         border-radius: 50px;
         font-size: 0.9rem;
         font-weight: 500;
         border: 1px solid #dbeafe;
         transition: var(--transition);
     }

     .skill-tag:hover {
         background: var(--primary-blue);
         color: var(--white);
         transform: translateY(-2px);
     }

     .apply-btn {
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         color: var(--white);
         border: none;
         padding: 0.9rem 2rem;
         border-radius: 8px;
         font-weight: 600;
         transition: var(--transition);
         text-decoration: none;
         display: inline-flex;
         align-items: center;
         gap: 0.5rem;
         box-shadow: 0 4px 15px rgba(30, 64, 175, 0.3);
     }

     .apply-btn:hover {
         background: linear-gradient(135deg, #1d4ed8, #2563eb);
         transform: translateY(-3px);
         color: var(--white);
         box-shadow: 0 8px 25px rgba(30, 64, 175, 0.4);
     }

     /* Internship Program Section */
/* Internship Program Section */
.internship-section {
    padding: 0px 0;
    background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
    color: var(--white);
    position: relative;
    overflow: hidden;
}

.internship-section .section-title {
    color: var(--white);
}

.internship-section .section-title::after {
    background: var(--accent-orange);
}

.carrier-section-subtitle {
    /* color: rgba(255, 255, 255, 0.85); */
}

/* Feature Cards */
.internship-feature {
    background: rgba(255, 255, 255, 0.1);
    padding: 2.5rem 2rem;
    border-radius: 16px;
    text-align: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.internship-feature:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 0.15);
}

.internship-feature i {
    font-size: 3rem;
    margin-bottom: 1.5rem;
    color: #fbbf24;
}

.internship-feature h4 {
    margin-bottom: 1rem;
    font-weight: 700;
    font-size: 1.4rem;
}

.internship-feature p,
.internship-detail p {
    color: #ffffff;
}

/* Internship Details */
.internship-detail {
    text-align: center;
    background: rgba(255, 255, 255, 0.1);
    padding: 1.5rem 2.5rem;
    border-radius: 12px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.internship-detail h5 {
    font-weight: 700;
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
}


     /* Career Growth Section */
     .growth-section {
         padding: 4px 0;
         background: var(--light-bg);
     }

     .growth-path {
         display: flex;
         justify-content: center;
         align-items: center;
         gap: 2.5rem;
         margin: 4rem 0;
         flex-wrap: wrap;
     }

     .growth-step {
         background: var(--white);
         padding: 2.5rem 2rem;
         border-radius: 16px;
         text-align: center;
         box-shadow: var(--card-shadow);
         min-width: 220px;
         position: relative;
         transition: var(--transition);
         border-top: 5px solid var(--primary-blue);
     }

     .growth-step:hover {
         transform: translateY(-10px);
         box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
     }

     .growth-step.active {
         background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
         color: var(--white);
         transform: scale(1.05);
     }

     .growth-step h4 {
         margin-bottom: 0.5rem;
         font-weight: 700;
         font-size: 1.4rem;
     }

     .growth-step p {
         font-size: 0.95rem;
         opacity: 0.9;
         color: orange;
     }

     /* Application Form Section */
     .application-section {
         padding: 4px 0;
         background: var(--white);
     }

     .application-form {
         background: var(--light-bg);
         padding: 3.5rem;
         border-radius: 20px;
         box-shadow: var(--card-shadow);
         max-width: 750px;
         margin: 0 auto;
         border: 1px solid #e5e7eb;
     }

     .form-group {
         margin-bottom: 1.8rem;
     }

     .form-label {
         font-weight: 600;
         color: var(--dark-text);
         margin-bottom: 0.5rem;
         display: block;
         font-size: 1.05rem;
     }

     .form-control {
         border: 2px solid #e5e7eb;
         border-radius: 10px;
         padding: 0.9rem 1.2rem;
         font-size: 1rem;
         transition: var(--transition);
         width: 100%;
     }

     .form-control:focus {
         border-color: var(--primary-blue);
         box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
         outline: none;
     }

     .file-upload {
         position: relative;
         display: inline-block;
         cursor: pointer;
         width: 100%;
     }

     .file-upload input[type=file] {
         position: absolute;
         opacity: 0;
         width: 100%;
         height: 100%;
         cursor: pointer;
     }

     .file-upload-label {
         display: flex;
         align-items: center;
         gap: 1rem;
         padding: 1rem 1.5rem;
         border: 2px dashed #d1d5db;
         border-radius: 10px;
         background: var(--white);
         transition: var(--transition);
         justify-content: center;
     }

     .file-upload:hover .file-upload-label {
         border-color: var(--primary-blue);
         background: #f8fafc;
     }

     .submit-btn {
         background: linear-gradient(135deg, var(--accent-orange), #fb923c);
         color: var(--white);
         border: none;
         padding: 1.2rem 2.5rem;
         border-radius: 10px;
         font-weight: 600;
         font-size: 1.1rem;
         width: 100%;
         transition: var(--transition);
         box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
     }

     .submit-btn:hover {
         background: linear-gradient(135deg, #ea580c, var(--accent-orange));
         transform: translateY(-3px);
         box-shadow: 0 8px 25px rgba(249, 115, 22, 0.4);
     }

     /* Footer CTA Section */
     .footer-cta {
         padding: 80px 0;
         background: linear-gradient(135deg, #111827, #374151);
         color: var(--white);
         text-align: center;
     }

     .footer-cta h3 {
         font-size: 2.5rem;
         font-weight: 800;
         margin-bottom: 1.5rem;
         color: #d1d5db;
     }

     .footer-cta-contacts {
         display: flex;
         justify-content: center;
         gap: 3rem;
         margin: 2.5rem 0;
         flex-wrap: wrap;
     }

     .footer-cta-contact {
         display: flex;
         align-items: center;
         gap: 0.8rem;
         font-size: 1.2rem;
     }

     .footer-cta-contact i {
         color: var(--accent-orange);
         font-size: 1.3rem;
     }

     .footer-cta-contact a {
         color: var(--white);
         text-decoration: none;
         transition: var(--transition);
     }

     .footer-cta-contact a:hover {
         color: var(--accent-orange);
     }

     /* Alert Messages */
     .alert {
         padding: 1.2rem 1.5rem;
         border-radius: 10px;
         margin-bottom: 1.8rem;
         border: none;
         border-left: 5px solid transparent;
     }

     .alert-success {
         background: #d1fae5;
         color: #065f46;
         border-left-color: #10b981;
     }

     .alert-danger {
         background: #fee2e2;
         color: #991b1b;
         border-left-color: #ef4444;
     }

     /* Responsive Design */
     @media (max-width: 1200px) {
         .carrer-hero-title {
             font-size: 3rem;
         }

         .section-title {
             font-size: 2.5rem;
         }

         .growth-step {
             min-width: 200px;
         }
     }

     @media (max-width: 992px) {
         .carrer-hero-title {
             font-size: 2.7rem;
         }

         .section-title {
             font-size: 2.2rem;
         }

         .growth-path {
             gap: 2rem;
         }

         .growth-step {
             min-width: 180px;
             padding: 2rem 1.5rem;
         }

         .job-header {
             flex-direction: column;
             align-items: flex-start;
         }

         .application-form {
             padding: 2.5rem;
         }
     }

     @media (max-width: 768px) {
         .careers-hero {
             min-height: 70vh;
             padding: 80px 0;
         }

         .carrer-hero-title {
             font-size: 2.3rem;
         }

         .carrer-hero-subtitle {
             font-size: 1.1rem;
         }

         .section-title {
             font-size: 2rem;
         }

         .growth-path {
             flex-direction: column;
             gap: 1.5rem;
         }

         .growth-step {
             width: 100%;
             max-width: 300px;
         }

         .growth-step:not(:last-child)::after {
             content: '↓';
             position: absolute;
             right: 50%;
             top: 100%;
             transform: translateX(50%);
             font-size: 2.5rem;
             color: var(--primary-blue);
             font-weight: bold;
         }

         .why-work-card,
         .perfect-for-card {
             padding: 2rem;
         }

         .job-card {
             padding: 2rem;
         }

         .internship-feature {
             padding: 2rem 1.5rem;
         }

         .footer-cta h3 {
             font-size: 2rem;
         }
     }

     @media (max-width: 576px) {
         .careers-hero {
             min-height: 65vh;
             padding: 60px 0;
         }

         .carrer-hero-title {
             font-size: 2rem;
         }

         .hero-buttons {
             display: flex;
             flex-direction: column;
             gap: 1rem;
             width: 100%;
         }

         .btn-hero-primary,
         .btn-hero-secondary {
             width: 100%;
             justify-content: center;
         }

         .section-title {
             font-size: 1.8rem;
         }

         .carrer-why-work-section,
         .job-openings-section,
         .internship-section,
         .growth-section,
         .application-section {
             padding: 70px 0;
         }

         .application-form {
             padding: 2rem 1.5rem;
         }

         .footer-cta {
             padding: 60px 0;
         }

         .footer-cta h3 {
             font-size: 1.8rem;
         }

         .footer-cta-contacts {
             flex-direction: column;
             gap: 1.5rem;
         }

         .job-meta {
             flex-direction: column;
             gap: 0.8rem;
         }
     }
 </style>

 <!-- Flash Messages (Simulated for demo) -->
 <div class="container mt-0" id="flash-messages">
     <div class="alert alert-success d-none" id="success-message">
         <i class="fas fa-check-circle me-2"></i>
         <span id="success-text">Your application has been submitted successfully!</span>
     </div>
     <div class="alert alert-danger d-none" id="error-message">
         <i class="fas fa-exclamation-circle me-2"></i>
         <span id="error-text">There was an error submitting your application. Please try again.</span>
     </div>
 </div>

 <!-- 1. Career Page Hero Section -->
 <section class="careers-hero">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-md-10">
                 <div class="carrer-hero-content">
                     <h1 class="carrer-hero-title">Build Your Career With TechElevatr</h1>
                     <p class="carrer-hero-subtitle">Elevate your skills. Build real-world solutions. Grow with us.</p>
                     <p class="hero-description">
                         At TechElevatr Digital Solutions, we don't just build websites and apps — we build careers, confidence, and future-ready professionals. Join our dynamic team and work on cutting-edge projects that make an impact.
                     </p>
                     <div class="hero-buttons">
                         <a href="#job-openings" class="btn-hero-primary">
                             <i class="fas fa-briefcase me-2"></i>
                             View Open Positions
                         </a>
                         <a href="#apply-now" class="btn-hero-secondary">
                             <i class="fas fa-paper-plane me-2"></i>
                             Apply Now
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- 2. Why Work With Us Section -->
 <section class="carrer-why-work-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center">
                 <h2 class="section-title">Why Join TechElevatr?</h2>
                 <p class="carrier-section-subtitle">We're more than just a workplace. We're a learning ecosystem where talent meets opportunity.</p>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-8 mb-4 mb-lg-0">
                 <div class="why-work-card">
                     <div class="why-work-icon">
                         <i class="fas fa-rocket"></i>
                     </div>
                     <h3 class="mb-3">Accelerate Your Career Growth</h3>
                     <p class="mb-4">We provide the perfect environment for ambitious professionals to learn, grow, and excel in their careers through hands-on experience and mentorship.</p>
                     <ul class="benefits-list">
                         <li><i class="fas fa-check"></i> Work on real client projects with measurable impact</li>
                         <li><i class="fas fa-check"></i> Learn industry-level development practices and methodologies</li>
                         <li><i class="fas fa-check"></i> Friendly startup culture with dedicated mentorship</li>
                         <li><i class="fas fa-check"></i> Growth-focused environment with regular skill assessments</li>
                         <li><i class="fas fa-check"></i> Flexible & skill-driven roles that match your career goals</li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="perfect-for-card">
                     <h3 class="mb-4">Perfect For:</h3>
                     <p>Whether you're just starting out or looking to level up your skills, TechElevatr offers the perfect platform for growth.</p>
                     <div class="perfect-for-tags">
                         <span class="perfect-for-tag">Students</span>
                         <span class="perfect-for-tag">Recent Graduates</span>
                         <span class="perfect-for-tag">Interns</span>
                         <span class="perfect-for-tag">Junior Developers</span>
                         <span class="perfect-for-tag">Career Changers</span>
                         <span class="perfect-for-tag">Tech Enthusiasts</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- 3. Current Openings Section -->
 <section class="job-openings-section" id="job-openings">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center">
                 <h2 class="section-title">Current Open Positions</h2>
                 <p class="carrier-section-subtitle">Join our team and work on exciting projects that challenge and inspire</p>
             </div>
         </div>

         <!-- Job Card 1 -->
         <div class="job-card">
             <div class="job-header">
                 <div>
                     <h3 class="job-title">Full Stack Web Developer (Junior/Intern)</h3>
                     <div class="job-meta">
                         <div class="job-meta-item">
                             <i class="fas fa-map-marker-alt"></i>
                             <span>Remote / Kolkata, India</span>
                         </div>
                         <div class="job-meta-item">
                             <i class="fas fa-clock"></i>
                             <span>Full-time / Internship</span>
                         </div>
                         <div class="job-meta-item">
                             <i class="fas fa-calendar-alt"></i>
                             <span>Posted: 2 days ago</span>
                         </div>
                     </div>
                 </div>
                 <a href="#apply-now" class="apply-btn apply-to-position" data-position="Full Stack Web Developer (Junior/Intern)">
                     <i class="fas fa-paper-plane"></i>
                     Apply Now
                 </a>
             </div>

             <div class="skills-required">
                 <h5>Skills Required:</h5>
                 <div class="skills-tags">
                     <span class="skill-tag">HTML5/CSS3</span>
                     <span class="skill-tag">JavaScript</span>
                     <span class="skill-tag">React.js</span>
                     <span class="skill-tag">Node.js</span>
                     <span class="skill-tag">PHP/CodeIgniter</span>
                     <span class="skill-tag">MySQL</span>
                     <span class="skill-tag">Git/GitHub</span>
                 </div>
             </div>

             <p class="job-description">We're looking for a motivated Full Stack Developer to join our team. You'll work on building responsive web applications, collaborating with designers and other developers, and implementing features for our clients. This is a great opportunity to gain hands-on experience with modern web technologies.</p>
         </div>

         <!-- Job Card 2 -->
         <div class="job-card">
             <div class="job-header">
                 <div>
                     <h3 class="job-title">UI/UX Designer (Intern)</h3>
                     <div class="job-meta">
                         <div class="job-meta-item">
                             <i class="fas fa-map-marker-alt"></i>
                             <span>Remote / Kolkata, India</span>
                         </div>
                         <div class="job-meta-item">
                             <i class="fas fa-clock"></i>
                             <span>Internship</span>
                         </div>
                         <div class="job-meta-item">
                             <i class="fas fa-calendar-alt"></i>
                             <span>Posted: 5 days ago</span>
                         </div>
                     </div>
                 </div>
                 <a href="#apply-now" class="apply-btn apply-to-position" data-position="UI/UX Designer (Intern)">
                     <i class="fas fa-paper-plane"></i>
                     Apply Now
                 </a>
             </div>

             <div class="skills-required">
                 <h5>Skills Required:</h5>
                 <div class="skills-tags">
                     <span class="skill-tag">Figma</span>
                     <span class="skill-tag">Adobe XD</span>
                     <span class="skill-tag">User Research</span>
                     <span class="skill-tag">Wireframing</span>
                     <span class="skill-tag">Prototyping</span>
                     <span class="skill-tag">Design Systems</span>
                 </div>
             </div>

             <p class="job-description">Join our design team to create beautiful and intuitive user interfaces for web and mobile applications. You'll work closely with developers and clients to understand requirements and translate them into compelling designs that provide excellent user experiences.</p>
         </div>

         <!-- Job Card 3 -->
         <div class="job-card">
             <div class="job-header">
                 <div>
                     <h3 class="job-title">Digital Marketing Executive</h3>
                     <div class="job-meta">
                         <div class="job-meta-item">
                             <i class="fas fa-map-marker-alt"></i>
                             <span>Kolkata, India</span>
                         </div>
                         <div class="job-meta-item">
                             <i class="fas fa-clock"></i>
                             <span>Full-time</span>
                         </div>
                         <div class="job-meta-item">
                             <i class="fas fa-calendar-alt"></i>
                             <span>Posted: 1 week ago</span>
                         </div>
                     </div>
                 </div>
                 <a href="#apply-now" class="apply-btn apply-to-position" data-position="Digital Marketing Executive">
                     <i class="fas fa-paper-plane"></i>
                     Apply Now
                 </a>
             </div>

             <div class="skills-required">
                 <h5>Skills Required:</h5>
                 <div class="skills-tags">
                     <span class="skill-tag">SEO</span>
                     <span class="skill-tag">Social Media Marketing</span>
                     <span class="skill-tag">Content Creation</span>
                     <span class="skill-tag">Google Analytics</span>
                     <span class="skill-tag">Email Marketing</span>
                     <span class="skill-tag">Campaign Management</span>
                 </div>
             </div>

             <p class="job-description">We're looking for a creative Digital Marketing Executive to develop and execute marketing campaigns that increase brand awareness and generate leads. You'll manage our social media presence, create engaging content, and analyze campaign performance to optimize results.</p>
         </div>
     </div>
 </section>

 <!-- 4. Internship Program Section -->
<section class="internship-section">
    <div class="container">

        <!-- Section Heading -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Our Internship Program</h2>
                <p class="carrier-section-subtitle">
                    A structured learning journey designed to transform students into industry-ready professionals
                </p>
            </div>
        </div>

        <!-- Internship Features -->
        <div class="row mt-4">

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="internship-feature h-100">
                    <i class="fas fa-laptop-code"></i>
                    <h4>Hands-on Real Projects</h4>
                    <p>Work on actual client projects and gain practical experience that matters</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="internship-feature h-100">
                    <i class="fas fa-certificate"></i>
                    <h4>Internship Certificate</h4>
                    <p>Receive official certification and recommendation letter upon successful completion</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="internship-feature h-100">
                    <i class="fas fa-user-tie"></i>
                    <h4>Professional Mentorship</h4>
                    <p>Learn from experienced developers and industry experts through regular sessions</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="internship-feature h-100">
                    <i class="fas fa-briefcase"></i>
                    <h4>Full-time Opportunity</h4>
                    <p>Potential for permanent position based on performance and project contribution</p>
                </div>
            </div>

        </div>

        <!-- Internship Details -->
        <div class="row justify-content-center mt-5">

            <div class="col-12 col-md-4 mb-3">
                <div class="internship-detail">
                    <h5>Duration</h5>
                    <p>1–6 Months</p>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <div class="internship-detail">
                    <h5>Mode</h5>
                    <p>Online / Hybrid / Offline</p>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <div class="internship-detail">
                    <h5>Stipend</h5>
                    <p>Performance Based</p>
                </div>
            </div>

        </div>

    </div>
</section>



 <!-- 5. Career Growth Path Section -->
 <section class="growth-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center">
                 <h2 class="section-title">Your Growth Path With Us</h2>
                 <p class="carrier-section-subtitle">We believe in learning by building, not just theory. Here's how you can grow with TechElevatr</p>
             </div>
         </div>

         <div class="growth-path">
             <div class="growth-step active">
                 <h4>Intern</h4>
                 <p>Learn & Practice</p>
                 <div class="mt-3">
                     <small>Duration: 1-3 months</small>
                 </div>
             </div>
             <div class="growth-step">
                 <h4>Junior Developer</h4>
                 <p>Build & Contribute</p>
                 <div class="mt-3">
                     <small>Duration: 3-6 months</small>
                 </div>
             </div>
             <div class="growth-step">
                 <h4>Developer</h4>
                 <p>Lead & Innovate</p>
                 <div class="mt-3">
                     <small>Duration: 6-12 months</small>
                 </div>
             </div>
             <div class="growth-step">
                 <h4>Team Lead</h4>
                 <p>Mentor & Guide</p>
                 <div class="mt-3">
                     <small>Duration: 1+ years</small>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- 6. Apply Now Section -->
 <section class="application-section" id="apply-now">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center">
                 <h2 class="section-title">Apply for a Position</h2>
                 <p class="carrier-section-subtitle">Take the first step towards your dream career. Fill out the form below and we'll get back to you soon.</p>
             </div>
         </div>

         <div class="application-form">
             <form id="applicationForm">
                 <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="full_name" class="form-label">Full Name *</label>
                             <input type="text" class="form-control" id="full_name" name="full_name" required placeholder="Enter your full name">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="email" class="form-label">Email Address *</label>
                             <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email address">
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="phone" class="form-label">Phone Number *</label>
                             <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Enter your phone number">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="position" class="form-label">Applying For *</label>
                             <select class="form-control" id="position" name="position" required>
                                 <option value="">Select Position</option>
                                 <option value="Full Stack Web Developer (Junior/Intern)">Full Stack Web Developer (Junior/Intern)</option>
                                 <option value="UI/UX Designer (Intern)">UI/UX Designer (Intern)</option>
                                 <option value="Digital Marketing Executive">Digital Marketing Executive</option>
                                 <option value="Mobile App Developer (Intern)">Mobile App Developer (Intern)</option>
                                 <option value="Other">Other (Specify in message)</option>
                             </select>
                         </div>
                     </div>
                 </div>

                 <div class="form-group">
                     <label for="resume" class="form-label">Resume Upload *</label>
                     <div class="file-upload">
                         <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                         <div class="file-upload-label">
                             <i class="fas fa-cloud-upload-alt"></i>
                             <span id="file-label">Upload your resume (PDF, DOC, DOCX)</span>
                         </div>
                     </div>
                     <small class="form-text text-muted">Maximum file size: 5MB</small>
                 </div>

                 <div class="form-group">
                     <label for="message" class="form-label">Cover Letter / Message</label>
                     <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us about yourself, why you want to join TechElevatr, and what you can bring to our team..."></textarea>
                 </div>

                 <div class="form-group form-check mt-4">
                     <input type="checkbox" class="form-check-input" id="agree_terms" required>
                     <label class="form-check-label" for="agree_terms">I agree to the <a href="#" class="text-primary">privacy policy</a> and understand that my data will be processed for recruitment purposes.</label>
                 </div>

                 <button type="submit" class="submit-btn mt-3">
                     <i class="fas fa-paper-plane me-2"></i>
                     Submit Application
                 </button>
             </form>
         </div>
     </div>
 </section>

 <!-- 7. Footer CTA Section -->
 <section class="footer-cta">
     <div class="container">
         <h3>Ready to Start Your Journey?</h3>
         <p class="mb-4">Have questions about our openings or application process? Get in touch with us.</p>
         <div class="footer-cta-contacts">
             <div class="footer-cta-contact">
                 <i class="fas fa-phone"></i>
                 <a href="tel:+916295827525">+91 62958 27525</a>
             </div>
             <div class="footer-cta-contact">
                 <i class="fas fa-envelope"></i>
                 <a href="mailto:techelevatr@gmail.com">techelevatr@gmail.com</a>
             </div>
             <div class="footer-cta-contact">
                 <i class="fas fa-map-marker-alt"></i>
                 <span>Kolkata, India</span>
             </div>
         </div>
         <p class="mt-4">👉 Let's build your future together.</p>
     </div>
 </section>



 <script>
     document.addEventListener('DOMContentLoaded', function() {
         // Smooth scrolling for anchor links
         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
             anchor.addEventListener('click', function(e) {
                 e.preventDefault();
                 const targetId = this.getAttribute('href');
                 if (targetId === '#') return;

                 const target = document.querySelector(targetId);
                 if (target) {
                     window.scrollTo({
                         top: target.offsetTop - 80,
                         behavior: 'smooth'
                     });
                 }
             });
         });

         // File upload handling
         const fileInput = document.getElementById('resume');
         const fileLabel = document.getElementById('file-label');

         if (fileInput && fileLabel) {
             fileInput.addEventListener('change', function() {
                 if (this.files && this.files[0]) {
                     const fileName = this.files[0].name;
                     fileLabel.textContent = fileName.length > 30 ?
                         fileName.substring(0, 27) + '...' : fileName;
                 } else {
                     fileLabel.textContent = 'Upload your resume (PDF, DOC, DOCX)';
                 }
             });
         }

         // Set position from job card apply button click
         document.querySelectorAll('.apply-to-position').forEach(button => {
             button.addEventListener('click', function(e) {
                 e.preventDefault();
                 const position = this.getAttribute('data-position');
                 const positionSelect = document.getElementById('position');

                 if (positionSelect) {
                     for (let i = 0; i < positionSelect.options.length; i++) {
                         if (positionSelect.options[i].value === position) {
                             positionSelect.selectedIndex = i;
                             break;
                         }
                     }
                 }

                 // Scroll to application form
                 const applicationSection = document.getElementById('apply-now');
                 if (applicationSection) {
                     window.scrollTo({
                         top: applicationSection.offsetTop - 80,
                         behavior: 'smooth'
                     });
                 }
             });
         });

         // Form submission handling
         const applicationForm = document.getElementById('applicationForm');
         const successMessage = document.getElementById('success-message');
         const errorMessage = document.getElementById('error-message');

         if (applicationForm) {
             applicationForm.addEventListener('submit', function(e) {
                 e.preventDefault();

                 // Simple form validation
                 const requiredFields = this.querySelectorAll('[required]');
                 let isValid = true;

                 requiredFields.forEach(field => {
                     if (!field.value.trim()) {
                         isValid = false;
                         field.classList.add('is-invalid');
                     } else {
                         field.classList.remove('is-invalid');
                     }
                 });

                 if (!isValid) {
                     showMessage('Please fill in all required fields.', 'error');
                     return;
                 }

                 // Simulate form submission (in a real scenario, this would be an AJAX call)
                 showMessage('Your application has been submitted successfully! We will contact you soon.', 'success');

                 // Reset form after successful submission
                 setTimeout(() => {
                     applicationForm.reset();
                     if (fileLabel) {
                         fileLabel.textContent = 'Upload your resume (PDF, DOC, DOCX)';
                     }
                     // Hide success message after 5 seconds
                     successMessage.classList.add('d-none');
                 }, 5000);
             });
         }

         // Function to show messages
         function showMessage(text, type) {
             if (type === 'success') {
                 document.getElementById('success-text').textContent = text;
                 successMessage.classList.remove('d-none');
                 errorMessage.classList.add('d-none');
             } else {
                 document.getElementById('error-text').textContent = text;
                 errorMessage.classList.remove('d-none');
                 successMessage.classList.add('d-none');
             }

             // Scroll to top to show message
             window.scrollTo({
                 top: 0,
                 behavior: 'smooth'
             });
         }

         // Animate elements on scroll
         const animateOnScroll = () => {
             const elements = document.querySelectorAll('.job-card, .why-work-card, .internship-feature, .growth-step');

             elements.forEach(el => {
                 const elementPosition = el.getBoundingClientRect().top;
                 const screenPosition = window.innerHeight / 1.2;

                 if (elementPosition < screenPosition) {
                     el.style.opacity = '1';
                     el.style.transform = 'translateY(0)';
                 }
             });
         };

         // Set initial state for animation
         document.querySelectorAll('.job-card, .why-work-card, .internship-feature, .growth-step').forEach(el => {
             el.style.opacity = '0';
             el.style.transform = 'translateY(30px)';
             el.style.transition = 'all 0.6s ease';
         });

         // Run animation on load and scroll
         window.addEventListener('load', animateOnScroll);
         window.addEventListener('scroll', animateOnScroll);

         // Add active class to growth steps on scroll
         const growthSteps = document.querySelectorAll('.growth-step');
         window.addEventListener('scroll', () => {
             const scrollPosition = window.scrollY;

             growthSteps.forEach((step, index) => {
                 // Remove active class from all
                 step.classList.remove('active');

                 // Add active class based on scroll position
                 if (scrollPosition > 2500 + (index * 150)) {
                     step.classList.add('active');
                 }
             });
         });
     });
 </script>