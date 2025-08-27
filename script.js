// function showSection(sectionId) {
//     // This is no longer needed as each section is a separate PHP file
//     // The navigation links now directly point to the .php files
// }

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

(function(){
  const tabs = Array.from(document.querySelectorAll('.tab'));
  const indicator = document.getElementById('indicator');
  const tabsWrap = document.querySelector('.tabs');
  const contents = Array.from(document.querySelectorAll('.tab-content'));

  function moveIndicator(el){
    const wrapRect = tabsWrap.getBoundingClientRect();
    const r = el.getBoundingClientRect();
    const left = r.left - wrapRect.left + tabsWrap.scrollLeft;
    indicator.style.left = left + 'px';
    indicator.style.width = r.width + 'px';
  }

  
  const initial = document.querySelector('.tab.active') || tabs[0];
  setTimeout(()=> moveIndicator(initial), 60);

  tabs.forEach(tab=>{
    tab.addEventListener('click', ()=>{
      if(tab.classList.contains('active')) return;
      
      tabs.forEach(t=>t.classList.remove('active'));
      tab.classList.add('active');
      moveIndicator(tab);

  
      const targetId = tab.getAttribute('data-target');
      const current = document.querySelector('.tab-content.show');
      const next = document.getElementById(targetId);
      if(current === next) return;

   
      current.classList.remove('show');
      current.style.opacity = 0;
      current.setAttribute('aria-hidden','true');

      
      setTimeout(()=>{
     
        contents.forEach(c=>{ c.classList.remove('show'); c.style.opacity=0; c.setAttribute('aria-hidden','true'); });
        next.classList.add('show');
        next.setAttribute('aria-hidden','false');
    
        requestAnimationFrame(()=>{ next.style.opacity = 1; });
      }, 220);
    });
  });

  
  window.addEventListener('resize', ()=> {
    const active = document.querySelector('.tab.active') || tabs[0];
    moveIndicator(active);
  });

 
  tabsWrap.addEventListener('scroll', ()=> {
    const active = document.querySelector('.tab.active') || tabs[0];
    if(active) moveIndicator(active);
  });
})();

        let currentSection = 'home';

    
        document.addEventListener('DOMContentLoaded', function() {
            initializeCharts();
            animateCounters();
            setMinDate();
            setupFormHandlers();
        });

    
        function showSection(sectionId) {
          
            document.querySelectorAll('.page-section').forEach(section => {
                section.classList.remove('active');
            });

         
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.add('active');
                currentSection = sectionId;
                
               
                targetSection.classList.add('fade-in');
                
               
                window.scrollTo({ top: 0, behavior: 'smooth' });
                
               
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    bootstrap.Collapse.getOrCreateInstance(navbarCollapse).hide();
                }
            }
        }

       
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        if (counter.textContent.includes('K')) {
                            counter.textContent = Math.ceil(current / 1000) + 'K+';
                        } else if (counter.textContent.includes('M')) {
                            counter.textContent = '$' + (current / 1000000).toFixed(1) + 'M';
                        } else {
                            counter.textContent = Math.ceil(current) + '+';
                        }
                        requestAnimationFrame(updateCounter);
                    }
                };
                
                updateCounter();
            });
        }

     
        function initializeCharts() {
        
            const bookingCtx = document.getElementById('bookingChart');
            if (bookingCtx) {
                new Chart(bookingCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        datasets: [{
                            label: 'Vaccinations',
                            data: [1200, 1900, 3000, 5000, 4200, 6500],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            tension: 0.4
                        }, {
                            label: 'Tests',
                            data: [800, 1400, 2200, 3800, 3200, 4800],
                            borderColor: '#2563eb',
                            backgroundColor: 'rgba(37, 99, 235, 0.1)',
                            tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

            const serviceCtx = document.getElementById('serviceChart');
            if (serviceCtx) {
                new Chart(serviceCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Vaccinations', 'RT-PCR Tests', 'Rapid Tests', 'Antibody Tests'],
                        datasets: [{
                            data: [45, 25, 20, 10],
                            backgroundColor: [
                                '#10b981',
                                '#2563eb',
                                '#0ea5e9',
                                '#f59e0b'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }
        }

       
        function filterHospitals() {
            const searchTerm = document.getElementById('hospitalSearch').value.toLowerCase();
            const cityFilter = document.getElementById('cityFilter').value;
            const serviceFilter = document.getElementById('serviceFilter').value;
            
            const hospitalCards = document.querySelectorAll('#hospitalsList .col-lg-6');
            
            hospitalCards.forEach(card => {
                const hospitalName = card.querySelector('h4').textContent.toLowerCase();
                const city = card.getAttribute('data-city');
                const service = card.getAttribute('data-service');
                
                let showCard = true;
                
                
                if (searchTerm && !hospitalName.includes(searchTerm)) {
                    showCard = false;
                }
                
 
                if (cityFilter && city !== cityFilter) {
                    showCard = false;
                }
                
              
                if (serviceFilter) {
                    if (serviceFilter === 'both' && service !== 'both') {
                        showCard = false;
                    } else if (serviceFilter !== 'both' && service !== serviceFilter && service !== 'both') {
                        showCard = false;
                    }
                }
                
                card.style.display = showCard ? 'block' : 'none';
            });
        }

       
        function openBookingModal(serviceType, hospitalName = '') {
            const modal = new bootstrap.Modal(document.getElementById('bookingModal'));
            const serviceSelect = document.getElementById('modalServiceType');
            const hospitalInput = document.getElementById('modalHospital');
            
            if (serviceType === 'test') {
                serviceSelect.value = 'rt-pcr';
            } else if (serviceType === 'vaccination') {
                serviceSelect.value = 'vaccination';
            }
            
            if (hospitalName) {
                hospitalInput.value = hospitalName;
            }
            
            modal.show();
        }


        function setMinDate() {
            const dateInputs = document.querySelectorAll('input[type="date"]');
            const today = new Date().toISOString().split('T')[0];
            
            dateInputs.forEach(input => {
                input.min = today;
            });
        }

    
        function setupFormHandlers() {
         
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    showNotification('Message sent successfully! We will get back to you soon.', 'success');
                    this.reset();
                });
            }

        
            const bookingForm = document.getElementById('bookingForm');
            if (bookingForm) {
                bookingForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    showNotification('Appointment booked successfully! Confirmation details sent to your email.', 'success');
                    this.reset();
                });
            }

           
            const modalBookingForm = document.getElementById('modalBookingForm');
            if (modalBookingForm) {
                modalBookingForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    showNotification('Appointment booked successfully!', 'success');
                    bootstrap.Modal.getInstance(document.getElementById('bookingModal')).hide();
                    this.reset();
                });
            }

           
            const loginForm = document.getElementById('loginForm');
            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    showNotification('Login successful! Redirecting to dashboard...', 'success');
                    setTimeout(() => {
                        bootstrap.Modal.getInstance(document.getElementById('loginModal')).hide();
                        showSection('patient-dashboard');
                    }, 1500);
                });
            }

       
            const registerForm = document.getElementById('registerForm');
            if (registerForm) {
                registerForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    showNotification('Account created successfully! Please check your email for verification.', 'success');
                    setTimeout(() => {
                        bootstrap.Modal.getInstance(document.getElementById('registerModal')).hide();
                    }, 1500);
                });
            }
        }

    
        function showNotification(message, type = 'info') {
          
            const notification = document.createElement('div');
            notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
            notification.style.cssText = 'top: 100px; right: 20px; z-index: 9999; min-width: 300px;';
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            document.body.appendChild(notification);
        
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 5000);
        }

       
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href').substring(1);
                if (document.getElementById(targetId)) {
                    e.preventDefault();
                    showSection(targetId);
                }
            });
        });

      
        document.getElementById('hospitalSearch')?.addEventListener('input', function() {
            filterHospitals();
        });

        document.getElementById('cityFilter')?.addEventListener('change', function() {
            filterHospitals();
        });

        document.getElementById('serviceFilter')?.addEventListener('change', function() {
            filterHospitals();
        });

      
        function updateBookingSummary() {
            const serviceType = document.getElementById('serviceType')?.value;
            const hospital = document.getElementById('hospitalSelect')?.value;
            const date = document.getElementById('bookingDate')?.value;
            const time = document.getElementById('bookingTime')?.value;
            
            const summaryDiv = document.getElementById('bookingSummary');
            if (summaryDiv && serviceType && hospital && date && time) {
                summaryDiv.innerHTML = `
                    <div class="border-start border-primary border-4 ps-3">
                        <h6 class="text-primary mb-2">Booking Summary</h6>
                        <p class="mb-1"><strong>Service:</strong> ${serviceType.replace('-', ' ').toUpperCase()}</p>
                        <p class="mb-1"><strong>Hospital:</strong> ${hospital.replace('-', ' ')}</p>
                        <p class="mb-1"><strong>Date:</strong> ${new Date(date).toLocaleDateString()}</p>
                        <p class="mb-1"><strong>Time:</strong> ${time}</p>
                        <p class="mb-0 text-success"><strong>Status:</strong> Available</p>
                    </div>
                `;
            }
        }

      
        ['serviceType', 'hospitalSelect', 'bookingDate', 'bookingTime'].forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                element.addEventListener('change', updateBookingSummary);
            }
        });

       
        function addLoadingState(button) {
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Processing...';
            button.disabled = true;
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
            }, 2000);
        }

       
        document.querySelectorAll('.btn-primary, .btn-success').forEach(btn => {
            if (btn.type === 'submit') {
                btn.addEventListener('click', function() {
                    addLoadingState(this);
                });
            }
        });

(function(){
  const tiltElems = document.querySelectorAll('[data-tilt]');
  tiltElems.forEach(el=>{
    const bounds = ()=> el.getBoundingClientRect();
    el.addEventListener('mousemove', (e)=>{
      const b = bounds();
      const px = (e.clientX - b.left) / b.width;
      const py = (e.clientY - b.top) / b.height;
      const rotateY = (px - 0.5) * 8;   
      const rotateX = (0.5 - py) * 8;
      el.style.transform = `translateZ(0) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px)`;
    });
    el.addEventListener('mouseleave', ()=>{
      el.style.transform = '';
    });
    el.addEventListener('mouseenter', ()=>{
      el.style.transition = 'transform .18s ease';
      setTimeout(()=> el.style.transition = '', 220);
    });
  });
})();