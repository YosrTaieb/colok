<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha384-Tf2tu7t4f5HyA4vUfo3C9Pj6a0j3IjgQbKT7Ld6g/dsdFdjzk5t01PLj5t5Bk5Kk2"
  crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../build/styles/signIn.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/app.js" defer></script>
    <title>Connexion & Inscriptions</title>

    <?php if(isset($_GET['test'])){
        
    } ?>
    

</head>

<body>
<?php include("nav.php")?>


  <!-- Formulaire de Connexion -->
  <div class="container">

            <div class="forms-container">
                <div class="signin-signup">
                  
                    <!-- Formulaire de Connexion -->
                    <form action="../controller/utilisateurController.php" class="sign-in-form">
                        <h2 class="title">Se connecter</h2>
                 
                        <div class="input-field">
                            <i class="fa fa-envelope"></i>
                            <input type="text" placeholder="Adresse email">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mot de passe">
                        </div>
                        <input type="submit" value="Connexion" class="btn solid">
                        <p class="social-text">Ou connectez-vous avec des réseaux sociaux</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                    <!-- Formulaire d'Inscription -->
                    <form action="../controller/utilisateurController.php" method="post" class="sign-up-form">
                      <input type="hidden" name="addUser"  value="addUser">
                        <h2 class="title">S'inscrire</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Nom" name="nom">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Prénom" name="prenom">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-calendar"></i>
                            <input placeholder="Date de naissance" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date_naissance">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mot de passe" name="mdp">
                        </div>
                        
                        <input type="submit" class="btn" value="S'inscrire">
                        <p class="social-text">Ou inscrivez-vous avec des réseaux sociaux</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Conteneurs des Panneaux (Gauche et Droite) -->
            <div class="panels-container">
                <!-- Panneau Gauche -->
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Nouveau ici ?</h3>
                        <p>
                            Rejoignez notre communauté de colocataires et simplifiez la gestion des tâches ménagères dans votre foyer. Découvrez une nouvelle façon de vivre ensemble harmonieusement.
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            S'inscrire
                        </button>
                    </div>
                    <img src="img/log.svg" class="image" alt=""/>
                </div>
                <!-- Panneau Droit -->
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Déjà un membre ?</h3>
                        <p>
                            Connectez-vous à votre compte et accédez à la planification des tâches, aux rappels, et bien plus encore. La gestion des tâches ménagères n'a jamais été aussi simple !
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Se connecter
                        </button>
                    </div>
                    <img src="img/register.svg" class="image" alt=""/>
                </div>
            </div>
        </div>


</body>
</html>
