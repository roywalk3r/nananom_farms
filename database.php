<?php
require_once '/config/config.php';

$hostname = env('DB_HOST', 'localhost');
$username = env('DB_USER', 'root');
$password = env('DB_PASS', '');
$database = env('DB_NAME', 'nananom');

// Step 1: Connect to MySQL without selecting a database
$dbConn = new mysqli($hostname, $username, $password);

// Check connection
if ($dbConn->connect_error) {
    die("Connection failed: " . $dbConn->connect_error);
}

// Step 2: Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS `$database`";
if ($dbConn->query($sql) === TRUE) {
    echo "✅ Database '$database' created or already exists.\n";
} else {
    die("❌ Error creating database: " . $dbConn->error . "\n");
}

// Step 3: Connect again, this time selecting the database
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection again
if ($conn->connect_error) {
    die("❌ Connection to '$database' failed: " . $conn->connect_error);
}

echo "✅ Connected to '$database' successfully.\n";
