<?php
session_start();
require_once '../db_connect.php';

// Fetch all hospitals from the database
$hospitals_sql = "SELECT id, name FROM hospitals WHERE approved = 1 ORDER BY name ASC";
$hospitals_result = $conn->query($hospitals_sql);

// Fetch all available slots (for demonstration)
// You may need to add logic to filter by hospital and service type
$slots_sql = "SELECT * FROM slots ORDER BY slot_date ASC";
$slots_result = $conn->query($slots_sql);

include '../header.php';
?>
<div id="patient-booking" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Book Appointment</h2>
                    <p class="section-subtitle text-start">Schedule your COVID-19 test or vaccination</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="service-card">
                        <form id="bookingForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Service Type</label>
                                    <select class="form-select" id="serviceType" required>
                                        <option value="">Select Service</option>
                                        <option value="test">RT-PCR Test</option>
                                        <option value="vaccination">COVID-19 Vaccination</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Select Hospital</label>
                                    <select class="form-select" id="hospitalSelect" required>
                                        <option value="">Select a Hospital</option>
                                        <option value="">Aga khan</option>
                                        <option value="">NMC</option>
                                        <?php
                                        if ($hospitals_result->num_rows > 0) {
                                            while ($row = $hospitals_result->fetch_assoc()) {
                                                echo "<option value='{$row['id']}'>" . htmlspecialchars($row['name']) . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Appointment Date</label>
                                    <input type="date" class="form-control" id="appointmentDate" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Available Slots</label>
                                    <select class="form-select" id="availableSlots" required>
                                        <option value="">Select a Slot</option>
                                        <?php
                                        // This part needs to be dynamic based on the selected hospital and date
                                        if ($slots_result->num_rows > 0) {
                                            while ($row = $slots_result->fetch_assoc()) {
                                                echo "<option value='{$row['id']}'>" . htmlspecialchars($row['slot_date']) . " - " . htmlspecialchars($row['capacity']) . " slots</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-calendar-check me-2"></i>Book Appointment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <h5 class="mb-3">Booking Summary</h5>
                        <div id="bookingSummary">
                            <p class="text-muted">Please fill the form to see booking summary</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'; ?>