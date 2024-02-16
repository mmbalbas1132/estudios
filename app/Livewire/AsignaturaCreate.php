<?php

namespace App\Livewire;

use App\Models\Asignatura;
use App\Models\User;
use Livewire\Component;

class AsignaturaCreate extends Component
{
    public $nombre;
    public $descripcion;
    public $asignatura;

    public function mount()
    {
        $this->asignatura = new Asignatura();
    }

    public function save()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $asignatura = Asignatura::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion
        ]);

        // Accede al usuario actualmente autenticado
        $user = auth()->user();

        // Asocia la asignatura con el usuario
        $user->asignaturas()->attach($asignatura->id);

        return redirect()->to('/asignaturas');
    }

    public function render()
    {
        return view('livewire.asignatura-create')->layout('layouts.app');
    }

    public function assignToUser($userId, $asignaturaId)
    {
        $user = User::find($userId);
        $user->asignaturas()->attach($asignaturaId);
    }

}
