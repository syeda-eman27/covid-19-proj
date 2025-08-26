<?php
// session_start();
// require_once 'db_connect.php';
include  '../db_connect.php';

include '../header.php';
?>
<div id="patient-history" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Booking History</h2>
                    <p class="section-subtitle text-start">View your past appointments</p>
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
                                <option>Completed</option>
                                <option>Cancelled</option>
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
                                        <th>Date</th>
                                        <th>Service</th>
                                        <th>Hospital</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dec 15, 2024</td>
                                        <td>Vaccination</td>
                                        <td>City General Hospital</td>
                                        <td><span class="status-badge badge-completed">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nov 28, 2024</td>
                                        <td>RT-PCR Test</td>
                                        <td>Metro Health Center</td>
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