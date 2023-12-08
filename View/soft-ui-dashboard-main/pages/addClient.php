<?php

//include '../Controller/ClientC.php';
include '../../../Controller/KhalilTriki/ClientC.php';
$error = "";

// create client
$client = null;

// create an instance of the controller

$clientC = new ClientC();
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["address"]) &&
    isset($_POST["dob"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    isset($_POST["telephone"]) 
) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
   

    if (
        !empty($firstName) &&
        !empty($lastName) &&
        !empty($address) &&
        !empty($dob) &&
        !empty($email) &&
        !empty($password) &&
        !empty($telephone) 
        


    ) {
        // Vous pouvez également effectuer une validation plus poussée des données ici

        $client = new Client(
            null,
            $firstName,
            $lastName,
            $address,
            new DateTime($dob),
            $password=password_hash($password,PASSWORD_DEFAULT),
            $email,
            $telephone,
            1

            
        );

        $clientC->addClient($client);
        //header('Location: ListClients.php');
    } else {
        $error = "Missing information";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <a href="ListClients.php">Back to list</a>
    <hr>

    <div id="error">
        <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
    </div>

    <form action="" method="POST" id="myForm">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="firstName">First Name:</label>
                </td>
                <td><input type="text" name="firstName" id="firstName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="lastName">Last Name:</label>
                </td>
                <td><input type="text" name="lastName" id="lastName" maxlength="20"></td>
            </tr>
            <tr>
                
                <td>
                    <label for="address">Address:</label>
                </td>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date of Birth:</label>
                </td>
                <td>
                    <input type="date" name="dob" id="dob">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="email" name="email" id="email" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password:</label>
                </td>
                <td>
                    <input type="password" name="password" id="password" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telephone">télèphone:</label>
                </td>
                <td>
                    <input type="text" name="telephone" id="telephone" maxlength="50">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <script>
        let myForm=document.getELementByID('myForm');
        myForm.addEventListener('submit',function(e){
            let my
        }

        );
    </script> 
</body>

</html>