<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>

    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .email-form {
            width: 50%;
            margin: 100px auto;
            text-align: center;
        }

        textarea {
            display: block;
            margin: 20px auto;
            padding: 10px;
            width: 80%; /* Adjusted width */
            box-sizing: border-box;
            resize: vertical; /* Allow vertical resizing of textarea */
            text-align: center; /* Center text within the textarea */
        }

        .send-button {
            display: block;
            width: 80%; /* Adjusted width */
            margin-top: 20px;
            padding: 15px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            box-sizing: border-box; /* Include padding in width */
        }

        .send-button:hover {
            background-color: #45a049;
        }
</style>
</head>
<body>
    <?php



//HETHI EL REJECTION RAHI 


    // Get the email from the URL parameter
    $email = isset($_GET['email']) ? $_GET['email'] : '';

    // Display the email value (for testing purposes)
    echo "<p>Receiver Email: $email</p>";
    ?>
    <center><h1>Mail pour contribution rejetee : </h1></center>
    <div class="email-form">
    <form action="Rejectemail.php" method="POST">
        <input type="hidden" name="receiver_email" value="<?php echo htmlspecialchars($email); ?>">
        <textarea name="user_message" placeholder="Enter your message"></textarea>
        <button type="submit">Send Email</button>
    </form>
    </div>
</body>
</html>