<?php
session_start();

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

if ($username === 'Rayahen' && $password === '106729165') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
}

header('Location: login.php?error=1');
exit();
