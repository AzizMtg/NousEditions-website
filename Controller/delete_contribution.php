<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contribution_id'])) {
    $contribution_id = $_POST['contribution_id'];

    try {
        // Delete the contribution for the specified ID
        $sql = "DELETE FROM contributions WHERE id = :contribution_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':contribution_id', $contribution_id);
        $stmt->execute();

        header("Location: /../View/soft-ui-dashboard-main/pages/contrubution.php"); // Redirect to back office or other appropriate page
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$conn = null;
?>
