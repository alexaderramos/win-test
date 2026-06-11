<h1>Lista de tareas</h1>

@if (count($tasks) == 0)
    No hay registros
@endif

<ul>



@foreach ($tasks as $t )
    <li>{{ $t->name }}</li>
@endforeach

</ul>


