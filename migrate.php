<?php

require_once __DIR__ . '/database.php';

echo "✅ Database '$database' created or already exists.\n";
echo "✅ Connected to '$database' successfully.\n";

$migrationsDir = __DIR__ . '/migrations';

if (!is_dir($migrationsDir)) {
    die("❌ Migrations directory not found.\n");
}

// Get all PHP files from the migrations directory
$migrationFiles = glob($migrationsDir . '/*.php');

if (empty($migrationFiles)) {
    echo "⚠️ No migration files found.\n";
    exit;
}

foreach ($migrationFiles as $file) {
    // Each migration file should return a function
    $migration = require $file;

    if (is_callable($migration)) {
        $migration($conn);
    } else {
        echo "❌ Skipped $file: Not a valid migration (did not return a function).\n";
    }
}
