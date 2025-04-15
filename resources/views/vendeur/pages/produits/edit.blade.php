@extends('vendeur.layouts.master')
@section('content')
<div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <div class="px-5 py-4 sm:px-6 sm:py-5">
      <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
        Ajout de produit
      </h3>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="p-5 space-y-6 border-t border-gray-100 dark:border-gray-800 sm:p-6">
      <form action="{{route('produits.update',$produit->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="-mx-2.5 flex flex-wrap gap-y-5">
            <div class="w-full px-2.5">
                <label for="nom "class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Nom du produit
                </label>
                <input type="text" value="{{old('nom', $produit->nom)}}" name="nom" id="nom" placeholder="" required class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
            </div>

            <div class="w-full px-2.5 ">
                <label for="description" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Description
                </label>
                <textarea name="description"  value="{{old('description', $produit->description)}}" id="description" placeholder="" rows="6" class="dark:bg-dark-900 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"></textarea>
            </div>

            <div class="w-full px-2.5">
                <label for="prix" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Prix
                </label>
                <input type="number" value="{{old('prix', $produit->prix)}}" name="prix" id="prix" placeholder="" class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
            </div>

            <div class="w-full px-2.5 xl:w-1/2">
                <label for="qte" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Quantité
                </label>
                <input type="number" value="{{old('qte',$produit->qte )}}"  name="qte" id="qte" placeholder="" class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
            </div>

            <div class="w-full px-2.5 xl:w-1/2">
                <label for="unite_mesure" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Unité de mésure
                </label>
                <div  class="relative z-20 bg-transparent">
                    <select  name="unite_mesure" value="{{$produit->unite_mesure}}" id="unite_mesure" class="dark:bg-dark-900 z-20 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                        <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Sélectionner une unité de mésure
                        </option>
                        <option value="boîte" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Boîte
                        </option>
                        <option value="cm" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                           centimètre (cm)
                        </option>
                        <option value="g" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                           Gramme (g)
                        </option>
                        <option value="kg" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                           Kilogramme (Kg)
                        </option>
                        <option value="l" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Littre (l)
                        </option>
                        <option value="m" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Mètre (m)
                        </option>
                        <option value="ml" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Millilitres (ml)
                        </option>
                        <option value="pièces" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Pièce(s)
                        </option>
                        <option value="paquet" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Paquet
                        </option>

                        <option value="pouces" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Pouces(")
                        </option>
                        <option value="s" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Taille S
                        </option>
                        <option value="m" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Taille M
                        </option>
                        <option value="l" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Taille L
                        </option>
                        <option value="xl" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Taille XL
                        </option>
                    </select>
                    <span class="absolute z-30 text-gray-500 -translate-y-1/2 right-4 top-1/2 dark:text-gray-400">
                        <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="w-full px-2.5">
                <label for="statut" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Statut
                </label>
                <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                <select  name="statut" value="{{$produit->statut}}" id="statut" class="dark:bg-dark-900 z-20 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                    <option value="disponible" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                    Disponible
                    </option>
                    <option value="epuise" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                    Epuisé
                    </option>
                </select>
                <span class="absolute z-30 text-gray-500 -translate-y-1/2 right-4 top-1/2 dark:text-gray-400">
                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
                </div>
            </div>

            <div class="w-full px-2.5 ">
                <label for="id_sous_categorie" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Sous-Categorie
                </label>
                <div  class="relative z-20 bg-transparent">
                    <select  name="id_sous_categorie" id="id_sous_categorie" class="dark:bg-dark-900 z-20 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                        @foreach ($sousCategories as $sousCategorie)
                            <option value="{{$sousCategorie->id}}" {{ $produit->id_sous_categorie == $sousCategorie->id? 'selected':''}} class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                                {{$sousCategorie->lib_sous_cat}}
                            </option>
                        @endforeach
                    </select>
                    <span class="absolute z-30 text-gray-500 -translate-y-1/2 right-4 top-1/2 dark:text-gray-400">
                        <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="w-full px-2.5">
                <label for="type "class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Type
                </label>
                <input type="text" name="type" value="{{old('type', $produit->type->lib_type ?? '')}}" id="type" placeholder="" required class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
            </div>

            <div class="w-full px-2.5">
                <label for="images "class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Images existantes
                </label>
                <div class="">
                    @foreach ($produit->images as $image )
                        <img src="{{asset('storage/' . $image->produit)}}" width="100">
                    @endforeach
                </div>
                </div>

            <div class="w-full px-2.5">
                <label for="images "class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Ajouter une nouvelle Image
                </label>
                <input type="file"  name="images[]" id="images" multiple placeholder="" required class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
            </div>

          <div class="w-full px-2.5">
            <button type="submit" class="flex items-center justify-center w-full gap-2 p-3 text-sm font-medium text-white transition-colors rounded-lg bg-brand-500 hover:bg-brand-600">
              Enrégistrer

              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.98481 2.44399C3.11333 1.57147 1.15325 3.46979 1.96543 5.36824L3.82086 9.70527C3.90146 9.89367 3.90146 10.1069 3.82086 10.2953L1.96543 14.6323C1.15326 16.5307 3.11332 18.4291 4.98481 17.5565L16.8184 12.0395C18.5508 11.2319 18.5508 8.76865 16.8184 7.961L4.98481 2.44399ZM3.34453 4.77824C3.0738 4.14543 3.72716 3.51266 4.35099 3.80349L16.1846 9.32051C16.762 9.58973 16.762 10.4108 16.1846 10.68L4.35098 16.197C3.72716 16.4879 3.0738 15.8551 3.34453 15.2223L5.19996 10.8853C5.21944 10.8397 5.23735 10.7937 5.2537 10.7473L9.11784 10.7473C9.53206 10.7473 9.86784 10.4115 9.86784 9.99726C9.86784 9.58304 9.53206 9.24726 9.11784 9.24726L5.25157 9.24726C5.2358 9.20287 5.2186 9.15885 5.19996 9.11528L3.34453 4.77824Z" fill=""></path>
              </svg>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>


@endsection

