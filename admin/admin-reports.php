<?php
session_start();
require_once '../db_connect.php';

// Fetch data for dropdowns
$hospitals_query = "SELECT hospital_name FROM hospital ORDER BY hospital_name ASC";
$hospitals_result = $conn->query($hospitals_query);

include '../header.php';
?>
<div id="admin-reports" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Generate Reports</h2>
                    <p class="section-subtitle text-start">Create and download system reports</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="service-card">
                        <h5 class="mb-3">Report Parameters</h5>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Report Type</label>
                                <select class="form-select">
                                    <option>Booking Summary</option>
                                    <option>Vaccination Report</option>
                                    <option>Testing Report</option>
                                    <option>Revenue Report</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date Range</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="date" class="form-control" >
                                    </div>
                                    <div class="col-6">
                                        <input type="date" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Hospital</label>
                                <select class="form-select">
                                    <option>All Hospitals</option>
                                    <?php
                                    if ($hospitals_result && $hospitals_result->num_rows > 0) {
                                        while ($row = $hospitals_result->fetch_assoc()) {
                                            echo "<option>" . htmlspecialchars($row['hospital_name']) . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-file-export me-2"></i>Generate Report
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-card">
                        <h5 class="mb-3">Report Preview</h5>
                        <div class="text-center py-5" style="background: #f8f9fa; border-radius: 12px;">
                            <i class="fas fa-file-alt text-muted" style="font-size: 4rem;"></i>
                            <p class="mt-3 text-muted">Select parameters and generate report to view data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'; ?>