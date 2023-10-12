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
    <script src="../js/app.js"></script>
    <!-- <script src="../js/forms.js" defer></script> -->
    <link rel="stylesheet" href="../build/styles/nav.css" />
    <title>Profil utilisateur</title>
  </head>
  <body>
   <header class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md">
     <?php include("nav.php")?>
   </header>
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
    
    <form action="" method="" class="form">
      <h2 class="form-title">Information personnelle</h2>

      <div class="form-step form-step-active">
          <div class="display">
            <div class="display-input">
              <div class="name-container">
                <div class="input-group-name">
            <label for="lastname">Nom<span>*</span></label>
            <input type="text" name="lastname" id="lastname" required/>
          </div>
          <div class="input-group-name">
            <label for="firstname">Prénom<span>*</span></label>
            <input type="text" name="firstname" id="firstname" required/>
          </div>
              </div>
          
          <div class="input-group">
            <label for="email">Adresse mail<span>*</span></label>
            <input type="email" name="email" id="email" default="0" required/>
          </div>
          <div class="input-group">
            <label for="job">Profession</label>
            <input type="text" name="job" id="job" />
          </div>
          <div class="input-group">
            <label for="schedule">Horaire<span>*</span></label>
            <input type="text" name="schedule" id="schedule"required/>
          </div>
          <div class="input-group">
            <label for="allergy">Allergies</label>
            <input type="text" name="allergy" id="allergy" />
          </div>
          <div class="input-group">
            <label for="event">Evènements à venir</label>
            <input type="text" name="event" id="event" />
          </div>
        </div>
  </div>
    </form>
    <!-- <div class="house">
      <img src="../assets/images/house_footer.svg" alt="">
  </div> -->
  <footer></footer>
  </body>
</html>