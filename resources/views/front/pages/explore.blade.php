@extends('front.layouts.master2')
@section('content')
<section class="relative md:pb-24 pb-16 mt-16">
     <div class="container z-1">
        <div class="grid grid-cols-1">
            <form class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow-sm dark:shadow-gray-700">
                <div class="registration-form text-slate-900 text-start">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                        <div>
                            <label class="form-label font-medium dark:text-white text-[15px]">Rechercher des produits:</label>
                            <div class="filter-search-form relative filter-border mt-2">
                                <i class="uil uil-search icons"></i>
                                <input type="text" id="search-produit" class="form-input w-full filter-input-box bg-gray-50 dark:bg-slate-800 dark:text-slate-200 border-0 focus:ring-transparent" placeholder="Nom du produit">
                            </div>
                        </div>
                        <div>
                            <label for="categorie-filter" class="form-label font-medium dark:text-white">Catégories:</label>
                            <div class="filter-search-form relative filter-border mt-2">
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner">
                                        <select class="form-select z-2 choices__input" id="categorie-filter"  tabindex="-1" data-choice="active">
                                            <option value="">Toutes les catégories</option>
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->lib_cat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="sous-categorie-filter" class="form-label font-medium dark:text-white text-[15px]">Sous-catégories:</label>
                            <div class="filter-search-form relative filter-border mt-2">
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner">
                                        <select class="form-select z-2 choices__input w-full bg-gray-50 dark:bg-slate-800 dark:text-slate-200 border-0 focus:ring-transparent" id="sous-categorie-filter">
                                            <option value="">Toutes les sous-catégories</option>
                                            @isset($sousCategories)
                                                @foreach ($sousCategories as $sousCategorie)
                                                    <option value="{{ $sousCategorie->id }}" data-parent-id="{{ $sousCategorie->id_categorie }}">{{ $sousCategorie->lib_sous_cat }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="type-filter" class="form-label font-medium dark:text-white text-[15px]">Types:</label>
                            <div class="filter-search-form relative filter-border mt-2">
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner">
                                        <select class="form-select z-2 choices__input w-full bg-gray-50 dark:bg-slate-800 dark:text-slate-200 border-0 focus:ring-transparent" id="type-filter">
                                            <option value="">Tous les types</option>
                                            @isset($types)
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}" data-parent-id="{{ $type->id_sous_categorie }}">{{ $type->lib_type }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div><!--end container-->
                        <button type="button" id="filter-button" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md">Filtrer</button>

                    </form><!--end form-->

                </div><!--end grid-->
            </div>
            @if ($aucunProduit)
                <div class="col-span-full text-center py-8">
                    <p class="text-lg text-gray-500 dark:text-gray-400">Aucun produit trouvé correspondant à vos critères de recherche.</p>
                </div>
            @else
                <div class="container mt-16">
                    <div class="grid xl lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                        @forelse ($produits as $produit)
                        <div class="group relative p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 h-fit">
                            <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg -mt-1 group-hover:-mt-2 -ms-1 group-hover:-ms-2 h-[98%] w-[98%] -z-1 transition-all duration-500"></div>
                            <div class="relative overflow-hidden">
                                <div class="relative overflow-hidden rounded-lg">
                                    @if ($produit->images->isNotEmpty())
                                        <img src="{{ asset('storage/' . $produit->images->first()->image_src) }}"
                                            class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500"
                                            alt="{{ $produit->nom }}">
                                    @else
                                        <img src="{{ asset('storage/assets/images/image-par-defaut.png') }}"
                                            class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500"
                                            alt="Image par défaut">
                                    @endif
                                </div>
                                <a href="{{route('produit.view',$produit->id)}}">
                                    <button type="submit" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="uil uil-eye"></i></button>
                                </a>
                            </div>

                            <div class="mt-3">
                                <div class="my-3">
                                    <a href="" class="font-semibold hover:text-violet-600">{{ $produit->nom }}</a>
                                    <p class="text-slate-400 text-sm">{{ Str::limit($produit->description, 50) }}</p>
                                </div>

                                <div class="flex justify-between p-2 bg-gray-50 dark:bg-slate-800 rounded-lg shadow-sm dark:shadow-gray-700">
                                    <div>
                                        <span class="text-[16px] font-medium text-slate-400 block">Prix</span>
                                        <span class="text-[16px] font-semibold block">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</span>
                                        <span class="text-[14px] font-semibold block mt-1 @if (strtolower($produit->statut) === 'épuisé') text-red-500 @else text-green-500 @endif">{{ ucfirst($produit->statut) }}</span>
                                    </div>
                                    {{-- Ajoutez ici d'autres informations comme la disponibilité, etc. --}}
                                </div>
                                <button type="submit" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="uil uil-shopping-cart"></i> Ajouter au panier</button>

                            </div>
                        </div>
                            @empty
                            <div class="col-span-full text-center">
                                <p class="text-slate-400">Aucun produit trouvé pour le moment.</p>
                            </div>
                        @endforelse
                    </div>
                @endif
                    <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                        <div class="md:col-span-12 text-center">
                            {{ $produits->links() }} {{-- Affichage de la pagination Laravel --}}
                        </div>
                    </div>
                    <h3 class="mb-4 font-semibold text-center dark:text-white text-2xl">Découvrez nos catégories</h3>
                    <div class="flex justify-between items-center p-3 rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800">

                        <div class="flex items-center">
                            @foreach ($categories as $categorie)
                                <div class="relative inline-block">
                                    <img src="{{ asset('storage/' . $categorie->image) }}" class="h-16 rounded-md" alt="">

                                </div>
                                <div class="ms-3">
                                    <a href="" class="font-semibold block hover:text-violet-600">{{ $categorie->lib_cat }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
