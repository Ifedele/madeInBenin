<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoCompte extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'numero_carte',
        'exp_date',
        'cvv',
        'num_momo',
        
    ];
    public function acheteur()
    {
        return $this->belongsTo(Acheteur::class, 'id_acheteur');
    }
}
