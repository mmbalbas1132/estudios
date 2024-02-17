<div class="p-6 bg-white border-b border-gray-200">
    <h2 class="text-2xl font-semibold text-gray-900">Listado de Asignaturas</h2>
    <table class="w-full border-separate border-spacing-2 mt-4">
        <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-200 text-left text-sm font-medium text-gray-700">Nombre</th>
            <th class="px-6 py-3 bg-gray-200 text-left text-sm font-medium text-gray-700">Descripción</th>
            <th class="px-6 py-3 bg-gray-200 text-left text-sm font-medium text-gray-700">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($asignaturas as $asignatura)
            <tr>
                <td class="border border-gray-300 px-6 py-4">{{ $asignatura->nombre }}</td>
                <td class="border border-gray-300 px-6 py-4">{{ $asignatura->descripcion }}</td>
                <td class="border border-gray-300 px-6 py-4 text-sm md:text-base flex flex-col space-y-2">
                    <a href="{{ route('asignaturas.edit', $asignatura) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Editar</a>
                    <a href="{{ route('asignaturas.assign', $asignatura) }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">Asignar</a>
                    <a href="{{ route('asignaturas.delete', $asignatura) }}" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $asignaturas->links() }} <!-- Links de paginación -->
</div>
