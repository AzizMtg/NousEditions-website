<?php
// Database connection configuration (replace with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nous editions";

// Check if category ID is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get the category ID from the URL parameter and ensure it's an integer
        $category_id = intval($_GET['id']);

        // Prepare SQL statement to delete a category based on its ID
        $sql = "DELETE FROM category_table WHERE category_id = :category_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $stmt->execute();

        // Redirect to the category table after deletion (you can redirect to another page)
        header("Location: categorytable.php");
        exit();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    echo "Invalid category ID";
}
?>
