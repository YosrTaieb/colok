<?php
// Inclure votre modèle et vos fonctions
require('../model/taches.php');

// Vérifier si une session est active
session_start();

// Contrôleur pour la page de liste des tâches
function listeTachesController(){
    // Appeler la fonction pour obtenir la liste des tâches
    $taches = listeTache();

    // Inclure la vue correspondante pour afficher les tâches
    include('../views/mesTaches.php');
}

// Contrôleur pour la page d'ajout d'une nouvelle tâche
function ajouterTacheController(){
    // Vérifier si l'utilisateur est connecté (a une session active)
    if(isset($_SESSION['id'])){
        // Récupérer les données de formulaire (par exemple, depuis POST)
        $tache_id = $_POST['tache_id'];
        $interval = $_POST['interval'];
        $occurence = $_POST['occurence'];
        $user_id = $_SESSION['id'];

        // Appeler la fonction pour ajouter une tâche
        addTache($tache_id, $interval, $occurence, $user_id);
    }

    // Rediriger vers la page de liste des tâches (ou une autre page)
    header('Location: mesTaches.php');
    exit;
}

// Autres contrôleurs pour les actions que vous souhaitez réaliser

// Exemple de vérification de l'action demandée dans l'URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'liste':
            listeTachesController();
            break;
        case 'ajouter':
            ajouterTacheController();
            break;
        // Ajoutez d'autres actions au besoin
    }
}
