<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colok</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

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
                h3{
                   @apply text-3xl text-center mb-6;
                }

                body{
                  @apply text-gray-500;
                }

            }

            @layer components {
                .fenetre{
                    @apply h-[300vh] text-center pt-20;
                }
                .container-titre{
                    @apply  relative flex flex-col items-center justify-around mb-12;
                }
                .trait{
                    @apply rounded-full bg-cyan-300 h-5 -z-20 absolute;
                }

                .carte{
                  @apply h-96 w-80 my-14 bg-white rounded-3xl;
                }
                    
        }
          </style>

</head>
<body> 

  <header class="sticky top-0 z-50 bg-white drop-shadow-md">
    <nav>
      <ul>
        <li><a href=""></a></li>
        <li>
          <a href="index.html">
            <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-32 m-auto h-20">
          </a>
        </li>
      </ul>
    </nav>
  </header>

<main>
  <!--#region CARTES  -->
  <div class="fenetre relative bg-cyan-100">
    <img class=" mb-6 ml-auto mr-auto w-80 md:w-96" src="../assets/images/logo-colok.svg" alt="logo">
    <p class="mx-auto w-[11.2rem] md:w-full mt-6 mb-12"> Des tâches partagées, une colocation équilibrée </p>

    <div class="h-auto w-auto flex flex-col justify-evenly items-center  md:flex-row w-1/2 flex-wrap	">

      <div class="carte">
        <div class="px-8 rounded-lg h-64 w-full text-justify px-4 pb-2 pt-8">
          <img src="../assets/images/profil.svg" alt="" class="w-24 h-24 m-auto mb-6">

          <h3>Profil colocataire</h3>
          <p>Découvrez vos futurs colocataires. Créez un profil unique pour mieux vous connaître et trouver la colocation parfaite.</p>
        </div>
      </div>

      <div class="carte">
        
        <div class="px-8  h-64 w-full text-justify px-4 py-2 pt-8">
          <img src="../assets/images/calendar.svg" alt="" class="w-24 h-24 m-auto mb-6">
          <h3>Planning des tâches</h3>
          <p>Restez organisé et équitable. Planifiez et suivez les tâches ménagères et les responsabilités de manière transparente.</p>
        </div>
      </div>

      <div class="carte">
        
        <div class="px-8 rounded-lg h-64 w-full text-justify px-4 py-2 pt-8">
          <img src="../assets/images/notif.svg" alt="" class="w-24 h-24 m-auto mb-6">
          <h3>Notifications</h3>
          <p>Restez informé et connecté. Recevez des notifications en temps réel sur les événements importants, les rappels de tâches et les mises à jour essentielles pour une colocation harmonieuse.</p>
        </div>
      </div>

      <div class="carte">
        
        <div class="px-8 rounded-lg h-64 w-full text-justify px-4 py-2 pt-8">
          <img src="../assets/images/box.svg" alt="" class="w-24 h-24 m-auto mb-6">
          <h3>Boîte à idées</h3>
          <p>Partagez vos idées, améliorez votre colocation. Proposez des suggestions et contribuez à rendre votre
            maison encore meilleure.</p>
        </div>
      </div>

    </div>
 <!--#endregion -->

    <div class="absolute inset-x-0 bottom-0"><img src="../assets/images/maisons.svg" alt="image de maisons"></div>
  </div>

<!-- ============================================================================================================ -->
 
    </main>

<footer>
  
  <div class="bg-secondary-200 p-4 text-center text-secondary-700 shadow-md">
    © 2023 Copyright:
    <a class="text-secondary-800" href="https://tailwind-elements.com/">Tailwind Elements</a>
  </div>
</footer>   
</body>
</html>