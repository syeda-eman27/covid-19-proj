<?php
// login.php file
session_start();
require_once 'db_connect.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    $table = '';
    $redirect_path = '';
    
    switch ($user_type) {
        case 'admin':
            $table = 'admins';
            $redirect_path = 'admin/dashboard.php';
            break;
        case 'hospital':
            $table = 'hospitals';
            $redirect_path = 'hospital/dashboard.php';
            break;
        case 'patient':
            $table = 'users'; // 'users' table is for patients
            $redirect_path = 'patient/dashboard.php';
            break;
        default:
            $error = "Invalid user type selected.";
            break;
    }

    if ($table != '') {
        $sql = "SELECT id, name, password FROM $table WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $name, $hashed_password);
            $stmt->fetch();
            
            if (password_verify($password, $hashed_password)) {
                // Password is correct, start a new session
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $name;
                $_SESSION['user_type'] = $user_type;
                header("location: $redirect_path");
                exit();
            } else {
                $error = "The password you entered was not valid.";
            }
        } else {
            $error = "No account found with that email.";
        }
        $stmt->close();
    }
}
$conn->close();

include 'header.php';
?>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="service-card p-5">
                    <h2 class="text-center mb-4">Login to Your Account</h2>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="user_type" class="form-label">Login As</label>
                            <select id="user_type" name="user_type" class="form-select" required>
                                <option value="patient">Patient</option>
                                <option value="hospital">Hospital</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Don't have an account? <a href="register.php">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>