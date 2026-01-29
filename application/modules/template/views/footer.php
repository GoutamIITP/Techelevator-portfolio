<!-- TechElevatr Footer -->
<footer class="footer">
    <div class="container">
        <div class="row g-4">

            <!-- Company Info Column -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/logo/techelevator-logo-white.png') ?>" alt="TechElevatr Logo" height="40" class="me-2" loading="lazy">
                    <h5 class="mb-0">TechElevatr</h5>
                </div>
                <p class="text-light-gray">
                    Elevate your digital presence with cutting-edge web development, mobile apps, SEO, and IT solutions.
                    Transform your business with technology that works.
                </p>
                <div class="social-icons mt-3">
                    <a href="https://facebook.com/techelevator" target="_blank" rel="noopener" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://twitter.com/techelevator" target="_blank" rel="noopener" aria-label="Twitter">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="https://linkedin.com/company/techelevator" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://instagram.com/techelevator" target="_blank" rel="noopener" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://youtube.com/@techelevator" target="_blank" rel="noopener" aria-label="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-2 col-md-6">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right me-1"></i> Home</a></li>
                    <li><a href="<?= site_url('about') ?>"><i class="bi bi-chevron-right me-1"></i> About Us</a></li>
                    <li><a href="<?= site_url('services') ?>"><i class="bi bi-chevron-right me-1"></i> Services</a></li>
                    <li><a href="<?= site_url('portfolio') ?>"><i class="bi bi-chevron-right me-1"></i> Portfolio</a></li>
                    <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chevron-right me-1"></i> Testimonials</a></li>
                    <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right me-1"></i> Blog</a></li>
                    <li><a href="<?= site_url('contact') ?>"><i class="bi bi-chevron-right me-1"></i> Contact</a></li>
                </ul>
            </div>

            <!-- Services Column -->
            <div class="col-lg-3 col-md-6">
                <h5>Our Services</h5>
                <ul class="footer-links">
                    <li><a href="<?= site_url('services/web-development') ?>"><i class="bi bi-chevron-right me-1"></i> Website Development</a></li>
                    <li><a href="<?= site_url('services/app-development') ?>"><i class="bi bi-chevron-right me-1"></i> App Development</a></li>
                    <li><a href="<?= site_url('services/seo-services') ?>"><i class="bi bi-chevron-right me-1"></i> SEO Services</a></li>
                    <li><a href="<?= site_url('services/crm-erp') ?>"><i class="bi bi-chevron-right me-1"></i> CRM / ERP</a></li>
                    <li><a href="<?= site_url('services/lead-generation') ?>"><i class="bi bi-chevron-right me-1"></i> Lead Generation</a></li>
                    <li><a href="<?= site_url('services/hosting-domain') ?>"><i class="bi bi-chevron-right me-1"></i> Hosting & Domain</a></li>
                </ul>
            </div>

            <!-- Contact Info Column -->
            <div class="col-lg-3 col-md-6">
                <h5>Contact Us</h5>
                <ul class="footer-links list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill text-primary-custom me-2"></i>
                        <a href="<?= $googleMapsUrl ?>" target="_blank" rel="noopener">
                            <small>TechElevatr<br>Siliguri, West Bengal, India</small>
                        </a>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill text-primary-custom me-2"></i>
                        <a href="<?= $phonehtml ?>"><?= $phone ?></a>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill text-primary-custom me-2"></i>
                        <a href="<?= $mailhtml ?>"><?= $mail ?></a>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill text-primary-custom me-2"></i>
                        <small>Mon - Sat: 9:00 AM - 7:00 PM</small>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">© <span id="year"></span> TechElevatr Digital Solutions. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="<?= site_url('terms-and-conditions') ?>" class="me-3">Terms & Conditions</a>
                    <a href="<?= site_url('privacy-and-policy') ?>" class="me-3">Privacy Policy</a>
                    <a href="<?= site_url('cancellation-and-refund-policy') ?>" class="me-3">Refund Policy</a>
                    <a href="<?= site_url('shipping-and-delivery') ?>">Delivery Policy</a>
                </div>
            </div>
        </div>

    </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="<?= $whatsapphtml ?>?text=Hi%20TechElevatr,%20I%20need%20help%20with"
    class="whatsapp-float"
    target="_blank"
    rel="noopener"
    aria-label="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- Bootstrap 5.3.3 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Custom Scripts -->
<script>
    // Set current year in footer
    document.addEventListener('DOMContentLoaded', function() {
        const yearElement = document.getElementById('year');
        if (yearElement) {
            yearElement.textContent = new Date().getFullYear();
        }

        // Smooth scroll for anchor links
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

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements with animation class
        document.querySelectorAll('.tech-card, .card-custom, .portfolio-item').forEach(el => {
            observer.observe(el);
        });
    });

    // Form validation helper
    function validateForm(formId) {
        const form = document.getElementById(formId);
        if (form) {
            form.addEventListener('submit', function(e) {
                if (!form.checkValidity()) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        }
    }

    // Initialize tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
</script>

</body>

</html>