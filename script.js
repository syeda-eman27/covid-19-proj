function showSection(sectionId) {
    // This is no longer needed as each section is a separate PHP file
    // The navigation links now directly point to the .php files
}

document.addEventListener('DOMContentLoaded', function() {
    // A simple function to simulate dynamically loaded content
    function loadDummyHospitals() {
        const hospitalList = document.getElementById('hospital-list');
        if (!hospitalList) return;

        const hospitals = [
            { name: 'City Hospital', city: 'Karachi', services: 'test,vaccination', availability: 'Available', status: 'Approved' },
            { name: 'Healthcare Clinic', city: 'Lahore', services: 'test', availability: 'Limited', status: 'Approved' },
            { name: 'Central Medical Center', city: 'Islamabad', services: 'vaccination', availability: 'Full', status: 'Pending' },
            { name: 'Sunrise Hospital', city: 'Karachi', services: 'test,vaccination', availability: 'Available', status: 'Approved' }
        ];

        let html = '';
        hospitals.forEach(hospital => {
            let statusBadge = '';
            if (hospital.status === 'Approved') {
                statusBadge = '<span class="status-badge badge-success">Approved</span>';
            } else if (hospital.status === 'Pending') {
                statusBadge = '<span class="status-badge badge-warning">Pending</span>';
            }
            
            html += `
                <div class="col-lg-4 col-md-6">
                    <div class="hospital-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title">${hospital.name}</h5>
                                <p class="card-subtitle text-muted mb-0">${hospital.city}</p>
                            </div>
                            ${statusBadge}
                        </div>
                        <p class="card-text mb-2">
                            <strong>Services:</strong> 
                            ${hospital.services.split(',').map(s => `<span class="service-tag me-1">${s.trim()}</span>`).join('')}
                        </p>
                        <p class="card-text mb-3"><strong>Availability:</strong> <span class="text-${hospital.availability === 'Available' ? 'success' : 'danger'}">${hospital.availability}</span></p>
                        <a href="patient/booking.php" class="btn btn-primary w-100">Book Appointment</a>
                    </div>
                </div>
            `;
        });
        hospitalList.innerHTML = html;
    }

    loadDummyHospitals();
});
