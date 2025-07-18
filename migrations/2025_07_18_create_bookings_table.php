<?php
return function($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS bookings (
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_name VARCHAR(100) NOT NULL,
        email VARCHAR(100),
        phone VARCHAR(20),
        service VARCHAR(100),
        appointment_date DATE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        users_id INT,
        FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE SET NULL
    )";
    if ($conn->query($sql) === TRUE) {
        echo "✅ Created 'bookings' table\n";
    } else {
        echo " Error creating 'bookings': " . $conn->error . "\n";
    }
};
