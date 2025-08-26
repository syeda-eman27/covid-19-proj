<?php
// session_start();
// require_once 'db_connect.php';
include  '/db_connect.php';

include '/header.php';
?>
<div id="hospital-slots" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Manage Slots</h2>
                    <p class="section-subtitle text-start">Configure available time slots</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="service-card">
                        <div class="d-flex justify-content-between mb-4">
                            <h5>Available Time Slots</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addSlotModal">
                                <i class="fas fa-plus me-2"></i>Add Slot
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Time Slot</th>
                                        <th>Service</th>
                                        <th>Capacity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Monday</td>
                                        <td>09:00 AM - 10:00 AM</td>
                                        <td>Testing</td>
                                        <td>15</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>02:00 PM - 03:00 PM</td>
                                        <td>Vaccination</td>
                                        <td>10</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <h5 class="mb-3">Slot Configuration</h5>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Configure your available time slots for different services
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Default Slot Duration</label>
                            <select class="form-select">
                                <option>30 minutes</option>
                                <option selected>60 minutes</option>
                                <option>90 minutes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Maximum Daily Appointments</label>
                            <input type="number" class="form-control" value="50">
                        </div>
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-save me-2"></i>Save Configuration
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Add Slot Modal -->
<div class="modal fade" id="addSlotModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Time Slot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Day of Week</label>
                        <select class="form-select">
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Time Slot</label>
                        <input type="text" class="form-control" placeholder="09:00 AM - 10:00 AM">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Service</label>
                        <select class="form-select">
                            <option>Testing</option>
                            <option>Vaccination</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Capacity</label>
                        <input type="number" class="form-control" value="10">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Slot</button>
            </div>
        </div>
    </div>
</div>