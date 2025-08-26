<?php
session_start();
require_once '../db_connect.php';

// Fetch counts from the database
$hospitals_count = 0;
$bookings_count = 0;
$users_count = 0;

$result_hospitals = $conn->query("SELECT COUNT(*) AS total FROM hospitals");
if ($result_hospitals && $row = $result_hospitals->fetch_assoc()) {
    $hospitals_count = $row['total'];
}

$result_bookings = $conn->query("SELECT COUNT(*) AS total FROM bookings");
if ($result_bookings && $row = $result_bookings->fetch_assoc()) {
    $bookings_count = $row['total'];
}

$result_users = $conn->query("SELECT COUNT(*) AS total FROM users");
if ($result_users && $row = $result_users->fetch_assoc()) {
    $users_count = $row['total'];
}

include '../header.php';
?>

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
                                <h3 class="text-primary mb-1"><?php echo $hospitals_count; ?></h3>
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
                                <h3 class="text-success mb-1"><?php echo $bookings_count; ?></h3>
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
                                <h3 class="text-warning mb-1"><?php echo $users_count; ?></h3>
                                <p class="text-muted mb-0">Total Users</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--warning-color);">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>
</div>

<?php include '../footer.php'; ?>