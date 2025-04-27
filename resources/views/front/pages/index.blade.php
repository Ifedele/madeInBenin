@extends('front.layouts.master')
@section('content')
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="md:flex justify-between items-center">
                <div class="md:w-10/12 md:text-start text-center">
                    <h3 class="md:text-[30px] text-[26px] font-semibold mb-4">Meilleurs vendeurs
                        <select class="form-select z-2 text-violet-600 focus-visible:outline-none bg-transparent border-0 focus:ring-transparent" aria-label="Default select example" id="filterPeriod">
                            <option class="text-lg font-medium" value="week" {{ $period === 'week' ? 'selected' : '' }}>de la semaine</option>
                            <option class="text-lg font-medium" value="month" {{ $period === 'month' ? 'selected' : '' }}>du mois</option>
                            <option class="text-lg font-medium" value="year" {{ $period === 'year' ? 'selected' : '' }}>de l'année</option>
                        </select>
                    </h3>
                    <p class="text-slate-400">Découvrez les vendeurs les plus en vue.</p>
                </div>
                <div class="md:w-2/12 text-end md:block hidden">
                    <a href="" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Tous les vendeurs <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
                @forelse ($topSellers as $vendeur)
                    <div class="flex justify-between items-center p-3 rounded-md bg-white shadow-sm">
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <img src="{{ asset('storage/'. $vendeur->photo_profile) }}" class="h-16 rounded-md" alt="{{ $vendeur->prenom }} {{ $vendeur->nom }}">
                                @if ($vendeur->is_verified)
                                    <i class="mdi mdi-check-decagram text-emerald-600 text-lg absolute -top-2 -end-2"></i>
                                @endif
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('front.creator.profile', $vendeur->idUser) }}" class="font-semibold block hover:text-violet-600">{{ $vendeur->prenom }} {{ $vendeur->nom }}</a>
                                <span class="text-slate-400 text-sm block mt-0.5">ID: {{ $vendeur->id }}</span> {{-- Vous pouvez afficher l'ID ou une autre info ici --}}
                            </div>
                        </div>
                        <button class="btn btn-icon rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white"><i class="uil uil-user-plus text-[20px]"></i></button>
                    </div>
                @empty
                    <p>Aucun vendeur trouvé pour cette période.</p>
                @endforelse
            </div>
            <div class="grid grid-cols-1 mt-6 md:hidden">
                <div class="text-center">
                    <a href="{{route('vendeurview.index')}}" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Tout les vendeurs <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 text-center">
                <h3 class="md:text-[30px] text-[26px] font-semibold">Explorer les produits les plus vendus</h3>
            </div>
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
                @if ($topSellingProducts->isNotEmpty())
                    @foreach ($topSellingProducts as $produit)
                        <div class="group relative p-2 rounded-lg bg-white border border-gray-100 hover:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                            <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                            <div class="relative overflow-hidden">
                                <div class="relative overflow-hidden rounded-lg">
                                    @if ($produit->images->isNotEmpty())
                                        <img src="{{ asset('storage/' . $produit->images->first()->image_src) }}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="{{ $produit->nom }}">
                                    @else
                                        <img src="{{ asset('storage/assets/images/items/1.jpg') }}" class="rounded-lg shadow-md group-hover:scale-110 transition-all duration-500" alt="{{ $produit->nom }}">
                                    @endif
                                </div>
                                <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                    <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-eye"></i> Voir Détails</a>
                                </div>
                                <div class="absolute top-2 end-2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                    <a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-plus"></i></a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center">
                                    @if ($produit->vendeur && $produit->vendeur->utilisateur)
                                        <img src="{{ asset('storage/' . $produit->vendeur->photo_profile) }}" class="rounded-full h-8 w-8" alt="{{ $produit->vendeur->nom }}">
                                        <a href="{{ route('admin.vendeurShow', $produit->vendeur->utilisateur->id) }}" class="ms-2 text-[15px] font-medium text-slate-400 hover:text-violet-600">@{{ $produit->vendeur->nom }}</a>
                                    @else
                                        <img src="{{ asset('storage/assets/images/avatar/1.jpg') }}" class="rounded-full h-8 w-8" alt="Vendeur Inconnu">
                                        <span class="ms-2 text-[15px] font-medium text-slate-400">Vendeur Inconnu</span>
                                    @endif
                                </div>
                                <div class="my-3">
                                    <a href="{{ route('produits.show', $produit->id) }}" class="font-semibold hover:text-violet-600">{{ $produit->nom }}</a>
                                </div>
                                <div class="flex justify-between p-2 bg-gray-50 rounded-lg shadow-sm">
                                    <div>
                                        <span class="text-[16px] font-medium text-slate-400 block">Prix</span>
                                        <span class="text-[16px] font-semibold block"><i class="mdi mdi-currency-eur"></i> {{ $produit->prix }}</span>
                                    </div>
                                    <div>
                                        <span class="text-[16px] font-medium text-slate-400 block">Quantité</span>
                                        <span class="text-[16px] font-semibold block">{{ $produit->qte }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="grid grid-cols-1 text-center mt-10">
                        <p class="text-slate-500">Il n'y a pas encore de classement des produits les plus vendus.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl text-2xl md:leading-snug leading-snug font-semibold">Nouveauté</h3>
                <p class="text-slate-400 max-w-xl mx-auto">Découvrez les nouveaux articles .</p>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                @foreach ($newProducts as $nouveauProduit)
                    <div class="group relative overflow-hidden bg-white rounded-md shadow-sm hover:shadow-md transition-all duration-500">
                        @if ($nouveauProduit->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $nouveauProduit->images->first()->image_src) }}" alt="{{ $nouveauProduit->nom }}">
                        @else
                            <img src="{{ asset('storage/assets/images/blog/01.jpg') }}" alt="{{ $nouveauProduit->nom }}">
                        @endif
                        <div class="relative p-6">
                            <a href="" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">{{ $nouveauProduit->nom }}</a>
                            <div class="flex justify-between mt-4">
                                @if ($nouveauProduit->vendeur)
                                    <span class="text-slate-400 text-[16px]">par <a href="{{ route('vendeur.view', $nouveauProduit->vendeur->id) }}" class="text-slate-900 hover:text-violet-600 font-medium">{{ $nouveauProduit->vendeur->raison_social }}</a></span>
                                @else
                                    <span class="text-slate-400 text-[16px]">par <span class="text-slate-900 font-medium">Vendeur Inconnu</span></span>
                                @endif
                                <span class="text-[16px] font-semibold block"><i class=""></i> {{ number_format($nouveauProduit->prix, 0, ',', ' ') }} FCFA</span>
                            </div>
                            <a href="{{ route('produit.view', $nouveauProduit->id) }}" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Voir l'article <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl md:leading-snug leading-snug font-semibold">Vous avez une question ? Contactez-nous !</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Notre plateforme est là pour faciliter vos achats et vos ventes. N'hésitez pas à nous contacter pour toute assistance.</p>
            <div class="mt-6">
                <a href="" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-full me-2 mt-2"><i class="uil uil-envelope"></i> Nous contacter</a>
            </div>
        </div>
    </div>
@endsection
