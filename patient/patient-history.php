<?php
session_start();
require_once '../db_connect.php';

// Assuming a patient is logged in with user_id = 1 for demonstration
$user_id = 1;

$sql = "SELECT b.*, h.name AS hospital_name FROM bookings b JOIN hospitals h ON b.hospital_id = h.id WHERE b.user_id = $user_id ORDER BY b.appointment_date DESC";
$result = $conn->query($sql);

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
                        <button class="btn btn-primary d-none d-lg-block">
                            <i class="fas fa-file-export me-2"></i>Export History
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
                                        <td><?php echo date('M d, Y', strtotime($row['appointment_date'])); ?></td>
                                        <td><?php echo htmlspecialchars($service); ?></td>
                                        <td><?php echo htmlspecialchars($row['hospital_name']); ?></td>
                                        <td><span class="status-badge <?php echo $status_class; ?>"><?php echo htmlspecialchars(ucfirst($row['status'])); ?></span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='5' class='text-center'>No booking history found.</td></tr>";
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