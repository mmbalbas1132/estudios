<?php

namespace App\Http\Livewire;

use App\Models\Asignatura;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AsignaturaCreate extends Component
{
    public $nombre;
    public $descripcion;

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
    ];

    public function save()
    {
        $this->validate();

        $asignatura = Asignatura::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
        ]);

        // Asocia la asignatura con el usuario autenticado
        Auth::user()->asignaturas()->attach($asignatura->id);

        // Proporciona una retroalimentación al usuario
        session()->flash('message', 'Asignatura creada correctamente.');

        return redirect()->to('/asignaturas');
    }

    public function render()
    {
        return view('livewire.asignatura-create')->layout('layouts.app');
    }
}
