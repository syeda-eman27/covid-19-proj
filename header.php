<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Test & Vaccination Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php?section=home">
                <i class="fas fa-heartbeat me-2"></i>
                COVID Care System
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?section=home">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?section=about">
                            <i class="fas fa-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?section=services">
                            <i class="fas fa-concierge-bell me-1"></i>Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?section=hospitals">
                            <i class="fas fa-hospital me-1"></i>Hospitals
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?section=contact">
                            <i class="fas fa-envelope me-1"></i>Contact
                        </a>
                    </li>
                </ul>
                
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-cog me-1"></i>Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?section=admin-dashboard">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a></li>
                            <li><a class="dropdown-item" href="index.php?section=admin-hospitals">
                                <i class="fas fa-hospital-alt me-2"></i>Manage Hospitals
                            </a></li>
                            <li><a class="dropdown-item" href="index.php?section=admin-users">
                                <i class="fas fa-users me-2"></i>Manage Users
                            </a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="patientDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user me-1"></i>Patient
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?section=patient-dashboard">
                                <i class="fas fa-user-circle me-2"></i>My Dashboard
                            </a></li>
                            <li><a class="dropdown-item" href="index.php?section=patient-booking">
                                <i class="fas fa-calendar-plus me-2"></i>Book Appointment
                            </a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <button class="btn btn-primary btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt me-1"></i>Login
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>