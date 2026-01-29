<!-- Contact Us Page -->
<main class="main">
    <!-- Breadcrumb -->
    <div class="site-breadcrumb" style="background: url(<?= base_url() ?>assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h1 class="breadcrumb-title">Contact Us</h1>
            <ul class="breadcrumb-menu">
                <li><a href="<?= site_url() ?>">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3 class="mb-4">Get In Touch</h3>
                        <p class="mb-4">Ready to transform your business with cutting-edge digital solutions? Contact us today for a free consultation.</p>

                        <!-- Contact Items -->
                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-start">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-geo-alt-fill text-primary-custom fs-4"></i>
                                </div>
                                <div>
                                    <h5>Our Location</h5>
                                    <p class="mb-0">TechElevatr<br>Siliguri, West Bengal, India</p>
                                    <a href="<?= $googleMapsUrl ?>" target="_blank" class="btn btn-sm btn-outline-primary mt-2">
                                        <i class="bi bi-map me-1"></i> View on Google Maps
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-start">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-telephone-fill text-primary-custom fs-4"></i>
                                </div>
                                <div>
                                    <h5>Phone Number</h5>
                                    <p class="mb-0">
                                        <a href="<?= $phonehtml ?>" class="text-decoration-none"><?= $phone ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-start">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-envelope-fill text-primary-custom fs-4"></i>
                                </div>
                                <div>
                                    <h5>Email Address</h5>
                                    <p class="mb-0">
                                        <a href="<?= $mailhtml ?>" class="text-decoration-none"><?= $mail ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-start">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-clock-fill text-primary-custom fs-4"></i>
                                </div>
                                <div>
                                    <h5>Business Hours</h5>
                                    <p class="mb-0">Monday - Saturday<br>9:00 AM - 7:00 PM</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="social-links mt-4">
                            <h5>Follow Us</h5>
                            <div class="d-flex gap-3">
                                <a href="<?= $facebookhtml ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="<?= $twitterhtml ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="<?= $linkedinhtml ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="<?= $instagramhtml ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="<?= $youtubehtml ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <h3 class="mb-4">Send Us a Message</h3>
                        <?php $this->load->view('contacts/quoteform.php') ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="py-0">
        <div class="container-fluid px-0">
            <div class="map-container" style="height: 400px; position: relative;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7673514!2d88.3777813!3d26.7673514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e4479f5ec40d61%3A0x11a1b7680111183c!2sTechElevatr!5e0!3m2!1sen!2sin!4v1706544000000!5m2!1sen!2sin"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="TechElevatr Location">
                </iframe>

                <!-- Map Overlay -->
                <div class="map-overlay position-absolute top-50 start-50 translate-middle bg-white p-4 rounded shadow text-center" style="z-index: 10;">
                    <h5 class="text-primary-custom mb-2">Visit Our Office</h5>
                    <p class="mb-3">TechElevatr<br>Siliguri, West Bengal</p>
                    <a href="<?= $googleMapsUrl ?>" target="_blank" class="btn btn-primary btn-sm">
                        <i class="bi bi-geo-alt me-1"></i> Get Directions
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact CTA -->
    <section class="py-5 bg-light-custom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="mb-2">Need Immediate Assistance?</h3>
                    <p class="mb-0 text-muted">Call us directly or send a WhatsApp message for quick support and consultation.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="<?= $phonehtml ?>" class="btn btn-primary me-2">
                        <i class="bi bi-telephone me-1"></i> Call Now
                    </a>
                    <a href="<?= $whatsapphtml ?>?text=Hi%20TechElevatr,%20I%20need%20help%20with" target="_blank" class="btn btn-success">
                        <i class="bi bi-whatsapp me-1"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
    .contact-info {
        background: #f8f9fa;
        padding: 2rem;
        border-radius: 10px;
        height: fit-content;
    }

    .contact-item {
        padding: 1rem 0;
        border-bottom: 1px solid #e9ecef;
    }

    .contact-item:last-child {
        border-bottom: none;
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background: rgba(30, 64, 175, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact-form-wrapper {
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .map-container {
        position: relative;
    }

    .map-overlay {
        max-width: 300px;
        backdrop-filter: blur(10px);
    }

    @media (max-width: 768px) {
        .map-overlay {
            position: relative !important;
            transform: none !important;
            top: auto !important;
            left: auto !important;
            margin-top: -50px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .contact-info {
            margin-bottom: 2rem;
        }
    }
</style>