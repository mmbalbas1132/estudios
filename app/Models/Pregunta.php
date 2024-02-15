<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pregunta', 'respuesta', 'tema_id'];

    /**
     * Get the tema that owns the pregunta.
     */
    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    /**
     * Get the respuestas for the pregunta.
     */
    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }
}
