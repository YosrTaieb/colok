<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../build/styles/profile.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="../js/app.js"defer></script>
    <!-- <script src="../js/forms.js" defer></script> -->
    <link rel="stylesheet" href="../build/styles/nav.css" />
    <title>Profil utilisateur</title>
  </head>
  <body>

  <?php include("nav.php")?>

    <div class="container-title z-40">
    <h1 class="page-title">Mon profil</h1>
    <div class="trait w-40"></div>
  </div>
  <div class="profile-picture">  
    <a href="#imageFile" onclick="poutpout()" class="profile-link">
        <img src="../assets/images/profile_img.png" id="blah" alt=""> 
        <i id="mon-icon" class="fas fa-camera"></i>
    </a>
</div> 
<div class="form-wrapper">
<div class="form-illustration">
  <img src="../assets/images/illust-profil.gif" alt="">
</div>

<form action="POST" class="form">
<input type="file" id="imageFile" name="fileToUpload" accept="image/*" style="display: none;">
                               
   
      <h2 class="form-title">Information personnelle</h2>

      <div class="form-step form-step-active">
  <div class="display">
    <div class="display-input">
      <div class="name-container">
        <div class="input-group-name">
          <label for="lastname"><i class="fas fa-user"></i>Nom<span>*</span></label>
          <input type="text" name="lastname" id="lastname" required placeholder="Votre nom"/>
        </div>
        <div class="input-group-name">
          <label for="firstname"><i class="fas fa-user"></i>Prénom<span>*</span></label>
          <input type="text" name="firstname" id="firstname" required placeholder="Votre prénom"/>
        </div>
      </div>

      <div class="input-group">
        <label for="email"><i class="fas fa-envelope"></i>Adresse mail<span>*</span></label>
        <input type="email" name="email" id="email" required placeholder="Votre adresse e-mail"/>
      </div>
      <div class="input-group">
        <label for="job"><i class="fas fa-briefcase"></i>Profession</label>
        <input type="text" name="job" id="job" placeholder="Votre profession"/>
      </div>
      <div class="input-group">
        <label for="schedule"><i class="far fa-clock"></i>Horaire<span>*</span></label>
        <input type="text" name="schedule" id="schedule" required placeholder="Votre horaire"/>
      </div>
      <div class="input-group">
        <label for="allergy"><i class="fas fa-allergies"></i>Allergies</label>
        <input type="text" name="allergy" id="allergy" placeholder="Vos allergies"/>
      </div>
      <div class="input-group">
        <label for="event"><i class="far fa-calendar-alt"></i>Évènements à venir</label>
        <input type="text" name="event" id="event" placeholder="Vos évènements à venir"/>
      </div>
      <div class="btn-center">
      <button class="form-btn">Valider</button>
    </div>
    </div>
  </div>
</div>
    </form>
    </div>
    <?php require('footer.php'); ?>
  </body>
</html>