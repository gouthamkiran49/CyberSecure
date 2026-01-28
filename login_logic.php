<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit();
}

$email    = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    die("Email and password required.");
}

/* Fetch name also */
$stmt = $conn->prepare(
    "SELECT name, email, password FROM users WHERE email = ?"
);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    die("Invalid credentials");
}

$user = $result->fetch_assoc();

if (!password_verify($password, $user['password'])) {
    die("Invalid credentials");
}

/* Store identity */
$_SESSION['email'] = $user['email'];
$_SESSION['name']  = $user['name'];

header("Location: dashboard.php");
exit();