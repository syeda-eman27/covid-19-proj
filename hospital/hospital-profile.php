<?php
// session_start();
// require_once 'db_connect.php';
include  '/db_connect.php';

include '/header.php';
?>
<div id="hospital-profile" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Hospital Profile</h2>
                    <p class="section-subtitle text-start">Manage your hospital information</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="service-card">
                        <form id="hospitalProfileForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Hospital Name</label>
                                    <input type="text" class="form-control" value="City General Hospital" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" value="(555) 123-4567" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" value="123 Main Street, New York, NY 10001" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Services Offered</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="testingCheck" checked>
                                        <label class="form-check-label" for="testingCheck">COVID Testing</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vaccinationCheck" checked>
                                        <label class="form-check-label" for="vaccinationCheck">Vaccination</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Operating Hours</label>
                                    <input type="text" class="form-control" value="8:00 AM - 6:00 PM, Monday to Saturday">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3">A leading healthcare provider offering comprehensive COVID-19 services.</textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-2"></i>Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <h5 class="mb-3">Hospital Logo</h5>
                        <div class="text-center py-4 border rounded" style="background: #f8f9fa;">
                            <i class="fas fa-hospital text-primary" style="font-size: 5rem;"></i>
                            <p class="mt-3 text-muted">Upload your hospital logo</p>
                            <button class="btn btn-sm btn-primary mt-2">
                                <i class="fas fa-upload me-2"></i>Upload Image
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>