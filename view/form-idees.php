

<?php session_start();
require_once('../model/utilisateur.php');
$user = getUser($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../sass/styles/nav.scss">


<head>
    <title>Colok - Boîte à idées</title>
    <?php require('headC.php'); ?>


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
            h2 {
                @apply text-4xl text-center text-black mb-6 z-30;
            }

            h3 {
                @apply text-3xl text-center mb-6;
            }

            footer {
                @apply h-[2vh];
            }

            body {
                @apply text-gray-500;
            }
        }

        @layer components {
            .fenetre {
                @apply h-[85.5vh] text-center pt-2;
            }

            .container-titre {
                @apply relative flex flex-col items-center justify-around mb-12;
            }

            .trait {
                @apply rounded-full bg-[#DABFFF] h-5 z-20 absolute;
            }
        }
    </style>

</head>

<body>
<header class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md">
     <?php include("nav.php")?>
   </header>

    <main>


        
        <div class="fenetre relative">

            

            <div class="container-titre">
                <h2>Boîte à idées</h2>
                <h2>Boîte à idées</h2>
                <div class="trait w-52"></div>
            </div>
            <form action="../controller/ideeController.php" method="POST" class="w-72 mx-auto md:w-1/3">
    <div class="flex flex-col w-full">
        <label for="titre" class="label">
         
            <span class="ml-2">   <i class="fa fa-lightbulb mr-2"></i>Titre de l'idée</span>
        </label>
        <input type="text" id="titre" name="titre" placeholder="Nom de mon idée" class="input input-bordered mb-3">
    
        <label for="description" class="label">
           
            <span class="ml-2"> <i class="fa fa-comment mr-2"></i>Description de l'idée</span>
        </label>
        <textarea id="description" name="description" placeholder="Je vous propose" class="textarea textarea-bordered textarea-lg mb-8"></textarea>
    
        
    
        <button type="submit" class="button h-9 w-32 rounded-full text-white self-end bg-blue-500 hover-bg-blue-700">
            <i class="fa fa-paper-plane"></i>
            <span class="ml-2">Proposer</span>
        </button>
    </div>
</form>

</div>
        </div>
    </main>

    <?php require('footer.php'); ?>

    <!-- lien js vers autre composants https://tailwind-elements.com/docs/standard/getting-started/quick-start/ -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

</body>

</html>
