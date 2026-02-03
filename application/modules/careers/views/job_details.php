<style>
    /* Job Details Page Styles */
    .job-details-hero {
        background: linear-gradient(135deg, #1e40af, #3b82f6);
        color: white;
        padding: 80px 0;
    }

    .job-details-content {
        background: white;
        padding: 60px 0;
    }

    .job-info-card {
        background: #f9fafb;
        border-radius: 16px;
        padding: 2rem;
        margin-bottom: 2rem;
        border-left: 4px solid #1e40af;
    }

    .job-requirements,
    .job-responsibilities {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem;
    }

    .requirements-list,
    .responsibilities-list {
        list-style: none;
        padding: 0;
    }

    .requirements-list li,
    .responsibilities-list li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1rem;
        padding-left: 0;
    }

    .requirements-list li::before {
        content: '✓';
        color: #10b981;
        font-weight: bold;
        margin-right: 0.75rem;
        margin-top: 0.1rem;
    }

    .responsibilities-list li::before {
        content: '→';
        color: #1e40af;
        font-weight: bold;
        margin-right: 0.75rem;
        margin-top: 0.1rem;
    }

    .apply-section {
        background: linear-gradient(135deg, #f97316, #fb923c);
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .apply-section .btn {
        background: white;
        color: #f97316;
        border: none;
        padding: 1rem 2rem;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .apply-section .btn:hover {
        background: #f3f4f6;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }
</style>

<!-- Job Details Hero -->
<section class="job-details-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1><?= $job['title'] ?></h1>
                <div class="job-meta mt-3">
                    <div class="d-flex flex-wrap gap-3">
                        <span><i class="fas fa-map-marker-alt me-2"></i><?= $job['location'] ?></span>
                        <span><i class="fas fa-clock me-2"></i><?= $job['type'] ?></span>
                        <span><i class="fas fa-briefcase me-2"></i>TechElevatr Digital Solutions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Details Content -->
<section class="job-details-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Job Description -->
                <div class="job-info-card">
                    <h3>Job Description</h3>
                    <p><?= $job['description'] ?></p>
                </div>

                <!-- Requirements -->
                <div class="job-requirements">
                    <h3>Requirements</h3>
                    <ul class="requirements-list">
                        <?php foreach ($job['requirements'] as $requirement): ?>
                            <li><?= $requirement ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Responsibilities -->
                <div class="job-responsibilities">
                    <h3>Responsibilities</h3>
                    <ul class="responsibilities-list">
                        <?php foreach ($job['responsibilities'] as $responsibility): ?>
                            <li><?= $responsibility ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Skills Required -->
                <div class="job-info-card">
                    <h4>Skills Required</h4>
                    <div class="skills-tags mt-3">
                        <?php foreach ($job['skills'] as $skill): ?>
                            <span class="skill-tag"><?= $skill ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Job Info -->
                <div class="job-info-card">
                    <h4>Job Information</h4>
                    <div class="job-info-list">
                        <div class="info-item">
                            <strong>Location:</strong> <?= $job['location'] ?>
                        </div>
                        <div class="info-item">
                            <strong>Type:</strong> <?= $job['type'] ?>
                        </div>
                        <div class="info-item">
                            <strong>Company:</strong> TechElevatr Digital Solutions
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Apply Section -->
<section class="apply-section">
    <div class="container">
        <h3>Ready to Apply?</h3>
        <p class="mb-4">Join our team and start building your career with us!</p>
        <a href="<?= site_url('careers#apply-now') ?>" class="btn btn-lg">
            <i class="fas fa-paper-plane me-2"></i>
            Apply for this Position
        </a>
    </div>
</section>