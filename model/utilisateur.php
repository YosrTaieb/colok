<?php 
    require('../model/connexion.php');


    function addUtilisateur($nom,$prenom,$date_naissance,$email,$mdp){
        $conn = connexion();
        $data = [
            'nom' => $nom,
            'prenom' => $prenom,
            'date_naissance' => $date_naissance,
            'email' => $email,
            'mdp' => password_hash($mdp,PASSWORD_DEFAULT),
            'role' => 'colocataire'
    

        ];

        $sql = "INSERT INTO utilisateur (nom,prenom,date_naissance,email,mdp,role) 
            values(:nom,:prenom,:date_naissance,:email,:mdp,:role) "; 

       
    
        $stmt = $conn->prepare($sql);
        
        
        $stmt->execute($data);

        // Fermeture de la connexion
        $conn = null;
    }


?>