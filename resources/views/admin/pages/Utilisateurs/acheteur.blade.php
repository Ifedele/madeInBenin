@extends('admin.layouts.master')
@section('content')
<div class="overflow-hidden rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">

    <div class="flex flex-col gap-5 px-6 mb-4 sm:flex-row sm:items-center sm:justify-between">
      <div>
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
          Liste des Acheteurs
        </h3>
      </div>

      <div class="mb-4 flex flex-col gap-2 px-5 sm:flex-row sm:items-center sm:justify-between sm:px-6">

    </div>

      <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
            <a href="{{route('admin.acheteurs.pdf')}}">
                <button class="flex w-full items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-[11px] text-sm font-medium text-gray-700 shadow-theme-xs dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 sm:w-auto">
                    Télécharger la liste

                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0018 14.083C9.7866 14.083 9.59255 13.9924 9.45578 13.8472L5.61586 10.0097C5.32288 9.71688 5.32272 9.242 5.61552 8.94902C5.90832 8.65603 6.3832 8.65588 6.67618 8.94868L9.25182 11.5227L9.25182 3.33301C9.25182 2.91879 9.5876 2.58301 10.0018 2.58301C10.416 2.58301 10.7518 2.91879 10.7518 3.33301L10.7518 11.5193L13.3242 8.94866C13.6172 8.65587 14.0921 8.65604 14.3849 8.94903C14.6777 9.24203 14.6775 9.7169 14.3845 10.0097L10.5761 13.8154C10.4385 13.979 10.2323 14.083 10.0018 14.083ZM4.0835 13.333C4.0835 12.9188 3.74771 12.583 3.3335 12.583C2.91928 12.583 2.5835 12.9188 2.5835 13.333V15.1663C2.5835 16.409 3.59086 17.4163 4.8335 17.4163H15.1676C16.4102 17.4163 17.4176 16.409 17.4176 15.1663V13.333C17.4176 12.9188 17.0818 12.583 16.6676 12.583C16.2533 12.583 15.9176 12.9188 15.9176 13.333V15.1663C15.9176 15.5806 15.5818 15.9163 15.1676 15.9163H4.8335C4.41928 15.9163 4.0835 15.5806 4.0835 15.1663V13.333Z" fill=""></path>
                    </svg>
                </button>
            </a>
        </div>
    </div>
    </div>

        <div class="max-w-full overflow-x-auto custom-scrollbar">
            <table class="min-w-full">
                <!-- table header start -->
                <thead class="border-gray-100 border-y bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
                <tr>
                    <th class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center">
                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                Nom
                            </p>
                        </div>
                    </th>
                    <th class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center">
                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                Prénom
                            </p>
                        </div>
                    </th>
                    <th class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                Ville
                            </p>
                        </div>
                    </th>
                    <th class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                Téléphone
                            </p>
                        </div>
                    </th>
                    <th class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                               Email
                            </p>
                        </div>
                    </th>
                    <th class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                               Action
                            </p>
                        </div>
                    </th>

                </tr>
                </thead>
                <!-- table header end -->

                <!-- table body start -->
                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                    @foreach ($acheteurs as $user  )
                        <tr>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex items-center gap-3">
                                    <div>
                                        <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400">
                                        {{$user->acheteur->nom ?? '-'}}
                                        </span>
                                    </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex items-center gap-3">
                                    <div>
                                        <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400">
                                            {{$user->acheteur->prenom ?? '-'}}
                                        </span>
                                    </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex items-center gap-3">
                                    <div>
                                        <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400">
                                            {{$user->acheteur->city->name ?? '-'}}
                                        </span>
                                    </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex items-center gap-3">
                                    <div>
                                        <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400">
                                            {{$user->acheteur->tel ?? '-'}}
                                        </span>
                                    </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex items-center gap-3">
                                    <div>
                                        <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400">
                                            {{$user->email}}
                                        </span>
                                    </div>
                                    </div>
                                </div>
                            </td>

                            <td class="text-center flex justify-center gap-2 ">
                                <div class="col-span-1 flex items-center px- py-[17.5px]">
                                    <div class="flex w-full items-center gap-2">
                                        {{-- {{dd($categorie->id)}} --}}
                                    <a href="{{route('admin.acheteurShow', $user->id)}}">

                                        <button class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90">
                                            <svg class="fill-current" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8749 13.8619C8.10837 13.8619 5.74279 12.1372 4.79804 9.70241C5.74279 7.26761 8.10837 5.54297 10.8749 5.54297C13.6415 5.54297 16.0071 7.26762 16.9518 9.70243C16.0071 12.1372 13.6415 13.8619 10.8749 13.8619ZM10.8749 4.04297C7.35666 4.04297 4.36964 6.30917 3.29025 9.4593C3.23626 9.61687 3.23626 9.78794 3.29025 9.94552C4.36964 13.0957 7.35666 15.3619 10.8749 15.3619C14.3932 15.3619 17.3802 13.0957 18.4596 9.94555C18.5136 9.78797 18.5136 9.6169 18.4596 9.45932C17.3802 6.30919 14.3932 4.04297 10.8749 4.04297ZM10.8663 7.84413C9.84002 7.84413 9.00808 8.67606 9.00808 9.70231C9.00808 10.7286 9.84002 11.5605 10.8663 11.5605H10.8811C11.9074 11.5605 12.7393 10.7286 12.7393 9.70231C12.7393 8.67606 11.9074 7.84413 10.8811 7.84413H10.8663Z" fill=""></path>
                                            </svg>
                                          </button>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <!-- table body end -->
            </table>
        </div>
  </div>
@endsection
