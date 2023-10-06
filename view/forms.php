<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../build/styles/forms.css" />
    <script src="../js/forms.js" defer></script>
    <title>Formulaire d'inscription</title>
  </head>
  <body>
    <form action="../controller/maisonController.php" method="POST" class="form">

      <input type="hidden" name="addMaison">
      <h1 class="text-center">Formulaire d'inscription</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Profil Maison"></div>
        <div class="progress-step" data-title="Supplément d'information"></div>
       
        <div class="progress-step" data-title="Charte"></div>
        <!-- <div class="progress-step" data-title="Password"></div> -->
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
          <div class="display">
            <div class="display-input">
          <div class="input-group">
            <label for="house-area">Surface de la maison</label>
            <input type="number" name="house-area" id="house-area" />
          </div>
          <div class="input-group">
            <label for="room">Pièces</label>
            <input type="number" name="room" id="room" />
          </div>
          

          <div class="input-group">
            <label for="bedroom">Nombre de Chambres</label>
            <input type="number" name="bedroom" id="bedroom" default="0" />
          </div>
          <div class="input-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" />
          </div>
          <div class="input-group">
            <label for="code_postal">Code postal</label>
            <input type="text" name="code_postal" id="code_postal" />
          </div>
          <div class="input-group">
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" />
          </div>
          <div class="input-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="65" rows="10"></textarea>
          </div>

          
          
        </div>
        <!-- <div class="input-checkbox">
          <div class="checkbox-right">
    
    <label for="choice1">
      <input class="checkbox" type="checkbox" id="choice1" name="contact" value="kitchen" />
      Cuisine équipée
    </label>
</div>
<div class="checkbox-right">
    <label for="choice2">
      <input class="checkbox" type="checkbox" id="choice2" name="contact" value="air-conditioning" />
      Climatisation
    </label></div>
<div class="checkbox-right">
    
    <label for="choice3">
      <input class="checkbox" type="checkbox" id="choice3" name="contact" value="room" />
      Chambre meublée
    </label>
</div>
<div class="checkbox-right">
    
    <label for="choice3">
      <input class="checkbox" type="checkbox" id="choice4" name="contact" value="bathroom" />
      Salle de bain partagée
    </label>
</div> -->

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
    <footer class="house">
    <img src="../assets/images/house_footer-cropped.svg" alt="">
</footer>
  </body>
</html>