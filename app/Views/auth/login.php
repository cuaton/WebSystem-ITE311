<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <div class="bg-secondary p-5 rounded shadow text-white" style="width:400px;">
        <h2 class="text-center">Sign In</h2>
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>
        <form action="/loginPost" method="post">
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Login</button>
        </form>
        <p class="text-center mt-3">Don't have an account? <a href="/register" class="text-info">Register</a></p>
    </div>
</body>
</html>


