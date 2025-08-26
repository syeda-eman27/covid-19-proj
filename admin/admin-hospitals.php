<?php
session_start();
require_once '../db_connect.php';

$sql = "SELECT * FROM hospital ORDER BY hospital_name ASC";
$result = $conn->query($sql);

include '../header.php';
?>
<div id="admin-hospitals" class="page-section">
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
                                        <th>Hospital Name</th>
                                        <th>City</th>
                                        <th>Services</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['hospital_id']; ?></td>
                                        <td><?php echo htmlspecialchars($row['hospital_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['city']); ?></td>
                                        <td><span class="badge bg-success"><?php echo htmlspecialchars($row['service']); ?></span></td>
                                        <td><span class="status-badge badge-confirmed"><?php echo htmlspecialchars($row['status']); ?></span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Disable</button>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='6' class='text-center'>No hospitals found.</td></tr>";
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