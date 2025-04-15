<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_sous_categorie',
        'lib_type',
    ];
    public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class, 'id_sous_categorie');
    }

    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_type');
    }
}
