<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Asignatura;
use Livewire\Component;

class AsignaturaAssing extends Component
{
    public $userId;
    public $asignaturaId;

    protected $rules = [
        'userId' => 'required|exists:users,id',
        'asignaturaId' => 'required|exists:asignaturas,id',
    ];

    public function assignToUser()
    {
        $this->validate();

        $user = User::findOrFail($this->userId);
        // Evita duplicados al asignar la asignatura al usuario
        $user->asignaturas()->syncWithoutDetaching([$this->asignaturaId]);

        session()->flash('message', 'Asignatura asignada correctamente al usuario.');
        $this->reset(['userId', 'asignaturaId']); // Opcional: resetea los campos después de la asignación
    }

    public function render()
    {
        $users = User::all(); // Considerar aplicar paginación o filtros para optimizar
        $asignaturas = Asignatura::all(); // Considerar aplicar paginación o filtros para optimizar

        return view('livewire.asignatura-assing', [
            'users' => $users,
            'asignaturas' => $asignaturas,
        ])->layout('layouts.app');
    }
}
