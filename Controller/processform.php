<?php
include 'connection.php';
include '../Model/AzizM/classecontribution.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'], $_POST['email'], $_POST['phone_nu'], $_POST['subject'], $_POST['message'], $_POST['selected_category'], $_POST['facebook_link'])) {
        $selectedCategory = $_POST['selected_category'];
        list($categoryId, $categoryName) = explode('|', $selectedCategory);
        
        $contribution = new Contribution($_POST['name'], $_POST['email'], $_POST['phone_nu'], $_POST['subject'], $_POST['message'],$categoryName, $_POST['facebook_link'], $categoryId);

        $uploadsDirectory = realpath(__DIR__ . '/uploads') . '/';

        $file_name = basename($_FILES['myfile']['name']);
        $file_path = $uploadsDirectory . $file_name;

        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $file_path)) {

            header("Location: congrats.html");
        } else {
            // Handle the case where file movement failed
            echo "File upload failed!";
        }
            try {
                $sql = "INSERT INTO contributions (name, email, phone_number, address, message, file_path, categorie, facebook, etat_contribution, category_id) 
                        VALUES (:name, :email, :phone_number, :address, :message, :file_path, :categorie, :facebook_link, 'non traitee', :category_id)";
                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':name', $contribution->name);
                $stmt->bindParam(':email', $contribution->email);
                $stmt->bindParam(':phone_number', $contribution->phone_number);
                $stmt->bindParam(':address', $contribution->address);
                $stmt->bindParam(':message', $contribution->message);
                $stmt->bindParam(':file_path', $file_path);
                $stmt->bindParam(':categorie', $contribution->categorie);
                $stmt->bindParam(':category_id', $contribution->category_id);
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
                    $templateContent = str_replace('$contribution_id', $lastInsertId, $templateContent);
                    $templateContent = str_replace('$contribution->email', $contribution->email, $templateContent);
                    // Replace with contribution ID

                    // Write the modified template content to the new book detail file
                    file_put_contents($newBookDetailPage, $templateContent);


                    

                    echo "Record inserted successfully";
                }

            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "File upload failed!";
        }
    } else {
        echo "Missing form data";
    }


$conn = null;
?>
