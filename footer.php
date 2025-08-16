    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-sign-in-alt me-2"></i>Login to Your Account
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select">
                                <option>Login as Patient</option>
                                <option>Login as Hospital</option>
                                <option>Login as Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

 <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5>COVID Care System</h5>
                    <p class="text-white">
                        Your trusted partner for COVID-19 testing and vaccination. 
                        Safe, secure, and convenient healthcare solutions.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" onclick="showSection('home')">Home</a></li>
                        <li class="mb-2"><a href="#about" onclick="showSection('about')">About</a></li>
                        <li class="mb-2"><a href="#services" onclick="showSection('services')">Services</a></li>
                        <li class="mb-2"><a href="#hospitals" onclick="showSection('hospitals')">Hospitals</a></li>
                        <li class="mb-2"><a href="#contact" onclick="showSection('contact')">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">COVID Testing</a></li>
                        <li class="mb-2"><a href="#">Vaccination</a></li>
                        <li class="mb-2"><a href="#">Reports</a></li>
                        <li class="mb-2"><a href="#">Certificates</a></li>
                        <li class="mb-2"><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Contact Info</h5>
                    <div class="mb-2">
                        <i class="fas fa-phone me-2"></i>
                        1-800-COVID-19
                    </div>
                    <div class="mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a5d6d0d5d5cad7d1e5c6cad3ccc1c6c4d7c08bc6cac8">[email&#160;protected]</a>
                    </div>
                    <div class="mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        123 Healthcare Blvd, Medical City
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 COVID Care System. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#" class="me-3">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>