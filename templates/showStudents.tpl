
<ul class="list-group">
    {foreach from=$students item=$student}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$student->nombre}</b> - {$student->edad|truncate:25} (id {$student->carrera_id}) </span>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando {$lenght} alumnos</small></p>

