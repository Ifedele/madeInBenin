<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable=[

        'date_com',
        'montant',
        'statut',
    ];
    public function acheteur()
    {
        return $this->belongsTo(Acheteur::class, 'id_acheteur');
    }

    public function detailsCommandes()
    {
        return $this->hasMany(DetailCommande::class, 'id_commande');
    }

    public function paiement()
    {
        return $this->hasOne(Paiement::class, 'id_commande');
    }

    public function livraison()
    {
        return $this->hasOne(Livraison::class, 'id_commande');
   }

   public function produits(): BelongsToMany
   {
       return $this->belongsToMany(Produit::class, 'details_commandes', 'id_commande', 'id_produit')
                   ->withPivot('quantite', 'prix_unitaire') // Si ces colonnes existent dans detail_commande
                   ->withTimestamps(); // Si created_at et updated_at existent dans detail_commande
   }
}
