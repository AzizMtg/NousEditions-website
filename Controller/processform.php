<?php
//AZIZ HETHI KHEDMET AZIZ
include 'connection.php';
include '../Model/AzizM/classecontribution.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a new instance of the Contribution class with form data
    $contribution = new Contribution($_POST['name'], $_POST['email'], $_POST['phone_nu'], $_POST['subject'], $_POST['message'], $_POST['categorie']);

    // Define the absolute path to the uploads directory
    $uploadsDirectory = realpath(__DIR__ . '/uploads') . '/';

    // Handle file upload
    $file_name = basename($_FILES['myfile']['name']);
    $file_path = $uploadsDirectory . $file_name;

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $file_path)) {
        // File moved successfully
        echo "File uploaded successfully!";
    } else {
        // Handle the case where file movement failed
        echo "File upload failed!";
    }

    try {
        // Insert data into the database using prepared statement
        $sql = "INSERT INTO contributions (name, email, phone_number, address, message, file_path, categorie) VALUES (:name, :email, :phone_number, :address, :message, :file_path, :categorie)";
        $stmt = $conn->prepare($sql);

        // Bind parameters from the Contribution object
        $stmt->bindParam(':name', $contribution->name);
        $stmt->bindParam(':email', $contribution->email);
        $stmt->bindParam(':phone_number', $contribution->phone_number);
        $stmt->bindParam(':address', $contribution->address);
        $stmt->bindParam(':message', $contribution->message);
        $stmt->bindParam(':file_path', $file_path);
        $stmt->bindParam(':categorie', $contribution->categorie);

        $stmt->execute();
        echo "Record inserted successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$conn = null;

?>
