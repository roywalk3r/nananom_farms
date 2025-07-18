<?php
return function($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS services (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        description TEXT,
        price DECIMAL(10,2),
        users_id INT,
        bookings_id INT,
        FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE SET NULL
        FOREIGN KEY (bookings_id) REFERENCES bookings(id) ON DELETE SET NULL
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Created 'services' table\n";
    } else {
        echo "Error creating 'services': " . $conn->error . "\n";
    }
};
