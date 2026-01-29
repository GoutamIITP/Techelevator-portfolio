<!-- SEO Services Page -->

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge badge-custom badge-primary mb-3">
                    <i class="bi bi-search me-2"></i> SEO Services
                </span>
                <h1 class="display-5 fw-bold mb-4">Professional SEO Services</h1>
                <p class="lead mb-4">
                    Boost your website's visibility and drive organic traffic with our comprehensive SEO strategies.
                    Rank higher on Google and grow your business online.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="<?= site_url('free-quote') ?>" class="btn btn-primary btn-lg">
                        <i class="bi bi-rocket-takeoff me-2"></i> Get Free Quote
                    </a>
                    <a href="<?= site_url('portfolio') ?>" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-briefcase me-2"></i> View Results
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/services/seo-services.svg') ?>"
                    alt="SEO Services"
                    class="img-fluid"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- What We Offer -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title section-title-center">What We Offer</h2>
            <p class="section-subtitle">Comprehensive SEO solutions to improve your search rankings</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="tech-card">
                    <i class="bi bi-search text-primary-custom fs-1 mb-3"></i>
                    <h5>Keyword Research</h5>
                    <p>In-depth keyword analysis to identify high-value search terms for your business niche.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tech-card">
                    <i class="bi bi-file-earmark-text text-primary-custom fs-1 mb-3"></i>
                    <h5>On-Page SEO</h5>
                    <p>Optimize your website content, meta tags, headers, and internal linking structure.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tech-card">
                    <i class="bi bi-link-45deg text-primary-custom fs-1 mb-3"></i>
                    <h5>Link Building</h5>
                    <p>Build high-quality backlinks from authoritative websites to boost your domain authority.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tech-card">
                    <i class="bi bi-speedometer2 text-primary-custom fs-1 mb-3"></i>
                    <h5>Technical SEO</h5>
                    <p>Improve site speed, mobile responsiveness, and technical aspects for better rankings.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tech-card">
                    <i class="bi bi-geo-alt text-primary-custom fs-1 mb-3"></i>
                    <h5>Local SEO</h5>
                    <p>Optimize your business for local searches and Google My Business listings.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tech-card">
                    <i class="bi bi-graph-up text-primary-custom fs-1 mb-3"></i>
                    <h5>SEO Analytics</h5>
                    <p>Monthly reports with rankings, traffic analysis, and performance insights.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Packages -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title section-title-center">SEO Packages</h2>
            <p class="section-subtitle">Choose the plan that fits your SEO needs</p>
        </div>

        <div class="row g-4">
            <!-- Starter Package -->
            <div class="col-lg-4">
                <div class="card-custom p-4 h-100">
                    <h4 class="mb-3">Starter SEO</h4>
                    <div class="mb-4">
                        <span class="display-4 fw-bold text-primary-custom">₹15,000</span>
                        <span class="text-muted">/month</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Up to 10 Keywords</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> On-Page Optimization</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Monthly Reports</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Google Analytics Setup</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic Link Building</li>
                    </ul>
                    <a href="<?= site_url('free-quote') ?>" class="btn btn-outline-primary w-100">Get Started</a>
                </div>
            </div>

            <!-- Professional Package (Popular) -->
            <div class="col-lg-4">
                <div class="card-custom p-4 h-100 border-primary" style="border-width: 3px !important;">
                    <div class="badge bg-primary mb-3">Most Popular</div>
                    <h4 class="mb-3">Professional SEO</h4>
                    <div class="mb-4">
                        <span class="display-4 fw-bold text-primary-custom">₹25,000</span>
                        <span class="text-muted">/month</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Up to 25 Keywords</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced On-Page SEO</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Content Optimization</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Local SEO</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Quality Link Building</li>
                    </ul>
                    <a href="<?= site_url('free-quote') ?>" class="btn btn-primary w-100">Get Started</a>
                </div>
            </div>

            <!-- Enterprise Package -->
            <div class="col-lg-4">
                <div class="card-custom p-4 h-100">
                    <h4 class="mb-3">Enterprise SEO</h4>
                    <div class="mb-4">
                        <span class="display-4 fw-bold text-primary-custom">₹50,000</span>
                        <span class="text-muted">/month</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Unlimited Keywords</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Technical SEO Audit</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Content Creation</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Competitor Analysis</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Premium Link Building</li>
                    </ul>
                    <a href="<?= site_url('free-quote') ?>" class="btn btn-outline-primary w-100">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">Ready to Improve Your Rankings?</h2>
                <p class="mb-0 fs-5">Get a free SEO audit and consultation. Let's boost your website's visibility and drive more organic traffic.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="<?= site_url('free-quote') ?>" class="btn btn-light btn-lg">
                    <i class="bi bi-rocket-takeoff me-2"></i> Get Free Audit
                </a>
            </div>
        </div>
    </div>
</section>