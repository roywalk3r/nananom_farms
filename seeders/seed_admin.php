<?php
// seed_admin.php - Seeder for admin user
require_once __DIR__ .'/../database.php';

$adminEmail = 'admin@nananom.com';
$adminName = 'Administrator';
$adminPassword = 'admin1234'; // Change after first login!
$role_id = 1; // 1 = admin

// Check if admin role exists
$roleStmt = $conn->prepare('SELECT id FROM roles WHERE id = ?');
$roleStmt->bind_param('i', $role_id);
$roleStmt->execute();
$roleStmt->store_result();
if ($roleStmt->num_rows === 0) {
    $conn->query("INSERT INTO roles (id, name) VALUES (1, 'admin')");
}

// Check if admin user exists
$stmt = $conn->prepare('SELECT id FROM users WHERE email = ?');
$stmt->bind_param('s', $adminEmail);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows === 0) {
    $hash = password_hash($adminPassword, PASSWORD_DEFAULT);
    $insert = $conn->prepare('INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)');
    $insert->bind_param('sssi', $adminName, $adminEmail, $hash, $role_id);
    if ($insert->execute()) {
        echo "✅ Admin user created: $adminEmail\n";
    } else {
        echo "❌ Failed to create admin user: " . $insert->error . "\n";
    }
} else {
    echo "ℹ️ Admin user already exists.\n";
}