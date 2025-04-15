<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCommande extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'quantite',
        'prix_unitaire',
        'montant',
    ];
    public function commande()
    {
        return $this->belongsTo(Commande::class, 'id_commande');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }

    public function commentaire()
    {
        return $this->hasOne(CommantaireProduit::class, 'id_detail_commande');
    }
}
