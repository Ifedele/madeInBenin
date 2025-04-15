<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'lib_cat',
        'image',
        'etat'
    ];
    public function sousCategories()
    {
        return $this->hasMany(SousCategorie::class, 'id_categorie');
    }
}
