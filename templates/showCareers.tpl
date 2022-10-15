{include file="header.tpl"}

{include file="form_alta_carreras.tpl"}


<table class="table">
<h1 class="title-list"> Listado de carreras </h1>
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
                <td class="pad">
                    <a href='deleteCareer/{$career->id}' type="button" class="btn btn-primary">Borrar</a>
                    <button type="button" class="btn btn-secondary">Editar</button> 
                </td>
                
                
            </tr>
        
    {/foreach}
    </tbody>    
</table>

<p class="mt-3"><small>Mostrando {$count} alumnos</small></p>

{include file="footer.tpl"}