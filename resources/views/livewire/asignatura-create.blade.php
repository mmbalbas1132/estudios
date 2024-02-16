<div class="p-6 bg-white border-b border-gray-200">
    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" wire:model="nombre" id="nombre" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea wire:model="descripcion" id="descripcion" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>
        <div>
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Guardar</button>
        </div>
    </form>

    @if ($asignatura)
        <h2 class="mt-6 text-2xl font-semibold text-gray-900">{{ $asignatura->nombre }}</h2>
        <p class="mt-2 text-sm text-gray-500">{{ $asignatura->descripcion }}</p>
    @endif
</div>
