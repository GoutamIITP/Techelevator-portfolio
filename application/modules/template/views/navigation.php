<!-- TechElevatr Advanced Navigation System -->

<!-- Top Info Bar -->
<section class="info-head header-v3">
  <div class="container">
    <ul class="left mb-0">
      <li><a href="<?= site_url() ?>">Home</a></li>
      <li><a href="<?= site_url('about') ?>">About Us</a></li>
      <li><a href="<?= site_url('career') ?>">Career</a></li>
      <li><a href="<?= site_url('internship') ?>">Internship</a></li>
      <li><a href="<?= site_url('faq') ?>">FAQ</a></li>
      <li><a href="<?= site_url('blog') ?>">Blog</a></li>
      <li><a href="<?= site_url('contact') ?>">Contact Us</a></li>
      <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
    </ul>
    <ul class="right mb-0">
      <li><a href="<?= $phonehtml ?>"><i class="fa fa-headphones"></i> <?= $phone ?></a></li>
      <li><i class="fa fa-comment"></i> <a href="<?= site_url('free-quote') ?>" class="sendfeedback" style="cursor:pointer">GET A QUOTE</a></li>
    </ul>
  </div>
</section>

<!-- Mobile Header -->
<div class="wsmobileheader clearfix">
  <span class="topcontact">
    <a class="text-white" href="<?= $mailhtml ?>">
      <i class="fas fa-envelope"></i><?= $mail ?>
    </a>
    <a href="<?= $phonehtml ?>" class="display-call text-white">
      <i class="fas fa-phone"></i><?= $phone ?>
    </a>
  </span>
  <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
  <a href="<?= site_url() ?>">
    <span class="smllogo">
      <img src="<?= base_url('assets/images/logo/techelevator-logo.png') ?>" loading="lazy" alt="TechElevatr Logo" />
    </span>
  </a>
  <a href="<?= $phonehtml ?>" class="callusbtn">
    <img width="52" class="img-fluid text-center" src="<?= base_url('assets/images/icons/call.png') ?>" loading="lazy" alt="call-img">
  </a>
</div>

<!-- Desktop Header -->
<div class="headtoppart clearfix">
  <div class="headerwp clearfix">
    <div class="headertopleft">
      <div class="desktoplogo">
        <a href="<?= site_url() ?>">
          <img class="img-fluid" src="<?= base_url('assets/images/logo/techelevator-logo.png') ?>" loading="lazy" alt="TechElevatr Logo">
        </a>
      </div>
    </div>
    <div class="headertopright pt-3">
      <div class="address clearfix row">
        <div class="col-3">
          <span><img class="img-fluid" src="<?= base_url('assets/images/icons/location.png') ?>" loading="lazy" alt="TechElevatr Location"></span>
        </div>
        <div class="col-9">
          <p class="">TechElevatr, Siliguri, West Bengal, India</p>
        </div>
      </div>
      <div class="address clearfix row ms-4">
        <div class="col-3">
          <img class="img-fluid text-center" src="<?= base_url('assets/images/icons/call2.png') ?>" loading="lazy" alt="call-img">
        </div>
        <div class="col-7">
          <p class="text-left pl-3">
            <span><a href="<?= $phonehtml ?>"><?= $phone ?></a></span>
          </p>
        </div>
      </div>
      <div class="address clearfix row">
        <div class="col-3">
          <img class="img-fluid" src="<?= base_url('assets/images/icons/mail.png') ?>" loading="lazy" alt="email-img">
        </div>
        <div class="col-9">
          <p>
            <a href="<?= $mailhtml ?>"><?= $mail ?></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Main Navigation Menu -->
