{include file="header.tpl"}

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Dni</th>
         
        </tr>
    </thead>
    <tbody>
    {foreach from=$students item=$student}
        
            <tr>
                <td class="pad">{$student->id_alumno} </td>
                <td class="pad">{$student->nombre} </td>
                <td class="pad">{$student->edad} </td>
                <td class="pad">{$student->dni} </td>
                
            </tr>
        
    {/foreach}
    </tbody>    
</table>

<p class="mt-3"><small>Mostrando {$lenght} alumnos</small></p>

{include file="footer.tpl"}