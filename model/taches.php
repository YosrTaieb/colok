
<?php
require('../model/connexion.php');

// Fonction pour lister les tâches de l'utilisateur
function listeTache(){
    // Vérifier si une session est active

    if(isset($_SESSION)){
        $user_id = $_SESSION['id'];
        $conn = connexion();

        // Requête pour obtenir les tâches liées à l'utilisateur actuel
        $sql = "SELECT * FROM taches 
                LEFT JOIN type_taches ON taches.tache_id = type_taches.id 
                WHERE user_id = :user_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();

        $data = $stmt->fetchAll();
        return $data;
    }
}

// Fonction pour ajouter une nouvelle tâche
function addTache($tache_id, $interval, $occurence, $user_id){
    $conn = connexion();

    // Préparation des données à insérer
    $data = [
        'tache_id' => $tache_id,
        'interval' => $interval,
        'occurence' => $occurence,
        'create_date' => date('d/m/Y'), // Corrigé le format de la date
        'statut' => 'en cours',
        'user_id' => $user_id
    ];

    // Requête d'insertion
    $sql = "INSERT INTO taches (tache_id, interval, occurence, create_date, statut, user_id) 
            VALUES (:tache_id, :interval, :occurence, :create_date, :statut, :user_id)";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);

    // Fermeture de la connexion
    $conn = null;
}





?>
