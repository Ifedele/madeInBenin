<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="grid grid-cols-1">
            <div class="mb-4">
                <label class="font-semibold" for="nom">Nom:</label>
                <input id="nom" type="text" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-3" name="nom" :value="old('nom')" required autofocus autocomplete="name" placeholder="Votre nom">
                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label class="font-semibold" for="prenom">Prénom:</label>
                <input id="prenom" type="text" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-3" name="prenom" :value="old('prenom')" required placeholder="Votre prénom">
                <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label class="font-semibold" for="tel">Téléphone:</label>
                <input id="tel" type="text" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-3" name="tel" :value="old('tel')" required placeholder="Votre numéro de téléphone">
                <x-input-error :messages="$errors->get('tel')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label class="font-semibold" for="email">Email:</label>
                <input id="email" type="email" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-3" name="email" :value="old('email')" required autocomplete="username" placeholder="name@example.com">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label class="font-semibold" for="password">Mot de passe:</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-3" placeholder="Mot de passe (au moins 8 caractères)">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label class="font-semibold" for="password_confirmation">Confirmer le mot de passe:</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-3" placeholder="Confirmer le mot de passe">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    Déjà inscrit?
                </a>

                <x-primary-button class="ms-4">
                    S'inscrire
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
