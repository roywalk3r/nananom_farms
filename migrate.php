<?php
require 'database.php';

$migrationsDir = __DIR__ . '/migrations';
$logFile = __DIR__ . '/migration_log.txt';

if (!file_exists($logFile)) {
    file_put_contents($logFile, '');
}

$applied = explode("\n", trim(file_get_contents($logFile)));
$allFiles = array_diff(scandir($migrationsDir), ['.', '..']);

foreach ($allFiles as $file) {
    if (!in_array($file, $applied)) {
        echo "Running migration: $file\n";
        $migration = require "$migrationsDir/$file";
        $migration($conn);
        file_put_contents($logFile, $file . "\n", FILE_APPEND);
    }
}

$conn->close();
