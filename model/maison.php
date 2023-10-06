<?php 


include('connexion.php');


function addMaison($adresse,$ville,$code_postal,$superficie,$nb_colocataire,$description,$room,$isAdmin,$IscuisineEquipee,$Isjardin,$chambre_meuble,$Isclimatisation,$salleDeBainPartage){

    $conn = connexion();
    $data = [
        'adresse' => $adresse,
        'ville' =>$ville,
        'code_postal' => $code_postal,
        'superficie' => $superficie,
        'nb_colocataire' => $nb_colocataire,
        'description' => $description,
        'isAdmin' =>$isAdmin,
        'nb_room'=>$room,
        'IscuisineEquipee' => $IscuisineEquipee,
        'Isjardin' => $Isjardin,
        'chambre_meuble' => $chambre_meuble,
        'Isclimatisation' => $Isclimatisation,
        'salleDeBainPartage' => $salleDeBainPartage 
    ];
    $sql = "INSERT INTO maison (adresse,ville,code_postal,superficie,nb_colocataire,description,nb_room,isAdmin,IscuisineEquipee,Isjardin,chambre_meuble,Isclimatisation,salleDeBainPartage) 
    values(:adresse,:ville,:code_postal,:superficie,:nb_colocataire,:description,:nb_room,:isAdmin,:IscuisineEquipee,:Isjardin,:chambre_meuble,:Isclimatisation,:salleDeBainPartage)";

    $stmt = $conn->prepare($sql);
            
            
    $stmt->execute($data);

    // Fermeture de la connexion
    $conn = null;

}

?>