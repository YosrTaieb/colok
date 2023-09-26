<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colok</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../build/styles/home-ch.css">

    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
        <style type="text/tailwindcss">
            @layer utilities {
              .content-auto {
                content-visibility: auto;
              }
            }
            @layer base {

                h2{
                   @apply text-4xl text-center text-black mb-6;
                }

                body{
                  @apply text-gray-500;
                }
                footer{
                  @apply h-[2vh];
                }
                html {
                    @apply scroll-smooth scroll-pt-20;
                }

            }

            @layer components {
                .fenetre{
                    @apply  text-center pt-20 ;
                }
                .container-titre{
                    @apply  relative flex flex-col items-center justify-around mb-12;
                }
                .trait{
                    @apply rounded-full bg-[#8ECAE6] h-5 -z-20 absolute;
                }
                
                     
        }
          </style>

</head>
<body> 

<!--#region NAV responsif -->

<div class="w-full text-gray-700 bg-white sticky z-50 top-0  drop-shadow-md">
  <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
    <div class="p-4 flex flex-row items-center justify-between md:px-0 h-16">
      <a href="#" class="visible w-1/2 text-lg focus:outline-none focus:shadow-outline md:invisible w-0 md:flex items-center">
        <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-24 ">
      </a>

      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>

    </div>


    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-around md:flex-row items-center md:mx-auto">
      <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Boîte à idées</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Planning</a>

      <!-- <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">
       
      </a> -->

      <a class="h-0 invisible md:visible w-24 flex items-center" href="#"><img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil"></a>

      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Déconnexion</a>
      <!-- <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a> -->
      <div @click.away="open = false" class="relative" x-data="{ open: false }">

<!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: SOUS-MENU :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->

        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          <!-- <span>Dropdown</span> -->
          <img src="../assets/images/profil-nav.svg" alt="" class="w-9">
          <!-- <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> -->
        </button>

        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-40">

          <div class="px-2 py-2 bg-white rounded-md shadow">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Profil maison</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Mon profil</a>
            <!-- <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a> -->
          </div>
        </div>
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::FIN SOUS-MENU ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->

      </div>    
    </nav>
  </div>
</div>

<!--#endregion -->


<!-- <header class="sticky top-0 z-50 bg-white drop-shadow-md">
    <nav>
      <ul>
        <li>
          <a href="index.html">
            <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-32 m-auto h-20">
          </a>
        </li>
      </ul>
    </nav>
  </header> -->

    <main>

<!--#region ACCUEIL  -->
        <div class="fenetre relative bg-cyan-100 h-[90vh]">            
            <img class=" mb-6 ml-auto mr-auto w-80 md:w-96" src="../assets/images/logo-colok.svg" alt="logo"> 
            <p class="mx-auto w-[11.2rem] md:w-full mt-6 mb-12"> Des tâches partagées, une colocation équilibrée </p>
            <div class="flex flex-col h-24 items-center justify-between mt-28	md:flex-row md:justify-center">
                <button class="w-36 h-8 bg-white rounded-full text-[#8ECAE6] font-medium md:mr-3"><a href="signIn.php">Créer un compte</a></button>
                <button  class="w-36 h-8 bg-[#8ECAE6] rounded-full text-white font-medium md:ml-3"><a href="signIn.php">Se connecter</a></button>
            </div> 
            <div class="absolute inset-x-0 bottom-0"><img src="../assets/images/maisons.svg" alt="image de maisons"></div>           
        </div> 
<!--#endregion -->        

<!--#region A PROPOS  -->
  
        <div class="fenetre h-[120vh] md:h-[62vh]">
          
          <div class="container-titre">
            <h2>A propos</h2>
            <div class="trait w-40"></div>
          </div>  
            <p class="p-propos text-justify w-5/6 md:w-[50vw] mx-auto">Chez Colok, nous savons que vivre en colocation peut être à la fois amusant et gratifiant, mais aussi stressant et difficile à gérer. C'est pourquoi nous avons créé cette plateforme de gestion de colocation pour faciliter la vie en communauté.

                Notre mission est de créer un environnement harmonieux où les colocataires peuvent vivre confortablement et en paix. Nous croyons que la communication et la collaboration sont essentielles pour une colocation réussie, c'est pourquoi notre plateforme offre des fonctionnalités de gestion des tâches ménagères, de la boîte à idée et de calendrier des événements.               
                Nous sommes une équipe de passionnés dévoués à rendre la vie en colocation plus agréable et plus facile. Nous travaillons dur pour offrir à nos utilisateurs une expérience de gestion de colocation sans stress et sans tracas.               
                Chez Colok, nous sommes convaincus que la vie en colocation peut être une expérience enrichissante et positive, et nous sommes fiers d'aider nos utilisateurs à en profiter pleinement.</p>      
        </div>
<!--#endregion -->

<!--#region AVIS  -->

        <div class="fenetre border-4 border-indigo-600">
    
          <div class="container-titre relative flex flex-col items-center justify-around">
            <h2>Avis</h2>
            <div class="trait w-20"></div>
          </div>                              
            
            <div>
                <div class="carousel pt-[1rem] h-full w-full">

                    <div id="slide1" class="carousel-item relative w-full flex flex-col md:flex-row">
                      
                      <div class="w-[25rem] md:w-[50rem] h-48 mx-auto rounded-[1rem] bg-[#E1F6FD] pl-6 py-2 pr-2 flex-col relative">
                          <!--<img class=" md:-ml-24 rounded-full w-40 h-40 border-8 border-white" src="assets/ph-avis1.png" alt="photo d'une personne"> -->
                          <p class="text-center text-justify h-96 w-[60rem] md:w-[40rem] m-auto pl-14 self-center">
                              Maxime, 26 ans :
                              "Colok est l'outil idéal pour vivre en colocation sans soucis. Les tâches ménagères sont réparties équitablement, et tout est bien 
                              organisé grâce au calendrier des événements. J'aime cette plateforme, elle nous permet de vivre en harmonie."
                          </p>
                          <img class="md:content-start ml-[46rem] -mt-6 w-20 absolute" src="../assets/images/guillemets.svg" alt="image de guillemets">
                      </div>
                      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide4" class="btn btn-circle">❮</a> 
                        <a href="#slide2" class="btn btn-circle">❯</a>
                      </div>
                    </div> 

                    <div id="slide2" class="carousel-item relative w-full flex">
                      <div class="rounded-[1rem] bg-[#E1F6FD] pl-6 py-2 pr-2 w-[50rem] mx-auto flex relative">
                        <img class="-ml-24 rounded-full w-40 h-40 border-8 border-white bg-cover" src="../assets/images/ph-avis2.jpg" alt="photo d'une personne"> 
                        <p class="p-avis text-justify w-[40rem] pl-14 self-center">
                            Sophie, 22 ans :
                            "Colok simplifie vraiment la vie en colocation. Les tâches préassignées sont un énorme avantage. On sait toujours qui est en charge de quoi, ce qui évite les malentendus. C'est un outil génial pour rendre la vie en communauté plus agréable."
                        </p>
                        <img class="content-start ml-[46rem] -mt-6 w-20 absolute" src="../assets/images/guillemets.svg" alt="image de guillemets">
                      </div> 
                      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="btn btn-circle">❮</a> 
                        <a href="#slide3" class="btn btn-circle">❯</a>
                      </div>
                    </div> 

                    <div id="slide3" class="carousel-item relative w-full flex">
                      <div class="rounded-[1rem] bg-[#E1F6FD] pl-6 py-2 pr-2 w-[50rem] mx-auto flex relative">
                        <img class="-ml-24 rounded-full w-40 h-40 border-8 border-white" src="../assets/images/ph-avis3.jpg" alt="photo d'une personne"> 
                        <p class="p-avis text-justify	w-[40rem] pl-14 self-center">
                            Kevin, 30 ans :
                            "Enfin, une solution qui prend en charge la gestion des tâches en colocation ! Colok attribue automatiquement les tâches, ce qui rend tout tellement plus équitable. J'apprécie le temps que cela nous fait gagner. Le calendrier des événements est également pratique pour planifier nos soirées.
                        </p>
                        <img class="content-start ml-[46rem] -mt-6 w-20 absolute" src="../assets/images/guillemets.svg" alt="image de guillemets">
                      </div> 
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide2" class="btn btn-circle">❮</a> 
                        <a href="#slide1" class="btn btn-circle">❯</a>
                      </div>
                    </div> 
                  </div>

            </div>          
        </div>
<!--#endregion -->

<!--#region Application  -->

        <div class="fenetre">
          <div class="container-titre relative flex flex-col items-center justify-around">
              <h2>Application</h2>
              <div class="trait w-48"></div>
          </div>  
              <div class="flex flex-col items-center mx-auto mb-8 md:flex-row-reverse w-[70vw]">
   

                    <div class="w-5/6 mb-8 md:px-6">
                        <img src="../assets/images/pub.svg" alt="image de l'application"> 
                    </div>

                    <div class="w-5/6 md:px-20">
                        <div class="text-justify mb-8 ">
                          <img class="mb-2 logo-app w-40" src="../assets/images/logo-colok.svg" alt="logo">
                          <span>Prêt à simplifier la vie en colocation ? Découvrez Colok, votre allié pour une colocation harmonieuse et sans tracas !
                          Finis les malentendus sur les tâches ménagères, les courses oubliées, et les calendriers d'événements chaotiques. Avec Colok, tout est organisé pour vous. Les tâches sont préassignées, les achats sont planifiés, et les événements sont coordonnés en un seul endroit.                 
                          Rejoignez notre communauté de colocataires satisfaits et vivez une colocation plus fluide et agréable. Téléchargez l'application dès maintenant et découvrez à quel point la vie en communauté peut être simple avec Colok.
                          </span>
                        </div>

                        <div class="flex flex-col items-center md:flex-row">
                            <div class="flex flex-col w-1/2 items-center mb-6 md:mb-0">
                                <button class="w-36 h-8 bg-[#8ECAE6] rounded-full text-white font-medium ml-3">Télécharger sur</button>
                                <span class="font-bold justify-end">App Store</span>
                            </div>
                            <div class="flex flex-col w-1/2 items-center">
                                <button class="w-36 h-8 bg-[#8ECAE6] rounded-full text-white font-medium ml-3">Télécharger sur</button>
                                <span class="font-bold">Google Play</span>
                            </div>
                        </div>
                    </div>


              </div>           
        </div>

<!--#endregion -->  

    </main>


    <footer>
      <div class="bg-secondary-200 p-4 text-center text-secondary-700 shadow-md">
        © 2023 Copyright:
        <a class="text-secondary-800" href="https://tailwind-elements.com/">Tailwind Elements</a>
      </div>
    </footer>   

</body>
</html>