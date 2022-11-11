{include file="header.tpl"}

<h1 class="title-list"> Listado de Alumnos anotados </h1>
<div id="div-tabla">
    
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Dni</th>
                <th>Carrera</th>
                <th>Acciones</th>
            
            </tr>
        </thead>
        <tbody>
        {foreach from=$students item=$student}
            
            <tr>
                
                    <td class="pad">{$student->id} </td>
                    <td class="pad">{$student->nombre} </td>
                    <td class="pad">{$student->edad} </td>
                    <td class="pad">{$student->dni} </td>
                    <td class="pad">{$student->carrera} </td>
                    <td class="pad">
                        <a href='showStudent/{$student->id}'> <button type="button" class="btn btn-success">Ver</button></a>  
                    
                    {if isset($smarty.session.USER_ID)}
                        
                            <a href='deleteStudent/{$student->id}' class="btn btn-primary">Borrar</a>
                            <a href='editStudents/{$student->id}'> <button type="button" class="btn btn-danger">Editar</button></a>
                        </td>
                    {/if}
            </tr>
        {/foreach}
        </tbody>   
    </table>
</div>


<p class="p_cantidad"><small>Mostrando {$lenght} alumnos</small></p>

{include file="footer.tpl"}