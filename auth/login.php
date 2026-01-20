<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $users = [
        'client@email.com' => [
            'password' => 'client123',
            'role' => 'client'
        ],
        'admin@email.com' => [
            'password' => 'admin123',
            'role' => 'admin'
        ],
    ];

    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        $_SESSION['user'] = [
            'email' => $email,
            'role'  => $users[$email]['role']
        ];

        if ($users[$email]['role'] === 'admin') {
            header('Location: ../admin/dashboard.php');
        } else {
            header('Location: ../client/dashboard.php');
        }
        exit;
    } else {
        $error = 'Invalid email or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Portal Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="login-page">

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4">

                <div class="card shadow-sm">
                    <div class="card-body">

                        <h4 class="text-center mb-4">RKTEN Client Portal</h4>

                        <form method="POST" action="">

                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input  type="email"name="email"class="form-control"placeholder="client@email.com"required
>


                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>

                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary w-100">Login</button>

                                    Login
                                </button>
                            </div>
                        </form>

                        <p class="text-center mt-3 small">
                            <a href="#">Forgot password?</a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
