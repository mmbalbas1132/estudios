<div>
    <h2>Listado de Asignaturas</h2>
   <table>

           <tr>
               <th>Nombre</th>
               <th>Descripción</th>
           </tr>
       @foreach ($asignaturas as $asignatura)
       <tr>
         <td>{{ $asignatura->nombre }}</td>
           <td>{{ $asignatura->descripcion }}</td>
       </tr>


        @endforeach
        </table>
</div>

