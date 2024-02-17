<?php

namespace App\Livewire;

use App\Models\Asignatura;
use Livewire\Component;

class AsignaturaDelete extends Component
{
    public $asignaturaId;

    public function delete()
    {
        $asignatura = Asignatura::find($this->asignaturaId);
        if ($asignatura) {
            $asignatura->delete();
            session()->flash('message', 'Asignatura eliminada correctamente.');
            return redirect()->to('/asignaturas');
        }
    }

    public function render()
    {
        return view('livewire.asignatura-delete')->layout('layouts.app');
    }
}
