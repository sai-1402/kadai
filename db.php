<?php
$host = "localhost";
$user = "root";      // MAMP default username
$pass = "root";      // MAMP default password (or "" if empty)
$dbname = "myapp";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
