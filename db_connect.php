<?php
// db_connect.php
// Place this file in your site's document root (e.g. /htdocs on InfinityFree).
// WARNING: Don't commit real passwords to public GitHub. Use env vars for production.

$DB_HOST = 'sql103.infinityfree.com';
$DB_USER = 'if0_40423098';
$DB_PASS = 'websanjib890';        // <-- CHANGE THIS PASSWORD ASAP
$DB_NAME = 'if0_40423098_experiment1_db';
$DB_PORT = 3306;

// Create mysqli connection
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

// On failure, show a friendly error but avoid leaking credentials in production.
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo "<h2>Database connection error</h2>";
    echo "<p>Unable to connect to the database. Please check DB settings in <code>db_connect.php</code>.</p>";
    // For development only: show error details (remove in production)
    echo "<pre>" . htmlspecialchars($mysqli->connect_error) . "</pre>";
    exit;
}

// Set charset
$mysqli->set_charset('utf8mb4');
