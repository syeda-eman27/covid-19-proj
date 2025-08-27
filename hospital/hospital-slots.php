<?php
session_start();
require_once '../db_connect.php';

// Assuming a hospital is logged in with hospital_id = 1 for demonstration
$hospital_id = 1;

// Fetch slots data for the hospital
$sql = "SELECT * FROM slots WHERE hospital_id = $hospital_id ORDER BY slot_date ASC";
$result = $conn->query($sql);

include '../header.php';
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
                                        <th>Date</th>
                                        <th>Time Slot</th>
                                        <th>Capacity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo date('M d, Y', strtotime($row['slot_date'])); ?></td>
                                        <td><?php echo htmlspecialchars($row['slot_time']); ?></td>
                                        <td><?php echo $row['capacity']; ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='4' class='text-center'>No slots found.</td></tr>";
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