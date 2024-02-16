<div>
    <form wire:submit.prevent="assignToUser">
        <div>
            <label for="user">Usuario</label>
            <select wire:model="userId" id="user">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="asignatura">Asignatura</label>
            <select wire:model="asignaturaId" id="asignatura">
                @foreach ($asignaturas as $asignatura)
                    <option value="{{ $asignatura->id }}">{{ $asignatura->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Asignar</button>
    </form>
</div>
