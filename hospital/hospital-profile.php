<?php
session_start();
require_once '../db_connect.php';

// Assuming a hospital is logged in with hospital_id = 1 for demonstration
$hospital_id = 1;
$hospital_data = [];

$sql = "SELECT * FROM hospitals WHERE id = $hospital_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $hospital_data = $result->fetch_assoc();
}

include '../header.php';
?>
<div id="hospital-profile" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Hospital Profile</h2>
                    <p class="section-subtitle text-start">Manage your hospital information</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="service-card">
                        <form id="hospitalProfileForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Hospital Name</label>
                                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($hospital_data['name'] ?? ''); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" value="<?php echo htmlspecialchars($hospital_data['phone'] ?? ''); ?>" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($hospital_data['address'] ?? ''); ?>" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3"><?php echo htmlspecialchars($hospital_data['description'] ?? ''); ?></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-2"></i>Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
        </div>
    </section>
</div>
<?php include '../footer.php'; ?>