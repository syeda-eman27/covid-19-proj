<?php
// session_start();
// require_once 'db_connect.php';
include  '/db_connect.php';

include '/header.php';
?>

<div id="hospital-dashboard" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Hospital Dashboard</h2>
                    <p class="section-subtitle text-start">City General Hospital Management Portal</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card">
                        <div class="dashboard-stat">
                            <div>
                                <h3 class="text-primary mb-1">45</h3>
                                <p class="text-muted mb-0">Today's Bookings</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--primary-color);">
                                <i class="fas fa-calendar-day"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-card">
                        <h5 class="mb-3">Today's Appointments</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Patient</th>
                                        <th>Service</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>09:00 AM</td>
                                        <td>Sarah Johnson</td>
                                        <td>RT-PCR Test</td>
                                        <td><span class="status-badge badge-confirmed">Confirmed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>