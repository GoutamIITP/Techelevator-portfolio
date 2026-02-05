<!-- Contact Us Page -->
<main class="main">
    <!-- Breadcrumb -->
    <div class="te-contact-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="te-contact-breadcrumb-title">Get in Touch</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="te-contact-breadcrumb-menu">
                            <li class="te-contact-breadcrumb-item">
                                <a href="<?= site_url() ?>">Home</a>
                            </li>
                            <li class="te-contact-breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Contact Section -->
    <section class="te-contact-main-section">
        <div class="container">
            <div class="row g-4 g-lg-5">
                
                <!-- Contact Information Column -->
                <div class="col-lg-5">
                    <div class="te-contact-info-card">
                        <div class="te-contact-info-header">
                            <h2 class="te-contact-info-title">Contact Information</h2>
                            <p class="te-contact-info-subtitle">Connect with our team for expert digital solutions and business consultations.</p>
                        </div>
                        
                        <!-- Contact Details -->
                        <div class="te-contact-details">
                            <!-- Location -->
                            <div class="te-contact-detail-item">
                                <div class="te-contact-detail-icon" aria-hidden="true">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="te-contact-detail-content">
                                    <h3 class="te-contact-detail-title">Office Address</h3>
                                    <p class="te-contact-detail-text">
                                        TechElevatr Digital Solutions<br>
                                        Siliguri, West Bengal, India
                                    </p>
                                    <a href="<?= $googleMapsUrl ?>" target="_blank" rel="noopener noreferrer" class="te-contact-detail-link">
                                        <i class="fas fa-directions" aria-hidden="true"></i>
                                        View on Map
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="te-contact-detail-item">
                                <div class="te-contact-detail-icon" aria-hidden="true">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="te-contact-detail-content">
                                    <h3 class="te-contact-detail-title">Direct Contact</h3>
                                    <p class="te-contact-detail-text">
                                        <a href="<?= $phonehtml ?>" class="te-contact-detail-link">
                                            <i class="fas fa-phone-volume" aria-hidden="true"></i>
                                            <?= $phone ?>
                                        </a>
                                    </p>
                                    <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="te-contact-detail-link">
                                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                        WhatsApp Message
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="te-contact-detail-item">
                                <div class="te-contact-detail-icon" aria-hidden="true">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="te-contact-detail-content">
                                    <h3 class="te-contact-detail-title">Email Address</h3>
                                    <p class="te-contact-detail-text">
                                        <a href="<?= $mailhtml ?>" class="te-contact-detail-link">
                                            <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
                                            <?= $mail ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Business Hours -->
                            <div class="te-contact-detail-item">
                                <div class="te-contact-detail-icon" aria-hidden="true">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="te-contact-detail-content">
                                    <h3 class="te-contact-detail-title">Business Hours</h3>
                                    <p class="te-contact-detail-text">
                                        <span class="te-contact-hours">
                                            <strong>Monday - Saturday</strong><br>
                                            9:00 AM - 7:00 PM IST<br>
                                            <small class="te-contact-hours-note">Sunday: By appointment only</small>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
 
                    </div>
                </div>
                
                <!-- Contact Form Column -->
                <div class="col-lg-7">
                    <div class="te-contact-form-card">
                        <div class="te-contact-form-header">
                            <h2 class="te-contact-form-title">Send Your Inquiry</h2>
                            <p class="te-contact-form-subtitle">Complete the form below and our team will respond within 24 business hours.</p>
                        </div>
                        
                        <!-- Contact Form -->
                        <div class="te-contact-form-wrapper">
                            <?php $this->load->view('contacts/quoteform.php') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Quick Contact Section -->
    <section class="te-contact-map-section">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-12">
                    <div class="te-contact-map-container">
                        <!-- Google Map -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7673514!2d88.3777813!3d26.7673514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e4479f5ec40d61%3A0x11a1b7680111183c!2sTechElevatr!5e0!3m2!1sen!2sin!4v1706544000000!5m2!1sen!2sin"
                            width="100%"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="TechElevatr Digital Solutions Location"
                            class="te-contact-map-iframe"
                            aria-label="Google Maps showing TechElevatr office location">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Quick Contact Bar -->
        <div class="te-contact-quick-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <div class="te-contact-quick-content">
                            <h3 class="te-contact-quick-title">Ready to Start Your Project?</h3>
                            <p class="te-contact-quick-text">Schedule a free consultation with our digital solutions experts today.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="te-contact-quick-buttons">
                            <a href="<?= $phonehtml ?>" class="te-contact-quick-btn te-contact-quick-btn-call">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                Call Now
                            </a>
                            <a href="<?= $whatsapphtml ?>?text=Hi%20TechElevatr,%20I'd%20like%20to%20discuss%20a%20project" 
                               target="_blank" rel="noopener noreferrer" class="te-contact-quick-btn te-contact-quick-btn-whatsapp">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    /* Contact Page Styles */
    .te-contact-breadcrumb {
        background: linear-gradient(135deg, rgba(30, 64, 175, 0.95), rgba(56, 189, 248, 0.95)), 
                    url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 50px 0 70px;
        color: var(--white);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .te-contact-breadcrumb::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(30, 64, 175, 0.9) 0%, rgba(56, 189, 248, 0.7) 100%);
    }

    .te-contact-breadcrumb-title {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
        position: relative;
        z-index: 2;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        letter-spacing: -0.5px;
    }

    .te-contact-breadcrumb-menu {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        padding: 0;
        margin: 0;
        position: relative;
        z-index: 2;
    }

    .te-contact-breadcrumb-item {
        font-size: 1.1rem;
        margin: 0 10px;
    }

    .te-contact-breadcrumb-item a {
        color: rgba(255, 255, 255, 0.95);
        text-decoration: none;
        transition: var(--transition);
        font-weight: 500;
    }

    .te-contact-breadcrumb-item a:hover {
        color: var(--white);
        text-decoration: underline;
        text-underline-offset: 4px;
    }

    .te-contact-breadcrumb-item.active {
        color: var(--accent-orange);
        font-weight: 600;
    }

    .te-contact-breadcrumb-item::after {
        content: '›';
        margin-left: 10px;
        color: rgba(255, 255, 255, 0.7);
        font-weight: bold;
    }

    .te-contact-breadcrumb-item:last-child::after {
        content: '';
    }

    /* Main Contact Section */
    .te-contact-main-section {
        padding: 0px 0;
        background: linear-gradient(180deg, #ffffff 0%, var(--bg-light) 100%);
        position: relative;
    }

    .te-contact-main-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--primary-blue), transparent);
    }

    /* Contact Info Card */
    .te-contact-info-card {
        background: var(--white);
        border-radius: var(--radius-lg);
        padding: 2.5rem;
        box-shadow: var(--shadow-soft);
        height: 100%;
        position: sticky;
        top: 120px;
        border: 1px solid rgba(229, 231, 235, 0.8);
        transition: var(--transition);
    }

    .te-contact-info-card:hover {
        box-shadow: var(--shadow-medium);
        transform: translateY(-4px);
    }

    .te-contact-info-header {
        margin-bottom: 2.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 2px solid var(--border-color);
    }

    .te-contact-info-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .te-contact-info-subtitle {
        color: var(--light-text);
        line-height: 1.6;
        font-size: 1.05rem;
        margin-bottom: 0;
    }

    /* Contact Details */
    .te-contact-details {
        margin-bottom: 2.5rem;
    }

    .te-contact-detail-item {
        display: flex;
        align-items: flex-start;
        padding: 1.5rem 0;
        border-bottom: 1px solid rgba(229, 231, 235, 0.5);
        transition: var(--transition);
        position: relative;
    }

    .te-contact-detail-item::before {
        content: '';
        position: absolute;
        left: -10px;
        top: 0;
        bottom: 0;
        width: 3px;
        background: var(--primary-blue);
        border-radius: 2px;
        opacity: 0;
        transition: var(--transition);
    }

    .te-contact-detail-item:hover {
        padding-left: 15px;
    }

    .te-contact-detail-item:hover::before {
        opacity: 1;
    }

    .te-contact-detail-item:last-child {
        border-bottom: none;
    }

    .te-contact-detail-icon {
        width: 56px;
        height: 56px;
        background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
        border-radius: var(--radius);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 1.3rem;
        margin-right: 1.2rem;
        flex-shrink: 0;
        transition: var(--transition);
    }

    .te-contact-detail-item:hover .te-contact-detail-icon {
        transform: scale(1.05) rotate(5deg);
    }

    .te-contact-detail-content {
        flex: 1;
    }

    .te-contact-detail-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--dark-text);
        margin-bottom: 0.75rem;
        line-height: 1.3;
    }

    .te-contact-detail-text {
        color: var(--text-color);
        line-height: 1.6;
        margin-bottom: 1rem;
        font-size: 1.05rem;
    }

    .te-contact-detail-link {
        color: var(--primary-blue);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
        transition: var(--transition);
        margin-right: 1.5rem;
        margin-bottom: 0.5rem;
        padding: 4px 0;
        position: relative;
    }

    .te-contact-detail-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--accent-orange);
        transition: var(--transition);
    }

    .te-contact-detail-link:hover {
        color: var(--accent-orange);
        text-decoration: none;
    }

    .te-contact-detail-link:hover::after {
        width: 100%;
    }

    .te-contact-hours strong {
        color: var(--dark-text);
        font-weight: 600;
    }

    .te-contact-hours-note {
        color: var(--light-text);
        font-size: 0.9rem;
        font-style: italic;
        display: block;
        margin-top: 4px;
    }

    /* Social Media Section */
    .te-contact-social-section {
        padding-top: 1.5rem;
        border-top: 1px solid rgba(229, 231, 235, 0.5);
    }

    .te-contact-social-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--dark-text);
        margin-bottom: 1rem;
    }

    .te-contact-social-links {
        display: flex;
        gap: 12px;
    }

    .te-contact-social-link {
        width: 46px;
        height: 46px;
        border-radius: var(--radius);
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        color: var(--primary-blue);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        text-decoration: none;
        transition: var(--transition);
        border: 1px solid rgba(229, 231, 235, 0.5);
    }

    .te-contact-social-link:hover {
        background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
        color: var(--white);
        transform: translateY(-3px) scale(1.1);
        box-shadow: var(--shadow-md);
        border-color: transparent;
    }

    /* Contact Form Card */
    .te-contact-form-card {
        background: var(--white);
        border-radius: var(--radius-lg);
        padding: 2.5rem;
        box-shadow: var(--shadow-medium);
        height: 100%;
        border: 1px solid rgba(229, 231, 235, 0.8);
        transition: var(--transition);
    }

    .te-contact-form-card:hover {
        box-shadow: var(--shadow-large);
    }

    .te-contact-form-header {
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 2px solid var(--border-color);
    }

    .te-contact-form-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 0.75rem;
        line-height: 1.2;
    }

    .te-contact-form-subtitle {
        color: var(--light-text);
        font-size: 1.05rem;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .te-contact-form-wrapper {
        margin-top: 1.5rem;
    }

    /* Form Styling */
    .te-contact-form-wrapper form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .te-contact-form-wrapper .form-group {
        margin-bottom: 0;
    }

    .te-contact-form-wrapper .form-control {
        border: 2px solid #e5e7eb;
        border-radius: 8px;
        padding: 0.875rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f9fafb;
    }

    .te-contact-form-wrapper .form-control:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        background: #ffffff;
    }

    .te-contact-form-wrapper textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

    .te-contact-form-wrapper .btn {
        background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
        color: white;
        border: none;
        padding: 1rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 0.5rem;
    }

    .te-contact-form-wrapper .btn:hover {
        background: linear-gradient(135deg, var(--secondary-blue), var(--primary-blue));
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(30, 64, 175, 0.2);
    }

    /* Map Section */
    .te-contact-map-section {
        position: relative;
        background: var(--bg-light);
    }

    .te-contact-map-container {
        position: relative;
        height: 450px;
        width: 100%;
        overflow: hidden;
    }

    .te-contact-map-iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(10%) contrast(1.1);
        transition: filter 0.3s ease;
    }

    .te-contact-map-container:hover .te-contact-map-iframe {
        filter: grayscale(0%) contrast(1);
    }

    /* Quick Contact Bar */
    .te-contact-quick-bar {
        background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
        padding: 2rem 0;
        position: relative;
        z-index: 10;
        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
    }

    .te-contact-quick-bar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--accent-orange), transparent);
    }

    .te-contact-quick-content {
        text-align: left;
    }

    .te-contact-quick-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--white);
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }

    .te-contact-quick-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.05rem;
        margin-bottom: 0;
        line-height: 1.6;
    }

    .te-contact-quick-buttons {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
    }

    .te-contact-quick-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 0.875rem 1.5rem;
        border-radius: var(--radius);
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
        font-size: 1rem;
        min-width: 140px;
        justify-content: center;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .te-contact-quick-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
        z-index: -1;
    }

    .te-contact-quick-btn:hover::before {
        left: 100%;
    }

    .te-contact-quick-btn-call {
        background: var(--white);
        color: var(--primary-blue);
        border: 2px solid var(--white);
    }

    .te-contact-quick-btn-call:hover {
        background: transparent;
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .te-contact-quick-btn-whatsapp {
        background: #25D366;
        color: var(--white);
        border: 2px solid #25D366;
    }

    .te-contact-quick-btn-whatsapp:hover {
        background: transparent;
        color: #25D366;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .te-contact-breadcrumb-title {
            font-size: 3rem;
        }
        
        .te-contact-info-card,
        .te-contact-form-card {
            padding: 2rem;
        }
    }

    @media (max-width: 992px) {
        .te-contact-breadcrumb {
            padding: 100px 0 60px;
            background-attachment: scroll;
        }
        
        .te-contact-breadcrumb-title {
            font-size: 2.5rem;
        }
        
        .te-contact-main-section {
            padding: 70px 0;
        }
        
        .te-contact-info-card {
            position: static;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-medium);
        }
        
        .te-contact-quick-buttons {
            justify-content: flex-start;
        }
    }

    @media (max-width: 768px) {
        .te-contact-breadcrumb-title {
            font-size: 2.2rem;
        }
        
        .te-contact-info-title,
        .te-contact-form-title {
            font-size: 1.8rem;
        }
        
        .te-contact-info-card,
        .te-contact-form-card {
            padding: 1.5rem;
        }
        
        .te-contact-detail-item {
            flex-direction: row;
            align-items: flex-start;
        }
        
        .te-contact-detail-icon {
            margin-bottom: 0;
        }
        
        .te-contact-quick-bar {
            padding: 1.5rem 0;
        }
        
        .te-contact-quick-title {
            font-size: 1.5rem;
            text-align: center;
        }
        
        .te-contact-quick-text {
            text-align: center;
            font-size: 1rem;
        }
        
        .te-contact-quick-buttons {
            justify-content: center;
        }
        
        .te-contact-quick-btn {
            width: 100%;
            max-width: 200px;
        }
        
        .te-contact-social-links {
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .te-contact-breadcrumb {
            padding: 80px 0 50px;
        }
        
        .te-contact-breadcrumb-title {
            font-size: 1.8rem;
        }
        
        .te-contact-breadcrumb-menu {
            flex-direction: column;
            gap: 5px;
        }
        
        .te-contact-breadcrumb-item::after {
            display: none;
        }
        
        .te-contact-main-section {
            padding: 50px 0;
        }
        
        .te-contact-info-title,
        .te-contact-form-title {
            font-size: 1.5rem;
        }
        
        .te-contact-detail-item {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .te-contact-detail-icon {
            margin-bottom: 1rem;
        }
        
        .te-contact-quick-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .te-contact-quick-btn {
            width: 100%;
            max-width: 300px;
        }
        
        .te-contact-form-wrapper .btn {
            width: 100%;
        }
    }

    @media (max-width: 375px) {
        .te-contact-info-card,
        .te-contact-form-card {
            padding: 1.25rem;
        }
        
        .te-contact-breadcrumb-title {
            font-size: 1.6rem;
        }
        
        .te-contact-detail-icon {
            width: 48px;
            height: 48px;
            font-size: 1.1rem;
        }
        
        .te-contact-social-link {
            width: 42px;
            height: 42px;
            font-size: 1rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll to form when clicking on contact links
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // Add animation to contact items on scroll
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

        // Animate contact detail items
        document.querySelectorAll('.te-contact-detail-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'all 0.6s ease';
            observer.observe(item);
        });

        // Animate form card
        const formCard = document.querySelector('.te-contact-form-card');
        if (formCard) {
            formCard.style.opacity = '0';
            formCard.style.transform = 'translateY(30px)';
            formCard.style.transition = 'all 0.8s ease';
            observer.observe(formCard);
        }

        // Handle WhatsApp message with improved text
        const whatsappLinks = document.querySelectorAll('a[href*="whatsapp"]');
        whatsappLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Google Analytics or tracking code can be added here
                console.log('WhatsApp contact initiated from: ' + this.textContent.trim());
            });
        });

        // Add hover effect to contact items
        document.querySelectorAll('.te-contact-detail-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Form submission handling (if form exists)
        const contactForm = document.querySelector('.te-contact-form-wrapper form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                // Add form validation or submission handling here
                const submitBtn = this.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                    submitBtn.disabled = true;
                }
                // Form submission logic would go here
            });
        }

        // Add active state to clicked buttons
        document.querySelectorAll('.te-contact-quick-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.classList.add('active');
                setTimeout(() => {
                    this.classList.remove('active');
                }, 300);
            });
        });

        // Load Font Awesome if not already loaded
        if (!document.querySelector('link[href*="font-awesome"]')) {
            const faLink = document.createElement('link');
            faLink.rel = 'stylesheet';
            faLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css';
            document.head.appendChild(faLink);
        }
    });

    // Add smooth scroll for the entire page
    document.documentElement.style.scrollBehavior = 'smooth';
    
    // Add loading state for better UX
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
</script>