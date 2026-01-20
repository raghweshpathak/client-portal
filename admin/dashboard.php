<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header('Location: ../auth/login.php');
    exit;
}
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
