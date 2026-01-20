<?php
session_start();

// Login check
if (!isset($_SESSION['user'])) {
    header('Location: ../auth/login.php');
    exit;
}

// Role check
if ($_SESSION['user']['role'] !== 'client') {
    header('Location: ../auth/login.php');
    exit;
}

$email = $_SESSION['user']['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Dashboard</title>
</head>
<body>

    <h1>Welcome Client</h1>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>

    <a href="../auth/logout.php">Logout</a>

</body>
</html>
