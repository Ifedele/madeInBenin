@extends('vendeur.layouts.master')
@section('content')

    <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
            <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                Détail du produit
            </h3>
        </div>
        <div class="border-t border-gray-100 p-2 dark:border-gray-800 sm:p-4">
            @if (!empty($produit->images) && $produit->images->count() > 0)
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    @foreach ( $produit->images as $image )
                        <div>
                            <img src="{{asset('storage/' . $image->image_src) }}" alt="image grid" class="rounded-xl border border-gray-200 dark:border-gray-800">
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">Aucune Image disponible</p>
            @endif
        </div>
    </div>
    <div class="max-w-5xl mx-auto p-6 bg-white shadow-lg mt-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">{{$produit->nom}}</h3>
                    <p class="text-gray-600"><strong>Type :</strong> {{$produit->type->lib_type ?? 'Aucune'}}</p>
                    <p class="text-gray-600"><strong>Prix :</strong>  <span class="text-success-600 font-bold">{{number_format($produit->prix,0,',', ' ').'FCFA'}}</span></p>
                    <p class="text-gray-600"><strong>Quantité en stock :</strong> {{ $produit->qte.' '.$produit->unite_mesure}}</p>
                    <p class="text-gray-600"><strong>Description :</strong> {{$produit->description}}</p>
                    <p class="text-gray-600"><strong>Statut :</strong>
                        @if ($produit->statut)
                            <span class="inline-flex items-center justify-center gap-1 rounded-full bg-success-50 px-2.5 py-0.5 text-sm font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                                Disponible
                            </span>
                        @else
                            <span class="inline-flex items-center justify-center gap-1 rounded-full bg-error-50 px-2.5 py-0.5 text-sm font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                                Epuisé
                            </span>
                        @endif
                    </p>
                </div>
                <div class="flex felx-wrap gap-4 sm:items-center">
                    <button class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-warning-500 shadow-theme-xs hover:bg-warning-600">
                        <a href="{{route('produits.edit', $produit->id)}}">Modifier</a>
                    </button>
                    
                    <button class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-gray-500 shadow-theme-xs hover:bg-light-600">
                        <a href="{{route('produits.index')}}">Retour</a>
                        </button>
                </div>
            </div>

    </div>
@endsection
