@extends('admin.layouts.master')
@section('content')
<div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <div class="px-5 py-4 sm:px-6 sm:py-5">
        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Inscrire un vendeur
        </h3>
      @if ($errors->any())
        <div class="mb-4 text-red-600">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
        </div>
      @endif
    </div>
    <div class="p-5 space-y-6 border-t border-gray-100 dark:border-gray-800 sm:p-6">
      <form action="{{route('admin.vendeurs.store')}}" method="POST">
        @csrf

        <div class="-mx-2.5 flex flex-wrap gap-y-5">
          <div class="w-full px-2.5 xl:w-1/2">
            <label for="nom" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Nom
            </label>
            <input type="text" id="nom" name="nom" required class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
          </div>

          <div class="w-full px-2.5 xl:w-1/2">
            <label for="prenom" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Prénom
            </label>
            <input type="text" id="prenom" name="prenom" required class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
          </div>

          <div class="w-full px-2.5">
            <label for="email" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Email
            </label>
            <input type="email" id="email" name="email" required class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
          </div>

          <div class="w-full px-2.5">
            <label for="telephone" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Téléphone
            </label>
            <input type="text" id="telephone" name="telephone" required class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
          </div>

          <div class="w-full px-2.5">
            <button type="submit" class="flex items-center justify-center w-full gap-2 p-3 text-sm font-medium text-white transition-colors rounded-lg bg-brand-500 hover:bg-brand-600">
              Envoyé l'invitation

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
