<?php include 'header.php'; ?>

<!-- Main Content Sections -->
<?php 
$section = isset($_GET['section']) ? $_GET['section'] : 'home';
switch($section) {
    case 'home':
        include 'home.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'services':
        include 'services.php';
        break;
    case 'hospitals':
        include 'hospitals.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    // Admin sections
    case 'admin-dashboard':
        include 'admin/admin-dashboard.php';
        break;
    case 'admin-hospitals':
        include 'admin/admin-hospitals.php';
        break;
    case 'admin-users':
        include 'admin/admin-users.php';
        break;
    case 'admin-bookings':
        include 'admin/admin-bookings.php';
        break;
    case 'admin-reports':
        include 'admin/admin-reports.php';
        break;
    // Patient sections
    case 'patient-dashboard':
        include 'patient/patient-dashboard.php';
        break;
    case 'patient-booking':
        include 'patient/patient-booking.php';
        break;
    case 'patient-history':
        include 'patient/patient-history.php';
        break;
    case 'patient-reports':
        include 'patient/patient-reports.php';
        break;
    case 'patient-certificate':
        include 'patient/patient-certificate.php';
        break;
    // Hospital sections
    case 'hospital-dashboard':
        include 'hospital/hospital-dashboard.php';
        break;
    case 'hospital-profile':
        include 'hospital/hospital-profile.php';
        break;
    case 'hospital-slots':
        include 'hospital/hospital-slots.php';
        break;
    case 'hospital-bookings':
        include 'hospital/hospital-bookings.php';
        break;
    case 'hospital-inventory':
        include 'hospital/hospital-inventory.php';
        break;
    default:
        include 'home.php';
}
?>

<?php include 'footer.php'; ?>