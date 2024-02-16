<?php
namespace App\Livewire;

use App\Models\Asignatura;
use Livewire\Component;
use Livewire\WithPagination; // Importa el trait WithPagination

class AsignaturasIndex extends Component
{
    use WithPagination; // Usa el trait WithPagination

    public $search = ''; // Propiedad para el término de búsqueda

    protected $queryString = ['search']; // Hace que el término de búsqueda sea persistente en la URL

    public function updatingSearch()
    {
        $this->resetPage(); // Resetea la página a 1 al buscar
    }

    public function render()
    {
        $asignaturas = Asignatura::where('nombre', 'like', '%' . $this->search . '%')
            ->with('temas') // Carga diferida de relaciones
            ->paginate(10); // Paginación
        return view('livewire.asignaturas-index', compact('asignaturas'))->layout('layouts.app');
    }

    public function delete($asignaturaId)
    {
        $asignatura = Asignatura::find($asignaturaId);
        if ($asignatura) {
            $asignatura->delete();
            session()->flash('message', 'Asignatura eliminada correctamente.');
        }
    }
}
