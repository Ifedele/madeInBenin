{{-- <div class="">
    <button
        wire:click="toggleEtat"
        class="px-4 py-2 text-white{{$etat ? 'bg-success-500': 'bg-error-500' }} rounded"
    >

    </button>
</div>
<label  class="flex cursor-pointer items-center gap-3 text-sm font-medium  {{$etat ? 'text-gray-700':'text-gray-400'}}">

</label> --}}
    <label    for="toggle-{{ $categorie->id }}" class="flex cursor-pointer items-center gap-3 text-sm font-medium " wire:click="toggleEtat">
        <div class="relative">
        <input type="checkbox" id="toggle-{{$categorie->id}}" class="sr-only" wire:click="toggleEtat">
        <div class="block h-6 w-11 rounded-full {{$etat ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'}} " >
            <div class="shadow-theme-sm absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white duration-300 ease-linear {{$etat ? 'translate-x-full': 'translate-x-0'}}"></div>
        </div>
    {{$etat ? 'Activé' : 'Désactivé'}}
  </label>
