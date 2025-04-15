<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SousCategorie;

class SousCategorieStatus extends Component
{
    public $sousCategorie;
    public $etat;
    public $categorieParente;

    public function mount(SousCategorie $sousCategorie)
    {
        $this->sousCategorie = $sousCategorie;
        $this->etat = $sousCategorie->etat;
        $this->categorieParente = $sousCategorie->categorie;
    }

    public function toggleEtat2()
    {
        if($this->categorieParente->etat){
            $this->sousCategorie->etat = !$this->sousCategorie->etat;
            $this->sousCategorie->save();
            $this->etat = $this->sousCategorie->etat;
        } else{
            $this->dispatch('categorieParenteDesactive');
        }

    }

    public function render()
    {
        return view('livewire.sous-categorie-status');
    }
}
