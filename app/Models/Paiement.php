<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable=[
        
        'montant',
        'mode_paiement',
        'date_paiement',
        'statut_paiement',
        
    ];
    public function commande()
    {
        return $this->belongsTo(Commande::class, 'id_commande');
    }
}
