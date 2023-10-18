<!DOCTYPE html>
<html lang="en">

<head>
    <title>Colok - >Boîte  à  idées</title>
    <?php require('headC.php');?>

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
                    @apply h-[85.5vh] text-center pt-2 ;
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
<?php require('nav.php'); ?>

    <main>
        <div class="fenetre relative">

            <a href="#"><img src="../assets/images/fleche-back.svg" alt="flèche de retour" class="w-10 md:ml-24"></a>

            <div class="container-titre">
                <h2>Boîte  à  idées</h2>
                <div class="trait w-52"></div>
            </div> 

            <form action="" class="w-72 mx-auto md:w-1/3	">

                <div class="flex flex-col w-full">
                    <label class="label">Titre de l'idée</label> 
                    <input type="text" placeholder="Nom de mon idée" class="input input-bordered mb-3" />
                
                    <label class="label">Description de l'idée</label>
                    <textarea placeholder="Je vous propose" class="textarea textarea-bordered textarea-lg mb-8" ></textarea>
                
                    <button class="button h-8 w-24 rounded-full text-white self-end">Proposer</button>
                </div>
            </form>
        </div>
    </main>

    <?php require('footer.php'); ?>

    <!-- lien js vers autre composants https://tailwind-elements.com/docs/standard/getting-started/quick-start/ -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

</body>

</html>