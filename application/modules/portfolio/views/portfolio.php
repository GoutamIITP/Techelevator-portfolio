<!-- Portfolio Gallery Section -->
<section class="portfolio-gallery-section py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="display-5 fw-bold mb-3">Our <span class="text-primary">Portfolio</span></h1>
                <p class="lead text-muted">
                    Brands we've had the privilege to work with and help grow their digital presence.
                    We create meaningful digital experiences that drive business growth.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-2 mt-4" id="filterButtons">
                    <button class="btn btn-sm btn-outline-primary active" data-filter="all">All Clients</button>
                    <button class="btn btn-sm btn-outline-primary" data-filter="ecommerce">E-commerce</button>
                    <button class="btn btn-sm btn-outline-primary" data-filter="service">Service</button>
                    <button class="btn btn-sm btn-outline-primary" data-filter="enterprise">Enterprise</button>
                </div>
            </div>
        </div>

        <!-- Portfolio Grid -->
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3 g-md-4" id="portfolioGrid">
            <!-- Project 1 -->
            <div class="col" data-category="ecommerce">
                <div class="portfolio-card card border-0 shadow-sm h-100">
                    <div class="card-body p-3 p-md-4">
                        <div class="client-logo-container d-flex align-items-center justify-content-center mb-3" style="height: 120px;">
                            <img src="<?= base_url('assets/images/portfolio/appliances.jpeg') ?>"
                                alt="Appliance Store"
                                class="client-logo img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="logo-placeholder d-none align-items-center justify-content-center rounded" style="width: 100px; height: 100px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-weight: bold;">AS</div>
                        </div>
                        <div class="client-info text-center">
                            <h6 class="client-name mb-1 fw-semibold">Appliance Store</h6>
                            <span class="badge bg-primary bg-opacity-10 text-primary small fw-normal">E-commerce</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col" data-category="service">
                <div class="portfolio-card card border-0 shadow-sm h-100">
                    <div class="card-body p-3 p-md-4">
                        <div class="client-logo-container d-flex align-items-center justify-content-center mb-3" style="height: 120px;">
                            <img src="<?= base_url('assets/images/portfolio/carrental.png') ?>"
                                alt="Car Rental Service"
                                class="client-logo img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="logo-placeholder d-none align-items-center justify-content-center rounded" style="width: 100px; height: 100px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; font-weight: bold;">CR</div>
                        </div>
                        <div class="client-info text-center">
                            <h6 class="client-name mb-1 fw-semibold">Car Rental Service</h6>
                            <span class="badge bg-success bg-opacity-10 text-success small fw-normal">Service</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col" data-category="enterprise">
                <div class="portfolio-card card border-0 shadow-sm h-100">
                    <div class="card-body p-3 p-md-4">
                        <div class="client-logo-container d-flex align-items-center justify-content-center mb-3" style="height: 120px;">
                            <img src="<?= base_url('assets/images/portfolio/jay.png') ?>"
                                alt="Jay Enterprises"
                                class="client-logo img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="logo-placeholder d-none align-items-center justify-content-center rounded" style="width: 100px; height: 100px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; font-weight: bold;">JE</div>
                        </div>
                        <div class="client-info text-center">
                            <h6 class="client-name mb-1 fw-semibold">Jay Enterprises</h6>
                            <span class="badge bg-info bg-opacity-10 text-info small fw-normal">Enterprise</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col" data-category="service">
                <div class="portfolio-card card border-0 shadow-sm h-100">
                    <div class="card-body p-3 p-md-4">
                        <div class="client-logo-container d-flex align-items-center justify-content-center mb-3" style="height: 120px;">
                            <img src="<?= base_url('assets/images/portfolio/logistics.jpeg') ?>"
                                alt="Logistics Company"
                                class="client-logo img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="logo-placeholder d-none align-items-center justify-content-center rounded" style="width: 100px; height: 100px; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; font-weight: bold;">LC</div>
                        </div>
                        <div class="client-info text-center">
                            <h6 class="client-name mb-1 fw-semibold">Logistics Company</h6>
                            <span class="badge bg-success bg-opacity-10 text-success small fw-normal">Service</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="col" data-category="service">
                <div class="portfolio-card card border-0 shadow-sm h-100">
                    <div class="card-body p-3 p-md-4">
                        <div class="client-logo-container d-flex align-items-center justify-content-center mb-3" style="height: 120px;">
                            <img src="<?= base_url('assets/images/portfolio/mppackers.jpeg') ?>"
                                alt="MP Packers"
                                class="client-logo img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="logo-placeholder d-none align-items-center justify-content-center rounded" style="width: 100px; height: 100px; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; font-weight: bold;">MP</div>
                        </div>
                        <div class="client-info text-center">
                            <h6 class="client-name mb-1 fw-semibold">MP Packers</h6>
                            <span class="badge bg-success bg-opacity-10 text-success small fw-normal">Service</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="col" data-category="enterprise">
                <div class="portfolio-card card border-0 shadow-sm h-100">
                    <div class="card-body p-3 p-md-4">
                        <div class="client-logo-container d-flex align-items-center justify-content-center mb-3" style="height: 120px;">
                            <img src="<?= base_url('assets/images/portfolio/tawaniya.png') ?>"
                                alt="Tawaniya Group"
                                class="client-logo img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="logo-placeholder d-none align-items-center justify-content-center rounded" style="width: 100px; height: 100px; background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); color: #333; font-weight: bold;">TG</div>
                        </div>
                        <div class="client-info text-center">
                            <h6 class="client-name mb-1 fw-semibold">Tawaniya Group</h6>
                            <span class="badge bg-info bg-opacity-10 text-info small fw-normal">Enterprise</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 7 -->
            <div class="col" data-category="service">
                <div class="portfolio-card card border-0 shadow-sm h-100">
                    <div class="card-body p-3 p-md-4">
                        <div class="client-logo-container d-flex align-items-center justify-content-center mb-3" style="height: 120px;">
                            <img src="<?= base_url('assets/images/portfolio/travel.jpeg') ?>"
                                alt="Travel Agency"
                                class="client-logo img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="logo-placeholder d-none align-items-center justify-content-center rounded" style="width: 100px; height: 100px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-weight: bold;">TA</div>
                        </div>
                        <div class="client-info text-center">
                            <h6 class="client-name mb-1 fw-semibold">Travel Agency</h6>
                            <span class="badge bg-success bg-opacity-10 text-success small fw-normal">Service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="row mt-5 pt-4">
            <div class="col-12">
                <div class="bg-light rounded-4 p-4 p-md-5">
                    <div class="row text-center">
                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                            <div class="display-6 fw-bold text-primary">50+</div>
                            <p class="text-muted mb-0">Projects Completed</p>
                        </div>
                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                            <div class="display-6 fw-bold text-primary">95%</div>
                            <p class="text-muted mb-0">Client Satisfaction</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="display-6 fw-bold text-primary">40+</div>
                            <p class="text-muted mb-0">Happy Clients</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="display-6 fw-bold text-primary">24/7</div>
                            <p class="text-muted mb-0">Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0 pb-0 position-relative">
                <button type="button" class="btn-close position-absolute" style="top: 1.5rem; right: 1.5rem; z-index: 1;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <div class="modal-image-container rounded-3 overflow-hidden shadow-sm">
                            <img id="modalImage" class="img-fluid w-100" alt="Project Image" style="max-height: 400px; object-fit: contain;">
                        </div>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <button class="modal-nav btn btn-outline-primary btn-sm d-flex align-items-center gap-2">
                                <i class="fas fa-chevron-left"></i> Previous
                            </button>
                            <span class="image-counter align-self-center px-3 py-1 bg-light rounded">1 / 7</span>
                            <button class="modal-nav btn btn-outline-primary btn-sm d-flex align-items-center gap-2">
                                Next <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="ps-lg-3">
                            <h2 id="modalClientName" class="h3 fw-bold mb-3"></h2>
                            <div id="modalProjectDetails" class="mb-4">
                                <p class="text-muted">No additional details available for this project.</p>
                            </div>
                            <div class="project-tech mb-4">
                                <h6 class="fw-semibold mb-2">Technologies Used:</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-primary bg-opacity-10 text-primary">Web Design</span>
                                    <span class="badge bg-primary bg-opacity-10 text-primary">Development</span>
                                    <span class="badge bg-primary bg-opacity-10 text-primary">SEO</span>
                                </div>
                            </div>
                            <!-- <div class="d-grid gap-2 d-sm-flex">
                                <button class="btn btn-primary">View Case Study</button>
                                <button class="btn btn-outline-primary">Visit Website</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio Data with more details
    const portfolioData = [
        {
            client: "Appliance Store",
            image: "<?= base_url('assets/images/portfolio/appliances.jpeg') ?>",
            category: "ecommerce",
            description: "Complete e-commerce solution with inventory management and payment integration.",
            technologies: ["Web Design", "E-commerce", "Payment Gateway", "SEO"]
        },
        {
            client: "Car Rental Service",
            image: "<?= base_url('assets/images/portfolio/carrental.png') ?>",
            category: "service",
            description: "Booking system with real-time availability and customer management portal.",
            technologies: ["Web App", "Booking System", "Mobile Responsive", "API Integration"]
        },
        {
            client: "Jay Enterprises",
            image: "<?= base_url('assets/images/portfolio/jay.png') ?>",
            category: "enterprise",
            description: "Corporate website with portfolio showcase and lead generation system.",
            technologies: ["Corporate Design", "CMS", "Lead Generation", "Analytics"]
        },
        {
            client: "Logistics Company",
            image: "<?= base_url('assets/images/portfolio/logistics.jpeg') ?>",
            category: "service",
            description: "Logistics management system with tracking and delivery optimization.",
            technologies: ["Tracking System", "Database", "Real-time Updates", "Mobile App"]
        },
        {
            client: "MP Packers",
            image: "<?= base_url('assets/images/portfolio/mppackers.jpeg') ?>",
            category: "service",
            description: "Relocation service platform with quote calculator and booking system.",
            technologies: ["Web Design", "Calculator", "Booking", "Customer Portal"]
        },
        {
            client: "Tawaniya Group",
            image: "<?= base_url('assets/images/portfolio/tawaniya.png') ?>",
            category: "enterprise",
            description: "Group company website with multiple service divisions and investor relations.",
            technologies: ["Corporate Site", "Multi-language", "Investor Portal", "Newsroom"]
        },
        {
            client: "Travel Agency",
            image: "<?= base_url('assets/images/portfolio/travel.jpeg') ?>",
            category: "service",
            description: "Travel booking platform with package deals and customer reviews.",
            technologies: ["Booking Engine", "Payment Integration", "Reviews", "Mobile First"]
        }
    ];

    // Elements
    const portfolioCards = document.querySelectorAll('.portfolio-card');
    const modal = new bootstrap.Modal(document.getElementById('projectModal'));
    const modalImage = document.getElementById('modalImage');
    const modalClientName = document.getElementById('modalClientName');
    const modalProjectDetails = document.getElementById('modalProjectDetails');
    const prevButton = document.querySelector('.modal-nav.prev');
    const nextButton = document.querySelector('.modal-nav.next');
    const imageCounter = document.querySelector('.image-counter');
    const filterButtons = document.querySelectorAll('#filterButtons button');
    const portfolioGrid = document.getElementById('portfolioGrid');

    let currentIndex = 0;

    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            const cards = portfolioGrid.querySelectorAll('.col');
            
            cards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Click event for portfolio cards
    portfolioCards.forEach((card, index) => {
        card.addEventListener('click', () => {
            currentIndex = index;
            openModal();
        });
    });

    // Open modal function
    function openModal() {
        const data = portfolioData[currentIndex];
        
        modalImage.src = data.image;
        modalImage.alt = data.client;
        modalClientName.textContent = data.client;
        
        // Update project details
        modalProjectDetails.innerHTML = `
            <p class="text-muted">${data.description}</p>
        `;
        
        // Update technologies
        const techContainer = document.querySelector('.project-tech .d-flex');
        techContainer.innerHTML = data.technologies.map(tech => 
            `<span class="badge bg-primary bg-opacity-10 text-primary">${tech}</span>`
        ).join('');
        
        updateCounter();
        modal.show();
        
        // Update navigation buttons
        document.querySelector('.modal-nav.prev').disabled = currentIndex === 0;
        document.querySelector('.modal-nav.next').disabled = currentIndex === portfolioData.length - 1;
    }

    // Update image counter
    function updateCounter() {
        imageCounter.textContent = `${currentIndex + 1} / ${portfolioData.length}`;
    }

    // Navigation functions
    function prevImage() {
        if (currentIndex > 0) {
            currentIndex--;
            openModal();
        }
    }

    function nextImage() {
        if (currentIndex < portfolioData.length - 1) {
            currentIndex++;
            openModal();
        }
    }

    // Navigation button events
    document.querySelectorAll('.modal-nav').forEach(button => {
        if (button.textContent.includes('Previous')) {
            button.addEventListener('click', prevImage);
        } else {
            button.addEventListener('click', nextImage);
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (document.querySelector('.modal.show')) {
            if (e.key === 'Escape') {
                modal.hide();
            } else if (e.key === 'ArrowLeft') {
                prevImage();
            } else if (e.key === 'ArrowRight') {
                nextImage();
            }
        }
    });

    // Touch swipe for mobile
    let touchStartX = 0;
    const modalElement = document.getElementById('projectModal');
    
    modalElement.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    modalElement.addEventListener('touchend', function(e) {
        const touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        const swipeThreshold = 50;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextImage();
            } else {
                prevImage();
            }
        }
    });

    // Add hover animation
    portfolioCards.forEach(card => {
        card.style.transition = 'all 0.3s ease';
        
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            this.style.boxShadow = '0 15px 30px rgba(0,0,0,0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.05)';
        });
    });

    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '50px'
    });

    // Observe portfolio cards
    document.querySelectorAll('.portfolio-card').forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
        observer.observe(card);
    });

    // Observe stats
    document.querySelectorAll('.display-6').forEach((stat, index) => {
        stat.style.animationDelay = `${index * 0.2}s`;
        observer.observe(stat);
    });
});
</script>

