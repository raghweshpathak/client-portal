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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary px-3">
    <span class="navbar-brand">RKTEN Client Panel</span>
    <a href="../auth/logout.php" class="btn btn-sm btn-outline-light">Logout</a>
</nav>

<div class="container mt-4">
    <h3 class="mb-1">Welcome</h3>
    <p class="text-muted">Email: <?php echo htmlspecialchars($email); ?></p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>My Projects</h6>
                    <h2>2</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Pending Invoices</h6>
                    <h2>1</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Support Tickets</h6>
                    <h2>0</h2>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
