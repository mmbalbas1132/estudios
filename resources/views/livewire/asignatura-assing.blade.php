<div>
    <div class="p-6 bg-white border-b border-gray-200">
        <h2 class="text-2xl font-semibold text-gray-900">Asignar asignatura</h2>
        <div class="mt-4">
            <form wire:submit.prevent="assignToUser" class="space-y-4">
                <div>
                    <label for="user" class="block text-sm font-medium text-gray-700">Usuario</label>
                    <select wire:model="userId" id="user" class="mt-1 block">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="asignatura" class="block text-sm font-medium text-gray-700">Asignatura</label>
                    <select wire:model="asignaturaId" id="asignatura" class="mt-1 block">
                        @foreach ($asignaturas as $asignatura)
                            <option value="{{ $asignatura->id }}">{{ $asignatura->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">Asignar</button>
            </form>
        </div>
    </div>
</div>
