<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'idUser', 'role_id');
    }

    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'idUser');
    }

    public function vendeur()
    {
        return $this->hasOne(Vendeur::class, 'idUser','id');
    }

    public function acheteur()
    {
        return $this->hasOne(Acheteur::class, 'idUser');
    }

    public function profil()
    {
        if($this->hasRole('vendeur')){
            return $this->hasOne(Vendeur::class,'idUser');
        }
        if($this->hasRole('acheteur')){
            return $this->hasOne(Acheteur::class,'idUser');
        }
        if($this->hasRole('admin')){
            return $this->hasOne(Admin::class,'idUser');
        }
        return null;
    }
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [

        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
