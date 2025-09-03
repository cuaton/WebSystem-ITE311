<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <div class="bg-secondary p-5 rounded shadow text-white" style="width:400px;">
        <h2 class="text-center">Create Account</h2>
        <?php if(isset($validation)): ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>
        <form action="/registerPost" method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password" name="confpassword" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Create Account</button>
        </form>
        <p class="text-center mt-3">Already have an account? <a href="/login" class="text-info">Login</a></p>
    </div>
</body>
</html>

