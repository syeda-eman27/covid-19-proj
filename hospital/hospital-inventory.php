<?php
session_start();
require_once '../db_connect.php';

// Assuming a hospital is logged in with hospital_id = 1 for demonstration
$hospital_id = 1;

// Fetch inventory data for the hospital
$sql = "SELECT * FROM inventory WHERE hospital_id = $hospital_id ORDER BY vaccine_name ASC";
$result = $conn->query($sql);

include '../header.php';
?>
<div id="hospital-inventory" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Vaccine Inventory</h2>
                    <p class="section-subtitle text-start">Manage your vaccine stock</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="service-card">
                        <div class="d-flex justify-content-between mb-4">
                            <h5>Current Inventory</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addVaccineModal">
                                <i class="fas fa-plus me-2"></i>Add Vaccine
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Vaccine</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['vaccine_name']); ?></td>
                                        <td><?php echo $row['qty']; ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Update</button>
                                            <button class="btn btn-sm btn-outline-danger">Remove</button>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='3' class='text-center'>No vaccines found in inventory.</td></tr>";
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