<?php
// session_start();
// require_once 'db_connect.php';
include  '../db_connect.php';
// include '../header.php';
?>
<div id="patient-certificate" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-center">Vaccination Certificate</h2>
                    <p class="section-subtitle text-center">Download your official vaccination certificate</p>
                    <button class="btn btn-outline-danger">
                                    <a href="/patient/dashboard.php" class="text-danger" >Back Dashboard</a>
                                </button>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="service-card text-center">
                        <div class="border rounded p-5" style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);">
                            <div class="mb-4">
                                <i class="fas fa-certificate text-primary" style="font-size: 5rem;"></i>
                            </div>
                            <h3 class="text-primary mb-3">COVID-19 Vaccination Certificate</h3>
                            <div class="row g-3 text-start">
                                <div class="col-md-6">
                                    <strong>Name:</strong> John Doe
                                </div>
                                <div class="col-md-6">
                                    <strong>Vaccine:</strong> Pfizer-BioNTech
                                </div>
                                <div class="col-md-6">
                                    <strong>First Dose:</strong> Mar 15, 2024
                                </div>
                                <div class="col-md-6">
                                    <strong>Second Dose:</strong> Apr 12, 2024
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="alert alert-success">
                                    <i class="fas fa-check-circle me-2"></i>
                                    <strong>Fully Vaccinated</strong>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3 mt-4">
                                <button class="btn btn-primary">
                                    <i class="fas fa-download me-2"></i>Download Certificate
                                </button>
                                <button class="btn btn-outline-primary">
                                    <i class="fas fa-qrcode me-2"></i>Generate QR Code
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>