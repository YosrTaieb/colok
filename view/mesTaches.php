<?php
session_start();
include('../model/taches.php');
$taches = listeTache();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Table des tâches</title>
    <!-- le headC empeche ma modal d'apparaitre CHERCHER SOLUTION -->
    <link rel="stylesheet" type="text/css" href="../build/styles/nav.css">
    <link rel="stylesheet" href="../build/styles/mesTaches.css">
    <link rel="stylesheet" href="../build/styles/footer.css">
    <!-- liens pour nav -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>
<?php require('nav.php'); ?>

    <div class="container-titre">
        <h2>Mes tâches</h2>
        <div class="trait"></div>
    </div> 

    <div class="table-users">
   

        <table cellspacing="0">
            <thead>
                <tr>
                    <th>Nom de la tâche</th>
                    <th>Date de la tâche</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th width="230">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($taches as $tache) { ?>
                    <tr>
                        <td><?php echo $tache['nom'] ?></td>
                        <td><?php echo $tache['creat_date'] ?></td>
                        <td><?php echo $tache['description'] ?></td>
                        <td><?php echo $tache['statut'] ?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $tache['id'] ?>">
                                    <div class="container-modal">
                                        <div>
                                            <a class="btn" href="#open-modal">Voir</a>
                                        </div>
                                    </div>
                                </button>
                                <a href="../controller/tachesControlleur.php?id=<?php echo $tache['id']; ?>">🗑️</a>
                            </div>
                        </td>
                    </tr>
                                <div id="open-modal" class="modal-window">
                                    <div id="myModal<?php echo $tache['id'] ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <a href="#" title="Close" class="modal-close">Fermer</a>
                                            <h1><?php echo $tache['nom'] ?></h1>
                                            <div><?php echo $tache['description'] ?></div>                       

                                            <div class="modal-body">
                                                <form action="">
                                                    <select name="statut" id="" selected="<?php echo $tache['statut'] ?>">
                                                        <option value="en cours">En cours</option>
                                                        <option value="terminé">Terminé</option>
                                                        <option value="en suspens">En suspens</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                <?php } ?>
            </tbody>
        </table>
    </div>


    <?php require('footer.php'); ?>


</body>

</html>