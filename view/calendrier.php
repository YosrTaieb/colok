
<?php
require_once('../model/connexion.php');

// Vérifiez si 'msg' existe dans la requête GET
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../schedule/schedule/css/bootstrap.min.css">
    <link rel="stylesheet" href="../schedule/schedule/fullcalendar/lib/main.min.css">
    <script src="../schedule/schedule/fullcalendar/js/jquery-3.6.0.min.js"></script>
    <script src="../schedule/schedule/fullcalendar/lib/main.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../schedule/schedule/fullcalendar/lib/locales/fr.js"></script>
    <script src="../schedule/schedule/fullcalendar/js/script.js"></script>
   

    
    

    <style>
        :root {
            --bs-primary-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: 'Apple Chancery', cursive;
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
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
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
