<?php
// setup.php
$serverName = "127.0.0.1";
$username   = "root";
$password   = "";
$database   = "nananom";

$conn = new mysqli($serverName, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS `$database` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if ($conn->query($sql) === TRUE) {
    echo "✅ Database '$database' created or already exists.\n";
} else {
    echo "❌ Error creating database: " . $conn->error . "\n";
}

$conn->close();
