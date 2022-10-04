{include file="header.tpl"}

<table class="table">
    <thead>
        <tr>
            <th scope="col" >#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Dni</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$students item=$student}
        
            <tr>
                <td class="pad">{$student->id}</td>
                <td class="pad">{$student->nombre} </td>
                <td class="pad">{$student->edad} </td>
                <td class="pad">{$student->dni} </td>
            </tr>
        
    {/foreach}
    </tbody>    
</table>

<p class="mt-3"><small>Mostrando {$lenght} alumnos</small></p>

{include file="footer.tpl"}