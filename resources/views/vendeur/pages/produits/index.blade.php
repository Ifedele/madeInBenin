@extends('vendeur.layouts.master')
@section('content')
<div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <div class="px-5 py-4 sm:px-6 sm:py-5">
      <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
        Mes Produits
      </h3>
    </div>
    <div class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6">
        <div class="rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="mb-4 flex flex-col gap-2 px-5 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                <div>
                    <a href="{{route('produits.create')}}">
                        <button class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600">
                            Ajouter un produit
                        </button>
                    </a>
                </div>
            </div>
            <div class="  px-5 sm:px-6">
                <table class="min-w-full">
                    <thead class="border-y border-gray-100 py-3 dark:border-gray-800">
                        <tr>
                            <th class="py-3 font-normal whitespace-nowrap">
                                <div class="flex items-center">
                                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">Nom</p>
                                </div>
                            </th>
                            <th class="py-3 font-normal whitespace-nowrap">
                                <div class="flex items-center">
                                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">Prix</p>
                                </div>
                            </th>
                            <th class="py-3 font-normal whitespace-nowrap">
                                <div class="flex items-center">
                                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">Quantité</p>
                                </div>
                            </th>
                            <th class="py-3 font-normal whitespace-nowrap">
                                <div class="flex items-center">
                                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">Statut</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    @foreach ($produits as $produit )
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                            <tr>
                                <td class="py-3 whitespace-nowrap">
                                    <div class="col-span-3 flex items-center">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <span class="text-theme-sm block font-medium text-gray-700 dark:text-gray-400">
                                                  {{$produit->nom}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <p class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            {{number_format($produit->prix,0,',', ' ').'FCFA'}}
                                        </p>
                                    </div>
                                </td>
                                <td class="py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <p class="text-theme-sm text-gray-700 dark:text-gray-400">
                                           {{ $produit->qte.' '.$produit->unite_mesure}}
                                        </p>
                                    </div>
                                </td>
                                <td class="py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <p class="bg-success-50 text-theme-xs text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 font-medium">
                                            {{$produit->statut}}
                                        </p>
                                    </div>
                                </td>
                                <td class="py-3 whitespace-nowrap">
                                    <div class="flex items-center justify-center">
                                        <div x-data="{openDropDown: false}" class="relative">
                                            <button @click="openDropDown = !openDropDown" class="text-gray-500 dark:text-gray-400">
                                                <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99902 10.245C6.96552 10.245 7.74902 11.0285 7.74902 11.995V12.005C7.74902 12.9715 6.96552 13.755 5.99902 13.755C5.03253 13.755 4.24902 12.9715 4.24902 12.005V11.995C4.24902 11.0285 5.03253 10.245 5.99902 10.245ZM17.999 10.245C18.9655 10.245 19.749 11.0285 19.749 11.995V12.005C19.749 12.9715 18.9655 13.755 17.999 13.755C17.0325 13.755 16.249 12.9715 16.249 12.005V11.995C16.249 11.0285 17.0325 10.245 17.999 10.245ZM13.749 11.995C13.749 11.0285 12.9655 10.245 11.999 10.245C11.0325 10.245 10.249 11.0285 10.249 11.995V12.005C10.249 12.9715 11.0325 13.755 11.999 13.755C12.9655 13.755 13.749 12.9715 13.749 12.005V11.995Z" fill=""></path>
                                                </svg>
                                            </button>
                                            <div x-show="openDropDown" @click.outside="openDropDown = false" class="shadow-theme-lg dark:bg-gray-dark absolute top-full right-0 z-40 w-40 space-y-1 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800" style="display: none;">
                                                <a href="{{route('produits.show',$produit->id)}}">
                                                    <button class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                                        Détails
                                                    </button>
                                                </a>
                                                <a href="{{route('produits.edit', $produit->id)}}">
                                                    <button class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                                        Modifier
                                                    </button>
                                                </a>
                                                <form action="{{route('produits.destroy',$produit->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button  type="submit" class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
