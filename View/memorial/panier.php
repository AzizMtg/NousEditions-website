<!---------------- ADDD LIL BASE IMTA3 IL COMMANDE ------------------------------------->
<?php
session_start();
//echo $_SESSION['email'];
//echo $_SESSION['idClient']; 
//echo $_SESSION['address'];

?>
<?php

echo "<a  class='btn btn-secondary' href='javascript:window.print()'>Imprimer</a>";

$idclient=$_SESSION['idClient']; 

if (isset($_GET["id"])&& isset($_GET["name"])&& isset($_GET["price"])&&isset($_GET["quantity"])&&isset($_GET["prixtotal"])  ) {
    $ids = $_GET["id"];
    $numberOfIds = count($ids);

    $names = $_GET["name"];
   
    $prices = $_GET["price"];

    $quantit = $_GET["quantity"];
    
    $prixtotale = $_GET["prixtotal"];


    $bookQuantities = array();

    echo "<h1 style='font-family: Arial, sans-serif;
    font-size: 28px;
    color: #333;
    text-align: center;
    margin-top: 20px;'>Votre commande :</h1>";

    echo '<style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin-bottom: 20px;
            }
            table, th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
            }
          </style>';

    echo '<center><table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>';

    // Check if quantities exist before using them
    if (isset($quantit)) {
        // Iterate through the book details and update the quantities for repeating book names
        for ($i = 0; $i < $numberOfIds; $i++) {
            $bookName = $names[$i];

            if (array_key_exists($bookName, $bookQuantities)) {
                // If the book name already exists in the array, sum up the quantities
                $bookQuantities[$bookName]['quantity'] += $quantit[$i];
            } else {
                // Otherwise, initialize the quantity for the book name
                $bookQuantities[$bookName] = array(
                    'id' => $ids[$i],
                    'price' => $prices[$i],
                    'quantity' => $quantit[$i]
                );
            }
        }

        // Display the summarized book information in the table
        foreach ($bookQuantities as $bookName => $bookDetails) {
            echo '<tr>
                    <td>' . $bookDetails['id'] . '</td>
                    <td>' . $bookName . '</td>
                    <td>' . $bookDetails['price'] . '</td>
                    <td>' . $bookDetails['quantity'] . '</td>
                  </tr>';
        }
    } else {
        echo "<tr><td colspan='4'>No quantities available.</td></tr>";
    }

    echo '</table></center>';

} else {
    echo "wa7da fihom youkomdfgdfg";
}
/****************** inconectiw 3ala nous edition bd ***************** */
// Définir les paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'nous editions';
$username = 'root';
$password = '';

try {
    // Créer une instance de PDO pour établir la connexion à la base de données
    $db = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
    
    echo "Connecté";
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

// Utilisez $db pour exécuter vos requêtes PDO

/********************* na3mlou add lil command fi tableau il command *********** */
    function addCommands($prixtotale , $db)
{
    $sql = "INSERT INTO commands (prixtotale) VALUES (:prixtotale)";


    try {
        $query = $db->prepare($sql);
        $query->execute([
            'prixtotale' => $prixtotale,
        ]);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }




}
addCommands($prixtotale ,$db) ; 

/************************inarjou a5er commande  */

function showLastCommand($db) {
    $sql = "SELECT * FROM commands ORDER BY idcommand DESC LIMIT 1"; // Récupérer la dernière commande

   

    try {
        $query = $db->prepare($sql);
        $query->execute();

        $lastCommand = $query->fetch(); // Récupérer la dernière commande

        return $lastCommand;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
$lastCommand =  showLastCommand($db) ; 
//var_dump($lastCommand) ; 
echo $lastCommand['idcommand'] ; 


/**************************************************** na3lou add il tableua fasil  */
function addFasil($idliv, $idcommand, $quantite, $idclient, $db) {
    $sql = "INSERT INTO fasil (idl, idc, quantite, idclient) VALUES (:idl, :idc, :quantite, :idclient)";

    try {
        $query = $db->prepare($sql);
        $query->execute([
            'idl' => $idliv,
            'idc' => $idcommand,
            'quantite' => $quantite,
            'idclient' => $idclient,
        ]);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

// Example usage within your loop
for ($i = 0; $i < $numberOfIds; $i++) {
    addFasil($ids[$i], $lastCommand['idcommand'], $quantit[$i], $idclient, $db);
}



?>