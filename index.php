<?php
// index.php
session_start();
if (isset($_SESSION['user'])) {
header('Location: dashboard.php');
exit();
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign In</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body class="d-flex align-items-center justify-content-center bg-light vh-100">
<main class="w-100" style="max-width: 380px;">
<form id="loginForm" class="p-4 shadow rounded bg-white" action="authenticate.php" method="post" novalidate>
<div class="text-center mb-3">
<img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" width="64" height="64" alt="logo">
<h4 class="mt-2">Welcome back</h4>
</div>


<?php if (isset($_SESSION['error'])): ?>
<div class="alert alert-danger"><?= htmlspecialchars($_SESSION['error']) ?></div>
<?php unset($_SESSION['error']); endif; ?>


<div class="form-floating mb-2">
<input type="email" class="form-control" id="email" name="email" placeholder="ahmedzoghla19@gmail.com" required>
<label for="email">Email address</label>
</div>


<div class="form-floating mb-3">
<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
<label for="password">Password</label>
</div>


<div class="d-flex justify-content-between align-items-center mb-3">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="rememberMe" name="remember">
<label class="form-check-label" for="rememberMe">Remember me</label>
</div>
<a href="#" class="small">Forgot?</a>
</div>


<button class="w-100 btn btn-primary btn-lg" type="submit">Sign in</button>


<p class="mt-4 mb-0 text-center small text-muted">Use: <strong>ahmedzoghla19@gmail.com</strong> / <strong>1892004</strong></p>
</form>
</main>


<script src="script.js"></script>
</body>
</html>