<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="grid grid-cols-1">
            <div class="mb-4">
                <label class="font-semibold" for="email">Email:</label>
                <input id="email" type="email" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-3" name="email" :value="old('email')" placeholder="name@example.com">
                @if (isset($errors) && $errors->has('email'))
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                @endif
            </div>

            <div class="mb-4">
                <label class="font-semibold" for="password":value="__('Password')">Mot de passe:</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-3" placeholder="Mot de passe:">
                @if (isset($errors) && $errors->has('password'))
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                @endif
            </div>

            <div class="flex justify-between mb-4">
                <div class="inline-flex items-center mb-0">
                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-violet-600 checked:appearance-auto dark:accent-violet-600 focus:border-violet-300 focus:ring-0 focus:ring-offset-0 focus:ring-violet-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="remember_me" name="remember">
                    <label class="form-checkbox-label text-slate-400" for="remember_me">Se souvenir</label>
                </div>

                <p class="text-slate-400 mb-0">
                    @if (Route::has('password.request'))
                    <a  class="text-slate-400"  href="{{ route('password.request') }}">Mot de passe oublié?</a>
                    @endif
                </p>
            </div>

            <div class="mb-4">
                <input type="submit" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-full w-full" value="Se connecter">
            </div>

            {{-- <div class="text-center">
                <span class="text-slate-400 me-2">Don't have an account ?</span> <a href="signup.html" class="text-slate-900 dark:text-white font-bold">Sign Up</a>
            </div> --}}
        </div>


    </form>


</x-guest-layout>
