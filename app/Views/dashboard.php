<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <div class="bg-secondary p-5 rounded shadow text-white w-50">
        <h2>Dashboard</h2>
        <div class="alert alert-success">
            Welcome, <?= session()->get('email'); ?>!
        </div>
        <p>This is a protected page only visible after login.</p>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
