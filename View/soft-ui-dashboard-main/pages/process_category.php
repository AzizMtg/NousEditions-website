<?php
// Database connection configuration (replace with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nous editions";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form is submitted and process the data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize user inputs
        $category_name = $_POST['category_name'] ?? '';
        $category_description = $_POST['category_description'] ?? '';

        // Insert new category into the database
        $sql = "INSERT INTO category_table (category_name, category_description) VALUES (:category_name, :category_description)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':category_name', $category_name);
        $stmt->bindParam(':category_description', $category_description);
        $stmt->execute();

        // Redirect after successful insertion (you can redirect to another page)
        header("Location: categorytable.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
