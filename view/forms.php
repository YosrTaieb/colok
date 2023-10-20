<?php session_start();
    require_once('../model/utilisateur.php');
    $user = getUser($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../build/styles/forms.css" />
    <script src="../js/forms.js" defer></script>
    <link rel="stylesheet" href="../build/styles/nav.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../sass/styles/nav.scss" />
    <script src="../js/app.js"defer></script>
    <link rel="stylesheet" href="../build/styles/bell.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formulaire d'inscription</title>
  </head>
  <body>

  <?php include("nav.php")?>
   
    <form action="../controller/maisonController.php" method="POST" class="form">

      <input type="hidden" name="addMaison">
      <div class="container-title z-40">
    <h1 class="page-title">Profil maison</h1>
    <div class="trait"></div>
  </div>
      <!-- <h1 class="text-center">Formulaire d'inscription</h1> -->
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Profil Maison"></div>
        <div class="progress-step" data-title="Supplément d'information"></div>
       
        <div class="progress-step" data-title="Charte"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
          <div class="display">
            <div class="display-input">
          <div class="input-group">
            <label for="house-area">Surface</label>
            <input type="number" name="house-area" id="house-area" placeholder="Surface de la maison"/>
          </div>
          <div class="input-group">
            <label for="room">Pièces</label>
            <input type="number" name="room" id="room" placeholder="Nombre de pièces"/>
          </div>
          

          <div class="input-group">
            <label for="bedroom">Chambres</label>
            <input type="number" name="bedroom" id="bedroom" default="0" placeholder="Nombre de chambres"/>
          </div>
          <div class="input-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" placeholder="Adresse"/>
          </div>
          <div class="input-group">
            <label for="code_postal">Code postal</label>
            <input type="text" name="code_postal" id="code_postal" placeholder="Code Postal"/>
          </div>
          <div class="input-group">
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" placeholder="Ville" />
          </div>
          <div class="input-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="65" rows="10" placeholder="Description"></textarea>
          </div>

        </div>
  </div>
  <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Suivant</a>
        </div>
  </div>
        
      </div>
     
      <div class="form-step">
      <div class="profile-picture">
        <img src="../assets/images/profile_img.png" alt="" />
      </div>
      <div class="container-checkbox">
<div class="container">
            <select name="isCuisineEquipee" id="">
              <option value="oui">Oui</option>
              <option value="non">Non</option>
            </select>
            <span>Cuisine équipée</span>
</div>
<div class="container">
            <select name="jardin" id="">
              <option value="oui">Oui</option>
              <option value="non">Non</option>
            </select>
            <span>Jardin</span>
</div>
<div class="container">
            <select name="isClim" id="">
              <option value="oui">Oui</option>
              <option value="non">Non</option>
            </select>
            <span>Climatisation</span>
</div>
<div class="container">
            <select name="isMeuble" id="">
              <option value="oui">Oui</option>
              <option value="non">Non</option>
            </select>
            <span>Chambre meublée</span>
</div>
<div class="container">
            <select name="isBainPartage" id="">
              <option value="oui">Oui</option>
              <option value="non">Non</option>
            </select>
            <span>Salle de bain partagée</span>
</div>
</div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Précédent</a>
          <a href="#" class="btn btn-next">Suivant</a>
        </div>
      </div>
  
      </div>
      <div class="form-step">
        <div class="rules-container">
        <h2 class="rules-title">Charte - Règlement intérieur</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
        <div>
        <div>
          
          <label class="rules-label" for="confirmRules">
          <input
            class="checkbox"
            type="checkbox"
            name="confirmRules"
            id="confirmRules"
          />  
          J'accepte la charte du règlement intérieur</label>

        </div>
        <div>
          <label class="rules-label" for="confirmCondition">
          <input
            class="checkbox"
            type="checkbox"
            name="confirmCondition"
            id="confirmCondition"
          />
          J'accepte les conditions d'utilisation</label>
        </div>
      </div>
      </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Précédent</a>
          <input type="submit" value="Submit" class="btn" />
        </div>
      </div>
    </form>
    <?php require('footer.php'); ?>
  </body>
</html>