<style>
/* Portfolio Gallery Styles */
.portfolio-gallery-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    position: relative;
    overflow: hidden;
}

.portfolio-gallery-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(0,123,255,0.3), transparent);
}

/* Portfolio Card Styles */
.portfolio-card {
    transition: all 0.3s ease;
    border-radius: 16px;
    background: white;
    position: relative;
    overflow: hidden;
}

.portfolio-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.portfolio-card:hover::before {
    transform: scaleX(1);
}

.portfolio-card:hover {
    transform: translateY(-8px) !important;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
}

.client-logo {
    transition: all 0.4s ease;
    filter: grayscale(100%);
    opacity: 0.8;
    max-height: 80px;
    object-fit: contain;
}

.portfolio-card:hover .client-logo {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.1);
}

.logo-placeholder {
    font-size: 1.5rem;
    font-weight: 700;
    transition: all 0.3s ease;
}

.portfolio-card:hover .logo-placeholder {
    transform: scale(1.1);
}

/* Badge Styles */
.badge {
    font-size: 0.75rem;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    transition: all 0.3s ease;
}

/* Modal Styles */
.modal-content {
    border-radius: 20px;
    overflow: hidden;
}

.modal-image-container {
    border-radius: 12px;
    overflow: hidden;
    background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
    padding: 2rem;
}

