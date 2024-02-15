<?php

namespace App\Livewire;

use App\Models\Asignatura;
use Livewire\Component;

class AsignaturasIndex extends Component
{
    public $asignaturas;

    public function mount()
    {
        $this->asignaturas = Asignatura::all();
    }

    public function render()
    {
        return view('livewire.asignaturas-index')->layout('layouts.app');
    }
}
