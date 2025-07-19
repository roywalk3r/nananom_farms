

<?php
return function($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS sessions (
            id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        login_time DATETIME,
        logout_time DATETIME,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    ) ENGINE=InnoDB";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Created 'sessions' table\n";
    } else {
        echo "❌ Error creating 'sessions': " . $conn->error . "\n";
    }
};
