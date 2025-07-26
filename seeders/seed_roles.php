<?php
// seed_roles.php - Seeder for default roles
require_once  __DIR__ .'/../database.php';

$roles = [
    1 => 'admin',
    2 => 'user',
    3 => 'manager',
    4 => 'staff',
    5 => 'support',
];

foreach ($roles as $id => $name) {
    $stmt = $conn->prepare('SELECT id FROM roles WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows === 0) {
        $insert = $conn->prepare('INSERT INTO roles (id, name) VALUES (?, ?)');
        $insert->bind_param('is', $id, $name);
        if ($insert->execute()) {
            echo "✅ Role '$name' created.\n";
        } else {
            echo "❌ Failed to create role '$name': " . $insert->error . "\n";
        }
    } else {
        echo "ℹ️ Role '$name' already exists.\n";
    }
}
