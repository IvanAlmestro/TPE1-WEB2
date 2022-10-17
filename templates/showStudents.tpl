{include file="header.tpl"}

{include file="logout.tpl"}

{include file="form_alta_alumnos.tpl"}

<h1 class="title-list"> Listado de Alumnos anotados </h1>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Dni</th>
            <th>Acciones</th>
         
        </tr>
    </thead>
    <tbody>
    {foreach from=$students item=$student}
        
        <tr>
            {if !isset($smarty.session.USER_ID)}
                <td class="pad">{$student->id} </td>
                <td class="pad">{$student->nombre} </td>
                <td class="pad">{$student->edad} </td>
                <td class="pad">{$student->dni} </td>
                <td class="pad">
                    <a href='showStudent/{$student->id}'> <button type="button" class="btn btn-success">Ver</button></a>  
                </td>
            {else}
                <td class="pad">{$student->id} </td>
                <td class="pad">{$student->nombre} </td>
                <td class="pad">{$student->edad} </td>
                <td class="pad">{$student->dni} </td>
                <td class="pad">
                    <a href='deleteStudent/{$student->id}' class="btn btn-primary">Borrar</a>
                    <a href='editStudents/{$student->id}'> <button type="button" class="btn btn-danger">Editar</button></a>
                    <a href='showStudent/{$student->id}'> <button type="button" class="btn btn-success">Ver</button></a>  
                </td>
            {/if}
        </tr>
    {/foreach}
    </tbody>   
</table>


<p class="mt-3"><small>Mostrando {$lenght} alumnos</small></p>

{include file="footer.tpl"}