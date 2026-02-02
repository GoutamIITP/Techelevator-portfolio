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
  <nav class="navbar navbar-expand-xxl unified-navigation">


    <!-- Main Navigation Container -->
    <div class="container-fluid nav-container">
      <!-- Logo -->
      <a class="navbar-brand" href="<?= site_url() ?>">
        <img src="<?= base_url('assets/images/logo/techelevator-logo.jpg') ?>"
          alt="TechElevatr Logo"
          class="nav-logo">
      </a>

      <!-- Desktop Navigation (Visible on XXL and up) -->
      <div class="desktop-navigation d-none d-xxl-flex align-items-center">
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
            <a class="nav-link dropdown-toggle" href="#" role="button">
              <i class="fas fa-cogs"></i>
              <span>Our Services</span>
              <i class="fas fa-chevron-down"></i>
            </a>
            <div class="dropdown-menu mega-menu-dropdown">
              <div class="container-fluid">
                <div class="row">
                  <!-- Web Development Column -->
                  <div class="col-xxl-3">
                    <div class="service-column">
                      <h6 class="column-title">
                        <i class="fas fa-code"></i>
                        Web Development
                      </h6>
                      <ul class="service-list">
                        <li><a href="<?= site_url('services/web-development') ?>">Website Development</a></li>
                        <li><a href="<?= site_url('services/responsive-design') ?>">Responsive Design</a></li>
                        <li><a href="<?= site_url('services/ecommerce-development') ?>">E-commerce Development</a></li>
                        <li><a href="<?= site_url('services/cms-development') ?>">CMS Development</a></li>
                        <li><a href="<?= site_url('services/wordpress-development') ?>">WordPress Development</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Mobile App Development Column -->
                  <div class="col-xxl-3">
                    <div class="service-column">
                      <h6 class="column-title">
                        <i class="fas fa-mobile-alt"></i>
                        Mobile App Development
                      </h6>
                      <ul class="service-list">
                        <li><a href="<?= site_url('services/app-development') ?>">Mobile App Development</a></li>
                        <li><a href="<?= site_url('services/android-development') ?>">Android Development</a></li>
                        <li><a href="<?= site_url('services/ios-development') ?>">iOS Development</a></li>
                        <li><a href="<?= site_url('services/flutter-development') ?>">Flutter Development</a></li>
                        <li><a href="<?= site_url('services/react-native') ?>">React Native</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Digital Marketing Column -->
                  <div class="col-xxl-3">
                    <div class="service-column">
                      <h6 class="column-title">
                        <i class="fas fa-bullhorn"></i>
                        Digital Marketing
                      </h6>
                      <ul class="service-list">
                        <li><a href="<?= site_url('services/seo-services') ?>">SEO Services</a></li>
                        <li><a href="<?= site_url('services/lead-generation') ?>">Lead Generation</a></li>
                        <li><a href="<?= site_url('services/social-media-marketing') ?>">Social Media Marketing</a></li>
                        <li><a href="<?= site_url('services/google-ads') ?>">Google Ads & PPC</a></li>
                        <li><a href="<?= site_url('services/content-marketing') ?>">Content Marketing</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Business Solutions Column -->
                  <div class="col-xxl-3">
                    <div class="service-column">
                      <h6 class="column-title">
                        <i class="fas fa-chart-line"></i>
                        Business Solutions
                      </h6>
                      <ul class="service-list">
                        <li><a href="<?= site_url('services/crm-erp') ?>">CRM/ERP Solutions</a></li>
                        <li><a href="<?= site_url('services/hosting-domain') ?>">Hosting & Domain</a></li>
                        <li><a href="<?= site_url('services/custom-software') ?>">Custom Software</a></li>
                        <li><a href="<?= site_url('services/it-consulting') ?>">IT Consulting</a></li>
                        <li><a href="<?= site_url('services/maintenance-support') ?>">Maintenance & Support</a></li>
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

          <!-- Career -->
          <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'career') ? 'active' : '' ?>"
              href="<?= site_url('career') ?>">
              <i class="fas fa-users"></i>
              <span>Career</span>
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
          <a href="<?= site_url('contact') ?>" class="btn btn-primary btn-cta">
            <i class="fas fa-paper-plane"></i>
            Get Quote
          </a>
        </div>
      </div>

      <!-- Mobile & Tablet Navigation (Visible below XXL) -->
      <div class="mobile-tablet-navigation d-flex d-xxl-none align-items-center">
        <!-- Mobile Contact Buttons -->
        <div class="mobile-contact-buttons">
          <a href="tel:+911234567890" class="mobile-contact-btn">
            <i class="fas fa-phone-alt"></i>
          </a>
          <a href="<?= site_url('contact') ?>" class="btn btn-primary btn-cta-mobile">
            Get Quote
          </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler mobile-menu-toggle"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mobileNav">
          <span class="toggle-icon"></span>
          <span class="toggle-icon"></span>
          <span class="toggle-icon"></span>
        </button>
      </div>

      <!-- Mobile Navigation Menu (Collapsible) -->
      <div class="collapse navbar-collapse mobile-nav-collapse d-xxl-none" id="mobileNav">
        <div class="mobile-nav-content">
          <!--Mobile Contact Info -->
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
                      <li><a href="<?= site_url('services/responsive-design') ?>">Responsive Design</a></li>
                      <li><a href="<?= site_url('services/ecommerce-development') ?>">E-commerce Development</a></li>
                      <li><a href="<?= site_url('services/cms-development') ?>">CMS Development</a></li>
                      <li><a href="<?= site_url('services/wordpress-development') ?>">WordPress Development</a></li>
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
                      <li><a href="<?= site_url('services/android-development') ?>">Android Development</a></li>
                      <li><a href="<?= site_url('services/ios-development') ?>">iOS Development</a></li>
                      <li><a href="<?= site_url('services/flutter-development') ?>">Flutter Development</a></li>
                      <li><a href="<?= site_url('services/react-native') ?>">React Native</a></li>
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
                      <li><a href="<?= site_url('services/social-media-marketing') ?>">Social Media Marketing</a></li>
                      <li><a href="<?= site_url('services/google-ads') ?>">Google Ads & PPC</a></li>
                      <li><a href="<?= site_url('services/content-marketing') ?>">Content Marketing</a></li>
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
                      <li><a href="<?= site_url('services/custom-software') ?>">Custom Software</a></li>
                      <li><a href="<?= site_url('services/it-consulting') ?>">IT Consulting</a></li>
                      <li><a href="<?= site_url('services/maintenance-support') ?>">Maintenance & Support</a></li>
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

            <!-- Career -->
            <li class="nav-item">
              <a class="nav-link <?= (uri_string() == 'career') ? 'active' : '' ?>"
                href="<?= site_url('career') ?>">
                <i class="fas fa-users"></i>
                <span>Career</span>
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
            <a href="<?= site_url('contact') ?>" class="btn btn-primary btn-cta-mobile-full">
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

  <!-- Navigation Styles -->
  <style>
    /* CSS Variables for Consistent Styling */
    :root {
      --primary-blue: #1e40af;
      --primary-light: #3b82f6;
      --dark-text: #1f2937;
      --light-text: #6b7280;
      --white: #ffffff;
      --accent-orange: #f97316;
      --bg-light: #f9fafb;
      --border-color: #e5e7eb;
      --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.12);
      --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.15);
      --radius-sm: 4px;
      --radius: 8px;
      --radius-lg: 12px;
      --transition: all 0.3s ease;
    }

    /* Top Info Bar (Desktop & Tablet) */
    .top-info-bar {
      background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-light) 100%);
      color: var(--white);
      font-size: 14px;
      padding: 8px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .contact-info-wrapper {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .contact-info-item {
      display: flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap;
    }

    .contact-info-item i {
      font-size: 14px;
      color: var(--white);
    }

    .contact-info-item a {
      color: var(--white);
      text-decoration: none;
      transition: var(--transition);
    }

    .contact-info-item a:hover {
      text-decoration: underline;
    }

    .separator {
      opacity: 0.3;
    }

    .social-icons-wrapper {
      display: flex;
      gap: 12px;
    }

    .social-icon {
      width: 32px;
      height: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      color: var(--white);
      text-decoration: none;
      transition: var(--transition);
    }

    .social-icon:hover {
      background: var(--white);
      color: var(--primary-blue);
      transform: translateY(-2px);
    }

    /* Main Navigation Container */
    .unified-navigation {
      background: var(--white);
      box-shadow: var(--shadow-sm);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .nav-container {
      padding: 15px;
    }

    /* Logo */
    .navbar-brand {
      padding: 0;
      margin-right: 30px;
    }

    .nav-logo {
      height: 50px;
      width: auto;
    }

    /* Desktop Navigation (XXL and up) */
    .desktop-navigation {
      width: 100%;
      justify-content: space-between;
    }

    .main-menu {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    /* Navigation Links */
    .nav-link {
      display: flex;
      align-items: center;
      gap: 8px;
      color: var(--dark-text) !important;
      font-weight: 500;
      padding: 15px 20px !important;
      border-radius: var(--radius-sm);
      transition: var(--transition);
      position: relative;
      font-size: 15px;
    }

    .nav-link i {
      font-size: 16px;
      color: var(--primary-blue);
    }

    .nav-link:hover,
    .nav-link.active {
      background: rgba(30, 64, 175, 0.05);
      color: var(--primary-blue) !important;
    }

    .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 20px;
      right: 20px;
      height: 3px;
      background: var(--primary-blue);
      border-radius: 2px;
    }

    /* Mega Menu for Desktop */
    .mega-menu-container {
      position: static !important;
    }

    .mega-menu-dropdown {
      width: 100%;
      max-width: 100vw;
      left: 0 !important;
      right: 0 !important;
      top: 100% !important;
      padding: 30px 0;
      margin-top: 0;
      border: none;
      border-radius: 0 0 var(--radius) var(--radius);
      box-shadow: var(--shadow-lg);
      background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-light) 100%);
      opacity: 0;
      visibility: hidden;
      transform: translateY(-10px);
      transition: var(--transition);
    }

    .mega-menu-container:hover .mega-menu-dropdown {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .service-column {
      padding: 0 15px;
    }

    .column-title {
      color: var(--white);
      font-weight: 600;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px solid rgba(255, 255, 255, 0.2);
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 16px;
    }

    .service-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .service-list li {
      margin-bottom: 10px;
    }

    .service-list a {
      display: block;
      color: rgba(255, 255, 255, 0.9);
      text-decoration: none;
      padding: 10px 15px;
      border-radius: var(--radius-sm);
      background: rgba(255, 255, 255, 0.05);
      transition: var(--transition);
      font-size: 14px;
    }

    .service-list a:hover {
      background: rgba(255, 255, 255, 0.15);
      color: var(--white);
      padding-left: 20px;
    }

    /* CTA Buttons */
    .btn-cta {
      background: linear-gradient(135deg, var(--accent-orange) 0%, #fb923c 100%);
      color: var(--white);
      padding: 12px 28px;
      border-radius: var(--radius);
      font-weight: 600;
      border: none;
      transition: var(--transition);
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
    }

    .btn-cta:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(249, 115, 22, 0.4);
      color: var(--white);
    }

    /* Mobile & Tablet Navigation */
    .mobile-tablet-navigation {
      gap: 15px;
    }

    .mobile-contact-buttons {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .mobile-contact-btn {
      width: 44px;
      height: 44px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-light) 100%);
      color: var(--white);
      text-decoration: none;
      transition: var(--transition);
      box-shadow: var(--shadow-md);
    }

    .mobile-contact-btn:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    .btn-cta-mobile {
      background: linear-gradient(135deg, var(--accent-orange) 0%, #fb923c 100%);
      color: var(--white);
      padding: 10px 20px;
      border-radius: var(--radius);
      font-weight: 500;
      font-size: 14px;
      border: none;
      transition: var(--transition);
      text-decoration: none;
    }

    /* Mobile Menu Toggle */
    .mobile-menu-toggle {
      width: 44px;
      height: 44px;
      padding: 0;
      border: none;
      background: transparent;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 6px;
      cursor: pointer;
    }

    .toggle-icon {
      width: 24px;
      height: 2px;
      background: var(--primary-blue);
      border-radius: 2px;
      transition: var(--transition);
    }

    .mobile-menu-toggle[aria-expanded="true"] .toggle-icon:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }

    .mobile-menu-toggle[aria-expanded="true"] .toggle-icon:nth-child(2) {
      opacity: 0;
    }

    .mobile-menu-toggle[aria-expanded="true"] .toggle-icon:nth-child(3) {
      transform: rotate(-45deg) translate(7px, -6px);
    }

    /* Mobile Navigation Menu */
    .mobile-nav-collapse {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #ffffff;
      z-index: 9999;
      overflow-y: auto;
      padding: 20px;
      transform: translateX(-100%);
      transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .mobile-nav-collapse.show {
      transform: translateX(0);
    }

    .mobile-nav-content {
      padding-top: 72px;
      padding-bottom: 20px;
    }

    /* Mobile Contact Info */
    .mobile-contact-info {
      background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-light) 100%);
      border-radius: var(--radius);
      padding: 20px;
      color: var(--white);
      margin-bottom: 20px;
    }

    .contact-info-card {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .contact-info-card i {
      font-size: 20px;
      color: var(--white);
    }

    .contact-info-card div {
      display: flex;
      flex-direction: column;
    }

    .contact-info-card small {
      font-size: 12px;
      opacity: 0.9;
    }

    .contact-info-card a {
      color: var(--white);
      text-decoration: none;
      font-weight: 500;
      font-size: 14px;
      margin-top: 4px;
    }

    /* Mobile Menu */
    .mobile-menu {
      margin-bottom: 20px;
    }

    .mobile-menu .nav-link {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 15px;
      font-weight: 500;
      padding: 16px 4px !important;
      border-bottom: 1px solid var(--border-color);
      border-radius: 0;
      justify-content: space-between;
    }

    /* Icons alignment */
    .mobile-menu .nav-link i {
      width: 20px;
      text-align: center;
      font-size: 16px;
    }

    /* Remove hover background on mobile */
    .mobile-menu .nav-link:hover {
      background: transparent;
    }

    .mobile-menu .nav-link:last-child {
      border-bottom: none;
    }

    .mobile-menu .nav-link.active {
      background: transparent;
      color: var(--primary-blue) !important;
    }

    /* Mobile Accordion */
    .accordion-content {
      background: var(--bg-light);
      border-radius: var(--radius);
      margin: 10px 0;
      overflow: hidden;
    }

    .accordion-section {
      border-bottom: 1px solid var(--border-color);
    }

    .accordion-section:last-child {
      border-bottom: none;
    }

    .section-toggle {
      display: flex;
      align-items: center;
      padding: 16px 18px;
      font-size: 14px;
      background: var(--bg-light);
      border-radius: 8px;
      margin: 8px 0;
    }

    .section-toggle i:first-child {
      font-size: 15px;
    }

    .section-toggle i:last-child {
      margin-left: auto;
      transition: transform 0.3s ease;
      font-size: 12px;
    }

    .section-toggle[aria-expanded="true"] {
      background: var(--primary-blue);
    }

    .section-toggle[aria-expanded="true"] i {
      color: var(--white);
    }

    .section-toggle[aria-expanded="true"] i:last-child {
      transform: rotate(180deg);
    }

    .section-list {
      list-style: none;
      padding: 10px 20px 10px 46px;
      margin: 0;
      background: var(--white);
    }

    .section-list li {
      margin-bottom: 10px;
    }

    .section-list a {
      display: block;
      color: var(--light-text);
      text-decoration: none;
      padding: 8px 0;
      font-size: 14px;
      transition: var(--transition);
    }

    .section-list a:hover {
      color: var(--primary-blue);
      padding-left: 8px;
    }

    /* Mobile CTA */
    .mobile-cta-wrapper {
      margin: 20px 0;
    }

    .btn-cta-mobile-full {
      background: linear-gradient(135deg, var(--accent-orange) 0%, #fb923c 100%);
      color: var(--white);
      font-size: 15px;
      padding: 14px;
      border-radius: 10px;
      font-weight: 600;
      border: none;
      transition: var(--transition);
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      width: 100%;
    }

    /* Mobile Social */
    .mobile-social-wrapper {
      display: flex;
      justify-content: center;
      gap: 15px;
      padding-top: 20px;
      border-top: 1px solid var(--border-color);
    }

    .mobile-social-icon {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: var(--bg-light);
      color: var(--primary-blue);
      text-decoration: none;
      transition: var(--transition);
    }

    .mobile-social-icon:hover {
      background: var(--primary-blue);
      color: var(--white);
      transform: translateY(-2px);
    }

    /* Responsive Breakpoints */

    /* XXL Screens (≥1400px) - Desktop */
    @media (min-width: 1400px) {
      .desktop-navigation {
        display: flex !important;
      }

      .mobile-tablet-navigation,
      .mobile-nav-collapse {
        display: none !important;
      }
    }

    /* XL Screens (1200px - 1399px) - Large Desktop */
    @media (max-width: 1399.98px) and (min-width: 1200px) {
      .nav-link {
        padding: 15px 16px !important;
        font-size: 14px;
      }

      .btn-cta {
        padding: 12px 24px;
        font-size: 14px;
      }

      .nav-logo {
        height: 45px;
      }
    }

    /* LG Screens (992px - 1199px) - Tablet Landscape */
    @media (max-width: 1199.98px) and (min-width: 992px) {
      .desktop-navigation {
        display: none !important;
      }

      .top-info-bar .contact-info-wrapper {
        gap: 15px;
      }

      .contact-info-item span,
      .contact-info-item a {
        font-size: 13px;
      }

      .nav-logo {
        height: 42px;
      }

      .btn-cta-mobile {
        padding: 8px 16px;
        font-size: 13px;
      }
    }

    /* MD Screens (768px - 991px) - Tablet Portrait */
    @media (max-width: 991.98px) and (min-width: 768px) {
      .desktop-navigation {
        display: none !important;
      }

      .top-info-bar {
        padding: 6px 0;
      }

      .contact-info-wrapper {
        gap: 12px;
      }

      .contact-info-item {
        gap: 6px;
      }

      .contact-info-item i {
        font-size: 12px;
      }

      .contact-info-item span,
      .contact-info-item a {
        font-size: 12px;
      }

      .social-icon {
        width: 28px;
        height: 28px;
        font-size: 12px;
      }

      .nav-logo {
        height: 40px;
      }

      .mobile-contact-btn {
        width: 40px;
        height: 40px;
      }

      .btn-cta-mobile {
        padding: 8px 16px;
        font-size: 12px;
      }
    }

    /* SM Screens (576px - 767px) - Mobile Landscape */
    @media (max-width: 767.98px) and (min-width: 576px) {
      .top-info-bar {
        display: none !important;
      }

      .nav-logo {
        height: 38px;
      }

      .mobile-contact-btn {
        width: 38px;
        height: 38px;
      }

      .btn-cta-mobile {
        padding: 8px 14px;
        font-size: 12px;
      }

      .mobile-contact-info {
        padding: 16px;
      }
    }

    /* XS Screens (<576px) - Mobile Portrait */
    @media (max-width: 575.98px) {
      .top-info-bar {
        display: none !important;
      }

      .nav-container {
        padding: 12px;
      }

      .nav-logo {
        height: 36px;
      }

      .mobile-contact-btn {
        width: 36px;
        height: 36px;
      }

      .btn-cta-mobile {
        display: none !important;
      }

      .mobile-nav-content {
        padding-top: 40px;
      }

      .mobile-contact-info {
        padding: 12px;
      }

      .contact-info-card {
        gap: 10px;
      }

      .contact-info-card i {
        font-size: 18px;
      }

      .mobile-menu .nav-link {
        padding: 14px 0 !important;
      }

      .section-toggle {
        padding: 14px 16px;
      }

      .section-list {
        padding: 12px 16px 12px 40px;
      }
    }

    /* Print Styles */
    @media print {

      .unified-navigation,
      .top-info-bar {
        display: none !important;
      }
    }

    /* Mobile Nav Header */
    .mobile-nav-header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 56px;
      background: #ffffff;
      z-index: 10001;
      padding: 0 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid var(--border-color);
    }

    .mobile-nav-title {
      font-weight: 600;
      font-size: 16px;
      color: var(--dark-text);
    }


    .mobile-nav-close {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: none;
      background: transparent;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: var(--transition);
    }

    .mobile-nav-close i {
      font-size: 22px;
      color: var(--primary-blue);
    }

    .mobile-nav-close:hover {
      background: var(--primary-blue);
    }

    .mobile-nav-close:hover i {
      color: var(--white);
    }

    /* Adjust mobile content padding */
    .mobile-nav-content {
      padding-top: 72px;
      padding-bottom: 20px;
      /* space for header */
    }

    /* Mobile-only: hide icons on very small screens */
    @media (max-width: 400px) {
      .mobile-menu .nav-link i {
        display: none;
      }
    }
  </style>

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

        // Close when clicking a link
        document.querySelectorAll('#mobileNav a').forEach(link => {
          link.addEventListener('click', closeMobileMenu);
        });

        // Close on resize to desktop
        window.addEventListener('resize', function() {
          if (window.innerWidth >= 1400) {
            closeMobileMenu();
          }
        });
      }


      // Desktop Mega Menu Hover Functionality
      if (megaMenuContainer && megaMenuDropdown) {
        let menuTimeout;

        // Show mega menu on hover
        megaMenuContainer.addEventListener('mouseenter', function() {
          clearTimeout(menuTimeout);
          megaMenuDropdown.style.opacity = '1';
          megaMenuDropdown.style.visibility = 'visible';
          megaMenuDropdown.style.transform = 'translateY(0)';
        });

        // Hide mega menu after delay
        megaMenuContainer.addEventListener('mouseleave', function() {
          menuTimeout = setTimeout(() => {
            megaMenuDropdown.style.opacity = '0';
            megaMenuDropdown.style.visibility = 'hidden';
            megaMenuDropdown.style.transform = 'translateY(-10px)';
          }, 300);
        });

        // Keep mega menu open when hovering over it
        megaMenuDropdown.addEventListener('mouseenter', function() {
          clearTimeout(menuTimeout);
        });

        // Hide mega menu when leaving it
        megaMenuDropdown.addEventListener('mouseleave', function() {
          menuTimeout = setTimeout(() => {
            megaMenuDropdown.style.opacity = '0';
            megaMenuDropdown.style.visibility = 'hidden';
            megaMenuDropdown.style.transform = 'translateY(-10px)';
          }, 300);
        });
      }

      // Sticky Navigation Shadow
      window.addEventListener('scroll', function() {
        if (window.scrollY > 20) {
          unifiedNav.style.boxShadow = 'var(--shadow-lg)';
        } else {
          unifiedNav.style.boxShadow = 'var(--shadow-sm)';
        }
      });

      // Smooth Scroll for Anchor Links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          const href = this.getAttribute('href');
          if (href.startsWith('#') && href.length > 1) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
              // Close mobile menu if open
              const mobileMenuOpen = mobileNav && mobileNav.classList.contains('show');
              if (mobileMenuOpen) {
                mobileMenuToggle.click();
              }

              // Smooth scroll to target
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

      // Handle Window Resize
      window.addEventListener('resize', function() {
        // Close mobile menu on larger screens
        if (window.innerWidth >= 1400 && mobileNav && mobileNav.classList.contains('show')) {
          mobileMenuToggle.click();
        }
      });
    });
  </script>