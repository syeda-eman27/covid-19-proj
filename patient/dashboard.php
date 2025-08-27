<?php
session_start();
require_once '../db_connect.php';

// Assuming a hospital is logged in with hospital_id = 1 for demonstration
$hospital_id = 1;

// Fetch counts from the database
$bookings_count = 0;
$vaccine_doses = 0;
$pending_tests = 0;

$result_bookings = $conn->query("SELECT COUNT(*) AS total FROM bookings WHERE hospital_id = $hospital_id AND DATE(appointment_date) = CURDATE()");
if ($result_bookings && $row = $result_bookings->fetch_assoc()) {
    $bookings_count = $row['total'];
}

$result_vaccine_doses = $conn->query("SELECT SUM(qty) AS total_doses FROM inventory WHERE hospital_id = $hospital_id");
if ($result_vaccine_doses && $row = $result_vaccine_doses->fetch_assoc()) {
    $vaccine_doses = $row['total_doses'] ?? 0;
}

$result_pending_tests = $conn->query("SELECT COUNT(*) AS total FROM bookings WHERE hospital_id = $hospital_id AND type = 'test' AND status = 'pending'");
if ($result_pending_tests && $row = $result_pending_tests->fetch_assoc()) {
    $pending_tests = $row['total'];
}

// Fetch today's appointments for the table
$appointments_sql = "SELECT b.appointment_date, b.type, b.status, u.name AS user_name FROM bookings b JOIN users u ON b.user_id = u.id WHERE b.hospital_id = $hospital_id AND DATE(b.appointment_date) = CURDATE() ORDER BY b.appointment_date ASC";
$appointments_result = $conn->query($appointments_sql);

include '../header.php';
?>

<div id="hospital-dashboard" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Hospital Dashboard</h2>
                    <p class="section-subtitle text-start">Management Portal</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card">
                        <div class="dashboard-stat">
                            <div>
                                <h3 class="text-primary mb-1"><?php echo $bookings_count; ?></h3>
                                <p class="text-muted mb-0">Today's Bookings</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--primary-color);">
                                <i class="fas fa-calendar-day"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card">
                        <div class="dashboard-stat">
                            <div>
                                <h3 class="text-success mb-1"><?php echo $vaccine_doses; ?></h3>
                                <p class="text-muted mb-0">Vaccine Doses Available</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--success-color);">
                                <i class="fas fa-syringe"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-card">
                        <div class="dashboard-stat">
                            <div>
                                <h3 class="text-warning mb-1"><?php echo $pending_tests; ?></h3>
                                <p class="text-muted mb-0">Pending Test Results</p>
                            </div>
                            <div class="dashboard-stat-icon" style="background: var(--warning-color);">
                                <i class="fas fa-vial"></i>
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
                                    <?php
                                    if ($appointments_result->num_rows > 0) {
                                        while ($row = $appointments_result->fetch_assoc()) {
                                            $status_class = '';
                                            switch ($row['status']) {
                                                case 'approved':
                                                    $status_class = 'badge-confirmed';
                                                    break;
                                                case 'completed':
                                                    $status_class = 'badge-completed';
                                                    break;
                                                case 'pending':
                                                    $status_class = 'badge-pending';
                                                    break;
                                            }
                                            $service = ($row['type'] == 'test') ? 'RT-PCR Test' : 'Vaccination';
                                    ?>
                                    <tr>
                                        <td><?php echo date('h:i A', strtotime($row['appointment_date'])); ?></td>
                                        <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                                        <td><?php echo htmlspecialchars($service); ?></td>
                                        <td><span class="status-badge <?php echo $status_class; ?>"><?php echo htmlspecialchars(ucfirst($row['status'])); ?></span></td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='4' class='text-center'>No appointments found for today.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include '../footer.php'; ?>