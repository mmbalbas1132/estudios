<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Añadir el uso de SoftDeletes

class Asignatura extends Model
{
    use HasFactory, SoftDeletes; // Usar SoftDeletes junto con HasFactory

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion'];

    // Otra alternativa es usar $guarded si prefieres especificar qué campos no se pueden asignar masivamente
    // protected $guarded = ['id'];

    /**
     * Get the temas for the asignatura.
     */
    public function temas()
    {
        return $this->hasMany(Tema::class);
    }

    /**
     * The users that belong to the asignatura.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_asignaturas'); // Asegúrate de que el nombre de la tabla intermedia esté en plural.
    }

    // Ejemplo de un Accesor para asegurar que el nombre de la asignatura siempre tenga la primera letra en mayúscula al obtenerlo
    public function getNombreAttribute($value)
    {
        return ucfirst($value);
    }

    // Ejemplo de un Mutador para asegurar que el nombre de la asignatura se guarde siempre en minúsculas en la base de datos
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = strtolower($value);
    }
}
