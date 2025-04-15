<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class CategorieStatus extends Component
{
    public $categorie;
    public $etat;

    public function mount(Categorie $categorie)
    {
        $this->categorie = $categorie;
        $this->etat = $categorie->etat;
    }

    public function toggleEtat()
    {
        $this->categorie->etat = !$this->categorie->etat;
        $this->categorie->save();
        
        $this->categorie->sousCategories()->update(['etat'=>$this->categorie->etat ? 1:0]);
        $this->etat = $this->categorie->etat;
    }
    public function render()
    {
        return view('livewire.categorie-status');
    }
}
