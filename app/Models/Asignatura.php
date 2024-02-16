<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion'];

    /**
     * Get the temas for the asignatura.
     */
    public function temas()
    {
        return $this->hasMany(Tema::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_asignatura');
    }
}
