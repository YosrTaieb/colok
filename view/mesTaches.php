<?php 
    session_start();
    include('../model/taches.php');
    $taches = listeTache();

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table des tâches</title>
</head>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin: 20px 0;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
        }
    </style>

<body>
    <table>
        <thead>
            <tr>
                <th>Nom de la tâche</th>
                <th>Date de la tâche</th>
                <th>Description</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($taches as $tache){ ?>
                <tr>
                    <td><?php echo $tache['nom'] ?></td>
                    <td><?php echo $tache['creat_date'] ?></td>
                    <td><?php echo $tache['description'] ?></td>
                    <td><?php echo $tache['statut'] ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>
</html>

