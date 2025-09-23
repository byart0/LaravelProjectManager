<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Doldurulabilir alanlar
    protected $fillable = ['name', 'password'];

    // Gizli alanlar
    protected $hidden = ['password', 'remember_token'];

    // Şifreyi doğru şekilde hash'lemek için casts metodunu düzenledik
    protected $casts = [
        'password' => 'hashed',  // Şifreyi otomatik olarak hash'ler
    ];

    // Kullanıcıya ait projeleri almak için ilişki
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
