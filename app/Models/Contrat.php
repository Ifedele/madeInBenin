<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Contrat extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'date_debut',
        'date_fin',
    ];
    public function vendeur()
    {
        return $this->belongsTo(Vendeur::class, 'id_vendeur');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}
