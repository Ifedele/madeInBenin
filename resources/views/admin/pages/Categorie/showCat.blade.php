@extends('admin.layouts.master')
@section('content')
<div class="overflow-hidden rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
    <div class="flex flex-col gap-5 px-6 mb-4 sm:flex-row sm:items-center sm:justify-between">
      <div>
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
          Liste des Catégories
        </h3>
      </div>
    </div>
    @if(isset($categories) && $categories->isNotEmpty())

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
                        Image
                        </p>
                    </div>
                    </th>
                    <th class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                            Status
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
                    @foreach ($categories as $categorie  )
                        <tr>
                            <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex items-center gap-3">
                                <div>
                                    <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400">
                                    {{$categorie->lib_cat}}
                                    </span>
                                </div>
                                </div>
                            </div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                @if('categorie->image')
                                <div class="flex items-center">
                                    <img src="{{asset('storage/' . $categorie->image)}}" alt="{{$categorie->lib_cat}}" width="100">
                                </div>
                                @else
                                    Pas d'image
                                @endif
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div x-data="{ switcherToggle: {{$categorie->etat == 1 ? 'true' : 'false'}} }" class="flex items-center justify-center">

                                      @livewire('categorie-status', ['categorie' =>$categorie])

                                </div>
                            </td>

                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <a href="{{route('categorie.edit', ['id'=>$categorie->id]) }}">
                                        <svg class="fill-current" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0911 3.53206C16.2124 2.65338 14.7878 2.65338 13.9091 3.53206L5.6074 11.8337C5.29899 12.1421 5.08687 12.5335 4.99684 12.9603L4.26177 16.445C4.20943 16.6931 4.286 16.9508 4.46529 17.1301C4.64458 17.3094 4.90232 17.3859 5.15042 17.3336L8.63507 16.5985C9.06184 16.5085 9.45324 16.2964 9.76165 15.988L18.0633 7.68631C18.942 6.80763 18.942 5.38301 18.0633 4.50433L17.0911 3.53206ZM14.9697 4.59272C15.2626 4.29982 15.7375 4.29982 16.0304 4.59272L17.0027 5.56499C17.2956 5.85788 17.2956 6.33276 17.0027 6.62565L16.1043 7.52402L14.0714 5.49109L14.9697 4.59272ZM13.0107 6.55175L6.66806 12.8944C6.56526 12.9972 6.49455 13.1277 6.46454 13.2699L5.96704 15.6283L8.32547 15.1308C8.46772 15.1008 8.59819 15.0301 8.70099 14.9273L15.0436 8.58468L13.0107 6.55175Z" fill=""></path>
                                        </svg>
                                    </a>
                                </div>
                              </td>

                        </tr>
                    @endforeach
                </tbody>
                <!-- table body end -->
            </table>
        </div>
    @else
    <p>Aucune catégorie trouvée.<p>
    @endif
  </div>



 @endsection

