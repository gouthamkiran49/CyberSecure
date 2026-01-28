<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: signup.php");
    exit();
}

$name     = trim($_POST['name'] ?? '');
$email    = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

if ($name === '' || $email === '' || $password === '') {
    die("All fields are required.");
}

/* Check if email already exists */
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "<script>alert('Email already registered'); window.location.href='signup.php';</script>";
    exit();
}
$check->close();

/* Hash password */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

/* Insert user WITH name */
$stmt = $conn->prepare(
    "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $name, $email, $hashedPassword);

if ($stmt->execute()) {
    echo "<script>alert('Signup successful. Please login.'); window.location.href='login.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?><?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: signup.php");
    exit();
}

$name     = trim($_POST['name'] ?? '');
$email    = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

if ($name === '' || $email === '' || $password === '') {
    die("All fields are required.");
}

/* Check if email already exists */
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "<script>alert('Email already registered'); window.location.href='signup.php';</script>";
    exit();
}
$check->close();

/* Hash password */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

/* Insert user WITH name */
$stmt = $conn->prepare(
    "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $name, $email, $hashedPassword);

if ($stmt->execute()) {
    echo "<script>alert('Signup successful. Please login.'); window.location.href='login.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?><?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: signup.php");
    exit();
}

$name     = trim($_POST['name'] ?? '');
$email    = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

if ($name === '' || $email === '' || $password === '') {
    die("All fields are required.");
}

/* Check if email already exists */
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "<script>alert('Email already registered'); window.location.href='signup.php';</script>";
    exit();
}
$check->close();

/* Hash password */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

/* Insert user WITH name */
$stmt = $conn->prepare(
    "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $name, $email, $hashedPassword);

if ($stmt->execute()) {
    echo "<script>alert('Signup successful. Please login.'); window.location.href='login.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>