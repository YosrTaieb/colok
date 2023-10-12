
<header class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md">
        <div class="w-full text-gray-700 ">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between md:px-12 h-16">
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
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="../view/calendrier.php">
                        <i class="far fa-calendar-alt"></i> Planning 
                    </a>
                    <a class="h-0 invisible md:visible w-32 flex items-center">
                    <img src="../assets/images/logo-colok.svg"  alt="logo du site pour aller à l'accueil" class="w-24 m-auto h-24 sm:w-auto sm:m-0 sm:h-auto">
                    </a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="signIn.php">
                        <i class="fas fa-sign-in-alt"></i> Inscription
                    </a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="signIn.php">
                    <i class="fas fa-key"></i> Connexion

                    </a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-18 px-2 pb-2 pt-0 mt-0 text-sm font-semibold mr-[35px] ml-[35px] text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 ">
                            <img src="../assets/images/profil-nav.svg" id="blah2"  alt="" class="w-[62px] mt-2  rounded-full h-[4rem] max-w-full mx-auto  ">


                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-40">
                            <div class="px-2 py-2 bg-white rounded-md shadow">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="#">
    <i class="fas fa-home"></i> Profil Maison
</a>

<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="profile-user.php">
    <i class="fas fa-user"></i> Mon Profil
</a>
<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="../view/deconnexion.php">
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