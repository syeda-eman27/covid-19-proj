<?php
session_start();
require_once '../db_connect.php';

// Assuming a hospital is logged in with hospital_id = 1 for demonstration
$hospital_id = 1;

// Fetch all bookings for the hospital
$sql = "SELECT b.*, u.name AS user_name FROM bookings b JOIN users u ON b.user_id = u.id WHERE b.hospital_id = $hospital_id ORDER BY b.appointment_date DESC";
$result = $conn->query($sql);

include '../header.php';
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
                                <option>Approved</option>
                                <option>Completed</option>
                                <option>Rejected</option>
                            </select>
                        </div>
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
                                        <th>ID</th>
                                        <th>Patient Name</th>
                                        <th>Service</th>
                                        <th>Date & Time</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
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
                                                case 'rejected':
                                                    $status_class = 'badge-danger';
                                                    break;
                                            }
                                            $service = ($row['type'] == 'test') ? 'RT-PCR Test' : 'Vaccination';
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                                        <td><?php echo htmlspecialchars($service); ?></td>
                                        <td><?php echo date('M d, Y h:i A', strtotime($row['appointment_date'])); ?></td>
                                        <td><span class="status-badge <?php echo $status_class; ?>"><?php echo htmlspecialchars(ucfirst($row['status'])); ?></span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">View</button>
                                            <button class="btn btn-sm btn-outline-success">Complete</button>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='6' class='text-center'>No bookings found.</td></tr>";
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