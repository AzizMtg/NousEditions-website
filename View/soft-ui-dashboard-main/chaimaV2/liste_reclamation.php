   
<?php
include '../../../../Controller/chaimaC/Gestion_Reclamation.php';


$reclamation_gestion = new reclamation_gestion();
$list = $reclamation_gestion->listReclamation();
?>


<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>RECLAMATION</h1>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> nom <span class="icon-arrow">&UpArrow;</span></th>
                        <th> prenom <span class="icon-arrow">&UpArrow;</span></th>
                        <th> email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> sujet <span class="icon-arrow">&UpArrow;</span></th>
                        <th> message <span class="icon-arrow">&UpArrow;</span></th>
                        <th> supprimer <span class="icon-arrow">&UpArrow;</span></th>

                    </tr>
                </thead>
                <tbody>       
                <?php
                 foreach ($list as $reclamation) {
                ?>
                    <tr>
                        <td><?= $reclamation['id']; ?></td>
                        <td><?= $reclamation['nom']; ?></td>
                        <td><?= $reclamation['prenom']; ?></td>
                        <td><a href="#"><?= $reclamation['email']; ?></a></td>
                        <td><?= $reclamation['sujet']; ?></td>
                        <td><?= $reclamation['message']; ?></td>
                        <td>
                        <a href="delete_reclamation.php?id=<?php echo $reclamation['id']; ?>" onclick="return confirm('Mit2akid it7ib itfasa5 il reclamation ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>
