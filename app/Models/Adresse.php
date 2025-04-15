<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;
    protected $fillable=[
        'latitude',
        'longitude',
        'code_postale',
        'adresse',
    ];
    public function vendeur()
    {
        return $this->belongsTo(Vendeur::class, 'id_vendeur');
    }

}
