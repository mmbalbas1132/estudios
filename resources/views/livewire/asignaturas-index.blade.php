<div class="p-50 mx-10">
    <h2 class="text-2xl font-bold mb-4 text-center">Listado de Asignaturas</h2>
    <table class="w-full border-separate border-spacing-2">
        <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-200 text-left">Nombre</th>
            <th class="px-6 py-3 bg-gray-200 text-left">Descripción</th>
            <th class="px-6 py-3 bg-gray-200 text-left">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($asignaturas as $asignatura)
            <tr>
                <td class="border border-gray-300 px-6 py-4">{{ $asignatura->nombre }}</td>
                <td class="border border-gray-300 px-6 py-4">{{ $asignatura->descripcion }}</td>
                <td class="border border-gray-300 px-6 py-4">
                    <a href="{{ route('asignaturas.edit', $asignatura) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                    <a href="{{ route('asignaturas.assign', $asignatura) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">Asignar</a>
                    <a href="{{ route('asignaturas.delete', $asignatura) }}" class="text-red-600 hover:text-red-900 ml-4">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
