<?php

namespace App\Livewire;

use App\Models\Asignatura;
use Livewire\Component;

class AsignaturaForm extends Component
{
    public $asignaturaId;
    public $nombre;
    public $descripcion;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string|max:1000',
    ];

    public function mount($asignaturaId = null)
    {
        if ($asignaturaId) {
            $asignatura = Asignatura::findOrFail($asignaturaId);
            $this->asignaturaId = $asignatura->id;
            $this->nombre = $asignatura->nombre;
            $this->descripcion = $asignatura->descripcion;
        }
    }

    public function save()
    {
        $this->validate();

        Asignatura::updateOrCreate(
            ['id' => $this->asignaturaId],
            [
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
            ]
        );

        session()->flash('message', $this->asignaturaId ? 'Asignatura actualizada correctamente.' : 'Asignatura creada correctamente.');

        return redirect()->route('asignaturas.index');
    }

    public function render()
    {
        return view('livewire.asignatura-form')->layout('layouts.app');
    }
}
