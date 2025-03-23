<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('DB_SERVER', '34.230.189.100');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Hau15102004@');
define('DB_NAME', 'chatapp_db');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("❌ ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "✅ Connected successfully!";
}
?>
