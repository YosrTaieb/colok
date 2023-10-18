<?php session_start(); ?>
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
<div class="form-wrapper">
<div class="form-illustration">
  <img src="../assets/images/illust-profil.gif" alt="">
</div>
<form action="../controller/profileControlleur.php" method="post" class="form" enctype="multipart/form-data">
    <h2 class="form-title">Information personnelle</h2>

    <div class="form-step form-step-active">
        <div class="display">
            <div class="display-input">
                <div class="name-container">
                    <div class="input-group-name">
                        <label for="nom"><i class="fas fa-user"></i>Nom<span>*</span></label>
                        <input type="text" name="nom" value="<?php echo $_SESSION['nom'] ?>" id="nom" required placeholder="Votre nom" />
                    </div>
                    <div class="input-group-name">
                        <label for="prenom"><i class="fas fa-user"></i>Prénom<span>*</span></label>
                        <input type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['prenom'] ?>" required placeholder="Votre prénom" />
                    </div>
                </div>

                <div class="input-group">
                    <label for="date_naissance"><i class="fas fa-calendar"></i>Date de naissance<span>*</span></label>
                    <input type="date" name="date_naissance" value="<?php echo $_SESSION['date_naissance'] ?>" id="date_naissance" required placeholder="Votre date de naissance" />
                </div>

                <div class="input-group">
                    <label for="email"><i class="fas fa-envelope"></i>Adresse mail<span>*</span></label>
                    <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'] ?>"  required placeholder="Votre adresse e-mail" />
                </div>

                <div class="input-group">
                    <label for="mdp"><i class="fas fa-lock"></i>Mot de passe<span>*</span></label>
                    <input type="password" name="mdp" id="mdp" required placeholder="Votre mot de passe" />
                </div>

                <div class="input-group">
                    <label for="role"><i class="fas fa-user-tag"></i>Rôle</label>
                    <input type="text" name="role" value="<?php echo $_SESSION['role'] ?>" id="role" placeholder="Votre rôle" />
                </div>

                <div class="input-group">
                    <label for="allergies"><i class="fas fa-allergies"></i>Allergies</label>
                    <input type="text" name="allergies"  value="<?php echo $_SESSION['allergies'] ?>" id="allergies" placeholder="Vos allergies" />
                </div>

                <div class="input-group">
             
                <input type="file" id="imageFile" name="fileToUpload" accept="image/*" style="display: none;">
                </div>

            
                <div class="input-group">
    <label for="maison_id"><i class="fas fa-home"></i>ID de la maison</label>
    <input type="text" name="maison_id" id="maison_id" required placeholder="ID de votre maison" />
</div>


                <div class="btn-center">
                    <button class="form-btn" type="submit" name="addProfile">Valider</button>
                </div>
            </div>
        </div>
    </div>
</form>

    <!-- <div class="house">
      <img src="../assets/images/house_footer.svg" alt="">
  </div> -->
  <footer></footer>
  

    </script>

  </body>
</html>