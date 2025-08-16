document.addEventListener('DOMContentLoaded', function() {
    initializeCharts();
    animateCounters();
    setMinDate();
    setupFormHandlers();
});

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
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
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
                } else {
                    counter.textContent = Math.ceil(current) + '+';
                }
                requestAnimationFrame(updateCounter);
            }
        };
        
        updateCounter();
    });
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
            alert('Message sent successfully! We will get back to you soon.');
            this.reset();
        });
    }

    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Appointment booked successfully! Confirmation details sent to your email.');
            this.reset();
        });
    }

    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Login successful! Redirecting to dashboard...');
            setTimeout(() => {
                bootstrap.Modal.getInstance(document.getElementById('loginModal')).hide();
                window.location.href = 'index.php?section=patient-dashboard';
            }, 1500);
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

document.getElementById('hospitalSearch')?.addEventListener('input', filterHospitals);
document.getElementById('cityFilter')?.addEventListener('change', filterHospitals);
document.getElementById('serviceFilter')?.addEventListener('change', filterHospitals);


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