<div class="wsmainfull clearfix">
  <div class="wsmainwp clearfix">
    <nav class="wsmenu clearfix">
      <ul class="wsmenu-list">

        <!-- Home -->
        <li aria-haspopup="true">
          <a href="<?= site_url() ?>" class="<?= (uri_string() == '' || uri_string() == 'home') ? 'active' : '' ?> menuhomeicon">
            <i class="fas fa-home"></i><span class="hometext">&nbsp;&nbsp;Home</span>
          </a>
        </li>

        <!-- Services Mega Menu -->
        <li aria-haspopup="true">
          <a href="#">Our Services<span class="wsarrow"></span></a>
          <div class="wsmegamenu clearfix">
            <div class="typography-text clearfix">
              <div class="container">
                <div class="row pb-3">

                  <!-- Web Development Services -->
                  <div class="col-lg-3 col-sm-12">
                    <h3 class="title text-white">Web Development</h3>
                    <ul>
                      <li class="mb-2">
                        <a href="<?= site_url('services/web-development') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/web-design.png') ?>" loading="lazy" alt="Website Development">
                          Website Development
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/responsive-design') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/responsive.png') ?>" loading="lazy" alt="Responsive Design">
                          Responsive Design
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/ecommerce-development') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/ecommerce.png') ?>" loading="lazy" alt="E-commerce Development">
                          E-commerce Development
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/cms-development') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/cms.png') ?>" loading="lazy" alt="CMS Development">
                          CMS Development
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/wordpress-development') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/wordpress.png') ?>" loading="lazy" alt="WordPress Development">
                          WordPress Development
                        </a>
                      </li>
                    </ul>
                  </div>

                  <!-- Mobile App Development -->
                  <div class="col-lg-3 col-sm-12">
                    <h3 class="title text-white">Mobile App Development</h3>
                    <ul>
                      <li class="mb-2">
                        <a href="<?= site_url('services/app-development') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/mobile-app.png') ?>" loading="lazy" alt="Mobile App Development">
                          Mobile App Development
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/android-development') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/android.png') ?>" loading="lazy" alt="Android Development">
                          Android Development
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/ios-development') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/ios.png') ?>" loading="lazy" alt="iOS Development">
                          iOS Development
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/flutter-development') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/flutter.png') ?>" loading="lazy" alt="Flutter Development">
                          Flutter Development
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/react-native') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/react-native.png') ?>" loading="lazy" alt="React Native">
                          React Native
                        </a>
                      </li>
                    </ul>
                  </div>

                  <!-- Digital Marketing -->
                  <div class="col-lg-3 col-sm-12">
                    <h3 class="title text-white">Digital Marketing</h3>
                    <ul>
                      <li class="mb-2">
                        <a href="<?= site_url('services/seo-services') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/seo.png') ?>" loading="lazy" alt="SEO Services">
                          SEO Services
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/lead-generation') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/lead-generation.png') ?>" loading="lazy" alt="Lead Generation">
                          Lead Generation
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/social-media-marketing') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/smm.png') ?>" loading="lazy" alt="Social Media Marketing">
                          Social Media Marketing
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/google-ads') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/google-ads.png') ?>" loading="lazy" alt="Google Ads">
                          Google Ads & PPC
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/content-marketing') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/content-marketing.png') ?>" loading="lazy" alt="Content Marketing">
                          Content Marketing
                        </a>
                      </li>
                    </ul>
                  </div>

                  <!-- Business Solutions -->
                  <div class="col-lg-3 col-sm-12">
                    <h3 class="title text-white">Business Solutions</h3>
                    <ul>
                      <li class="mb-2">
                        <a href="<?= site_url('services/crm-erp') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/crm-erp.png') ?>" loading="lazy" alt="CRM/ERP Solutions">
                          CRM/ERP Solutions
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/hosting-domain') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/hosting.png') ?>" loading="lazy" alt="Hosting & Domain">
                          Hosting & Domain
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/custom-software') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/custom-software.png') ?>" loading="lazy" alt="Custom Software">
                          Custom Software
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/it-consulting') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/consulting.png') ?>" loading="lazy" alt="IT Consulting">
                          IT Consulting
                        </a>
                      </li>
                      <li class="mb-2">
                        <a href="<?= site_url('services/maintenance-support') ?>" class="text-white">
                          <img class="pe-2" src="<?= base_url('assets/images/icons/support.png') ?>" loading="lazy" alt="Maintenance & Support">
                          Maintenance & Support
                        </a>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </li>
 

 
 

        <!-- Portfolio -->
        <li aria-haspopup="true">
          <a href="<?= site_url('portfolio') ?>">Portfolio</a>
        </li>

        <!-- Career -->
        <li aria-haspopup="true">
          <a href="<?= site_url('career') ?>">Career</a>
        </li>

        <!-- Contact -->
        <li aria-haspopup="true">
          <a href="<?= site_url('contact') ?>">Contact Us</a>
        </li>

      </ul>
    </nav>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= site_url('admin/login') ?>">
          <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Enter username" id="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" id="password" required>
          </div>
          <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">Remember me</label>
          </div>
          <button type="submit" name="user-login" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Navigation Styles -->
