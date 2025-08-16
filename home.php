<?php
// Pricing data array
$pricingPlans = [
    [
        "plan" => "Basic",
        "price" => "24.50",
        "features" => [
            "Diagnostic Services",
            "Professional Consultation",
            "Tooth Implants",
            "Surgical Extractions",
            "Teeth Whitening"
        ]
    ],
    [
        "plan" => "Standard",
        "price" => "34.50",
        "features" => [
            "Diagnostic Services",
            "Professional Consultation",
            "Tooth Implants",
            "Surgical Extractions",
            "Teeth Whitening"
        ]
    ],
    [
        "plan" => "Premium",
        "price" => "54.50",
        "features" => [
            "Diagnostic Services",
            "Professional Consultation",
            "Tooth Implants",
            "Surgical Extractions",
            "Teeth Whitening"
        ]
    ],
    [
        "plan" => "Platinum",
        "price" => "89.50",
        "features" => [
            "Diagnostic Services",
            "Professional Consultation",
            "Tooth Implants",
            "Surgical Extractions",
            "Teeth Whitening"
        ]
    ]
];
?>
<div class="page-section active">
    <section class="hero-section">
        <div class="container">
            <div class="row align-item-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Safe & Easy<br>
                            <span style="color: #10b981;">COVID-19</span><br>
                            Testing & Vaccination
                        </h1>
                        <p class="hero-subtitle">
                            Book your COVID-19 test or vaccination appointment with trusted healthcare providers.
                            Fast, secure, and convenient online booking system.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="index.php?section=patient-booking" class="btn btn-light btn-lg">
                                <i class="fas fa-calendar-plus me-2"></i>Book Now
                            </a>
                            <a href="index.php?section=hospitals" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-search me-2"></i>Find Hospitals
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <i class="fas fa-shield-virus" style="font-size: 15rem; opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section my-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <i class="fas fa-hospital text-primary fa-2x mb-3"></i>
                        <div class="stat-number" id="hospitalCount">150+</div>
                        <div class="stat-label">Partner Hospitals</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <i class="fas fa-syringe text-success fa-2x mb-3"></i>
                        <div class="stat-number" id="vaccinationCount">50K+</div>
                        <div class="stat-label">Vaccinations Completed</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <i class="fas fa-vial text-info fa-2x mb-3"></i>
                        <div class="stat-number" id="testCount">25K+</div>
                        <div class="stat-label">Tests Conducted</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <i class="fas fa-users text-warning fa-2x mb-3"></i>
                        <div class="stat-number" id="userCount">100K+</div>
                        <div class="stat-label">Registered Users</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Why Choose Our Platform?</h2>
                    <p class="section-subtitle">
                        Experience seamless healthcare booking with our advanced features
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4 class="mb-3">24/7 Booking</h4>
                        <p class="text-muted">
                            Book your appointments anytime, anywhere with our 24/7 online booking system.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="mb-3">Secure Platform</h4>
                        <p class="text-muted">
                            Your health data is protected with enterprise-grade security and encryption.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 class="mb-3">Mobile Friendly</h4>
                        <p class="text-muted">
                            Access our platform from any device - desktop, tablet, or smartphone.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h4 class="mb-3">Smart Notifications</h4>
                        <p class="text-muted">
                            Get reminders and updates about your appointments via SMS and email.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4 class="mb-3">Expert Care</h4>
                        <p class="text-muted">
                            Connect with certified healthcare professionals and trusted facilities.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <h4 class="mb-3">Digital Reports</h4>
                        <p class="text-muted">
                            Download and share your test results and vaccination certificates instantly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="rwap">

        <div class="tabs-wrap">
            <div class="tabs" role="tablist" id="tabs">
                <div class="tab active" role="tab" data-target="neurology"><i class="fa-solid fa-brain"></i> Neurology</div>
                <div class="tab" role="tab" data-target="surgical"><i class="fa-solid fa-scalpel"></i> Surgical</div>
                <div class="tab" role="tab" data-target="dental"><i class="fa-solid fa-tooth"></i> Dental</div>
                <div class="tab" role="tab" data-target="ophthalmology"><i class="fa-solid fa-eye"></i> Ophthalmology</div>
                <div class="tab" role="tab" data-target="cardiology"><i class="fa-solid fa-heartbeat"></i> Cardiology</div>
            </div>

            <div class="indicator" id="indicator"></div>
        </div>

        <div class="panel" aria-live="polite">
            <div class="left">

                <div id="neurology" class="tab-content show">
                    <h2 class="heading">Neurological Departments</h2>
                    <p class="desc">Comprehensive neurological care — diagnostics, therapy and rehabilitation delivered by experienced specialists.</p>

                    <div class="services">
                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-clinic-medical"></i></div>
                            <div>
                                <h4>Outpatient Clinic</h4>
                                <p>Doctor consultations, medication follow-up and referral services.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-vials"></i></div>
                            <div>
                                <h4>Neuro Diagnostics</h4>
                                <p>EEG, nerve conduction studies and specialized lab testing.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-notes-medical"></i></div>
                            <div>
                                <h4>Rehabilitation</h4>
                                <p>Physiotherapy and cognitive rehabilitation plans.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-hospital-user"></i></div>
                            <div>
                                <h4>Inpatient Care</h4>
                                <p>Round-the-clock monitoring for acute neurological cases.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-brain"></i></div>
                            <div>
                                <h4>Neuro Surgery</h4>
                                <p>Advanced surgical treatment for brain and spine disorders.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-head-side-virus"></i></div>
                            <div>
                                <h4>Neuro Emergency</h4>
                                <p>24/7 emergency care for stroke and critical neurological conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="surgical" class="tab-content" aria-hidden="true">
                    <h2 class="heading">Surgical Departments</h2>
                    <p class="desc">Modern operation theaters and post-op care managed by our surgical team.</p>

                    <div class="services">
                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-user-nurse"></i></div>
                            <div>
                                <h4>Operation Theater</h4>
                                <p>Fully equipped theaters following strict infection controls.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-clinic-medical"></i></div>
                            <div>
                                <h4>Outpatient Clinic</h4>
                                <p>Doctor consultations, medication follow-up and referral services.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-vials"></i></div>
                            <div>
                                <h4>Surgical Diagnostics</h4>
                                <p>Advanced imaging, pathology, and surgical lab testing.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-notes-medical"></i></div>
                            <div>
                                <h4>Post-Operative Care</h4>
                                <p>Specialized care for recovery and wound management.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-hospital-user"></i></div>
                            <div>
                                <h4>Inpatient Surgery Unit</h4>
                                <p>Round-the-clock monitoring for surgical patients.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-briefcase-medical"></i></div>
                            <div>
                                <h4>Emergency Surgery</h4>
                                <p>24/7 emergency surgical interventions for critical cases.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dental" class="tab-content" aria-hidden="true">
                    <h2 class="heading">Dental Departments</h2>
                    <p class="desc">Tooth care, cleaning, orthodontics and prosthodontics information.</p>

                    <div class="services">
                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h4>Cleanings</h4>
                                <p>Regular dental cleaning & checkups for healthy teeth.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-syringe"></i></div>
                            <div>
                                <h4>Fillings</h4>
                                <p>Quick and painless cavity fillings using modern materials.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-teeth"></i></div>
                            <div>
                                <h4>Orthodontics</h4>
                                <p>Braces and aligners to straighten teeth and improve bite.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
                            <div>
                                <h4>Prosthodontics</h4>
                                <p>Dental crowns, bridges, and dentures for missing teeth.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-x-ray"></i></div>
                            <div>
                                <h4>Dental X-Rays</h4>
                                <p>Accurate imaging for diagnosis and treatment planning.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-user-md"></i></div>
                            <div>
                                <h4>Emergency Dental Care</h4>
                                <p>Immediate treatment for toothaches, injuries, and infections.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="ophthalmology" class="tab-content" aria-hidden="true">
                    <h2 class="heading">Ophthalmology</h2>
                    <p class="desc">Eye checkups, surgeries and optical services provided by expert ophthalmologists.</p>

                    <div class="services">
                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-eye"></i></div>
                            <div>
                                <h4>Eye Exams</h4>
                                <p>Complete eye examinations and treatments for all ages.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-glasses"></i></div>
                            <div>
                                <h4>Prescription Glasses</h4>
                                <p>Customized lenses and stylish frames to improve vision.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-low-vision"></i></div>
                            <div>
                                <h4>Low Vision Care</h4>
                                <p>Specialized aids and therapy for low vision patients.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-microscope"></i></div>
                            <div>
                                <h4>Eye Surgery</h4>
                                <p>Advanced cataract, LASIK, and retinal surgeries.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-eye-dropper"></i></div>
                            <div>
                                <h4>Dry Eye Treatment</h4>
                                <p>Effective therapies and medications for dry eye syndrome.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-user-nurse"></i></div>
                            <div>
                                <h4>Emergency Eye Care</h4>
                                <p>24/7 emergency services for eye injuries and sudden vision loss.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cardiology" class="tab-content" aria-hidden="true">
                    <h2 class="heading">Cardiology</h2>
                    <p class="desc">Heart-related diagnostics, treatments, and preventive care by expert cardiologists.</p>

                    <div class="services">
                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-heart"></i></div>
                            <div>
                                <h4>Cardiac Clinic</h4>
                                <p>Consultation and monitoring for heart patients.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-stethoscope"></i></div>
                            <div>
                                <h4>Heart Checkups</h4>
                                <p>Comprehensive heart health assessments and screenings.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-heart-pulse"></i></div>
                            <div>
                                <h4>ECG & ECHO</h4>
                                <p>Electrocardiogram and echocardiography for heart diagnosis.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-procedures"></i></div>
                            <div>
                                <h4>Cardiac Surgery</h4>
                                <p>Bypass, valve replacement, and other advanced heart surgeries.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-pills"></i></div>
                            <div>
                                <h4>Preventive Cardiology</h4>
                                <p>Lifestyle management and medications to prevent heart diseases.</p>
                            </div>
                        </div>

                        <div class="service" data-tilt>
                            <div class="icon"><i class="fa-solid fa-ambulance"></i></div>
                            <div>
                                <h4>Emergency Cardiac Care</h4>
                                <p>24/7 response for heart attacks and critical heart conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="right">
                <img class="hero" src="img/imd1.jpg" alt="Department image (replace)">
                <div class="meta-card">
                    <div style="display:flex;justify-content:space-between;align-items:center">
                        <div><strong>Call to Book</strong>
                            <div style="color:gray;margin-top:6px">+92 300 1234567</div>
                        </div>
                        <div class="pill">Open: Mon–Sat</div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- COVID Guidelines Section -->
    <section class="section" style="background: var(--light-bg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">COVID-19 Safety Guidelines</h2>
                    <p class="section-subtitle">
                        Follow these important guidelines to stay safe and protect others
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="guidelines-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-head-side-mask"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Wear a Mask</h5>
                                <p class="text-muted mb-0">Always wear a face mask in public spaces and healthcare facilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="guidelines-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-hands-wash"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Hand Hygiene</h5>
                                <p class="text-muted mb-0">Wash your hands frequently with soap for at least 20 seconds.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="guidelines-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-people-arrows"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Social Distance</h5>
                                <p class="text-muted mb-0">Maintain at least 6 feet distance from others in public.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="guidelines-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Monitor Health</h5>
                                <p class="text-muted mb-0">Check your temperature daily and watch for COVID-19 symptoms.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<br>
<section class="wrap">
    <p class="eyebrow">PRICING</p>
    <h1 class="title">Our Pricing</h1>
    <p class="small">
        Separated they live in. A small river named Duden flows by their place and supplies it with the
        necessary regelialia. It is a paradisematic country
    </p>

    <div class="line">
        <?php foreach ($pricingPlans as $plan): ?>
            <div class="card">
                <h3 class="plan"><?= htmlspecialchars($plan["plan"]) ?></h3>
                <div class="price">$<?= htmlspecialchars($plan["price"]) ?> <small>/ session</small></div>
                <ul class="features">
                    <?php foreach ($plan["features"] as $feature): ?>
                        <li><?= htmlspecialchars($feature) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="#" class="btnprice">Get Offer</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>


</div>