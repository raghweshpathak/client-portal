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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">RKTEN Admin Panel</span>
    <a href="../auth/logout.php" class="btn btn-sm btn-outline-light">Logout</a>
</nav>

<div class="container mt-4">
    <h3 class="mb-4">Welcome Admin</h3>
    <p class="text-muted">Email: <?php echo htmlspecialchars($email); ?></p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Total Clients</h5>
                    <h2>12</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Active Projects</h5>
                    <h2>5</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Messages</h5>
                    <h2>3</h2>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

