<label    for="toggle-{{ $sousCategorie->id }}" class="flex cursor-pointer items-center gap-3 text-sm font-medium " wire:click="toggleEtat2" >
    <div class="relative" x-data="{catedgorieParenteDesactive: false}" x-init=" $wire.on('categorieParenteDesactive', ()=>{
        categorieParenteDesactive = true; setTimeout(()=>{categorieParenteDesactive = false;},3000);})">
        <input type="checkbox" id="toggle-{{$sousCategorie->id}}" class="sr-only" wire:click="toggleEtat2" >
        <div class="block h-6 w-11 rounded-full {{$etat ? 'bg-brand-500 dark:bg-brand-500' : 'bg-gray-200 dark:bg-white/10'}} " >
            <div class="shadow-theme-sm absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white duration-300 ease-linear {{$etat ? 'translate-x-full': 'translate-x-0'}}"></div>
        </div>
            {{$etat ? 'Activé' : 'Désactivé'}}
    </div>
</label>

