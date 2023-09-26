<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../build/styles/signIn.css" />
    <script src="../js/app.js" defer></script>
    <title>Connexion & Inscriptions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header class="sticky top-0 z-50 bg-white drop-shadow-md flex items-center justify-between p-4">
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
      <a href="signIn.php?test=test" class="text-gray-600 hover:text-purple-300 text-lg font-semibold">
        <!-- Icône pour la déconnexion -->
        <i class="fas fa-sign-out-alt text-2xl"></i> Déconnexion
      </a>
      <?php
        if(isset($_SESSION['nom'])){
          echo '<a href="deconnexion.php" class="text-gray-600 hover:text-purple-300 text-lg font-semibold">';
          echo '<i class="fas fa-user"></i> Déconnexion';
          echo '</a>';
        } else {
          echo '<a href="signIn.php#" class="text-gray-600 hover:text-purple-300 text-lg font-semibold">';
          echo '<i class="fas fa-user"></i> S\'inscrire/se connecter';
          echo '</a>';
      
        }
      ?> 
    </div>
  </header>

  <!-- Le reste de votre contenu HTML ici -->
</body>
</html>
