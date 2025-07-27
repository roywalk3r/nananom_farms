<?php
// register.php
require_once '../../database.php';
require_once '../session.php';

function send_json($data, $status = 200) {
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    send_json(['success' => false, 'message' => 'Method Not Allowed'], 405);
}

// Get and sanitize form inputs
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

// Validate input
if (empty($username) || empty($email) || empty($phone) || empty($password) || empty($confirm_password)) {
    send_json(['success' => false, 'message' => 'All fields are required.'], 400);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    send_json(['success' => false, 'message' => 'Invalid email address.'], 400);
}

if ($password !== $confirm_password) {
    send_json(['success' => false, 'message' => 'Passwords do not match.'], 400);
}

if (strlen($password) < 6) {
    send_json(['success' => false, 'message' => 'Password must be at least 6 characters.'], 400);
}

// Check if email already exists
$stmt = $conn->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    send_json(['success' => false, 'message' => 'Email is already registered.'], 409);
}

// Insert user
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$role_id = 2;

$stmt = $conn->prepare('INSERT INTO users (name, email, phone, password, role_id) VALUES (?, ?, ?, ?, ?)');
$stmt->bind_param('ssssi', $username, $email, $phone, $hashed_password, $role_id);

if ($stmt->execute()) {
    $user_id = $stmt->insert_id;
    login($user_id);
    $_SESSION['user_name'] = $username;
    $_SESSION['user_email'] = $email;
    $_SESSION['role_id'] = $role_id;
    send_json(['success' => true, 'message' => 'Registration successful.']);
   
} else {
    send_json(['success' => false, 'message' => 'Registration failed. Try again later.'], 500);
}
$stmt->close();
$conn->close();