<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable=[
       
        'date_expedition',
        'date_livraison',
        'mode_livraison',
        'statut_livraison',
        'adresse_livraison',
        
    ];
    public function commande()
    {
        return $this->belongsTo(Commande::class, 'id_commande');
    }
}
