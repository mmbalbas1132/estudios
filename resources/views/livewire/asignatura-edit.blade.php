<div>
    <div class="p-6 bg-white border-b border-gray-200">
        <h2 class="text-2xl font-semibold text-gray-900">Editar asignatura</h2>
        añade aquí el nombre de la asignatura que se va a editar
        <h2 class="text-2xl font-semibold text-gray-900">{{ $nombre }}</h2>
        <div class="mt-4">
            <form wire:submit.prevent="save" class="space-y-4">
                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" wire:model="nombre" id="nombre" class="mt-1 block" />
                </div>
                <div>
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <input type="text" wire:model="descripcion" id="descripcion" class="mt-1 block" />
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">Guardar</button>
            </form>
        </div>
    </div>
</div>
