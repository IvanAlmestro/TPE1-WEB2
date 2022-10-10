{include file="header.tpl"}

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Carrera</th>
            <th>Duracion</th>
            <th>Sede</th>
         
        </tr>
    </thead>
    <tbody>
    {foreach from=$careers item=$career}
        
            <tr>
                <td class="pad">{$career->id} </td>
                <td class="pad">{$career->carrera} </td>
                <td class="pad">{$career->duracion} </td>
                <td class="pad">{$career->sede} </td>
                
            </tr>
        
    {/foreach}
    </tbody>    
</table>

<p class="mt-3"><small>Mostrando {$count} alumnos</small></p>

{include file="footer.tpl"}