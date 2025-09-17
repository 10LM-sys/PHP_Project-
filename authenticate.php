<?php
// authenticate.php
session_start();


$users = [
'ahmedzoghla19@gmail.com' => '1892004'
];


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
header('Location: index.php');
exit();
}


$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$remember = isset($_POST['remember']);


if ($email === '' || $password === '') {
$_SESSION['error'] = 'Please fill all fields.';
header('Location: index.php');
exit();
}


// Check credentials
if (isset($users[$email]) && $users[$email] === $password) {
// Login success
$_SESSION['user'] = $email;


// If remember checked, set a cookie (7 days)
if ($remember) {
setcookie('remember_user', $email, time() + 60 * 60 * 24 * 7, '/');
} else {
setcookie('remember_user', '', time() - 3600, '/');
}


header('Location: dashboard.php');
exit();
} else {
$_SESSION['error'] = 'Email or password is incorrect.';
header('Location: index.php');
exit();
}
