<?php
// register.php - Professional backend registration handler
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

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 6) {
    send_json(['success' => false, 'message' => 'Invalid input. Name, valid email, and password (min 6 chars) required.'], 400);
}

// Check if user exists
$stmt = $conn->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    send_json(['success' => false, 'message' => 'Email already registered.'], 409);
}

$hash = password_hash($password, PASSWORD_DEFAULT);
$role_id = 2; // Default to regular user; adjust as needed
$stmt = $conn->prepare('INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)');
$stmt->bind_param('sssi', $name, $email, $hash, $role_id);
if ($stmt->execute()) {
    $user_id = $stmt->insert_id;
    login($user_id);
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    $_SESSION['role_id'] = $role_id;
    send_json(['success' => true, 'message' => 'Registration successful.']);
} else {
    send_json(['success' => false, 'message' => 'Registration failed. Please contact support.'], 500);
}
