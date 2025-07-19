<?php

return function($conn) {
    $sql = "CREATE TABLE feedback (
                 id INT AUTO_INCREMENT PRIMARY KEY,
                 customer_name VARCHAR(100),
                 customer_email VARCHAR(100),
             message TEXT NOT NULL,
            rating INT CHECK (rating BETWEEN 1 AND 5),
          submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Created 'feedback' table\n";
    } else {
        echo "❌ Error creating 'feedback': " . $conn->error . "\n";
         }
};
