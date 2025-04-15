<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentaireGeneraux extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'commentaire',
        'date_com',
    ];
    public function acheteur()
    {
        return $this->belongsTo(Acheteur::class, 'id_acheteur');
    }
}
