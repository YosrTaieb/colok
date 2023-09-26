<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../build/styles/signIn.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/app.js" defer></script>
    <title>Connexion & Inscriptions</title>

    <?php if(isset($_GET['test'])){
        
    } ?>
</head>
<body>

<header class="sticky top-0 z-50 bg-white drop-shadow-md flex items-center justify-between p-4">
    <!-- Icônes à gauche -->
    <div class="flex space-x-12 items-center ml-8">
      <div class="flex items-center">
        <!-- Lien vers la page d'accueil -->
        <a href="../view/signIn.php"><img src="/images/animation_lmyyujs0_small.gif" alt="" style="width: 4rem;"></a>
        <!-- Icône pour les boîtes à idées -->
        <i class="fas fa-lightbulb text-gray-600 hover:text-purple-300 text-2xl"></i>
        <a href="#" class="ml-4 text-gray-600 hover:text-purple-300 text-lg font-semibold">Boîtes à idées</a>
      </div>
      <a href="#" class="ml-12 text-gray-600 hover:text-purple-500 text-lg font-semibold">
        <!-- Icône pour les dépenses -->
        <i class="fas fa-money-bill-wave text-2xl"></i> Dépenses
      </a>
    </div>
    <!-- Logo au centre -->
    <a href="index.html" class="flex items-center">
      <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-32 h-20 mx-auto">
    </a>
    <!-- Icônes à droite -->
    <div class="flex space-x-12 mr-8">
      <a href="#" class="text-gray-600 hover:text-purple-300 text-lg font-semibold">
        <!-- Icône pour le planning -->
        <i class="far fa-calendar text-2xl"></i> Planning
      </a>
      <a href="#" class="text-gray-600 hover:text-purple-300 text-lg font-semibold">
        <!-- Icône pour le quiz -->
        <i class="fas fa-question-circle text-2xl"></i> Quiz
      </a>
      <a href="#" class="text-gray-600 hover:text-purple-300 text-lg font-semibold">
        <!-- Icône pour la déconnexion -->
        <i class="fas fa-sign-out-alt text-2xl"></i> Déconnexion
      </a>
    </div>
  </header>

  <!-- Formulaire de Connexion -->
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="../controller/loginController.php" method="POST" class="sign-in-form">
          <h2 class="title">Se connecter</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Nom d'utilisateur">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="mdp" placeholder="Mot de passe">
          </div>
          <input type="submit" value="Connexion" class="btn-connexion">
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
        
        <form id="sign-up-form" action="../controller/utilisateurController.php" method="POST" class="sign-up-form">
            <input type="hidden" value="addUser" name="addUser">
          <h2 class="title">S'inscrire</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="nom" placeholder="Nom">
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="prenom" placeholder="Prénom">
          </div>
          <div class="input-field">
            <i class="fas fa-calendar"></i>
            <input type="date" name="date_naissance" placeholder="Date de naissance">
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="mdp" placeholder="Mot de passe">
          </div>
          <input type="submit" class="btn " value="S'inscrire">
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
          <button class="btn " id="sign-up-btn">
            S'inscrire
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="">
      </div>
      <!-- Panneau Droit -->
      <div class="panel right-panel">
        <div class="content">
          <h3>Déjà un membre ?</h3>
          <p>
            Connectez-vous à votre compte et accédez à la planification des tâches, aux rappels, et bien plus encore. La gestion des tâches ménagères n'a jamais été aussi simple !
          </p>
          <button class="btn " id="sign-in-btn">
            Se connecter
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="">
      </div>
    </div>
  </div>

</body>
</html>
