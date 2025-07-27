<?php
/*
 * Backend for login
 */

require __DIR__ .'/../session.php';
session_start();

function send_json($data, $status = 200) {
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

// Check if the user is already logged in
if (is_logged_in()) {
    send_json(['success' => false, 'message' => 'Already logged in.'], 400);
}

 require_once '../../database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    send_json(['success' => false, 'message' => 'Method Not Allowed'], 405);
}

// Input validation
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = $_POST['password'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($password)) {
    send_json(['success' => false, 'message' => 'Invalid email or password.'], 400);
}

// Prepare and execute
$stmt = $conn->prepare('SELECT id, name, email, password, role_id FROM users WHERE email = ? LIMIT 1');
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

error_log("Trying login for: $email");
error_log("Entered password: $password");
error_log("Stored hash: " . $user['password']);
error_log("Verify result: " . (password_verify($password, $user['password']) ? 'true' : 'false'));

if ($user && password_verify($password, $user['password'])) {
    login($user['id']);
    // Optionally set more session data here
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['role_id'] = $user['role_id'];

    send_json(['success' => true, 'message' => 'Login successful.']);
} else {
    send_json(['success' => false, 'message' => 'Invalid email or password.'], 401);
}