<?php
$host = "localhost"; // Change this to your database host, usually "localhost"
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "nous editions"; // Change this to your actual database name

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
