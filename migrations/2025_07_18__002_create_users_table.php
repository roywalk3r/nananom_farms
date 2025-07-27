<?php
return function($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        phone VARCHAR(15) NOT NULL,
        password VARCHAR(255) NOT NULL,
        role_id INT,
        FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE SET NULL
        )";
    if ($conn->query($sql) === TRUE) {
        echo "Created 'users' table\n";
    } else {
        echo "Error creating 'users': " . $conn->error . "\n";
    }
};