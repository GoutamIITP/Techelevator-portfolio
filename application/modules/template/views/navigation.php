  <!-- Top Contact Info Bar (Desktop & Tablet Only) -->
  <div class="top-info-bar d-none d-lg-block">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-8">
          <div class="d-flex align-items-center contact-info-wrapper">
            <div class="contact-info-item">
              <i class="fas fa-map-marker-alt"></i>
              <span>TechElevatr, Siliguri, WB, India</span>
            </div>
            <span class="separator">|</span>
            <div class="contact-info-item">
              <i class="fas fa-phone-alt"></i>
              <a href="tel:+911234567890">+91 12345 67890</a>
            </div>
            <span class="separator">|</span>
            <div class="contact-info-item">
              <i class="fas fa-envelope"></i>
              <a href="mailto:info@techelevatr.com">info@techelevatr.com</a>
            </div>
            <span class="separator">|</span>
            <div class="contact-info-item">
              <i class="far fa-clock"></i>
              <span>Mon - Sat: 10:00 AM - 7:00 PM</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-end social-icons-wrapper">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Unified Navigation System for All Devices -->
  <nav class="navbar navbar-expand-lg unified-navigation">

    <!-- Main Navigation Container -->
    <div class="container-fluid nav-container">
      <!-- Logo -->
      <a class="navbar-brand" href="<?= site_url() ?>">
        <img src="<?= base_url('assets/images/logo/techelevator-logo.jpg') ?>"
          alt="TechElevatr Logo"
          class="nav-logo">
          <span class="brand-text">Tech<span class="text-primary">Elevatr</span></span>
      </a>

      <!-- Desktop Navigation (Visible on LG and up) -->
      <div class="desktop-navigation d-none d-lg-flex align-items-center">
        <!-- Main Menu -->
        <ul class="navbar-nav main-menu">
          <!-- Home -->
          <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '' || uri_string() == 'home') ? 'active' : '' ?>"
              href="<?= site_url() ?>">
              <i class="fas fa-home"></i>
              <span>Home</span>
            </a>
          </li>

          <!-- Services Mega Menu -->
          <li class="nav-item dropdown mega-menu-container">
            <a class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fas fa-cogs"></i>
              <span>Our Services</span>
              <i class="fas fa-chevron-down"></i>
            </a>
            <div class="dropdown-menu mega-menu-dropdown">
              <div class="container-fluid">
                <div class="row">
                  <!-- Web Development Column -->
                  <div class="col-lg-3">
                    <div class="service-column">
                      <h6 class="column-title">
                        <i class="fas fa-code"></i>
                        Web Development
                      </h6>
                      <ul class="service-list">
                        <li><a href="<?= site_url('services/web-development') ?>">Website Development</a></li>

                        <!-- <li><a href="<?= site_url('services/ecommerce-development') ?>">E-commerce Development</a></li>
                        <li><a href="<?= site_url('services/cms-development') ?>">CMS Development</a></li>
                        <li><a href="<?= site_url('services/wordpress-development') ?>">WordPress Development</a></li> -->
                      </ul>
                    </div>
                  </div>

                  <!-- Mobile App Development Column -->
                  <div class="col-lg-3">
                    <div class="service-column">
                      <h6 class="column-title">
                        <i class="fas fa-mobile-alt"></i>
                        Mobile App Development
                      </h6>
                      <ul class="service-list">
                        <li><a href="<?= site_url('services/app-development') ?>">Mobile App Development</a></li>
                        <!-- <li><a href="<?= site_url('services/android-development') ?>">Android Development</a></li>
                        <li><a href="<?= site_url('services/ios-development') ?>">iOS Development</a></li>
                        <li><a href="<?= site_url('services/flutter-development') ?>">Flutter Development</a></li>
                        <li><a href="<?= site_url('services/react-native') ?>">React Native</a></li> -->
                      </ul>
                    </div>
                  </div>

                  <!-- Digital Marketing Column -->
                  <div class="col-lg-3">
                    <div class="service-column">
                      <h6 class="column-title">
                        <i class="fas fa-bullhorn"></i>
                        Digital Marketing
                      </h6>
                      <ul class="service-list">
                        <li><a href="<?= site_url('services/seo-services') ?>">SEO Services</a></li>
                        <li><a href="<?= site_url('services/lead-generation') ?>">Lead Generation</a></li>
                        <!-- <li><a href="<?= site_url('services/social-media-marketing') ?>">Social Media Marketing</a></li>
                        <li><a href="<?= site_url('services/google-ads') ?>">Google Ads & PPC</a></li>
                        <li><a href="<?= site_url('services/content-marketing') ?>">Content Marketing</a></li> -->
                      </ul>
                    </div>
                  </div>

                  <!-- Business Solutions Column -->
                  <div class="col-lg-3">
                    <div class="service-column">
                      <h6 class="column-title">
                        <i class="fas fa-chart-line"></i>
                        Business Solutions
                      </h6>
                      <ul class="service-list">
                        <li><a href="<?= site_url('services/crm-erp') ?>">CRM/ERP Solutions</a></li>
                        <li><a href="<?= site_url('services/hosting-domain') ?>">Hosting & Domain</a></li>
                        <!-- <li><a href="<?= site_url('services/custom-software') ?>">Custom Software</a></li>
                        <li><a href="<?= site_url('services/it-consulting') ?>">IT Consulting</a></li>
                        <li><a href="<?= site_url('services/maintenance-support') ?>">Maintenance & Support</a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <!-- Portfolio -->
          <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'portfolio') ? 'active' : '' ?>"
              href="<?= site_url('portfolio') ?>">
              <i class="fas fa-briefcase"></i>
              <span>Portfolio</span>
            </a>
          </li>

          <!-- Careers -->
          <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'careers') ? 'active' : '' ?>"
              href="<?= site_url('careers') ?>">
              <i class="fas fa-users"></i>
              <span>Careers</span>
            </a>
          </li>

          <!-- Contact -->
          <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'contact') ? 'active' : '' ?>"
              href="<?= site_url('contact') ?>">
              <i class="fas fa-envelope"></i>
              <span>Contact Us</span>
            </a>
          </li>
        </ul>

        <!-- Desktop CTA Button -->
        <div class="cta-container">
          <a href="<?= site_url('contact') ?>" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i>
            Get Quote
          </a>
        </div>
      </div>

      <!-- Mobile & Tablet Navigation (Visible below LG) -->
      <div class="mobile-tablet-navigation d-flex d-lg-none align-items-center">
        <!-- Mobile Contact Buttons -->
        <div class="mobile-contact-buttons">
          <a href="tel:+911234567890" class="mobile-contact-btn">
            <i class="fas fa-phone-alt"></i>
          </a>
          <a href="<?= site_url('contact') ?>" class="btn btn-secondary btn-sm d-none d-sm-inline-flex">
            Get Quote
          </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler mobile-menu-toggle"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mobileNav"
          aria-controls="mobileNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="toggle-icon"></span>
          <span class="toggle-icon"></span>
          <span class="toggle-icon"></span>
        </button>
      </div>

      <!-- Mobile Navigation Menu (Collapsible) -->
      <div class="collapse navbar-collapse mobile-nav-collapse d-lg-none" id="mobileNav">
        <div class="mobile-nav-content">
          <!-- Mobile Nav Header -->
          <div class="mobile-nav-header">
            <span class="mobile-nav-title">Menu</span>
            <button class="mobile-nav-close" aria-label="Close Menu">
              <i class="fas fa-times"></i>
            </button>
          </div>

          <!-- Mobile Navigation Menu -->
          <ul class="navbar-nav mobile-menu">
            <!-- Home -->
            <li class="nav-item">
              <a class="nav-link <?= (uri_string() == '' || uri_string() == 'home') ? 'active' : '' ?>"
                href="<?= site_url() ?>">
                <i class="fas fa-home"></i>
                <span>Home</span>
              </a>
            </li>

            <!-- Services Accordion -->
            <li class="nav-item mobile-accordion">
              <a class="nav-link accordion-toggle"
                data-bs-toggle="collapse"
                href="#servicesAccordion">
                <i class="fas fa-cogs"></i>
                <span>Our Services</span>
                <i class="fas fa-chevron-down"></i>
              </a>
              <div class="collapse accordion-content" id="servicesAccordion">

                <!-- Web Development Section -->
                <div class="accordion-section">
                  <a class="section-toggle" data-bs-toggle="collapse" href="#webDevSection">
                    <i class="fas fa-code"></i>
                    <span>Web Development</span>
                    <i class="fas fa-chevron-down"></i>
                  </a>
                  <div class="collapse" id="webDevSection">
                    <ul class="section-list">
                      <li><a href="<?= site_url('services/web-development') ?>">Website Development</a></li>
                      <!-- <li><a href="<?= site_url('services/responsive-design') ?>">Responsive Design</a></li>
                      <li><a href="<?= site_url('services/ecommerce-development') ?>">E-commerce Development</a></li>
                      <li><a href="<?= site_url('services/cms-development') ?>">CMS Development</a></li>
                      <li><a href="<?= site_url('services/wordpress-development') ?>">WordPress Development</a></li> -->
                    </ul>
                  </div>
                </div>

                <!-- Mobile App Development Section -->
                <div class="accordion-section">
                  <a class="section-toggle" data-bs-toggle="collapse" href="#appDevSection">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Mobile App Development</span>
                    <i class="fas fa-chevron-down"></i>
                  </a>
                  <div class="collapse" id="appDevSection">
                    <ul class="section-list">
                      <li><a href="<?= site_url('services/app-development') ?>">Mobile App Development</a></li>
                      <!-- <li><a href="<?= site_url('services/android-development') ?>">Android Development</a></li>
                      <li><a href="<?= site_url('services/ios-development') ?>">iOS Development</a></li>
                      <li><a href="<?= site_url('services/flutter-development') ?>">Flutter Development</a></li>
                      <li><a href="<?= site_url('services/react-native') ?>">React Native</a></li> -->
                    </ul>
                  </div>
                </div>

                <!-- Digital Marketing Section -->
                <div class="accordion-section">
                  <a class="section-toggle" data-bs-toggle="collapse" href="#digitalMarketingSection">
                    <i class="fas fa-bullhorn"></i>
                    <span>Digital Marketing</span>
                    <i class="fas fa-chevron-down"></i>
                  </a>
                  <div class="collapse" id="digitalMarketingSection">
                    <ul class="section-list">
                      <li><a href="<?= site_url('services/seo-services') ?>">SEO Services</a></li>
                      <li><a href="<?= site_url('services/lead-generation') ?>">Lead Generation</a></li>
                      <!-- <li><a href="<?= site_url('services/social-media-marketing') ?>">Social Media Marketing</a></li>
                      <li><a href="<?= site_url('services/google-ads') ?>">Google Ads & PPC</a></li>
                      <li><a href="<?= site_url('services/content-marketing') ?>">Content Marketing</a></li> -->
                    </ul>
                  </div>
                </div>

                <!-- Business Solutions Section -->
                <div class="accordion-section">
                  <a class="section-toggle" data-bs-toggle="collapse" href="#businessSolutionsSection">
                    <i class="fas fa-chart-line"></i>
                    <span>Business Solutions</span>
                    <i class="fas fa-chevron-down"></i>
                  </a>
                  <div class="collapse" id="businessSolutionsSection">
                    <ul class="section-list">
                      <li><a href="<?= site_url('services/crm-erp') ?>">CRM/ERP Solutions</a></li>
                      <li><a href="<?= site_url('services/hosting-domain') ?>">Hosting & Domain</a></li>
                      <!-- <li><a href="<?= site_url('services/custom-software') ?>">Custom Software</a></li>
                      <li><a href="<?= site_url('services/it-consulting') ?>">IT Consulting</a></li>
                      <li><a href="<?= site_url('services/maintenance-support') ?>">Maintenance & Support</a></li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </li>

            <!-- Portfolio -->
            <li class="nav-item">
              <a class="nav-link <?= (uri_string() == 'portfolio') ? 'active' : '' ?>"
                href="<?= site_url('portfolio') ?>">
                <i class="fas fa-briefcase"></i>
                <span>Portfolio</span>
              </a>
            </li>

            <!-- Careers -->
            <li class="nav-item">
              <a class="nav-link <?= (uri_string() == 'careers') ? 'active' : '' ?>"
                href="<?= site_url('careers') ?>">
                <i class="fas fa-users"></i>
                <span>Careers</span>
              </a>
            </li>

            <!-- Contact -->
            <li class="nav-item">
              <a class="nav-link <?= (uri_string() == 'contact') ? 'active' : '' ?>"
                href="<?= site_url('contact') ?>">
                <i class="fas fa-envelope"></i>
                <span>Contact Us</span>
              </a>
            </li>
          </ul>

          <!-- Mobile CTA Button -->
          <div class="mobile-cta-wrapper">
            <a href="<?= site_url('contact') ?>" class="btn-cta-mobile-full">
              <i class="fas fa-paper-plane"></i>
              Get Quote
            </a>
          </div>

          <!-- Mobile Social Icons -->
          <div class="mobile-social-wrapper">
            <a href="#" class="mobile-social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="mobile-social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="mobile-social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="mobile-social-icon"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Navigation JavaScript -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize navigation elements
      const unifiedNav = document.querySelector('.unified-navigation');
      const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
      const mobileNav = document.getElementById('mobileNav');
      const megaMenuContainer = document.querySelector('.mega-menu-container');
      const megaMenuDropdown = document.querySelector('.mega-menu-dropdown');

      // Mobile Menu Toggle
      if (mobileMenuToggle && mobileNav) {
        const closeBtn = document.querySelector('.mobile-nav-close');

        function openMobileMenu() {
          mobileNav.classList.add('show');
          mobileMenuToggle.setAttribute('aria-expanded', 'true');
          document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
          mobileNav.classList.remove('show');
          mobileMenuToggle.setAttribute('aria-expanded', 'false');
          document.body.style.overflow = '';
        }

        mobileMenuToggle.addEventListener('click', function(e) {
          e.stopPropagation();
          if (mobileNav.classList.contains('show')) {
            closeMobileMenu();
          } else {
            openMobileMenu();
          }
        });

        // Close button click
        if (closeBtn) {
          closeBtn.addEventListener('click', closeMobileMenu);
        }

        // Close on outside click
        document.addEventListener('click', function(e) {
          if (
            mobileNav.classList.contains('show') &&
            !e.target.closest('.mobile-nav-collapse') &&
            !e.target.closest('.mobile-menu-toggle')
          ) {
            closeMobileMenu();
          }
        });

        // Close on ESC key
        document.addEventListener('keydown', function(e) {
          if (e.key === 'Escape' && mobileNav.classList.contains('show')) {
            closeMobileMenu();
          }
        });

        // Close menu when clicking navigation links (except accordion toggles)
        document.querySelectorAll('#mobileNav a').forEach(link => {
          link.addEventListener('click', function(e) {
            if (this.classList.contains('accordion-toggle') ||
              this.classList.contains('section-toggle')) {
              e.stopPropagation();
              return;
            }
            closeMobileMenu();
          });
        });

        // Close on resize to desktop
        window.addEventListener('resize', function() {
          if (window.innerWidth >= 992) {
            closeMobileMenu();
          }
        });
      }

      // Desktop Mega Menu Hover Functionality
      if (megaMenuContainer && megaMenuDropdown) {
        let menuTimeout;

        megaMenuContainer.addEventListener('mouseenter', function() {
          clearTimeout(menuTimeout);
          megaMenuDropdown.style.opacity = '1';
          megaMenuDropdown.style.visibility = 'visible';
          megaMenuDropdown.style.transform = 'translateY(0)';
        });

        megaMenuContainer.addEventListener('mouseleave', function() {
          menuTimeout = setTimeout(() => {
            megaMenuDropdown.style.opacity = '0';
            megaMenuDropdown.style.visibility = 'hidden';
            megaMenuDropdown.style.transform = 'translateY(-10px)';
          }, 300);
        });

        megaMenuDropdown.addEventListener('mouseenter', function() {
          clearTimeout(menuTimeout);
        });

        megaMenuDropdown.addEventListener('mouseleave', function() {
          menuTimeout = setTimeout(() => {
            megaMenuDropdown.style.opacity = '0';
            megaMenuDropdown.style.visibility = 'hidden';
            megaMenuDropdown.style.transform = 'translateY(-10px)';
          }, 300);
        });
      }

      // Sticky Navigation Shadow
      if (unifiedNav) {
        window.addEventListener('scroll', function() {
          if (window.scrollY > 20) {
            unifiedNav.style.boxShadow = 'var(--shadow-lg)';
          } else {
            unifiedNav.style.boxShadow = 'var(--shadow-sm)';
          }
        });
      }

      // Smooth Scroll for Anchor Links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          const href = this.getAttribute('href');
          if (href.startsWith('#') && href.length > 1) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
              if (mobileNav && mobileNav.classList.contains('show')) {
                closeMobileMenu();
              }
              window.scrollTo({
                top: target.offsetTop - 100,
                behavior: 'smooth'
              });
            }
          }
        });
      });

      // Set Active Navigation Item
      function setActiveNavItem() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
          const linkPath = link.getAttribute('href');
          if (linkPath === currentPath ||
            (currentPath === '/' && linkPath.includes('home'))) {
            link.classList.add('active');
          } else {
            link.classList.remove('active');
          }
        });
      }

      setActiveNavItem();
    });
  </script>