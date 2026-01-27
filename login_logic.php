<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request");
}

$email = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    die("Email or password missing");
}

$stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows !== 1) {
    die("Invalid credentials (email)");
}

$stmt->bind_result($id, $hashed_password);
$stmt->fetch();

if (!password_verify($password, $hashed_password)) {
    die("Invalid credentials (password)");
}

$_SESSION['user_id'] = $id;
$_SESSION['email'] = $email;

header("Location: dashboard.php");
exit;