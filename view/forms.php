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
    <form action="#" class="form">
      <h1 class="text-center">Formulaire d'inscription</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Profil Maison"></div>
        <div class="progress-step" data-title="Mon Profil"></div>
        <div class="progress-step" data-title="Profil Colocataires"></div>
        <div class="progress-step" data-title="Charte"></div>
        <!-- <div class="progress-step" data-title="Password"></div> -->
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="display">
          <div class="display-input">
        <div class="input-group">
          <label for="house-area">Surface de la maison</label>
          <input type="text" name="house-area" id="house-area" />
        </div>
        <div class="input-group">
          <label for="room">Pièces</label>
          <input type="number" name="room" id="room" />
        </div>
        <div class="input-group">
          <label for="garden">Jardin</label>
          <input type="text" name="garden" id="garden" />
        </div>
        <div class="input-group">
          <label for="bedroom">Nombre de Chambres</label>
          <input type="number" name="bedroom" id="bedroom" />
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
<div class="container-checkbox">
<div class="container">
            <input type="checkbox" id="input-1" class="check-input">
            <label for="input-1" class="checkbox">
                <svg viewBox="0 0 22 16" fill="none">
                    <path d="M1 6.85L8.09677 14L21 1" />
                </svg>
            </label>
            <span>Cuisine équipée</span>
</div>
<div class="container">
            <input type="checkbox" id="input-2" class="check-input">
            <label for="input-2" class="checkbox">
                <svg viewBox="0 0 22 16" fill="none">
                    <path d="M1 6.85L8.09677 14L21 1" />
                </svg>
            </label>
            <span>Climatisation</span>
</div>
<div class="container">
            <input type="checkbox" id="input-3" class="check-input">
            <label for="input-3" class="checkbox">
                <svg viewBox="0 0 22 16" fill="none">
                    <path d="M1 6.85L8.09677 14L21 1" />
                </svg>
            </label>
            <span>Chambre meublée</span>
</div>
<div class="container">
            <input type="checkbox" id="input-4" class="check-input">
            <label for="input-4" class="checkbox">
                <svg viewBox="0 0 22 16" fill="none">
                    <path d="M1 6.85L8.09677 14L21 1" />
                </svg>
            </label>
            <span>Salle de bain partagée</span>
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
      <div class="input-group">
          <label for="firstname">Prénom<span>*</span></label>
          <input type="text" name="firstname" id="firstname" />
        </div>
        <div class="input-group">
        <label for="lastname">Nom<span>*</span></label>
          <input type="text" name="lastname" id="lastname" />
        </div>
        <div class="input-group">
          <label for="email">Adresse mail<span>*</span></label>
          <input type="email" name="email" id="email" />
        </div>
        <div class="input-group">
          <label for="job">Profession</label>
          <input type="text" name="job" id="job" />
        </div>
        <div class="input-group">
          <label for="schedule">Horaire</label>
          <input type="text" name="schedule" id="schedule" />
        </div>
        <div class="input-group">
          <label for="allergy">Allergies</label>
          <input type="text" name="allergy" id="allergy" />
        </div>
        <div class="input-group">
          <label for="animals">Animaux</label>
          <input type="text" name="animals" id="animals" />
        </div>
        <div class="input-group">
          <label for="event">Evènements à venir?</label>
          <input type="text" name="event" id="event" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Précédent</a>
          <a href="#" class="btn btn-next">Suivant</a>
        </div>
      </div>
      <div class="form-step">
        <div class="profile-pictures">
      <div class="profile-picture">
        <img src="../assets/images/profile_img.png" alt="" />
        <p class="profile-name">XXX</p>
      </div>
      <div class="profile-picture">
        <img src="../assets/images/profile_img.png" alt="" />
        <p class="profile-name">XXX</p>
      </div>
      <div class="profile-picture">
        <img src="../assets/images/profile_img.png" alt="" />
        <p class="profile-name">XXX</p>
      </div>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Précédent</a>
          <a href="#" class="btn btn-next">Suivant</a>
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