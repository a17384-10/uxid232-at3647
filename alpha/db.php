<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

// Enable strict error reporting for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($db, 'utf8mb4');
} catch (mysqli_sql_exception $e) {
    exit("Database connection failed: " . htmlspecialchars($e->getMessage()));
}