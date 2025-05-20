
<?php
$host = 'localhost';
$db   = 'classroom_system';
$user = 'root';
$pass = ''; // Your MySQL password
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
