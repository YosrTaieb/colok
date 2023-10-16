<?php

session_start();

require_once('../model/connexion.php');



if(isset($_POST['email'])){
    var_dump($_POST['email']);
    $conn = connexion();

    $email = $_POST['email'];

    $password = $_POST['mdp'];



    $stmt = $conn->query("SELECT * FROM utilisateur  WHERE email ='$email'");

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($data);

    if ($data[0] && password_verify($password, $data[0]['mdp'])) {

    
        $_SESSION['id'] = $data[0]['id'];
        $_SESSION["nom"] = $data[0]['nom'];
        $_SESSION["prenom"] = $data[0]['prenom'];
        $_SESSION["email"] = $data[0]['email'];
        $_SESSION["age"] = $data[0]['age'];
        $_SESSION["maison_id"] = $data[0]['maison_id'];




        header('location:../index.php');

    } else {

        echo 'failed';

    }

}


