<div id="admin-users" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="section-title text-start">Manage Users</h2>
                    <p class="section-subtitle text-start">View and manage all system users</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <div class="search-box">
                            <input type="text" class="form-control" placeholder="Search users...">
                        </div>
                        <div>
                            <select class="form-select me-2" style="width: 150px;">
                                <option>All Users</option>
                                <option>Patients</option>
                                <option>Hospitals</option>
                                <option>Admins</option>
                            </select>
                            <button class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Add User
                            </button>
                        </div>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>USR001</td>
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>Patient</td>
                                        <td><span class="status-badge badge-confirmed">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Disable</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>USR002</td>
                                        <td>City General Hospital</td>
                                        <td>hospital@example.com</td>
                                        <td>Hospital</td>
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