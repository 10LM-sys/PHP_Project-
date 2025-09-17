<?php
// dashboard.php
session_start();
if (!isset($_SESSION['user'])) {
header('Location: index.php');
exit();
}
$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
<div class="container">
<a class="navbar-brand" href="#">My App</a>
<div class="ms-auto">
<a href="logout.php" class="btn btn-outline-secondary">Logout</a>
</div>
</div>
</nav>


<main class="container py-5">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card shadow-sm">
<div class="card-body">
<h3 class="card-title">Welcome, <span class="text-primary"><?= htmlspecialchars($user) ?></span></h3>
<p class="card-text">This is your dashboard. Everything is connected and ready.</p>
</div>
</div>
</div>
</div>
</main>
</body>
</html>