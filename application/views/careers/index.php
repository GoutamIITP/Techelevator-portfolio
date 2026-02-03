<style>
    /* ========================================
   CAREERS PAGE STYLES
   ======================================== */

    /* Hero Section */
    .careers-hero {
        background: linear-gradient(135deg, rgba(30, 64, 175, 0.95), rgba(56, 189, 248, 0.95));
        min-height: 70vh;
        display: flex;
        align-items: center;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .careers-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 30% 80%, rgba(249, 115, 22, 0.2) 0%, transparent 50%);
    }

    .careers-hero-content {
        position: relative;
        z-index: 2;
    }

    .careers-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .careers-hero-subtitle {
        font-size: 1.3rem;
        margin-bottom: 1rem;
        opacity: 0.95;
    }

    .careers-hero-description {
        font-size: 1.1rem;
        margin-bottom: 2.5rem;
        opacity: 0.9;
        max-width: 600px;
    }

    .hero-buttons {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .btn-hero-primary {
        background: #f97316;
        border: none;
        padding: 14px 28px;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
        color: white;
        text-decoration: none;
    }

    .btn-hero-primary:hover {
        background: #ea580c;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(249, 115, 22, 0.4);
        color: white;
    }

    .btn-hero-secondary {
        background: transparent;
        border: 2px solid white;
        color: white;
        padding: 12px 26px;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-hero-secondary:hover {
        background: white;
        color: #1e40af;
        transform: translateY(-2px);
    }

    /* Why Work With Us Section */
    .why-work-section {
        padding: 80px 0;
        background: #f9fafb;
    }

    .why-work-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
    }

    .why-work-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .why-work-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #1e40af, #3b82f6);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .benefits-list {
        list-style: none;
        padding: 0;
    }

    .benefits-list li {
        display: flex;
        align-items: center;
        margin-bottom: 0.75rem;
        font-size: 1.05rem;
    }

    .benefits-list li i {
        color: #10b981;
        margin-right: 0.75rem;
        font-size: 1.1rem;
    }

    .perfect-for {
        background: linear-gradient(135deg, #f97316, #fb923c);
        color: white;
        padding: 1.5rem;
        border-radius: 12px;
        margin-top: 2rem;
        text-align: center;
    }

    .perfect-for-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        justify-content: center;
        margin-top: 1rem;
    }

    .perfect-for-tag {
        background: rgba(255, 255, 255, 0.2);
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    /* Job Openings Section */
    .job-openings-section {
        padding: 80px 0;
        background: white;
    }

    .job-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 2rem;
        margin-bottom: 2rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .job-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(135deg, #1e40af, #3b82f6);
    }

    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
        border-color: #1e40af;
    }

    .job-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }

    .job-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e40af;
        margin-bottom: 0.5rem;
    }

    .job-meta {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        margin-bottom: 1rem;
    }

    .job-meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: #6b7280;
    }

    .job-meta-item i {
        color: #f97316;
    }

    .skills-required {
        margin-bottom: 1.5rem;
    }

    .skills-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 0.75rem;
    }

    .skill-tag {
        background: #eff6ff;
        color: #1e40af;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        border: 1px solid #dbeafe;
    }

    .apply-btn {
        background: linear-gradient(135deg, #1e40af, #3b82f6);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .apply-btn:hover {
        background: linear-gradient(135deg, #1d4ed8, #2563eb);
        transform: translateY(-2px);
        color: white;
        box-shadow: 0 6px 20px rgba(30, 64, 175, 0.4);
    }

    /* Internship Program Section */
    .internship-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #1e40af, #3b82f6);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .internship-content {
        position: relative;
        z-index: 2;
    }

    .internship-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .internship-feature {
        background: rgba(255, 255, 255, 0.1);
        padding: 2rem;
        border-radius: 16px;
        text-align: center;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .internship-feature i {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #fbbf24;
    }

    .internship-feature h4 {
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .internship-details {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin-top: 3rem;
        flex-wrap: wrap;
    }

    .internship-detail {
        text-align: center;
    }

    .internship-detail h5 {
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    /* Career Growth Section */
    .growth-section {
        padding: 80px 0;
        background: #f9fafb;
    }

    .growth-path {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2rem;
        margin: 3rem 0;
        flex-wrap: wrap;
    }

    .growth-step {
        background: white;
        padding: 2rem;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        min-width: 200px;
        position: relative;
    }

    .growth-step:not(:last-child)::after {
        content: '→';
        position: absolute;
        right: -1.5rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 2rem;
        color: #1e40af;
        font-weight: bold;
    }

    .growth-step.active {
        background: linear-gradient(135deg, #1e40af, #3b82f6);
        color: white;
    }

    .growth-step h4 {
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    /* Application Form Section */
    .application-section {
        padding: 80px 0;
        background: white;
    }

    .application-form {
        background: #f9fafb;
        padding: 3rem;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        font-weight: 600;
        color: #374151;
        margin-bottom: 0.5rem;
        display: block;
    }

    .form-control {
        border: 2px solid #e5e7eb;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        width: 100%;
    }

    .form-control:focus {
        border-color: #1e40af;
        box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
        outline: none;
    }

    .form-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
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
        gap: 0.75rem;
        padding: 0.75rem 1rem;
        border: 2px dashed #d1d5db;
        border-radius: 8px;
        background: white;
        transition: all 0.3s ease;
    }

    .file-upload:hover .file-upload-label {
        border-color: #1e40af;
        background: #f8fafc;
    }

    .submit-btn {
        background: linear-gradient(135deg, #f97316, #fb923c);
        color: white;
        border: none;
        padding: 1rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1.1rem;
        width: 100%;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        background: linear-gradient(135deg, #ea580c, #f97316);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(249, 115, 22, 0.4);
    }

    /* Footer CTA Section */
    .footer-cta {
        padding: 60px 0;
        background: linear-gradient(135deg, #111827, #374151);
        color: white;
        text-align: center;
    }

    .footer-cta h3 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .footer-cta-contacts {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin: 2rem 0;
        flex-wrap: wrap;
    }

    .footer-cta-contact {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1.1rem;
    }

    .footer-cta-contact i {
        color: #f97316;
    }

    .footer-cta-contact a {
        color: white;
        text-decoration: none;
    }

    .footer-cta-contact a:hover {
        color: #f97316;
    }

    /* Alert Messages */
    .alert {
        padding: 1rem 1.5rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        border: none;
    }

    .alert-success {
        background: #d1fae5;
        color: #065f46;
        border-left: 4px solid #10b981;
    }

    .alert-danger {
        background: #fee2e2;
        color: #991b1b;
        border-left: 4px solid #ef4444;
    }

    /* Section Titles */
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e40af;
        margin-bottom: 1rem;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #6b7280;
        margin-bottom: 2rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .careers-hero h1 {
            font-size: 2.5rem;
        }

        .careers-hero-subtitle {
            font-size: 1.1rem;
        }

        .hero-buttons {
            flex-direction: column;
        }

        .job-header {
            flex-direction: column;
            gap: 1rem;
        }

        .job-meta {
            flex-direction: column;
            gap: 0.5rem;
        }

        .growth-step:not(:last-child)::after {
            content: '↓';
            right: 50%;
            top: 100%;
            transform: translateX(50%);
        }

        .application-form {
            padding: 2rem 1.5rem;
        }

        .footer-cta-contacts {
            flex-direction: column;
            gap: 1rem;
        }
    }

    @media (max-width: 576px) {
        .careers-hero {
            min-height: 60vh;
            padding: 2rem 0;
        }

        .careers-hero h1 {
            font-size: 2rem;
        }

        .why-work-section,
        .job-openings-section,
        .internship-section,
        .growth-section,
        .application-section {
            padding: 60px 0;
        }

        .job-card {
            padding: 1.5rem;
        }

        .internship-features {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .growth-path {
            flex-direction: column;
            gap: 1rem;
        }
    }
</style>

<!-- Flash Messages -->
<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success">
        <i class="fas fa-check-circle me-2"></i>
        <?= $this->session->flashdata('success') ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <i class="fas fa-exclamation-circle me-2"></i>
        <?= $this->session->flashdata('error') ?>
    </div>
<?php endif; ?>

<!-- 1. Career Page Hero Section -->
<section class="careers-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="careers-hero-content">
                    <h1>Build Your Career With TechElevatr</h1>
                    <p class="careers-hero-subtitle">Elevate your skills. Build real-world solutions. Grow with us.</p>
                    <p class="careers-hero-description">
                        At TechElevatr Digital Solutions, we don't just build websites and apps — we build careers, confidence, and future-ready professionals.
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
<section class="why-work-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">💡 Why Join TechElevatr?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="why-work-card">
                    <div class="why-work-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="mb-3">Why Join TechElevatr?</h3>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check"></i> Work on real client projects</li>
                        <li><i class="fas fa-check"></i> Learn industry-level development practices</li>
                        <li><i class="fas fa-check"></i> Friendly startup culture & mentorship</li>
                        <li><i class="fas fa-check"></i> Growth-focused environment</li>
                        <li><i class="fas fa-check"></i> Flexible & skill-driven roles</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="perfect-for">
                    <h4 class="mb-3">Perfect for:</h4>
                    <div class="perfect-for-tags">
                        <span class="perfect-for-tag">Students</span>
                        <span class="perfect-for-tag">Freshers</span>
                        <span class="perfect-for-tag">Interns</span>
                        <span class="perfect-for-tag">Junior Developers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Current Openings Section -->
<section class="job-openings-section" id="job-openings">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">🔹 Open Positions</h2>
                <p class="section-subtitle">Join our team and work on exciting projects</p>
            </div>
        </div>

        <?php if (!empty($job_openings)): ?>
            <?php foreach ($job_openings as $job): ?>
                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h3 class="job-title"><?= $job['title'] ?></h3>
                            <div class="job-meta">
                                <div class="job-meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span><?= $job['location'] ?></span>
                                </div>
                                <div class="job-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span><?= $job['type'] ?></span>
                                </div>
                            </div>
                        </div>
                        <a href="#apply-now" class="apply-btn">
                            <i class="fas fa-paper-plane"></i>
                            Apply Now
                        </a>
                    </div>

                    <div class="skills-required">
                        <h5>Skills Required:</h5>
                        <div class="skills-tags">
                            <?php foreach ($job['skills'] as $skill): ?>
                                <span class="skill-tag"><?= $skill ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <p class="job-description"><?= $job['description'] ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p>No current openings available. Please check back later!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- 4. Internship Program Section -->
<section class="internship-section">
    <div class="container">
        <div class="internship-content">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">🎓 Internship at TechElevatr</h2>
                </div>
            </div>

            <div class="internship-features">
                <div class="internship-feature">
                    <i class="fas fa-laptop-code"></i>
                    <h4>Hands-on Real Projects</h4>
                    <p>Work on actual client projects and gain practical experience</p>
                </div>
                <div class="internship-feature">
                    <i class="fas fa-certificate"></i>
                    <h4>Internship Certificate</h4>
                    <p>Receive official certification upon successful completion</p>
                </div>
                <div class="internship-feature">
                    <i class="fas fa-user-tie"></i>
                    <h4>Professional Mentorship</h4>
                    <p>Learn from experienced developers and industry experts</p>
                </div>
                <div class="internship-feature">
                    <i class="fas fa-briefcase"></i>
                    <h4>Full-time Opportunity</h4>
                    <p>Potential for permanent position based on performance</p>
                </div>
            </div>

            <div class="internship-details">
                <div class="internship-detail">
                    <h5>Duration</h5>
                    <p>1–6 Months</p>
                </div>
                <div class="internship-detail">
                    <h5>Mode</h5>
                    <p>Online / Offline</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Career Growth Path Section -->
<section class="growth-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">📊 Your Growth With Us</h2>
                <p class="section-subtitle">We believe in learning by building, not just theory.</p>
            </div>
        </div>

        <div class="growth-path">
            <div class="growth-step active">
                <h4>Intern</h4>
                <p>Learn & Practice</p>
            </div>
            <div class="growth-step">
                <h4>Junior Developer</h4>
                <p>Build & Contribute</p>
            </div>
            <div class="growth-step">
                <h4>Developer</h4>
                <p>Lead & Innovate</p>
            </div>
            <div class="growth-step">
                <h4>Team Lead</h4>
                <p>Mentor & Guide</p>
            </div>
        </div>
    </div>
</section>

<!-- 6. Apply Now Section -->
<section class="application-section" id="apply-now">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">📩 Apply for a Position</h2>
                <p class="section-subtitle">Take the first step towards your dream career</p>
            </div>
        </div>

        <div class="application-form">
            <?= form_open_multipart('careers/apply', ['id' => 'applicationForm']) ?>
            <div class="form-group">
                <label for="full_name" class="form-label">Full Name *</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email Address *</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Phone Number *</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="position" class="form-label">Applying For *</label>
                <select class="form-control form-select" id="position" name="position" required>
                    <option value="">Select Position</option>
                    <option value="Web Developer (Intern / Junior)">Web Developer (Intern / Junior)</option>
                    <option value="Mobile App Developer (Intern)">Mobile App Developer (Intern)</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <option value="Digital Marketing Executive">Digital Marketing Executive</option>
                </select>
            </div>

            <div class="form-group">
                <label for="resume" class="form-label">Resume Upload (PDF)</label>
                <div class="file-upload">
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">
                    <div class="file-upload-label">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span>Choose file or drag here</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="message" class="form-label">Short Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us why you want to join TechElevatr..."></textarea>
            </div>

            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane me-2"></i>
                Submit Application
            </button>
            <?= form_close() ?>
        </div>
    </div>
</section>

<!-- 7. Footer CTA Section -->
<section class="footer-cta">
    <div class="container">
        <h3>Ready to Start Your Journey?</h3>
        <div class="footer-cta-contacts">
            <div class="footer-cta-contact">
                <i class="fas fa-phone"></i>
                <a href="tel:+916295827525">+91 62958 27525</a>
            </div>
            <div class="footer-cta-contact">
                <i class="fas fa-envelope"></i>
                <a href="mailto:techelevatr@gmail.com">techelevatr@gmail.com</a>
            </div>
        </div>
        <p class="mt-3">👉 Let's build your future together.</p>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // File upload handling
        const fileInput = document.getElementById('resume');
        const fileLabel = document.querySelector('.file-upload-label span');

        if (fileInput && fileLabel) {
            fileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    fileLabel.textContent = this.files[0].name;
                } else {
                    fileLabel.textContent = 'Choose file or drag here';
                }
            });
        }

        // Form validation
        const form = document.getElementById('applicationForm');
        if (form) {
            form.addEventListener('submit', function(e) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.style.borderColor = '#ef4444';
                    } else {
                        field.style.borderColor = '#e5e7eb';
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields.');
                }
            });
        }

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe job cards and other elements
        document.querySelectorAll('.job-card, .why-work-card, .internship-feature, .growth-step').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    });
</script>