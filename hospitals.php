<div id="hospitals" class="page-section">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Partner Hospitals</h2>
                    <p class="section-subtitle">
                        Find trusted healthcare providers in your area
                    </p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="service-card">
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Search hospitals..." id="hospitalSearch">
                            </div>
                            <div class="col-lg-3">
                                <select class="form-select" id="cityFilter">
                                    <option value="">Select City</option>
                                    <option value="New York">New York</option>
                                    <option value="Los Angeles">Los Angeles</option>
                                    <option value="Chicago">Chicago</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-select" id="serviceFilter">
                                    <option value="">All Services</option>
                                    <option value="testing">COVID Testing</option>
                                    <option value="vaccination">Vaccination</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-primary w-100" onclick="filterHospitals()">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="hospitalsList">
                <div class="col-lg-6" data-city="New York" data-service="both">
                    <div class="hospital-card">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="text-primary mb-2">City General Hospital</h4>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    123 Main Street, New York, NY 10001
                                </p>
                                <div class="mb-3">
                                    <span class="badge bg-success me-2">COVID Testing</span>
                                    <span class="badge bg-primary me-2">Vaccination</span>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary btn-sm" onclick="openBookingModal('test', 'City General Hospital')">
                                        <i class="fas fa-vial me-1"></i>Book Test
                                    </button>
                                    <button class="btn btn-success btn-sm" onclick="openBookingModal('vaccination', 'City General Hospital')">
                                        <i class="fas fa-syringe me-1"></i>Book Vaccination
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="hospital-icon">
                                    <i class="fas fa-hospital"></i>
                                </div>
                                <div class="mt-3">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <small class="text-muted">4.8 (245 reviews)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>