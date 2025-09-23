<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    // Doldurulabilir alanlar
    protected $fillable = ['name', 'user_id'];

    // Projeye ait görevleri almak için ilişki
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // Projeye ait kullanıcıyı almak için ilişki
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
