<footer class="footer pt-5 pb-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="rounded-circle me-2" ><img src="<?= base_url('assets/images/logo/mfi_favicon.png') ?>" class="img-fluid rounded-circle" style="width:38px;height:38px;" alt="logo" loading="lazy">
                    </div>
                    <strong>Movers Federation Of India</strong>
                </div>
                <p class="muted">Advancing trust, safety, and growth in India’s relocation industry.</p>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="text-uppercase text-secondary">Explore</h6>
                <ul class="list-unstyled small">
                    <li><a class="text-decoration-none nav-link p-0" href="#about">About</a></li>
                    <li><a class="text-decoration-none nav-link p-0" href="#initiatives">Initiatives</a></li>
                    <li><a class="text-decoration-none nav-link p-0" href="#events">Events</a></li>
                    <li><a class="text-decoration-none nav-link p-0" href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="text-uppercase text-secondary">Members</h6>
                <ul class="list-unstyled small">
                    <li><a class="text-decoration-none nav-link p-0" href="#join">Join MFI</a></li>
                    <li><a class="text-decoration-none nav-link p-0" href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h6 class="text-uppercase text-secondary">Policies</h6>
                <ul class="list-unstyled small">
                    <li><a class="text-decoration-none nav-link p-0" href="<?= site_url("terms-and-conditions") ?>">Terms & Conditions</a></li>
                    <li><a class="text-decoration-none nav-link p-0" href="<?= site_url("privacy-and-policy") ?>">Privacy Policy</a></li>
                    <li><a class="text-decoration-none nav-link p-0" href="<?= site_url("cancellation-and-refund-policy") ?>">Cancellation & Refund Policy</a></li>
                    <li><a class="text-decoration-none nav-link p-0" href="<?= site_url("shipping-and-delivery") ?>">Shipping & Delivery Policy</a></li>
                </ul>
            </div>
        </div>
        <hr class="my-4" />
        <div class="d-flex flex-column flex-lg-row justify-content-between small muted">
            <div>© <span id="year"></span> Movers Federation Of India. All rights reserved.</div></div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="<?= base_url("assets") ?>/admin/js/hoe.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('year')) {
            document.getElementById('year').textContent = new Date().getFullYear();
        }

        const counters = document.querySelectorAll('.stat');
        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseFloat(el.dataset.target);
                    const suffix = el.dataset.suffix || '+';
                    let current = 0;
                    
                    // Handle different animation speeds based on target value
                    const step = target > 100 ? Math.max(1, Math.floor(target / 100)) : 0.1;
                    const duration = 2000; // 2 seconds
                    const stepTime = duration / (target / step);
                    
                    const animate = () => {
                        current += step;
                        if (current >= target) {
                            current = target;
                        }
                        
                        // Format the display value
                        let displayValue;
                        if (suffix === 'M+') {
                            displayValue = current.toFixed(1) + suffix;
                        } else {
                            displayValue = Math.floor(current).toLocaleString('en-IN') + suffix;
                        }
                        
                        el.textContent = displayValue;
                        
                        if (current < target) {
                            setTimeout(animate, stepTime);
                        }
                    };
                    
                    animate();
                    io.unobserve(el);
                }
            });
        }, {
            threshold: 0.4
        });
        
        counters.forEach(c => io.observe(c));
    });
</script>

</body>

</html>