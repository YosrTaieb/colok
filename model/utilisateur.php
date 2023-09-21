<?php 
    require('connexion.php');


    function addUtilisateur($nom,$prenom,$date_naissance,$email,$mdp,$allergies,$photo){
        $conn = connexion();
        $data = [
            'nom' => $nom,
            'prenom' => $prenom,
            'date_naissance' => $date_naissance,
            'email' => $email,
            'mdp' => password_hash($mdp,PASSWORD_DEFAULT),
            'role' => 'colocataire',
            'allergies' => $allergies,
            'photo' => $photo,

        ];

        $sql = "INSERT INTO utilisateur (nom,prenom,date_naissance,email,mdp,role,allergies,photo_profil) 
            values(:nom,:prenom,:date_naissance,:email,:mdp,:role,:allergies,:photo) "; 

       
    
        $stmt = $conn->prepare($sql);
        
        
        $stmt->execute($data);

        // Fermeture de la connexion
        $conn = null;
    }


?>