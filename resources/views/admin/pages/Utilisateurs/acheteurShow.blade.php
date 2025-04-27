@extends('admin.layouts.master')
@section('content')
<div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] lg:p-6">
    <h3 class="mb-4 text-xl font-semibold text-gray-800 dark:text-white/90">
        Informations de l'Acheteur
    </h3>

    <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
      <div class="flex flex-col gap-5 xl:flex-row xl:items-center xl:justify-between">
        <div class="flex flex-col items-center w-full gap-6 xl:flex-row">
            <div class="w-20 h-20 overflow-hidden border border-gray-200 rounded-full dark:border-gray-800">
                <img src="{{ asset('storage/photo_profil/avatar.default.jpg') }}" alt="" class="w-20 h-20 rounded-full object-cover">
            </div>
            <div class="order-3 xl:order-2">
                <h4 class="mb-2 text-lg font-semibold text-center text-gray-800 dark:text-white/90 xl:text-left">
                    {{ $user->acheteur->nom}} . {{ $user->acheteur->prenom }}
                </h4>
            <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
              <p class="text-sm text-gray-500 dark:text-gray-400">
                {{$user->roles->first()->name}}
              </p>
              <div class="hidden h-3.5 w-px bg-gray-300 dark:bg-gray-700 xl:block"></div>
              <p class="text-sm text-gray-500 dark:text-gray-400">
               {{$user->acheteur->city->state->name ?? '' }} ,{{$user->acheteur->city->state->country->name ?? '' }}
              </p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
      <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
        <div>
          <h4 class="text-lg font-semibold text-gray-800 dark:text-white/90 lg:mb-6">
            Information Personelle
          </h4>

          <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-7 2xl:gap-x-32">
            <div>
              <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                Nom
              </p>
              <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                {{$user->acheteur->nom}}
              </p>
            </div>

            <div>
              <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                Prénom
              </p>
              <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                {{$user->acheteur->prenom}}
              </p>
            </div>

            <div>
              <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                Email
              </p>
              <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                {{$user->email}}
              </p>
            </div>

            <div>
              <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                Téléphone
              </p>
              <p class="text-sm font-medium text-gray-800 dark:text-white/90">
              </p>
              {{$user->acheteur->telephone}}
            </div>

            <div>
              <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                Type de compte
              </p>
              <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                {{$user->roles->first()->name}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="p-5 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
      <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
        <div>
          <h4 class="text-lg font-semibold text-gray-800 dark:text-white/90 lg:mb-6">
            Addresses
          </h4>

          <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-7 2xl:gap-x-32">
            <div>
              <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                Pays
              </p>
              <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                {{$user->acheteur->city->state->country->name ?? 'Non renseignée' }}
              </p>
            </div>

            <div>
                <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                  Département/Etat
                </p>
                <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                  {{$user->acheteur->city->state->name ?? 'Non renseignée' }}
                </p>
              </div>

            <div>
              <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                Ville
              </p>
              <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                {{$user->acheteur->city->name ?? 'Non renseignée' }}
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

