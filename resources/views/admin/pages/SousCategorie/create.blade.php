@extends('admin.layouts.master')
@section('content')
<div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <div class="px-5 py-4 sm:px-6 sm:py-5">
      <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
        Ajouter une sous catégorie
      </h3>
    </div>
    <div class="p-5 space-y-6 border-t border-gray-100 dark:border-gray-800 sm:p-6">
      <form action="{{route('sousCategorie.store')}}" method="POST">
        @csrf
        <div class="-mx-2.5 flex flex-wrap gap-y-5">

          <div class="w-full px-2.5">
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Catégorie :
            </label>
            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
              <select name="id_categorie" required class="w-full px-4 py-3 text-sm text-gray-800 bg-transparent border border-gray-300 rounded-lg appearance-none dark:bg-dark-900 h-11 bg-none shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                @foreach ($categories as $categorie )
                <option value="{{$categorie->id}}" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                 {{$categorie->lib_cat}}
                </option> 
                @endforeach 
              </select>
              <span class="absolute z-30 text-gray-500 -translate-y-1/2 right-4 top-1/2 dark:text-gray-400">
                <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </div>
            <div>
                <label for="lib_sous_cat" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Sous catégorie 
                </label>
                <input name="lib_sous_cat" id="lib_sous_cat" required type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
              </div>
          </div>
          <div class="w-full px-2.5">
            <div class="flex items-center gap-3 mt-1">
              <button type="submit" class="flex items-center justify-center gap-2 px-4 py-3 text-sm font-medium text-white rounded-lg bg-brand-500 hover:bg-brand-600">
                Enrégistrer
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection