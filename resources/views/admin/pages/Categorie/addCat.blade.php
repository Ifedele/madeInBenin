@extends('admin.layouts.master')
@section('content')
<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-5 py-4 sm:px-6 sm:py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Ajouter une catégorie :
            
          </h3>
        </div>
        <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
          <!-- Elements -->
          <div>
            <label for="lib_cat" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Nom
            </label>
            <input name="lib_cat" id="lib_cat" type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
          </div>
          <div>
            <label for="image" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Image
            </label>
            <input type="file"name="image" id="image" class="focus:border-ring-brand-300 shadow-theme-xs focus:file:ring-brand-300 h-11 w-full overflow-hidden rounded-lg border border-gray-300 bg-transparent text-sm text-gray-500 transition-colors file:mr-5 file:border-collapse file:cursor-pointer file:rounded-l-lg file:border-0 file:border-r file:border-solid file:border-gray-200 file:bg-gray-50 file:py-3 file:pr-3 file:pl-3.5 file:text-sm file:text-gray-700 placeholder:text-gray-400 hover:file:bg-gray-100 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:text-white/90 dark:file:border-gray-800 dark:file:bg-white/[0.03] dark:file:text-gray-400 dark:placeholder:text-gray-400">
          </div>
        </div>
        <div class="w-full px-2.5">
            <button type="submit" class="w-full p-3 text-sm font-medium text-white transition-colors rounded-lg bg-brand-500 hover:bg-brand-600">
              Enrégistrer
            </button>
          </div>
    </div>
</form>
@endsection

