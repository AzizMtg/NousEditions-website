<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_nu'];
    $address = $_POST['subject'];
    $message = $_POST['message'];
    $cat = $_POST['categorie'];
    // Define the absolute path to the uploads directory
$uploadsDirectory = realpath(__DIR__ . '/uploads') . '/';

// Handle file upload
$file_name = basename($_FILES['myfile']['name']);
$file_path = $uploadsDirectory . $file_name;

// Move the uploaded file to the destination directory
if (move_uploaded_file($_FILES['myfile']['tmp_name'], $file_path)) {
    // File moved successfully
    // You can now use $file_path in your database insertion logic or other processing
    echo "File uploaded successfully!";
} else {
    // Handle the case where file movement failed
    echo "File upload failed!";
}


    try {
        // Insert data into the database using prepared statement
        $sql = "INSERT INTO contributions (name, email, phone_number, address, message, file_path, categorie) VALUES (:name, :email, :phone_number, :address, :message, :file_path, :categorie)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':file_path', $file_path);
        $stmt->bindParam(':categorie', $cat);


        $stmt->execute();
        echo "Record inserted successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$conn = null;
?>
