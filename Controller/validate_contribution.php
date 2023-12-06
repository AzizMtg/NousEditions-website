<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contribution_id']) && isset($_POST['contribution_email'])) {

    $contribution_id = $_POST['contribution_id'];
    $email=$_POST['contribution_email'];

    try {
        // Update etat_contribution to 'valide' for the specified contribution ID
        $sql = "UPDATE contributions SET etat_contribution = 'valide' WHERE id = :contribution_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':contribution_id', $contribution_id);
        $stmt->execute();
        header("Location: emailval.php?email=" . urlencode($email));
        //header("Location: /../View/soft-ui-dashboard-main/pages/contrubution.php"); // Redirect to back office or other appropriate page
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$conn = null;
?>
