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
<header class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md">
        <div class="w-full text-gray-700 ">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between md:px-4 h-16">
                    <a href="#" class="visible w-1/2 text-lg focus:outline-none focus:shadow-outline md:invisible w-0 md:flex items-center">
                    <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-24">
                    </a>

                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-around md:flex-row items-center md:mx-auto">
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent text-gray-900 rounded-lg md:mt-0 nav-link" href="#">
                        <i class="fas fa-lightbulb"></i> Boîte à idées
                    </a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="#">
                        <i class="far fa-calendar-alt"></i> Planning 
                    </a>
                    <a class="h-0 invisible md:visible w-24 flex items-center">
                    <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-32 m-auto h-24 sm:w-auto sm:m-0 sm:h-auto">
                    </a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="#">
                        <i class="fas fa-sign-in-alt"></i> Inscription
                    </a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="#">
                    <i class="fas fa-key"></i> Connexion

                    </a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-18 px-4 pb-2 pt-0 mt-0 text-sm font-semibold mr-[35px] ml-[35px] text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 ">
                            <img src="../assets/images/profil-nav.svg" alt="" class="w-[57px] py-2 mt-2  with-gradient hover-animation">



                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-40">
                            <div class="px-2 py-2 bg-white rounded-md shadow">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="#">
    <i class="fas fa-home"></i> Profil Maison
</a>

<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="#">
    <i class="fas fa-user"></i> Mon Profil
</a>
<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="#">
    <i class="fas fa-power-off"></i> Déconnexion
</a>

                                  <!-- ... Autres liens ... -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>


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
