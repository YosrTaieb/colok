<?php

session_start();

require_once('../model/connexion.php');


if(isset($_POST['login'])){

    $conn = connexion();

    $email = $_POST['email'];

    $password = $_POST['mdp'];

    $stmt = $conn->query("SELECT * FROM utilisateur  WHERE email ='$email'");

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    

    if ($data[0] && password_verify($password, $data[0]['mdp'])) {

    

        $_SESSION["nom"] = $data[0]['nom'];
        $_SESSION["prenom"] = $data[0]['prenom'];
        $_SESSION["email"] = $data[0]['email'];
        $_SESSION["age"] = $data[0]['age'];



        header('location:../index.php');

    } else {

        echo 'failed';

    }

}


