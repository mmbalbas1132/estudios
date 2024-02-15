<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['respuesta', 'es_correcta', 'pregunta_id'];

    /**
     * Get the pregunta that owns the respuesta.
     */
    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }
}
