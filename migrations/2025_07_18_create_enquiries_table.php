<?php
return function($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS enquiries (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        message TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        users_id INT,
        FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE SET NULL
    )";
    if ($conn->query($sql) === TRUE) {
        echo "✅ Created 'enquiries' table\n";
    } else {
        echo "Error creating 'enquiries': " . $conn->error . "\n";
    }
};
