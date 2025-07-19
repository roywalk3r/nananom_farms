<?php

require_once __DIR__ . '/database.php';

try {
    // Get all tables
    $query = $conn->query("SHOW TABLES");
    $tables = $query->fetchAll(PDO::FETCH_COLUMN);

    if (empty($tables)) {
        echo "ℹ️ No tables found to drop.\n";
        exit;
    }

    // Disable foreign key checks temporarily
    $conn->exec("SET FOREIGN_KEY_CHECKS = 0");

    // Drop each table
    foreach ($tables as $table) {
        $conn->exec("DROP TABLE IF EXISTS `$table`");
        echo "🗑️ Dropped table: $table\n";
    }

    // Re-enable foreign key checks
    $conn->exec("SET FOREIGN_KEY_CHECKS = 1");

    echo "✅ All tables dropped successfully.\n";
    file_put_contents(__DIR__ . '/storage/migrations_log.log', "✅ All tables dropped successfully.\n", FILE_APPEND);
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    file_put_contents(__DIR__ . '/storage/migrations_log.log', "❌ Error dropping tables: " . $e->getMessage() . "\n", FILE_APPEND);
    exit;
}
