<?php
// session_start();
// require_once 'db_connect.php';
include  '/db_connect.php';

include '/header.php';
?>
<div id="hospital-bookings" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">View Bookings</h2>
                    <p class="section-subtitle text-start">Manage patient appointments</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-2">
                            <input type="date" class="form-control" style="width: 200px;">
                            <select class="form-select" style="width: 150px;">
                                <option>All Services</option>
                                <option>Testing</option>
                                <option>Vaccination</option>
                            </select>
                            <select class="form-select" style="width: 150px;">
                                <option>All Status</option>
                                <option>Pending</option>
                                <option>Confirmed</option>
                                <option>Completed</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">
                            <i class="fas fa-download me-2"></i>Export
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-card">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Patient</th>
                                        <th>Service</th>
                                        <th>Date/Time</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BKG001</td>
                                        <td>John Doe</td>
                                        <td>Vaccination</td>
                                        <td>Dec 15, 2024 10:00 AM</td>
                                        <td><span class="status-badge badge-confirmed">Confirmed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">View</button>
                                            <button class="btn btn-sm btn-outline-success">Complete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BKG002</td>
                                        <td>Sarah Smith</td>
                                        <td>RT-PCR Test</td>
                                        <td>Dec 14, 2024 02:30 PM</td>
                                        <td><span class="status-badge badge-completed">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
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