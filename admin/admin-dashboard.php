<div id="admin-dashboard" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Admin Dashboard</h2>
                    <p class="section-subtitle text-start">System overview and management controls</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card">
                        <div class="dashboard-stat">
                            <div>
                                <h3 class="text-primary mb-1">156</h3>
                                <p class="text-muted mb-0">Total Hospitals</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--primary-color);">
                                <i class="fas fa-hospital"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card">
                        <div class="dashboard-stat">
                            <div>
                                <h3 class="text-success mb-1">12,540</h3>
                                <p class="text-muted mb-0">Total Bookings</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--success-color);">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card">
                        <div class="dashboard-stat">
                            <div>
                                <h3 class="text-info mb-1">89,250</h3>
                                <p class="text-muted mb-0">Registered Users</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--accent-color);">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card">
                        <div class="dashboard-stat">
                            <div>
                                <h3 class="text-warning mb-1">$2.1M</h3>
                                <p class="text-muted mb-0">Total Revenue</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--warning-color);">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="service-card">
                        <h5 class="mb-3">Booking Trends</h5>
                        <div class="chart-container">
                            <canvas id="bookingChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <h5 class="mb-3">Service Distribution</h5>
                        <div class="chart-container">
                            <canvas id="serviceChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="service-card">
                        <h5 class="mb-3">Recent System Activities</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Activity</th>
                                        <th>User</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10:30 AM</td>
                                        <td>New hospital registration</td>
                                        <td>Metro Health Center</td>
                                        <td><span class="status-badge badge-pending">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>10:15 AM</td>
                                        <td>Bulk vaccination booking</td>
                                        <td>City General Hospital</td>
                                        <td><span class="status-badge badge-completed">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>09:45 AM</td>
                                        <td>System maintenance</td>
                                        <td>Admin User</td>
                                        <td><span class="status-badge badge-completed">Completed</span></td>
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