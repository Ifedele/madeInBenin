<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Acheteur extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'prenom',
        'tel',
       
    ];
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function commandes()
    {
        return $this->hasMany(Commande::class, 'id_acheteur');
    }
}
