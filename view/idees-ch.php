<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colok</title>
    <script src="taches.js" defer></script>

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
                   @apply text-4xl text-center text-black mb-6 z-30;
                }
                h3{
                   @apply text-3xl text-center mb-6;
                }

                footer{
                  @apply h-[2vh];
                }
                body{
                  @apply text-gray-500;
                }

            }

            @layer components {
                .fenetre{
                    @apply h-[81.5vh] text-center pt-2 ;
                }
                .container-titre{
                    @apply  relative flex flex-col items-center justify-around mb-12;
                }
                .trait{
                    @apply rounded-full bg-[#DABFFF] h-5 z-20 absolute;
                }

                    
        }
          </style>

</head>

<body>

    <header class="sticky top-0 z-50 bg-white drop-shadow-md">
        <nav>
            <ul>
                <li>
                    <a href="index.html">
                        <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil"
                            class="w-32 m-auto h-20">
                    </a>
                </li>
                </li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="fenetre relative">

            <a href="#"><img src="../assets/images/fleche-back.svg" alt="flèche de retour" class="w-10 md:ml-24"></a>

            <div class="container-titre">
                <h2>Boîte  à  idées</h2>
                <div class="trait w-52"></div>
            </div> 


            <div class="absolute inset-x-0 bottom-0"><img src="../assets/images/maisons.svg" alt="image de maisons"></div>
        </div>

    </main>

    <footer>
        <!--Copyright section-->
        <div class="bg-secondary-200 p-4 text-center text-secondary-700 shadow-md">
            © 2023 Copyright:
            <a class="text-secondary-800" href="https://tailwind-elements.com/">Tailwind Elements</a>
        </div>
    </footer>



    <!-- lien js vers autre composants https://tailwind-elements.com/docs/standard/getting-started/quick-start/ -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

</body>

</html>