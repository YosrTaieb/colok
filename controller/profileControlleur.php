<?php
// Inclure le fichier de connexion à la base de données
require_once('../model/connexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $maison_id = (int)$_POST['maison_id']; // Convertir en entier

    if (filter_var($maison_id, FILTER_VALIDATE_INT) !== false && $maison_id > 0) {
        // La valeur de maison_id est un entier positif, vous pouvez l'insérer dans la base de données
        // Vérifier si le formulaire a été soumis
        if (isset($_POST['addProfile'])) {
            // Récupérer les données du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_naissance = $_POST['date_naissance'];
            $email = $_POST['email'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hasher le mot de passe
            $role = $_POST['role'];
            $allergies = $_POST['allergies'];
            $photo_profil = $_FILES['photo_profil']['name'];
            $maison_id = $_POST['maison_id'];

            // Insérer les données dans la base de données
            $conn = connexion();

            $sql = "INSERT INTO utilisateur (nom, prenom, date_naissance, email, mdp, role, allergies, photo_profil, maison_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);

            if ($stmt->execute([$nom, $prenom, $date_naissance, $email, $mdp, $role, $allergies, $photo_profil, $maison_id])) {
                $message = "Utilisateur ajouté avec succès";
                header("Location: ../view/home.php?msg=$message");
                exit;
            } else {
                echo "Échec de l'ajout de l'utilisateur";
            }
        }
    } else {
        // Gérez l'erreur, par exemple en affichant un message à l'utilisateur
        echo "L'ID de la maison doit être un nombre entier positif.";
    }
}
?>
