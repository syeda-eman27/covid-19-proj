<?php
// header.php file
// session_start(); 
// require_once 'db_connect.php';
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Test & Vaccination Booking System</title>
    
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-heartbeat me-2"></i>
                COVID Care System
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            <i class="fas fa-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">
                            <i class="fas fa-concierge-bell me-1"></i>Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hospitals.php">
                            <i class="fas fa-hospital me-1"></i>Hospitals
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            <i class="fas fa-envelope me-1"></i>Contact
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin'): ?>
                        <!-- Admin Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-cog me-1"></i>Admin
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin/dashboard.php">
                                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                                </a></li>
                                <li><a class="dropdown-item" href="admin/hospitals.php">
                                    <i class="fas fa-hospital-alt me-2"></i>Manage Hospitals
                                </a></li>
                                <li><a class="dropdown-item" href="admin/users.php">
                                    <i class="fas fa-users me-2"></i>Manage Users
                                </a></li>
                                <li><a class="dropdown-item" href="admin/bookings.php">
                                    <i class="fas fa-calendar-check me-2"></i>View Bookings
                                </a></li>
                                <li><a class="dropdown-item" href="admin/reports.php">
                                    <i class="fas fa-chart-bar me-2"></i>Generate Reports
                                </a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'hospital'): ?>
                        <!-- Hospital Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="hospitalDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-hospital me-1"></i>Hospital
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="hospital/dashboard.php">
                                    <i class="fas fa-chart-line me-2"></i>Dashboard
                                </a></li>
                                <li><a class="dropdown-item" href="hospital/profile.php">
                                    <i class="fas fa-building me-2"></i>Manage Profile
                                </a></li>
                                <li><a class="dropdown-item" href="hospital/slots.php">
                                    <i class="fas fa-clock me-2"></i>Manage Slots
                                </a></li>
                                <li><a class="dropdown-item" href="hospital/bookings.php">
                                    <i class="fas fa-list-alt me-2"></i>View Bookings
                                </a></li>
                                <li><a class="dropdown-item" href="hospital/inventory.php">
                                    <i class="fas fa-boxes me-2"></i>Vaccine Inventory
                                </a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'patient'): ?>
                        <!-- Patient Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="patientDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user me-1"></i>Patient
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="patient/dashboard.php">
                                    <i class="fas fa-user-circle me-2"></i>My Dashboard
                                </a></li>
                                <li><a class="dropdown-item" href="patient/booking.php">
                                    <i class="fas fa-calendar-plus me-2"></i>Book Appointment
                                </a></li>
                                <li><a class="dropdown-item" href="patient/history.php">
                                    <i class="fas fa-history me-2"></i>Booking History
                                </a></li>
                                <li><a class="dropdown-item" href="patient/reports.php">
                                    <i class="fas fa-file-medical me-2"></i>Test Reports
                                </a></li>
                                <li><a class="dropdown-item" href="patient/certificate.php">
                                    <i class="fas fa-certificate me-2"></i>Vaccination Certificate
                                </a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if (!isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a href="login.php" class="btn btn-primary btn-sm ms-2">
                                <i class="fas fa-sign-in-alt me-1"></i>Login
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="logout.php" class="btn btn-danger btn-sm ms-2">
                                <i class="fas fa-sign-out-alt me-1"></i>Logout
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>