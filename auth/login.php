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

                        <form>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" placeholder="client@email.com">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="********">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
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
