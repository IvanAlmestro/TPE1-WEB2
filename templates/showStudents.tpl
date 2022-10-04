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
                <td>{$student->id}</td>
                <td>{$student->nombre} </td>
                <td>{$student->edad} </td>
                <td>{$student->dni} </td>
            </tr>
        
    {/foreach}
    </tbody>    
</table>

<p class="mt-3"><small>Mostrando {$lenght} alumnos</small></p>

{include file="footer.tpl"}