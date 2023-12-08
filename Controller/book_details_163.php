<?php
// Extract the data from the $contribution object
$name = "rabiyostor";
$message = "kksssssssss";
//$etat = "non traitee"; // Include the fetched etat_contribution
$id="163";
$email="benhamadi@gmail.com";

$templateContent = file_get_contents('Valideremail.php');

                    // Replace placeholders with actual values
                    $templateContent = str_replace('$name', $name, $templateContent);
                    $templateContent = str_replace('$email', $email, $templateContent);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-style: italic; /* 'Roboto' font with a fallback to sans-serif */
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
}

/* Existing CSS */
/* Adjusted CSS for the layout */
.book-details {
    width: 80%;
    margin: 20px auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden; /* Hide overflowing content */
    position: relative; /* Establish positioning context */
}

.book-details img {
    width: 100%; /* Set image width to fill its container */
    display: block; /* Make the image a block element */
}

.text-content {
    position: absolute; /* Position the text content over the image */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7); /* White background with opacity */
    padding: 20px;
    box-sizing: border-box; /* Include padding in width/height */
    overflow-y: auto; /* Enable vertical scrolling if content exceeds height */
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

.book-details {
            opacity: 0;
            animation: fadeInAnimation 1s ease forwards;
        }

        @keyframes fadeInAnimation {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .backoffice-button,
        input[type="submit"] {
            transition: background-color 0.3s ease;
        }

        .backoffice-button:hover,
        input[type="submit"]:hover {
            background-color: #555; /* Change to a darker color on hover */
            /* You can modify other properties for hover effect */
        }

        
    </style>

    <title>Book Details</title>
    <!-- Your CSS and other head elements here -->
</head>
<body>
    <div class="book-details" >

        <img src="leaves-1076307_1280.jpg" alt="Book Image">
        <div class="text-content">
            <h2>Book Details</h2>
            <div class="book-info">
            <h3><?php echo "Book Author : " . $name; ?></h3>
            <p id="book-description"><strong>Book Description:</strong></p>
           <!-- <p><?php //echo $message; ?></p>
            
            
            <!-- Validate button -->
            <form action="validate_contribution.php" method="POST">
                <input type="hidden" name="contribution_id" value="<?php echo $id; ?>">
                <input type="hidden" name="contribution_email" value="<?php echo $email; ?>">
                <input type="submit" name="validate" value="Valider">
            </form>

            <!-- Delete button -->
            <form action="delete_contribution.php" method="POST" onsubmit="return confirm('Confirmez-vous votre intention de supprimer complètement cette contribution de votre base de données, ce qui entraînerait sa perte définitive ? Êtes-vous certain(e) de cette action ??');">
                <input type="hidden" name="contribution_id" value="<?php echo $id; ?>">
                <input type="hidden" name="contribution_email" value="<?php echo $email; ?>">
                <input type="submit" name="delete" value="Ne Pas Valider">
            </form>
            <a href="/../View/soft-ui-dashboard-main/pages/contrubution.php" class="backoffice-button">Retour a l'arriere</a>

            <!-- FORM FOR EMAIL -->
          <!-- Your existing book details content -->

<form action="Valideremail.php" method="POST" style="display: none;">
    <input type="hidden" name="receiver_email" value="<?php echo $email; ?>">
    <textarea name="user_message" placeholder="Enter your message"></textarea>
    <button type="submit">Send Email</button>
</form>

        </div>
    </div>

    <script>
        function showEmailForm() {
            // Show the email form when 'Valider' button is clicked
            document.getElementById('emailForm').style.display = 'block';
            return true; // Allow form submission
        }
    </script>


    <script>
        function confirmDeletion() {
            if (confirm('Confirmez-vous votre intention de supprimer complètement cette contribution de votre base de données, ce qui entraînerait sa perte définitive ? Êtes-vous certain(e) de cette action ??')) {
                document.getElementById('deleteForm').submit();
            } else {
                return false; // Prevents form submission if 'annuler' is clicked
            }
        }



        const descriptionText = "<?php echo $message; ?>"; // Fetch your book description here
        let i = 0;
        const speed = 20; // Adjust typing speed (milliseconds)
        const descriptionElement = document.getElementById("book-description");

        function typeWriter() {
            if (i < descriptionText.length) {
                descriptionElement.innerHTML += descriptionText.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }

        // Trigger typing animation when the page loads
        window.addEventListener('load', typeWriter);
    </script>

    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</body>
</html>
