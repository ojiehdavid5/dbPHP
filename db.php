<?php
$host = "localhost";
$username = "root";
$password = ""; // Change if you set one in XAMPP
$database = "usermanager";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "✅ Connected to DB";


?>