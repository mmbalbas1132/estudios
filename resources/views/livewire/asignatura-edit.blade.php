<div class="p-6 bg-white border-b border-gray-200">
    <h2 class="text-2xl font-semibold text-gray-900">Listado de Asignaturas</h2>
    <table class="w-full border-separate border-spacing-2 mt-4">
        <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-200 text-left text-sm font-medium text-gray-700 md:text-base">Nombre</th>
            <th class="px-6 py-3 bg-gray-200 text-left text-sm font-medium text-gray-700 md:text-base">Descripción</th>
            <th class="px-6 py-3 bg-gray-200 text-left text-sm font-medium text-gray-700 md:text-base">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($asignaturas as $asignatura)
            <tr>
                <td class="border border-gray-300 px-6 py-4 text-sm md:text-base">{{ $asignatura->nombre }}</td>
                <td class="border border-gray-300 px-6 py-4 text-sm md:text-base">{{ $asignatura->descripcion }}</td>
                <td class="border border-gray-300 px-6 py-4 text-sm md:text-base">
                    <a href="{{ route('asignaturas.edit', $asignatura) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                    <a href="{{ route('asignaturas.assign', $asignatura) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">Asignar</a>
                    <a href="{{ route('asignaturas.delete', $asignatura) }}" class="text-red-600 hover:text-red-900 ml-4">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $asignaturas->links() }} <!-- Links de paginación -->
</div>
