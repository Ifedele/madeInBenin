<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class CommentaireProduit extends Model
{
    use HasFactory;
    protected $fillable=[
       
        'note',
        'commentaire',
        'date_com',
    ];
    public function detailCommande()
    {
        return $this->belongsTo(DetailCommande::class, 'id_detail_commande');
    }
}
