
<div class="overflow-hidden rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">

    <div class="flex flex-col gap-5 px-6 mb-4 sm:flex-row sm:items-center sm:justify-between">
      <div>
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
          Liste des Vendeurs
        </h3>
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
                                Raison sociale
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

                </tr>
                </thead>
                <!-- table header end -->

                <!-- table body start -->
                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                    @foreach ($vendeurs as $user  )
                        <tr>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex items-center gap-3">
                                    <div>
                                        <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400">
                                        {{$user->vendeur->nom ?? '-'}}
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
                                            {{$user->vendeur->prenom ?? '-'}}
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
                                            {{$user->vendeur->raison_social ?? '-'}}
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
                                            {{$user->vendeur->telephone ?? '-'}}
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
                        </tr>
                    @endforeach
                </tbody>
                <!-- table body end -->
            </table>
        </div>
  </div>

