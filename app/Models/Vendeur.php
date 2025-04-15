<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    use HasFactory;
    protected $fillable=[

        'nom',
        'prenom',
        'raison_social',
        'telephone',
        'logo',
        'photo_profile',
        'idUser',
    ];
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'idUser','id');
    }

    public function contrat()
    {
        return $this->hasOne(Contrat::class, 'id_vendeur');
    }

    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_vendeur');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
