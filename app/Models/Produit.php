<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable=[

        'nom',
        'description',
        'prix',
        'qte',
        'unite_mesure',
        'statut',
        'id_type',
        'id_vendeur'
    ];
    public function vendeur()
    {
        return $this->belongsTo(Vendeur::class, 'id_vendeur');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'id_produit');
    }

    public function commandes()
    {
        return $this->hasMany(DetailCommande::class, 'id_produit');
    }

    public function promotions()
    {
        return $this->belongsToMany(Promotion::class, 'promoproduit','id_produit', 'id_promotion')
                    ->withPivot('date_debut', 'date_fin');
    }
}
