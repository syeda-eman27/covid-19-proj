<?php
// session_start();
// require_once 'db_connect.php';
// include  '/db_connect.php';
include 'db_connect.php';

include 'header.php';
?>
<div id="services" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Services</h2>
                    <p class="section-subtitle">
                        Comprehensive COVID-19 healthcare services at your fingertips
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4 class="mb-3">Easy Booking</h4>
                        <p class="text-muted mb-4">
                            Schedule your COVID-19 test or vaccination appointment with just a few clicks.
                        </p>
                        <a href="index.php?section=patient-booking" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>Book Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-search-location"></i>
                        </div>
                        <h4 class="mb-3">Hospital Search</h4>
                        <p class="text-muted mb-4">
                            Find nearby hospitals and clinics offering COVID-19 services.
                        </p>
                        <a href="index.php?section=hospitals" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>Search Hospitals
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-file-medical-alt"></i>
                        </div>
                        <h4 class="mb-3">Digital Reports</h4>
                        <p class="text-muted mb-4">
                            Access your test results and vaccination certificates digitally.
                        </p>
                        <a href="index.php?section=patient-reports" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>View Reports
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
include 'footer.php';
?>