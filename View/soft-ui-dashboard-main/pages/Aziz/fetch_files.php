<?php
require(__DIR__ . '/../../../../Controller/connection.php');

// Include your PDO connection script here
 
try {
    $stmt = $conn->query("SELECT * FROM contributions"); // Adjust the SQL query as needed

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
