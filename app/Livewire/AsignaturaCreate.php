<?php

namespace App\Livewire;

use App\Models\Asignatura;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AsignaturaCreate extends Component
{
    public $nombre;
    public $descripcion;
    public $asignatura;

    public function save()
    {
        $validatedData = $this->validate([
            'nombre' => 'required|unique:asignaturas,nombre|max:255',
            'descripcion' => 'required|max:1024',
        ]);

        $asignatura = Asignatura::create($validatedData);

        Auth::user()->asignaturas()->attach($asignatura->id);

        return redirect('/asignaturas')->with('message', 'Asignatura creada correctamente.');
    }

    public function render()
    {
        return view('livewire.asignatura-create')->layout('layouts.app');
    }
}
