<?php
declare(strict_types=1);

// Enable mysqli exception mode so errors are caught properly
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function get_db_connection(): mysqli {
    $config = require __DIR__ . '/config.php';
    
    $conn = new mysqli(
        $config['host'],
        $config['username'],
        $config['password'],
        $config['database']
    );
    
    $conn->set_charset('utf8mb4');
    
    return $conn;
}