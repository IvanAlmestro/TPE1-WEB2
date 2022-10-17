{include file="header.tpl"}
<h1>Detalle de Alumno</h1>
<table class="detalle">
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
            {if !isset($smarty.session.USER_ID)}
                <td class="pad">{$student->id}</td>
                <td class="pad">{$student->nombre}</td>
                <td class="pad">{$student->edad}</td>
                <td class="pad">{$student->dni}</td>
            {else} 
                <td class="pad">{$student->id}</td>
                <td class="pad">{$student->nombre}</td>
                <td class="pad">{$student->edad}</td>
                <td class="pad" >{$student->dni}</td>
                <td class="pad"><a href='editStudents/{$student->id}'><button class="btn btn-secondary">Editar</button></a></td>
            {/if}
        </tr>
    </tbody>
</table>
    {/foreach}
{include file="footer.tpl"}