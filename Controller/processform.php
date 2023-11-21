<?php
include 'connection.php';
include '../Model/AzizM/classecontribution.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a new instance of the Contribution class with form data
    $contribution = new Contribution($_POST['name'], $_POST['email'], $_POST['phone_nu'], $_POST['subject'], $_POST['message'], $_POST['categorie'], $_POST['facebook_link']);

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
        $sql = "INSERT INTO contributions (name, email, phone_number, address, message, file_path, categorie, facebook, etat_contribution) VALUES (:name, :email, :phone_number, :address, :message, :file_path, :categorie, :facebook_link, 'non traitee')";
        $stmt = $conn->prepare($sql);

        // Bind parameters from the Contribution object
        $stmt->bindParam(':name', $contribution->name);
        $stmt->bindParam(':email', $contribution->email);
        $stmt->bindParam(':phone_number', $contribution->phone_number);
        $stmt->bindParam(':address', $contribution->address);
        $stmt->bindParam(':message', $contribution->message);
        $stmt->bindParam(':file_path', $file_path);
        $stmt->bindParam(':categorie', $contribution->categorie);
        $stmt->bindParam(':facebook_link', $contribution->facebook_link);

        $stmt->execute();

        // Get the ID of the last inserted record
        $lastInsertId = $conn->lastInsertId();

        // Fetch etat_contribution for the newly inserted record
        $stmt = $conn->prepare("SELECT etat_contribution FROM contributions WHERE id = :lastInsertId");
        $stmt->bindParam(':lastInsertId', $lastInsertId);
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if a row is fetched
        if ($rows) {
            $etat_contribution = $rows['etat_contribution'];

            // Construct the file name for the new book detail page
            $newBookDetailPage = 'book_details_' . $lastInsertId . '.php';

            // Read the contents of the template file
            $templateContent = file_get_contents('book_details_template.php');

            // Replace placeholders with actual values
            $templateContent = str_replace('$contribution->name', $contribution->name, $templateContent);
            $templateContent = str_replace('$contribution->message', $contribution->message, $templateContent);
            $templateContent = str_replace('$etat_contribution', $etat_contribution, $templateContent);
            $templateContent = str_replace('$contribution_id', $lastInsertId, $templateContent); // Replace with contribution ID

            // Write the modified template content to the new book detail file
            file_put_contents($newBookDetailPage, $templateContent);

            echo "Record inserted successfully";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$conn = null;
?>
