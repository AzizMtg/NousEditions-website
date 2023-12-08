<?php
// Extract the data from the $contribution object
$name = "Mariem Ouertani";
$message = "In a secluded mountain town, strange occurrences begin to haunt the residents. A dense mist rolls in unexpectedly, cloaking the surroundings in an eerie veil, bringing with it inexplicable whispers that seem to echo ancient secrets. As the mist thickens, a group of townsfolk find themselves trapped within its confines, cut off from the outside world.



";
//$etat = "non traitee"; // Include the fetched etat_contribution
$id="90";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.book-details {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.book-details h2 {
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
}

.book-info {
    padding: 10px;
    text-align: center; /* Center align contents */
}

.book-info h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.book-info p {
    font-size: 16px;
    line-height: 1.6;
}

/* Style for buttons */
form {
    margin-top: 20px; /* Add space above buttons */
}

input[type="submit"] {
    background-color: #4CAF50; /* Green background for Valider */
    border: none;
    color: white;
    padding: 15px 30px; /* Increased padding for larger buttons */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px; /* Larger font size */
    cursor: pointer;
    border-radius: 8px; /* Slightly rounded corners */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

input[name="delete"] { /* Targeting the Supprimer button by its name attribute */
    background-color: #ff0000; /* Red background for Supprimer */
}

input[type="submit"]:hover {
    background-color: #45a049; /* Darker green on hover */
}

input[name="delete"]:hover {
    background-color: #ff3333; /* Darker red on hover for Supprimer */
}

.backoffice-button {
    display: block;
    width: 150px;
    margin: 20px auto;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    background-color: #007bff; /* Blue color for the button */
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.backoffice-button:hover {
    background-color: #0056b3; /* Darker blue on hover */
}


        
    </style>

    <title>Book Details</title>
    <!-- Your CSS and other head elements here -->
</head>
<body>
    <div class="book-details">
        <h2>Book Details</h2>
        <div class="book-info">
            <h3><?php echo "Book Author : " . $name; ?></h3>
            <p><strong>Book Description:</strong></p>
            <p><?php echo $message; ?></p>
            
            
            <!-- Validate button -->
            <form action="validate_contribution.php" method="POST">
                <input type="hidden" name="contribution_id" value="<?php echo $id; ?>">
                <input type="submit" name="validate" value="Valider">
            </form>

            <!-- Delete button -->
            <form action="delete_contribution.php" method="POST" onsubmit="return confirm('Confirmez-vous votre intention de supprimer complètement cette contribution de votre base de données, ce qui entraînerait sa perte définitive ? Êtes-vous certain(e) de cette action ??');">
                <input type="hidden" name="contribution_id" value="<?php echo $id; ?>">
                <input type="submit" name="delete" value="Ne Pas Valider">
            </form>
            <a href="/../View/soft-ui-dashboard-main/pages/contrubution.php" class="backoffice-button">Retour a l'arriere</a>
        </div>
    </div>

    <script>
        function confirmDeletion() {
            if (confirm('Confirmez-vous votre intention de supprimer complètement cette contribution de votre base de données, ce qui entraînerait sa perte définitive ? Êtes-vous certain(e) de cette action ??')) {
                document.getElementById('deleteForm').submit();
            } else {
                return false; // Prevents form submission if 'annuler' is clicked
            }
        }
    </script>
</body>
</html>
