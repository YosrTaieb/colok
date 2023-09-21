<?php
include('nav.php');
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Créer un user</title>
    <?php require('head.php'); ?>
  

</head>
<body>

<h1>Création d'un nouveau user</h1>

<div class="container w-50 mt-4">
    <form action="../controller/utilisateurController.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="addUser" value="addUser" >
        <div class="container w-50 mt-4">
        
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user" style="border: none;"></i>
                </span>
            </div>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
        </div>
        <input type="hidden" name="addUser" value="addUser">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user" style="border: none;"></i>
                </span>
            </div>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-calendar" style="border: none;"></i>
                </span>
            </div>
            <input type="date" class="form-control" name="date_naissance" id="date_naissance" placeholder="date_naissance">
        </div>
        

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user" style="border: none;"></i>
                </span>
            </div>
            <input type="file" class="form-control" name="photo" id="photo" placeholder="photo de profil">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-lock" style="border: none;"></i>
                </span>
            </div>
            <input type="text" class="form-control" name="allergies" id="allergies" placeholder="allergies">
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-envelope" style="border: none;"></i>
                </span>
            </div>
            <input type="email" class="form-control" name="email" id="email" placeholder="Adresse e-mail" required>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-lock" style="border: none;"></i>
                </span>
            </div>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-success" name="submit">Créer</button>
    </form>

</body>
</html>

