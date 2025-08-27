<?php
session_start();
require_once '../db_connect.php';

// Assuming a patient is logged in with user_id = 1 for demonstration
$user_id = 1;

$sql = "SELECT tr.*, h.name AS hospital_name FROM test_results tr JOIN hospitals h ON tr.hospital_id = h.id WHERE tr.user_id = $user_id ORDER BY tr.created_at DESC";
$result = $conn->query($sql);

include '../header.php';
?>
<div id="patient-reports" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">My Reports</h2>
                    <p class="section-subtitle text-start">View your past test reports</p>
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
                                        <th>Report Type</th>
                                        <th>Hospital</th>
                                        <th>Result</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $result_class = '';
                                            switch ($row['result']) {
                                                case 'positive':
                                                    $result_class = 'badge-danger';
                                                    break;
                                                case 'negative':
                                                    $result_class = 'badge-success';
                                                    break;
                                                default:
                                                    $result_class = 'badge-warning';
                                                    break;
                                            }
                                    ?>
                                    <tr>
                                        <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                                        <td>RT-PCR Test</td>
                                        <td><?php echo htmlspecialchars($row['hospital_name']); ?></td>
                                        <td><span class="status-badge <?php echo $result_class; ?>"><?php echo htmlspecialchars(ucfirst($row['result'])); ?></span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='5' class='text-center'>No reports found.</td></tr>";
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