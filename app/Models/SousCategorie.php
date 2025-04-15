<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_categorie', 
        'lib_sous_cat', 
        'etat'
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }

    public function types()
    {
        return $this->hasMany(Type::class, 'id_sous_cat');
    }
}
