<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    
    use HasFactory;
    protected $fillable=[
        
        'type_reduction',
        'description',
        'valeur',
        'seuil',
        'produit_cible',
        'code_promo',
    ];
    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'promoproduits', 'id_promotion', 'id_produit')
                    ->withPivot('date_debut', 'date_fin');
    }
}
