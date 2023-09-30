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
<body>
<header>

        <div class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between md:px-4 h-16">
                    <a href="#" class="visible w-1/2 text-lg focus:outline-none focus:shadow-outline md:invisible w-0 md:flex items-center">
                  
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
                    <a class="h-0 invisible md:visible w-32 flex items-center" href="#"><img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil"></a>

                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="signIn.php">
                        <i class="fas fa-sign-in-alt"></i> Inscription
                    </a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="signIn.php">
                    <i class="fas fa-key"></i> Connexion

                    </a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-18 px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 ">
                            <img src="../assets/images/profil-nav.svg" alt="" class="w-24 px-4 py-8 with-gradient hover-animation">



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
<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="deconnexion.php">
    <i class="fas fa-power-off"></i> Déconnexion
</a>



                                  <!-- ... Autres liens ... -->
   

      <?php
        if(isset($_SESSION['nom'])){
          echo '<a href="deconnexion.php" block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="#">
          <i class="fas fa-power-off"></i> Déconnexion">';
          echo '';
          echo '</a>';
        } else {
          // echo '<a href="signIn.php#" class="text-gray-600 hover:text-purple-300 text-lg font-semibold">';
          // echo '<i class="fas fa-user"></i> S\'inscrire/se connecter';
          // echo '</a>';
      
        }
      ?> 
    </div>                         </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

  </header>

  <!-- Le reste de votre contenu HTML ici -->
</body>
</html>
