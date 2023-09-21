<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="accueil.php">Accueil</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="inscriptionUser.php">Créer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="afficherUser.php">Afficher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Formulaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Gestion de contact/views/listeDeContact.php">Afficher les contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Autre action</a>
        </li>
      </ul>
      <?php
       if(isset($_SESSION['nom'])){
      
        echo '<ul class="navbar-nav ml-auto">';
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="deconnexion.php"><i class="fas fa-user"></i> deconnexion</a>';
        echo '</li>';
        echo '</ul>';
        
      }

      else{ 

     
      ?>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="inscription.php"><i class="fas fa-user"></i> S'inscrire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
        </li>
      </ul>
    <?php
   } ?> 
    </div>
  </div>
</nav>