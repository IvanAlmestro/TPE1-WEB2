{include file="header.tpl"}

{include file="form_alta.tpl"}

<h1 class="title-list"> Listado de Alumnos anotados </h1>

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
                <td class="pad">{$student->id} </td>
                <td class="pad">{$student->nombre} </td>
                <td class="pad">{$student->edad} </td>
                <td class="pad">{$student->dni} </td>
                <td class="pad">
                    <button type="button" class="btn btn-primary">Borrar</button>
                    <button type="button" class="btn btn-secondary">Editar</button> 
                </td>
                
            </tr>
        
    {/foreach}
    </tbody>    
</table>

<p class="mt-3"><small>Mostrando {$lenght} alumnos</small></p>

{include file="footer.tpl"}