{include file="header.tpl"}

{include file="form_alta_carreras.tpl"}

<h1 class="title-list"> Listado de carreras </h1>
<div id="div-tabla">
    
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
                    <td class="pad">{$career->id_carrera} </td>
                    <td class="pad">{$career->carrera} </td>
                    <td class="pad">{$career->duracion} </td>
                    <td class="pad">{$career->sede} </td>
                    {if isset($smarty.session.USER_ID)}
                    <td class="pad">
                        <a href='deleteCareer/{$career->id_carrera}' type="button" class="btn btn-primary">Borrar</a>
                        <a href='editCareer/{$career->id_carrera}'> <button type="button" class="btn btn-secondary">Editar</button></a> 
                    </td>
                    {/if}
                    
                </tr>
            
        {/foreach}
        </tbody>    
    </table>
</div>
<p class="p_cantidad"><small>Mostrando {$count} carreras</small></p>
{include file="footer.tpl"}