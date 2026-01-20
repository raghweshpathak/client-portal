<?php
session_start();

// Not logged in
if (!isset($_SESSION['user'])) {
    header('Location: ../auth/login.php');
    exit;
}

// Role check
if ($_SESSION['user']['role'] !== 'admin') {
    header('Location: ../auth/login.php');
    exit;
}

$email = $_SESSION['user']['email'];
?>

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>
  <h2>Welcome Admin</h2>
  <p>Email: <?php echo $_SESSION['user']['email']; ?></p>
  <a href="../auth/logout.php">Logout</a>
</body>
</html>
