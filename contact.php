<?php
// session_start();
// require_once 'db_connect.php';
include  'db_connect.php';

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
                    <div class="col-lg-8">
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
                                    <div class="col-md-6">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Subject</label>
                                        <select class="form-select">
                                            <option>General Inquiry</option>
                                            <option>Booking Support</option>
                                            <option>Technical Issue</option>
                                            <option>Feedback</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-paper-plane me-2"></i>Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-card">
                            <h4 class="mb-4">Contact Information</h4>
                            <div class="mb-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Phone Support</h6>
                                        <p class="text-muted mb-0">1-800-COVID-19</p>
                                        <small class="text-muted">24/7 Available</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Email Support</h6>
                                        <p class="text-muted mb-0"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="65161015150a171125060a130c01060417004b060a08">[email&#160;protected]</a></p>
                                        <small class="text-muted">Response within 2 hours</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Live Chat</h6>
                                        <p class="text-muted mb-0">Available on website</p>
                                        <small class="text-muted">Mon-Fri 9AM-6PM</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-card mt-4">
                            <h4 class="mb-4">Hospital Support</h4>
                            <p class="text-muted mb-3">
                                Healthcare providers interested in joining our network:
                            </p>
                            <div class="mb-3">
                                <strong>Partnership Team:</strong><br>
                                <span class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98e8f9eaecf6fdeaebf0f1e8ebd8fbf7eef1fcfbf9eafdb6fbf7f5">[email&#160;protected]</a></span>
                            </div>
                            <div class="mb-3">
                                <strong>Technical Support:</strong><br>
                                <span class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99edfcfaf1d9faf6eff0fdfaf8ebfcb7faf6f4">[email&#160;protected]</a></span>
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