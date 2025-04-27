<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container flex items-center justify-between">
        <a class="logo ps-0" href="{{ url('/') }}">
            <img src="{{asset('storage/assets/images/logo-icon-28.png')}}" class="inline-block sm:hidden"  alt="">
            <div class="sm:block hidden">
                <img src="{{asset('storage/assets/images/logo-dark.jpg')}}" class="inline-block h-10" alt="">
                <img src="{{asset('storage/assets/images/logo-white.jpg')}}" class="hidden h-10" alt="">
            </div>
        </a>
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                </div>
        </div>

        <div id="navigation" class="flex items-center">
            <ul class="navigation-menu !justify-start">
                <li><a href="{{url('/')}}" class="sub-menu-item">Accueil</a></li>
                <li><a href="{{route('explore.index')}}" class="sub-menu-item">Explorer</a></li>
                <li><a href="{{route('vendeurview.index')}}" class="sub-menu-item">Vendeurs</a></li>

                <li><a href="" class="sub-menu-item">À propos</a></li>
                {{-- Ajoutez ici d'autres liens de navigation spécifiques à votre marketplace --}}
            </ul>
        </div>
        <ul class="flex items-center">
            <li class="inline-block mb-0">
                <div class="form-icon relative">
                    <i class="uil uil-search text-lg absolute top-1/2 -translate-y-1/2 start-3"></i>
                    <input type="text" class="form-input sm:w-44 w-28 ps-10 py-2 px-3 h-10 bg-transparent rounded-3xl outline-none border border-gray-200 focus:border-violet-600 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Rechercher...">
                </div>
            </li>
            @guest
                <li class="inline-block ps-1 mb-0">
                    <a href="{{route('register')}}" class="btn btn-[10px] rounded-md font-semibold py-1.5 px-4 hover:text-violet-600">S'inscrire</a>
                </li>
                <li class="inline-block ps-1 mb-0">
                    <a href="{{route('login')}}" class="btn btn-[10px] rounded-md font-semibold py-1.5 px-4 hover:text-violet-600"> Se connecter</a>
                </li>
            @else
                <li class="dropdown inline-block relative ps-1">
                    <button id="ouvrirPanierBtn" class=" btn btn-icon rounded-full flex items-center text-gray-700 dark:text-gray-400" type="button" title="Voir votre panier">
                        <i class="mdi mdi-cart text-[16px] align-middle me-1"></i>
                        <span id="panierNombreArticlesBadge" class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full translate-x-1/2 -translate-y-1/2">0</span>
                    </button>

                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle btn btn-icon rounded-full  flex items-center text-gray-700 dark:text-gray-400" type="button">
                        <i class="uil uil-user text-[16px] align-middle me-1"></i>
                    </button>
                    <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white shadow-sm hidden" onclick="event.stopPropagation();">

                        <ul class="py-2 text-start">
                            <li>
                                <a href="" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-violet-600"><i class="uil uil-user text-[16px] align-middle me-1"></i> Mon Profil</a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-violet-600"><i class="uil uil-signout text-[16px] align-middle me-1"></i> Déconnexion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </li>
                            <li class="border-t border-gray-100 my-2"></li>
                            {{-- Ajoutez ici d'autres liens pour les utilisateurs connectés (tableau de bord vendeur/acheteur, etc.) --}}
                        </ul>
                    </div>

                </li>
            @endguest
        </ul>
    </div>
</nav>

