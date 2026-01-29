<main class="main">
  <div class="site-breadcrumb" style="background: url(<?= base_url() ?>assets/img/breadcrumb/01.jpg)">
    <div class="container">
      <h1 class="breadcrumb-title">Why Choose Us</h1>
      <ul class="breadcrumb-menu">
        <li><a href="<?= site_url() ?>">Home</a></li>
        <li class="active">Why Choose Us</li>
      </ul>
    </div>
  </div>
  <div class="about-area py-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
            <?php $this->load->view('contacts/quoteform.php') ?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-right wow fadeInUp" data-wow-delay=".25s">
            <div class="site-heading mb-3">
              <h2 class="site-title">Why Choose <?= $company3 ?>?</h2>
            </div>
            <p class="about-text"><?= $company3 ?> is a well-established IT company providing comprehensive digital solutions. From our vast years of experience, we cater to our clients' technology needs and guarantee the success of your digital transformation projects.
            </p>
            <p class="about-text">Our experienced developers and digital marketing experts utilize cutting-edge technologies, modern development frameworks, and proven methodologies to deliver exceptional results for our clients. Whether you are building a new website, developing a mobile app, or implementing digital marketing strategies, we offer timely, efficient, and cost-effective solutions.
            </p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="about-content">
            <div class="row g-3">
              <div class="col-lg-12">
                <h3>Benefits of Choosing <?= $company3 ?></h3>
              </div>
              <div class="col-md-6">
                <div class="about-item">
                  <div class="icon">
                    <img src="<?= base_url() ?>assets/img/icon/team.svg" alt="">
                  </div>
                  <div class="content">
                    <h6>Expert Development Team</h6>
                    <p>Our team includes experienced developers, designers, and digital marketing specialists who have been in the IT field for several years.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-item">
                  <div class="icon">
                    <img src="<?= base_url() ?>assets/img/icon/package.svg" alt="">
                  </div>
                  <div class="content">
                    <h6>Cutting-Edge Technologies</h6>
                    <p>We use the latest technologies and frameworks to ensure your projects are built with modern, scalable, and secure solutions.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-item">
                  <div class="icon">
                    <img src="<?= base_url() ?>assets/img/icon/delivery.svg" alt="">
                  </div>
                  <div class="content">
                    <h6>On-Time Delivery</h6>
                    <p>Timely project completion and deployment, ensuring a smooth and efficient development experience.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-item">
                  <div class="icon">
                    <img src="<?= base_url() ?>assets/img/icon/money.svg" alt="">
                  </div>
                  <div class="content">
                    <h6>Competitive Pricing</h6>
                    <p>Cost-effective solutions that don't compromise on quality or functionality.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-item">
                  <div class="icon">
                    <img src="<?= base_url() ?>assets/img/icon/pickup.svg" alt="">
                  </div>
                  <div class="content">
                    <h6>Comprehensive Services</h6>
                    <p>Full-stack development services from planning and design to development, testing, and ongoing maintenance.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-item">
                  <div class="icon">
                    <img src="<?= base_url() ?>assets/img/icon/certified.svg" alt="">
                  </div>
                  <div class="content">
                    <h6>Secure & Scalable Solutions</h6>
                    <p>Robust and secure applications built to scale with your business growth and requirements.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>