<?php 
  
    
    require('../model/connexion.php');


    function listeTache(){
        
        $user_id = $_SESSION['id'];
    
        $conn = connexion();
        $sql = "select * from taches LEFT JOIN  type_taches ON taches.tache_id = type_taches.id where user_id ='$user_id'";
        $stmt = $conn->query($sql);

        $data = $stmt->fetchAll();
        return $data;
        
    
    }

    function addTache($TypeTache ,$interval,$occurence,$user_id){
        $conn = connexion();
        $data = [
            'TypeTache' => $TypeTache,
            'interval' => $interval,
            'occurence' => $occurence,
            'create_date' => date('jj/mm/aaaa'),
            'statut' => 'en cours',
            'user_id' => $user_id
    

        ];

        $sql = "INSERT INTO taches (TypeTache,interval,occurence,create_date,statut,user_id) 
            values(:TypeTache,:interval,:occurence,:create_date,:statut,:user_id) "; 

       
    
        $stmt = $conn->prepare($sql);
        
        
        $stmt->execute($data);

        // Fermeture de la connexion
        $conn = null;
    }

?>