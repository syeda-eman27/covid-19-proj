<div id="patient-dashboard" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">My Dashboard</h2>
                    <p class="section-subtitle text-start">Welcome back, John Doe</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-calendar-plus"></i>
                        </div>
                        <h5 class="mb-3">Book Appointment</h5>
                        <p class="text-muted mb-3">Schedule your next COVID-19 test or vaccination</p>
                        <a href="index.php?section=patient-booking" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>Book Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-file-medical"></i>
                        </div>
                        <h5 class="mb-3">View Reports</h5>
                        <p class="text-muted mb-3">Access your test results and vaccination records</p>
                        <a href="index.php?section=patient-reports" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>View Reports
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5 class="mb-3">Get Certificate</h5>
                        <p class="text-muted mb-3">Download your vaccination certificate</p>
                        <a href="index.php?section=patient-certificate" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>Download
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-card">
                        <h5 class="mb-3">Recent Appointments</h5>
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
                                        <td>COVID-19 Vaccination</td>
                                        <td>City General Hospital</td>
                                        <td><span class="status-badge badge-confirmed">Confirmed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dec 10, 2024</td>
                                        <td>RT-PCR Test</td>
                                        <td>Metro Health Center</td>
                                        <td><span class="status-badge badge-completed">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success">View Report</button>
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