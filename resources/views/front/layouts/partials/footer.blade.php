<footer class="footer bg-slate-900 relative text-gray-200 mt-24">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="relative py-16">
                <div class="relative w-full">
                    <div class="relative -top-40 bg-white lg:px-8 px-6 py-10 rounded-xl shadow-sm overflow-hidden">
                        <div class="absolute -top-5 -start-5">
                            <div class="uil uil-envelope lg:text-[150px] text-7xl text-slate-900/5 -rotate-45"></div>
                        </div>
                        <div class="absolute -bottom-5 -end-5">
                            <div class="uil uil-pen lg:text-[150px] text-7xl text-slate-900/5"></div>
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
                    <div class="lg:col-span-4 md:col-span-12">
                        <a href="{{ url('/') }}" class="text-[22px] focus:outline-none">
                            <img src="{{asset('storage/assets/images/logo-white.png')}}" alt="Logo de votre site">
                        </a>
                        <p class="mt-6 text-gray-300"> La plateforme idéale pour acheter, vendre et découvrir des produits uniques au [Bénin]."</p>
                    </div><div class="lg:col-span-2 md:col-span-4">
                        <h5 class="tracking-[1px] text-lg text-gray-100 font-semibold">Navigation</h5>
                        <ul class="list-none footer-list mt-6">
                            <li><a href="{{ route('produits.index') }}" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Explorer</a></li>
                            <li class="mt-[10px]"><a href="" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Vendeurs</a></li>
                            <li class="mt-[10px]"><a href="" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Contact</a></li>
                            <li class="mt-[10px]"><a href="" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> À propos</a></li>
                            {{-- Ajoutez d'autres liens de navigation si nécessaire --}}
                        </ul>
                    </div><div class="lg:col-span-3 md:col-span-4">
                        <h5 class="tracking-[1px] text-lg text-gray-100 font-semibold">Liens Utiles</h5>
                        <ul class="list-none footer-list mt-6">
                            <li><a href="#" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Conditions d'utilisation</a></li>
                            <li class="mt-[10px]"><a href="#" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Politique de confidentialité</a></li>
                            <li><a href="{{ route('login') }}" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Se connecter</a></li>
                            <li><a href="{{ route('register') }}" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> S'inscrire</a></li>
                            <li><a href="" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i>Devenir vendeur</a></li>
                            {{-- Ajoutez d'autres liens utiles si nécessaire --}}
                        </ul>
                    </div><div class="lg:col-span-3 md:col-span-4">
                        <h5 class="tracking-[1px] text-lg text-gray-100 font-semibold">Contact</h5>

                        <div class="mt-6">
                            <div class="flex">
                                <i data-feather="mail" class="w-5 h-5 text-violet-600 me-3 mt-1"></i>
                                <div class="">
                                    <a href="" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out">contact@madeinbenin.com</a>
                                </div>
                            </div>

                            <div class="flex mt-6">
                                <i data-feather="phone" class="w-5 h-5 text-violet-600 me-3 mt-1"></i>
                                <div class="">
                                    <a href="" class="text-[16px] text-gray-300 hover:text-gray-400 duration-500 ease-in-out">+2290144731148</a>
                                </div>
                            </div>
                            {{-- Ajoutez d'autres informations de contact si nécessaire --}}
                        </div>

                        <div class="mt-6">
                            <h5 class="tracking-[1px] text-lg text-gray-100 font-semibold">Suivez-nous</h5>
                            <ul class="list-none mt-4 flex">
                                <li class="me-4"><a href="#" class="text-gray-300 hover:text-gray-400"><i data-feather="facebook" class="w-5 h-5"></i></a></li>
                                <li class="me-4"><a href="#" class="text-gray-300 hover:text-gray-400"><i data-feather="twitter" class="w-5 h-5"></i></a></li>
                                <li class="me-4"><a href="#" class="text-gray-300 hover:text-gray-400"><i data-feather="instagram" class="w-5 h-5"></i></a></li>
                                {{-- Ajoutez d'autres icônes de réseaux sociaux --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-[30px] px-0 border-t border-gray-800">
        <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center gap-6">
                <div class="md:text-start text-center">
                    <p class="mb-0 text-gray-300">© <script>document.write(new Date().getFullYear())</script> Made In Benin</p>
                </div>
                {{-- Vous pouvez ajouter une autre section ici si nécessaire --}}
            </div>
        </div>
    </div>
</footer>
