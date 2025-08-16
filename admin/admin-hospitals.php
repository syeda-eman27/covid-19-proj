<div id="admin-hospitals" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Manage Hospitals</h2>
                    <p class="section-subtitle text-start">View and manage all partner hospitals</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <div class="search-box">
                            <input type="text" class="form-control" placeholder="Search hospitals...">
                        </div>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Add New Hospital
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
                                        <th>ID</th>
                                        <th>Hospital Name</th>
                                        <th>Location</th>
                                        <th>Services</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HSP001</td>
                                        <td>City General Hospital</td>
                                        <td>New York</td>
                                        <td>
                                            <span class="badge bg-success me-1">Testing</span>
                                            <span class="badge bg-primary">Vaccination</span>
                                        </td>
                                        <td><span class="status-badge badge-confirmed">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Disable</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HSP002</td>
                                        <td>Metro Health Center</td>
                                        <td>Los Angeles</td>
                                        <td><span class="badge bg-success">Testing</span></td>
                                        <td><span class="status-badge badge-confirmed">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Disable</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>