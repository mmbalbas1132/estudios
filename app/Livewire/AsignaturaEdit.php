<?php

namespace App\Livewire;

use App\Models\Asignatura;
use Livewire\Component;

class AsignaturaEdit extends Component
{
    public $asignaturaId;
    public $nombre;
    public $descripcion;

    public function mount(Asignatura $asignatura)
    {
        $this->asignaturaId = $asignatura->id;
        $this->nombre = $asignatura->nombre;
        $this->descripcion = $asignatura->descripcion;
    }

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
    ];

    public function save()
    {
        $this->validate();

        $asignatura = Asignatura::find($this->asignaturaId);
        if ($asignatura) {
            $asignatura->update([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
            ]);

            session()->flash('message', 'Asignatura actualizada correctamente.');
            return redirect()->to('/asignaturas');
        } else {
            session()->flash('error', 'Asignatura no encontrada.');
        }
    }

    public function render()
    {
        return view('livewire.asignatura-edit')->layout('layouts.app');
    }
}
