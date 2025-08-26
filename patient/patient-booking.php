<?php
// session_start();
// require_once 'db_connect.php';
include  '../db_connect.php';

include '../header.php';
?>
<div id="patient-booking" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Book Appointment</h2>
                    <p class="section-subtitle text-start">Schedule your COVID-19 test or vaccination</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="service-card">
                        <form id="bookingForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Service Type</label>
                                    <select class="form-select" id="serviceType" required>
                                        <option value="">Select Service</option>
                                        <option value="rt-pcr">RT-PCR Test</option>
                                        <option value="rapid-antigen">Rapid Antigen Test</option>
                                        <option value="antibody">Antibody Test</option>
                                        <option value="vaccination">COVID-19 Vaccination</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Hospital</label>
                                    <select class="form-select" id="hospitalSelect" required>
                                        <option value="">Select Hospital</option>
                                        <option value="city-general">City General Hospital</option>
                                        <option value="metro-health">Metro Health Center</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Date</label>
                                    <input type="date" class="form-control" id="bookingDate" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Time</label>
                                    <select class="form-select" id="bookingTime" required>
                                        <option value="">Select Time</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Additional Notes (Optional)</label>
                                    <textarea class="form-control" rows="3" placeholder="Any special requirements or notes..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-calendar-check me-2"></i>Book Appointment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <h5 class="mb-3">Booking Summary</h5>
                        <div id="bookingSummary">
                            <p class="text-muted">Please fill the form to see booking summary</p>
                        </div>
                    </div>
                    
                    <div class="service-card mt-4">
                        <h5 class="mb-3">Important Notes</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-info-circle text-info me-2"></i>
                                Arrive 15 minutes before your appointment
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-id-card text-warning me-2"></i>
                                Bring a valid government ID
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>