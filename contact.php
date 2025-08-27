<?php
// session_start();
// require_once 'db_connect.php';
include 'db_connect.php';

include 'header.php';
?>
    <div id="contact" class="page-section">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h2 class="section-title">Contact Us</h2>
                        <p class="section-subtitle">
                            Get in touch with our support team for any assistance
                        </p>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="service-card">
                            <h4 class="mb-4">Send us a Message</h4>
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-paper-plane me-2"></i>Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-card contact-info-card">
                            <div class="image-container">
                                <img src="img/sinovac (1).jpg" class="img-fluid contact-img mb-4" alt="Contact Image">
                            </div>
                            <h4 class="mb-4">General Inquiries</h4>
                            <p class="text-muted mb-3">
                                For general questions and support, please contact us at:
                            </p>
                            <div class="mb-3">
                                <strong>Phone:</strong><br>
                                <span class="text-muted">1-800-COVID-19</span>
                            </div>
                            <div class="mb-3">
                                <strong>Email:</strong><br>
                                <span class="text-muted">
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">

                        <div class="service-card mt-4 contact-info-card">
                            <h4 class="mb-4">Hospital Support</h4>
                            <p class="text-muted mb-3">
                                Healthcare providers interested in joining our network:
                            </p>
                            <div class="mb-3">
                                <strong>Partnership Team:</strong><br>
                                <span class="text-muted">
                                    <a href="mailto:partners@example.com">partners@example.com</a>
                                </span>
                            </div>
                            <div class="mb-3">
                                <strong>Technical Support:</strong><br>
                                <span class="text-muted">
                                    <a href="mailto:tech@example.com">tech@example.com</a>
                                </span>
                            </div>
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-handshake me-2"></i>Partner With Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
<?php 
include 'footer.php';
?>