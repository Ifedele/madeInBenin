<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Admin extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'prenom',
        'telephone',
        'photo_profile',
    ];
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function contrat()
    {
        return $this->hasOne(Contrat::class, 'id_contrat');
    }
}
