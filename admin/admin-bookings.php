<?php
session_start();
require_once '../db_connect.php';

// Fetch all bookings from the database
$sql = "SELECT * FROM bookings ORDER BY appointment_date DESC";
$result = $conn->query($sql);

include '../header.php';
?>
<div id="admin-bookings" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-card">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>Service</th>
                                        <th>Hospital</th>
                                        <th>Booking Date</th>
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
                                                case 'Confirmed':
                                                    $status_class = 'badge-confirmed';
                                                    break;
                                                case 'Completed':
                                                    $status_class = 'badge-completed';
                                                    break;
                                                case 'Pending':
                                                    $status_class = 'badge-pending';
                                                    break;
                                            }
                                    ?>
                                    <tr>
                                        <td><?php echo $row['booking_id']; ?></td>
                                        <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['service_type']); ?></td>
                                        <td><?php echo htmlspecialchars($row['hospital_name']); ?></td>
                                        <td><?php echo date('M d, Y h:i A', strtotime($row['booking_date'])); ?></td>
                                        <td><span class="status-badge <?php echo $status_class; ?>"><?php echo htmlspecialchars($row['status']); ?></span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <?php 
                                        }
                                    } else {
                                        echo "<tr><td colspan='7' class='text-center'>No bookings found.</td></tr>";
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