<style>
  /* Top Info Bar */
  .info-head {
    background: linear-gradient(135deg, #1E40AF 0%, #3B82F6 100%);
    padding: 8px 0;
    font-size: 13px;
  }

  .info-head ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
  }

  .info-head ul.left {
    justify-content: flex-start;
    gap: 20px;
  }

  .info-head ul.right {
    justify-content: flex-end;
    gap: 15px;
    margin-left: auto;
  }

  .info-head ul li a {
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .info-head ul li a:hover {
    color: #FEF3C7;
  }

  /* Mobile Header */
  .wsmobileheader {
    display: none;
    background: #1E40AF;
    padding: 10px 15px;
    align-items: center;
    justify-content: space-between;
  }

  .topcontact a {
    color: white;
    text-decoration: none;
    margin-right: 15px;
    font-size: 12px;
  }

  .wsanimated-arrow {
    width: 30px;
    height: 30px;
    position: relative;
    cursor: pointer;
  }

  .wsanimated-arrow span {
    display: block;
    width: 20px;
    height: 2px;
    background: white;
    margin: 4px 0;
    transition: 0.3s;
  }

  .smllogo img {
    height: 35px;
  }

  .callusbtn img {
    width: 40px;
    height: 40px;
  }

  /* Desktop Header */
  .headtoppart {
    background: white;
    padding: 15px 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .headerwp {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }

  .desktoplogo img {
    height: 50px;
  }

  .headertopright {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .address {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
  }

  .address img {
    width: 25px;
    height: 25px;
  }

  .address p {
    margin: 0;
    font-size: 13px;
    color: #374151;
  }

  .address a {
    color: #1E40AF;
    text-decoration: none;
  }

  /* Main Navigation */
  .wsmainfull {
    background: #1E40AF;
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  .wsmenu-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .wsmenu-list>li {
    position: relative;
  }

  .wsmenu-list>li>a {
    display: block;
    padding: 15px 20px;
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    border-bottom: 3px solid transparent;
  }

  .wsmenu-list>li>a:hover,
  .wsmenu-list>li>a.active {
    background: rgba(255, 255, 255, 0.1);
    border-bottom-color: #F59E0B;
  }

  .menuhomeicon {
    display: flex;
    align-items: center;
  }

  .hometext {
    margin-left: 5px;
  }

  .wsarrow::after {
    content: '▼';
    margin-left: 8px;
    font-size: 10px;
  }

  /* Mega Menu */
  .wsmegamenu {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100vw;
    background: #1E40AF;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    z-index: 999;
  }

  .wsmenu-list>li:hover .wsmegamenu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .typography-text {
    padding: 30px 0;
  }

  .typography-text h3.title {
    color: white;
    font-size: 16px;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #F59E0B;
  }

  .typography-text ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .typography-text ul li a {
    display: flex;
    align-items: center;
    padding: 8px 0;
    color: #E5E7EB;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
  }

  .typography-text ul li a:hover {
    color: #F59E0B;
    padding-left: 10px;
  }

  .typography-text ul li a img {
    width: 20px;
    height: 20px;
    margin-right: 10px;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .info-head {
      display: none;
    }

    .headtoppart {
      display: none;
    }

    .wsmobileheader {
      display: flex;
    }

    .wsmainfull {
      display: none;
    }
  }

  @media (max-width: 992px) {
    .info-head ul.left {
      gap: 10px;
    }

    .info-head ul.right {
      gap: 10px;
    }

    .wsmenu-list>li>a {
      padding: 15px 12px;
      font-size: 14px;
    }
  }

  /* Animation Effects */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .wsmegamenu .col-lg-3 {
    animation: fadeInUp 0.5s ease forwards;
  }

  .wsmegamenu .col-lg-3:nth-child(2) {
    animation-delay: 0.1s;
  }

  .wsmegamenu .col-lg-3:nth-child(3) {
    animation-delay: 0.2s;
  }

  .wsmegamenu .col-lg-3:nth-child(4) {
    animation-delay: 0.3s;
  }
</style>

<!-- Navigation JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const navToggle = document.getElementById('wsnavtoggle');
    const mainMenu = document.querySelector('.wsmainfull');

    if (navToggle && mainMenu) {
      navToggle.addEventListener('click', function() {
        mainMenu.style.display = mainMenu.style.display === 'block' ? 'none' : 'block';
      });
    }

    // Close mega menu when clicking outside
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.wsmenu-list')) {
        document.querySelectorAll('.wsmegamenu').forEach(menu => {
          menu.style.opacity = '0';
          menu.style.visibility = 'hidden';
        });
      }
    });

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
  });
</script>