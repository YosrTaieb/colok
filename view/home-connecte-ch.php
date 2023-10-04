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

    <footer class=" bg-[#257EA7]">
        <!-- This is an example component -->
    <div>
        <div class="max-w-2xl mx-auto bg-[#257EA7] text-white  py-10">
            <div class="text-center">
                <h3 class="text-3xl mb-3">Téléchargez notre application de gestion des tâches ménagères </h3>
                <p> Rester en forme. Toute la journée, tous les jours. </p>
                <div class="flex justify-center my-10">
                    <div class="flex items-center border w-auto rounded-lg px-4 py-2 w-52 mx-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" class="w-7 md:w-8">
                        <div class="text-left ml-3">
                            <p class='text-xs text-white'>Télécharger sur </p>
                            <p class="text-sm md:text-base"> Google Play Store </p>
                        </div>
                    </div>
                    <div class="flex items-center border w-auto rounded-lg px-4 py-2 w-44 mx-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png" class="w-7 md:w-8">
                        <div class="text-left ml-3">
                            <p class='text-xs text-white'>Télécharger sur </p>
                            <p class="text-sm md:text-base"> Apple Store </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-28 flex flex-col md:flex-row md:justify-between items-center text-sm text-white	">
                <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Copyright, 2023. </p>
                <div class="order-1 md:order-2">
                   
                    <span class="px-2">Politique de confidentialité</span>
                </div>
            </div>
        </div>
    </div>
</footer>



  
</body>
</html>