.modal-nav:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

/* Stats Section */
.bg-light {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border: 1px solid rgba(0,0,0,0.05);
}

.display-6 {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .portfolio-gallery-section {
        padding: 3rem 0 !important;
    }
    
    .display-5 {
        font-size: 2rem;
    }
    
    .lead {
        font-size: 1rem;
    }
    
    .modal-dialog {
        margin: 0.5rem;
    }
    
    .modal-body {
        padding: 1rem !important;
    }
    
    .project-tech .d-flex {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .row-cols-2 {
        row-cols: 1 !important;
    }
    
    .portfolio-card .card-body {
        padding: 1.5rem !important;
    }
    
    .client-logo-container {
        height: 100px !important;
    }
    
    .modal-content {
        border-radius: 12px;
    }
    
    .d-flex.gap-3 {
        flex-wrap: wrap;
        justify-content: center;
    }
}

/* Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate__animated {
    animation-duration: 0.6s;
    animation-fill-mode: both;
}

.animate__fadeInUp {
    animation-name: fadeInUp;
}

/* Loading animation for images */
.client-logo {
    transition: opacity 0.3s ease;
}

.client-logo.loading {
    opacity: 0;
}

/* Print styles */
@media print {
    .portfolio-card {
        break-inside: avoid;
        box-shadow: none !important;
        border: 1px solid #ddd !important;
    }
    
    .modal {
        display: none !important;
    }
}
</style>