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
                                        <th>Batch No.</th>
                                        <th>Expiry Date</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pfizer-BioNTech</td>
                                        <td>PF123456</td>
                                        <td>Jun 2025</td>
                                        <td>250</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Update</button>
                                            <button class="btn btn-sm btn-outline-danger">Remove</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Moderna</td>
                                        <td>MD789012</td>
                                        <td>Aug 2025</td>
                                        <td>180</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Update</button>
                                            <button class="btn btn-sm btn-outline-danger">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <h5 class="mb-3">Inventory Summary</h5>
                        <div class="chart-container" style="height: 200px;">
                            <canvas id="inventoryChart"></canvas>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Pfizer-BioNTech</span>
                                <strong>250 doses</strong>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Moderna</span>
                                <strong>180 doses</strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>AstraZeneca</span>
                                <strong>90 doses</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Add Vaccine Modal -->
<div class="modal fade" id="addVaccineModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Vaccine</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Vaccine Name</label>
                        <select class="form-select">
                            <option>Pfizer-BioNTech</option>
                            <option>Moderna</option>
                            <option>AstraZeneca</option>
                            <option>Johnson & Johnson</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Batch Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Expiry Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="number" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Vaccine</button>
            </div>
        </div>
    </div>
</div>