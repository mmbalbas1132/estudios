<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Asignatura;
use Livewire\Component;

class AsignaturaAssing extends Component
{
    public $userId;
    public $asignaturaId;

    public function assignToUser()
    {
        $user = User::find($this->userId);
        $user->asignaturas()->attach($this->asignaturaId);
    }

    public function render()
    {
        $users = User::all();
        $asignaturas = Asignatura::all();

        return view('livewire.asignatura-assing', [
            'users' => $users,
            'asignaturas' => $asignaturas,
        ])->layout('layouts.app');
    }
}
