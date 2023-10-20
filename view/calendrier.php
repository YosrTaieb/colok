<?php
session_start();
include('../model/taches.php');
include('../model/utilisateur.php');

// Vérifiez si 'msg' existe dans la requête GET
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';

$maison_id = isset($_SESSION['maison_id']) ? $_SESSION['maison_id'] : null;

if ($maison_id !== null) {
    // La clé 'maison_id' existe dans la session, et sa valeur est maintenant stockée dans $maison_id.
    $utilisateurs = getUserByMaison($maison_id);
} else {
    // La clé 'maison_id' n'existe pas dans la session, redirigez vers signIn.php
    header('Location: signIn.php');
    exit; // Assurez-vous de terminer le script après la redirection
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
    <link rel="stylesheet" href="../schedule/schedule/css/bootstrap.min.css">
    <link rel="stylesheet" href="../schedule/schedule/fullcalendar/lib/main.min.css">
    <script src="../schedule/schedule/fullcalendar/js/jquery-3.6.0.min.js"></script>
    <script src="../schedule/schedule/fullcalendar/lib/main.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../schedule/schedule/fullcalendar/lib/locales/fr.js"></script>
    <script src="../schedule/schedule/fullcalendar/js/script.js"></script>
  
    <!-- <script src="../js/forms.js" defer></script> -->
    <link rel="stylesheet" href="../build/styles/nav.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../build/styles/footer.css" />
    <link rel="stylesheet" href="../build/styles/navCalendar.css" />
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Hubballi&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap");

        :root {
            --bs-primary-rgb: 71, 222, 152 !important;
        }

        html,
        body {
        
            height: 100%;
            width: 100%;
            font-family: "Lato", sans-serif;

        }

        .btn-custom-primary:hover,
        .btn-custom-primary:focus {
            background: #007bff;
        }

        .btn-custom-danger:hover,
        .btn-custom-danger:focus {
            background: #dc3545;
        }

        .btn-custom-secondary:hover,
        .btn-custom-secondary:focus {
            background: #6c757d;
        }

        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>

</head>

<body class="bg-light">

     <?php include("navCalendar.php")?>


    <div style="display: none; background-color: #A7F46A;" id="msg"><h1><?php if (!empty($msg)) { echo $msg; } ?></h1></div>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            
            <div class="col-md-3">
                <div class="card rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                       
                        <h5 class="card-title">Planning formulaire</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="../model/saveCalendar.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="type" class="control-label">Type</label>
                                    <select name="type" id="type">
                                        <option value="tache">Tâche</option>
                                        <option value="evenement">évenement</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="type_tache" class="control-label">Type de tâche</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="type_tache"
                                        id="type_tache" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Titre</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title"
                                        id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for ="description" class="control-label">Déscription</label>
                                    <textarea rows="3"
                                        class="form-control form-control-sm rounded-0" name="description"
                                        id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Début</label>
                                    <input type="datetime-local"
                                        class="form-control form-control-sm rounded-0" name="start_datetime"
                                        id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">Fin</label>
                                    <input type="datetime-local"
                                        class="form-control form-control-sm rounded-0" name="end_datetime"
                                        id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-custom-primary btn-sm rounded-0" type="submit"
                                form="schedule-form"><i class="fa fa-save"></i> Ajouter</button>
                            <button class="btn btn-custom-secondary border btn-sm rounded-0" type="reset"
                                form="schedule-form"><i class="fa fa-reset"></i> Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Planning Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Titre</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Début</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">Fin</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-custom-primary btn-sm rounded-0" id="edit"
                            data-id="">Modifier</button>
                        <button type="button" class="btn btn-custom-danger btn-sm rounded-0" id="delete"
                            data-id="">Supprimer</button>
                        <button type="button" class="btn btn-custom-secondary btn-sm rounded-0"
                            data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php")?>

    <!-- Event Details Modal -->

    <?php 
    $conn = connexion();
    $schedules = $conn->query("SELECT * FROM `schedule_list`");
    $sched_res = [];
    foreach($schedules->fetchAll(PDO::FETCH_ASSOC) as $row){
        $row['sdate'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
        $row['edate'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
        $sched_res[$row['id']] = $row;
    }
    ?>

</body>

<script>
    var scheds = <?= json_encode($sched_res) ?>;
</script>
<script src="../schedule/schedule/fullcalendar/js/script.js">
</script>

</html>
